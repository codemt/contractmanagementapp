<?php

namespace App\Http\Controllers\IC;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Stock;
use App\Http\Requests\stockRequest;
use App\AssignStock;
use App\ContractRemark;
use App\ProductsPurchaseHistory;
use App\ProductStock;
use App\Category;
use App\Models\ICStock;
use App\Brand;
use App\SupervisorStockAssign;
use Illuminate\Support\Facades\DB;

class ICController extends Controller
{
    //

    public function index()
    {


        $users[] = Auth::user();
        $users[] = Auth::guard()->user();
        $users[] = Auth::guard('ic')->user();

        $stock = SupervisorStockAssign::where('status', 'Assigned to Stock')->get();
        //return view('stock.new_assignment', compact('stock'));

       // return $stock;
        return view('ic.home', compact('stock'));

    }


    public function getICStock()
    {


        //$ProductStock = ICStock::all();

        $ProductStock = DB::table('i_c_stocks')
            ->select('i_c_stocks.id','i_c_stocks.name','i_c_stocks.brand_id','i_c_stocks.category_id','i_c_stocks.unit','i_c_stocks.quantity','i_c_stocks.used_quantity','i_c_stocks.minimum_qty','brands.name as brand_name','categories.name as category_name')
            ->join('brands', 'brands.id', '=', 'i_c_stocks.brand_id')
            ->join('categories','categories.id','=','i_c_stocks.category_id')
            ->get();

        //return $ProductStock;
        $categories = Category::all();
        $brands = Brand::all();

        $id = 1;

        $brandNames = [];
        
        // foreach($ProductStock as $value){


        //     $getBrandName = DB::table('brands')
        //                     ->where('id',$value->brand_id)
        //                     ->get();

        //     array_push($brandNames,$getBrandName);

        // }
        //   return $brandNames;
    //     return $categories;
       return view('ic.stock.index', compact('ProductStock', 'categories', 'brands','id'));


    }

    public function assignStock($id, $status = false)
    {

        $stockAssign = SupervisorStockAssign::find($id);
       // return $stockAssign;
        $contract = $stockAssign->contract;

        $products = ICStock::where('quantity', '>', 0)->get();
        //return $products;
        $assignments = null;

        $assign_products = [];

        if ($status) {
            $assignments = AssignStock::where('supervisor_stock_assign_id', $id)->get();



            foreach ($assignments as $assignment) {

                $product_ids = json_decode($assignment->products_id, true);

                $product_qtys = json_decode($assignment->products_qty, true);

                foreach ($product_ids as $i => $id) {
                    $item = ICStock::with('category', 'brand')->where('id', $id)->get();

                    $item->assign_qty = $product_qtys[$i];

                    array_push($assign_products, $item);
                }
            }
        }

        $id = 1;

        //return $products;
        return view('ic.stock.create', compact('stockAssign', 'contract', 'products', 'assignments', 'assign_products', 'id'));
    }


     //filtered products
    public function filterProduct(Request $request)
    {

        return $request;
        $ProductStock = ICStock::when($request->category_name, function ($query) use ($request) {
            return $query->where('category_id', $request->category_name);
        })
            ->when($request->brand_name, function ($query) use ($request) {
                return $query->where('brand_id', $request->brand_name);
            })->get();

        $categories = Category::all();
        $brands = Brand::all();


       // return $ProductStock;
        return view('ic.stock.index', compact('ProductStock', 'categories', 'brands'));
    }

