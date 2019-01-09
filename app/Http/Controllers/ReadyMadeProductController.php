<?php

namespace App\Http\Controllers;

use App\SupervisorStockAssign;

use App\ReadyMadeProduct;
use Illuminate\Http\Request;
use App\ProductionReport;
use Illuminate\Support\Facades\DB;

class ReadyMadeProductController extends Controller
{
    //list of ready made products
    public function index()
    {
        $products = ReadyMadeProduct::all();

        return view('supervisor.contracts.ready_made_product', compact('products'));
    }

    //store new ready made product
    public function store($supervisor_stock_assign_id)
    {
        $stock_assign = SupervisorStockAssign::find($supervisor_stock_assign_id);

       // return $stock_assign;
       // $product_name = DB::table
       // $product_name = ProductionReport::where('supervisor_stock_assign_id',$supervisor_stock_assign_id);
        $product_name = DB::table('production_reports')
            ->select('product_name')
            ->where('supervisor_stock_assign_id', $supervisor_stock_assign_id)
            ->pluck('product_name')->toArray();
       // return $product_name['0'];

        $new_ready_product = new ReadyMadeProduct();

        $new_ready_product->supervisor_stock_assign_id = $supervisor_stock_assign_id;
        $new_ready_product->control_no = $stock_assign->control_no;
        $new_ready_product->product_name = $product_name['0'];
        $new_ready_product->client_id = $stock_assign->contract->user->id;
        $new_ready_product->technician_id = $stock_assign->technician_id;
        $new_ready_product->tester = $stock_assign->tester;


        $new_ready_product->save();
        //return $new_ready_product;
        
   
        // ReadyMadeProduct::create([
        //     'supervisor_stock_assign_id' => $supervisor_stock_assign_id,
        //     'product_name' => $stock_assign->productionReport->product_name,
        //     'client_id' => $stock_assign->contract->user->id,
        //     'technician_id' => $stock_assign->technician_id,
        //     'tester' => $stock_assign->tester,
        // ]);
    }
}
