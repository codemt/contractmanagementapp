<?php

namespace App\Http\Controllers;

use App\ProductStock;
use App\Category;
use App\Brand;
use App\Contract;
use App\SupervisorStockAssign;
use App\AssignStock;
use App\Http\Requests\stockRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\ProductsPurchaseHistory;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\ContractRemark;
use App\Helpers\PdfHelper;

class ProductStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ProductStock = ProductStock::all();
        $categories = Category::all();
        $brands = Brand::all();
      //  return $ProductStock;
      return view('stock.all_stock', compact('ProductStock', 'categories', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $product = ProductStock::create([
            'name' => $request->product_name,
            'category_id' => $request->category,
            'brand_id' => $request->brand,
            'unit' => $request->unit,
            'minimum_qty' => $request->quantity
        ]);

        ProductsPurchaseHistory::create([
            'product_id' => $product->id,
            'quantity' => 0,
        ]);

        return response()->json(['success' => 'Record is successfully added']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductStock  $productStock
     * @return \Illuminate\Http\Response
     */
    public function show(ProductStock $productStock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductStock  $productStock
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductStock $productStock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductStock  $productStock
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductStock  $productStock
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductStock $ProductStock)
    {

        $ProductStock->delete();
        return 'success';
    }

    //add product quantity
    public function addProdutQty(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'product' => 'required',
            'qty' => 'required|integer|min:0'
        ], [
            'product.required' => "Product name is required field",
            'qty.required' => "Quantity is rquired field",
            'qty.integer' => "Please enter valid quantity",

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $product = ProductStock::find($request->product);
        $product->quantity = (isset($product->quantity) ? $product->quantity : 0) + intVal($request->qty);
        $product->save();

        ProductsPurchaseHistory::create([
            'product_id' => $product->id,
            'quantity' => $product->quantity,
        ]);

        return response()->json(['success' => 'Quantity Added Successfully']);
    }

    public function new_assignment()
    {
        $stock = SupervisorStockAssign::where('status', 'Assigned to Stock')->get();

        //return $stock;
        return view('stock.new_assignment', compact('stock'));

    }
    public function completed_assignment()
    {
        $completedStock = AssignStock::where('status', 'completed')->get();



        return view('stock.show', compact('completedStock'));
    }

    //view assign stock create blade
    public function assignStock($id, $status = false)
    {

        $stockAssign = SupervisorStockAssign::find($id);

        $contract = $stockAssign->contract;

        $products = ProductStock::where('quantity', '>', 0)->get();

        $assignments = null;

        $assign_products = [];

        if ($status) {
            $assignments = AssignStock::where('supervisor_stock_assign_id', $id)->get();



            foreach ($assignments as $assignment) {

                $product_ids = json_decode($assignment->products_id, true);

                $product_qtys = json_decode($assignment->products_qty, true);

                foreach ($product_ids as $i => $id) {
                    $item = ProductStock::with('category', 'brand')->where('id', $id)->get();

                    $item->assign_qty = $product_qtys[$i];

                    array_push($assign_products, $item);
                }
            }
        }

       $contractor_details  = json_decode($stockAssign->contractor_details,true);
       //return $contractor_details['Relay']['name'];
       //return $contractor_details['110 V AC'];
       return view('stock.create', compact('stockAssign', 'contract', 'products', 'assignments', 'assign_products'));
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

        return view('stock.show', compact('completedStock'));

    }

    //draft stock
    public function draftStock(Request $request, $supervisor_stock_assign_id, $assign_stock_id = null)
    {



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



        // ******Update Product Stock******
        $product_id = $request->id;
        $updateProductStock = ProductStock::find($product_id)->first();
        $qty = $request->qty;
    
        // get total quantity of current Product
        $quantity = DB::table('product_stocks')
            ->where('id', $request->id)
            ->get();

        foreach ($quantity as $quantity) {
            $totalqty = $quantity->quantity;
        }

        $new_quantity = $totalqty - $qty['0'];
        $updateProductStock->used_quantity = $qty['0'];
        $updateProductStock->quantity = $new_quantity;
        $updateProductStock->save();

        return view('stock.stock_drafted', compact('draftedStock'));

    }
    //return view drafted assignment
    public function getdraftedStock()
    {
        $draftedStock = AssignStock::where('status', 'drafted')->groupBy('supervisor_stock_assign_id')->get();
        return view('stock.stock_drafted', compact('draftedStock'));
    }

    //complete drafted assignment
    public function completeDraftAssignment($assign_stock_id)
    {
        $assign_stock = AssignStock::find($assign_stock_id);
        $stockAssign = SupervisorStockAssign::find($assign_stock->supervisor_stock_assign_id);
        $contract = $stockAssign->contract;
        $products = ProductStock::where('quantity', '>', 0)->get();
        return view('stock.create', compact('stockAssign', 'contract', 'products', 'unique_id', 'assign_stock'));
    }


    //return view reassign Stock
    public function reassignStock($assign_stock_id)
    {
        $assign_stock = AssignStock::find($assign_stock_id);

        $stockAssign = SupervisorStockAssign::find($assign_stock->supervisor_stock_assign_id);

        $contract = $stockAssign->contract;

        $products = ProductStock::where('quantity', '>', 0)->get();

        $unique_code = $stockAssign->unique_id;

        return view('stock.create', compact('stockAssign', 'contract', 'products', 'unique_id', 'assign_stock'));
    }

    //show assign stock to particular order
    public function showAssignStock($assign_stock_id)
    {
        $assignStock = AssignStock::find($assign_stock_id);
        $data = json_decode($assignStock->products_id, true);
        $products = ProductStock::find($data);
        return view('stock.assigned_stock', compact('assignStock', 'products'));
    }

    //all stock purchase history
    public function stockPurchaseHistory(Request $request)
    {
        if ($request->isMethod('post')) {

            $month = $request->month;
            $year = $request->year;
            $products = ProductStock::all();
            $products->map(function ($product) use ($month, $year) {
                $data = productHistory($product->id, $month, $year);
                $product['data'] = $data;
                return $product;
            });
        } else {

            $month = Carbon::now()->month;
            $year = Carbon::now()->year;
            $products = ProductStock::all();

            $products->map(function ($product) use ($month, $year) {
                $data = productHistory($product->id, $month, $year);
                $product['data'] = $data;
                return $product;
            });


        }



        return view('stock.report', compact('products', 'month', 'year'));
    }

    //single product purchase history
    public function ProductPurchaseHistory($id)
    {
        $products = ProductsPurchaseHistory::with('productStock')->where('product_id', $id)
            ->orderBy('created_at', 'desc')->get();

        return view('stock.product_purchase_history', compact('products'));
    }

    //filtered products
    public function filterProduct(Request $request)
    {

        $ProductStock = ProductStock::when($request->category_name, function ($query) use ($request) {
            return $query->where('category_id', $request->category_name);
        })
            ->when($request->brand_name, function ($query) use ($request) {
                return $query->where('brand_id', $request->brand_name);
            })->get();

        $categories = Category::all();
        $brands = Brand::all();
        return view('stock.all_stock', compact('ProductStock', 'categories', 'brands'));
    }

    public function getProductAssignPdf($id)
    {

        $pdf = PdfHelper::productAssignPdf($id);

        return $pdf->stream();
    }


}