    public function addProdutQty(Request $request)
    {

        //return $request;
        $validator = \Validator::make($request->all(), [
            'product' => 'required',
            'qty' => 'required|integer|min:0'
        ], [
            'product.required' => "Product name is required field",
            'qty.required' => "Quantity is required field",
            'qty.integer' => "Please enter valid quantity",

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $product = ICStock::find($request->product);
        $product->quantity = (isset($product->quantity) ? $product->quantity : 0) + intVal($request->qty);
        $product->save();

        // ProductsPurchaseHistory::create([
        //     'product_id' => $product->id,
        //     'quantity' => $product->quantity,
        // ]);



        return response()->json(['success' => 'Quantity Added Successfully']);
    }


    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'product_name' => 'required|max:255|unique:product_stocks,name',
            'category' => 'required',
            'brand' => 'required',
            'unit' => 'required|max:255',
            'quantity' => 'required|integer|min:0'
        ], [
            'product_name.required' => "Product name is required field",
            'product_name.unique' => "Product with these name already exist",
            'quantity.integer' => "Please enter valid quantity",
            'category.required' => "Category is rquired field",
            'brand.required' => "Brand is rquired field",
            'quantity.required' => "Minimum Quantity is rquired field"
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $product = ICStock::create([
            'name' => $request->product_name,
            'category_id' => $request->category,
            'brand_id' => $request->brand,
            'unit' => $request->unit,
            'minimum_qty' => $request->quantity
        ]);

        // ProductsPurchaseHistory::create([
        //     'product_id' => $product->id,
        //     'quantity' => 0,
        // ]);

        return response()->json(['success' => 'Record is successfully added']);

    }

    public function update(stockRequest $request, ProductStock $ProductStock)
    {

        $product = ProductStock::find($request->id);
        $product->name = $request->product_name;
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->unit = $request->unit;
        $product->minimum_qty = $request->quantity;
        $product->update();

        // ProductsPurchaseHistory::create([
        //     'product_id' => $product->id,
        //     'quantity'   => $product->quantity,
        // ]);

        return redirect()->back();

    }

    public function destroy(ICStock $ICStock)
    {

        $ICStock->delete();
        return 'success';
    }

      //store assign stock
    public function postAssignStock(Request $request, $supervisor_stock_assign_id, $assign_stock_id = null)
    {
        if (!$request->has('id')) {

            return redirect()->back()->with('msg', 'Products not selected');
        }
          //    $rule =   Rule::exists('supervisor_stock_assigns')->where(function ($query) {
          //     $query->where([['id','=', $assign_stock_id],['unique_code','=',$request->unique_code]]);
          // });
        $this->validate($request, [
            'id.*' => 'required',
            'qty.*' => 'required',
              // 'unique_code' => 'required|'.$rule,
        ]);


        AssignStock::updateOrCreate(['supervisor_stock_assign_id' => $supervisor_stock_assign_id], [
            'products_id' => json_encode($request->id),
            'products_qty' => json_encode($request->qty),
            'sr_no' => json_encode($request->sr_no),
            'supervisor_stock_assign_id' => $supervisor_stock_assign_id,
            'status' => 'completed',
        ]);

        $supervisorStockAssign = SupervisorStockAssign::find($supervisor_stock_assign_id);
        $supervisorStockAssign->status = 'Stock Assigned';
        $supervisorStockAssign->save();

        ContractRemark::create([
            'action_taken_by' => get_guard(),
            'contract_id' => $supervisorStockAssign->contract->id,
            'status' => 'Stock Assigned',
            'remark' => 'Stock Assigned',

        ]);


        $completedStock = AssignStock::where('status', 'completed')->get();

        for ($i = 0; $i < count($request->id); $i++) {
            $product = ProductStock::find($request->id[$i]);

            $product->used_quantity = $product->used_quantity + $request->qty[$i];

            $product->update();

        }

        return view('ic.stock.show', compact('completedStock'));

    }

         //draft stock
    public function draftStock(Request $request, $supervisor_stock_assign_id, $assign_stock_id = null)
    {

    
       // return $request;

        if (!$request->has('id')) {
            return redirect()->back()->with('msg', 'Products not selected');
        }
       //validation
        $this->validate($request, [
            'id.*' => 'required',
            'qty.*' => 'required',
        ]);

        AssignStock::Create([
            'supervisor_stock_assign_id' => $supervisor_stock_assign_id,
            'products_id' => json_encode($request->id),
            'products_qty' => json_encode($request->qty),
            'supervisor_stock_assign_id' => $supervisor_stock_assign_id,
            'status' => 'drafted',
        ]);



        $supervisorStockAssign = SupervisorStockAssign::find($supervisor_stock_assign_id);

        ContractRemark::create([
            'action_taken_by' => get_guard(),
            'contract_id' => $supervisorStockAssign->contract->id,
            'status' => 'Stock Drafted',
            'remark' => 'Stock Drafted By Stock Manager',

        ]);

        $supervisorStockAssign = SupervisorStockAssign::find($supervisor_stock_assign_id);
        $supervisorStockAssign->status = 'Stock Drafted';
        $supervisorStockAssign->save();

        $draftedStock = AssignStock::where('status', 'drafted')->get();


        // ******Update IC Product Stock******
        $product_id = $request->id;
        $updateProductStock = ICStock::find($product_id)->first();
        $qty = $request->qty;
        // get total quantity of current Product
        $quantity = DB::table('i_c_stocks')
            ->where('id', $request->id)
            ->get();

        foreach ($quantity as $quantity) {
            $totalqty = $quantity->quantity;
        }

        $new_quantity = $totalqty - $qty['0'];
        $updateProductStock->used_quantity = $qty['0'];
        $updateProductStock->quantity = $new_quantity;
        $updateProductStock->save();

        return view('ic.stock.stock_drafted', compact('draftedStock'));

    }






}
