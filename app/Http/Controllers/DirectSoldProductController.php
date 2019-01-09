<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DirectBuyer;
use App\DirectSoldProduct;
use App\ProductStock;
use Session;
use App\Helpers\PdfHelper;

class DirectSoldProductController extends Controller
{
    public function getDirectbuyers(){

    	$buyers = DirectBuyer::all();

    	return view('stock.assign_stock',compact('buyers'));
    }

    public function addStock(){

    	$products = ProductStock::all();
    	return view('stock.add_stock',compact('products'));
    }

    public function store(Request $request){
     $request->validate([
    		'name' => 'required|min:3',
    		'form_no' => 'required|unique:direct_buyers,form_no',
    		'mobile' => 'required|regex:/[0-9]{10}/',
            'email' => 'required|email',
            'sold_date' => 'required',
        ]);



        //create direct buyer
      	$buyer = DirectBuyer::create([
      		'name'    => $request->name,
      		'form_no' => $request->form_no,
      		'mobile'  => $request->mobile,
      		'email'   => $request->email,
      		'sold_date' => \Carbon\Carbon::parse($request->sold_date)->format('Y-m-d'),
      		'description' => $request->description,
      	]);

      	//product sold 

      	$product_id = $request->id;
      	$product_qty = $request->qty;
      	$sr_no       = $request->sr_no;

      	if(isset($product_id)){
	      	foreach($product_id as $i => $id){
	      		$product = ProductStock::find($id);
	      		$product->decrement('quantity',intVal($product_qty[$i]));
	      		$product->increment('used_quantity',intVal($product_qty[$i]));
	      		DirectSoldProduct::create([
	      			'direct_buyer_id' => $buyer->id,
	      			'product_id'      => $product->id,
	      			'qty'             => $product_qty[$i],
	      			'serial_no'       => $sr_no[$i],
	      			'form_no'         => $request->form_no,
	      		]);
	      	}
      	}

      	Session::flash('success','Record Successfully Created');

      	return redirect()->route('stock.direct_buyers');

    }

    public function report($id){

    	$pdf = PdfHelper::directDeductReport($id);

    	return $pdf->stream();
    	
    }
}
