<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductStock;
use App\RrsClient;
use App\RrsDetail;
use App\Helpers\PdfHelper;
use Session;

class RrsController extends Controller
{
	public function index(){
		$clients = RrsClient::orderBy('id','desc')->get();
		return view('stock.return_replace_index',compact('clients'));
	}

    public function return_replace_show(){

    	$products = ProductStock::all();

    	return view('stock.replace-return',compact('products'));
    }

    public function return_replace_store(Request $request){
    	if($request->has('id_replace') || $request->has('id_return') || $request->has('id_scrap')){

    	$client = RrsClient::create([
	    			'form_no' => $request->form_no,
	    			'type'    => $request->type,
	    			'name'    => $request->name,
	    			'controller_no' => $request->controller_no,
	    			'technician_id' => $request->technician,
	    			'mobile'        => $request->mobile,
	    			'email'         => $request->email,
	    			'descripion'    => $request->description,
	    			'date'          => \Carbon\Carbon::parse($request->date),
	    		]);


    		//store products replace return and scrap

    		//return
    		if($request->has('id_return')){
    			foreach($request->id_return as $i => $id){
    				ProductStock::find($id)->increment('quantity',intVal($request->qty_return[$i]));
    				RrsDetail::create([
    					'rrs_client_id' => $client->id,
    					'product_id'    => $id,
    					'qty'           => $request->qty_return[$i],
    					'serial_no'     => $request->sr_no_return[$i],
    					'status'        => 'return',
    				]);
    			}
    		}
    		//replace
    		if($request->has('id_replace')){
    			foreach($request->id_replace as $i => $id){
    				RrsDetail::create([
    					'rrs_client_id' => $client->id,
    					'product_id'    => $id,
    					'qty'           => $request->qty_replace[$i],
    					'serial_no'     => $request->sr_no_replace[$i],
    					'status'        => 'replace',
    				]);
    			}
    		}

    		//scrap
    		if($request->has('id_scrap')){
    			foreach($request->id_scrap as $i => $id){
    				RrsDetail::create([
    					'rrs_client_id' => $client->id,
    					'product_id'    => $id,
    					'qty'           => $request->qty_scrap[$i],
    					'serial_no'     => $request->sr_no_scrap[$i],
    					'status'        => 'scrap',
    				]);
    			}
    		}
    		Session::flash('success','Stock updated successfully');
    		return redirect()->back();
    	}else{
    		Session::flash('error','There is no product selected for return, replace or scrap');
    		return redirect()->back()->withInput();
    	}

    }

    public function report($id){

    	$pdf = PdfHelper::returnReplaceReport($id);

    	return $pdf->stream();
    }
}
