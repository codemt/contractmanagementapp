<?php

use App\ProductPurchaseHistory;
use App\ProductStock;
use App\AssignStock;
use Carbon\Carbon;
use App\DirectBuyer;
use App\RrsClient;


function get_guard(){

    if(Auth::guard('supervisor')->check())
        {return "supervisor";}
    elseif(Auth::guard('technician')->check())
        {return "technician";}
    elseif(Auth::guard('tester')->check())
        {return "tester";}
    elseif(Auth::guard('stock')->check())
        {return "stock";}
        elseif(Auth::guard('ic')->check())
        {return "ic";}
    elseif(Auth::check())
    	{return "client";}
}

function get_current_user_id(){

    if(Auth::guard('supervisor')->check())
        {return auth()->guard('supervisor')->user()->id;}
    elseif(Auth::guard('technician')->check())
        {return auth()->guard('technician')->user()->id;}
    elseif(Auth::guard('tester')->check())
        {return auth()->guard('tester')->user()->id;}
    elseif(Auth::guard('stock')->check())
        {return auth()->guard('stock')->user()->id;}
        elseif(Auth::guard('ic')->check())
        {return auth()->guard('ic')->user()->id;}
    elseif(Auth::check())
    	{return auth()->user()->id;}
}


//remove null values from array
function array_filter_recursive($input) 
{ 

  if(isset($input)){
  foreach ($input as &$value) 
  { 
  
     if (is_array($value)) 
     { 
         $value = array_filter_recursive($value); 
     } 
 }   
  if(is_array($input)){
    if(array_key_exists('qty',$input)){
      $input['qty'] = array_values($input['qty']);
    }
  }

   return array_filter($input, function($var){return !is_null($var);} ); 
  
}
return NULL;
} 

//product tally opening purchased and used in particular month
function productHistory($product_id,$month,$year)
{
    $product = ProductStock::find($product_id);
    $opening = null;
    $purchased = null;
    $used = null;

    $previousTotalQty = $product->productsPurchaseHistory()->where('product_id',$product->id)
    ->when($year ,function($query) use($month,$year){
      if($year > Carbon::now()->year)
      {
       return $query->whereYear('created_at','<=',$year);
       

     }
     else
     {
       return $query->whereMonth('created_at','<',$month)
       ->whereYear('created_at','<=',$year);

     }
   })->sum('quantity');

    $previousUsedQty = previousMonthQtyUsed($product_id,$month,$year);
    // dd($previousTotalQty,$previousUsedQty);
    
    $opening = $previousTotalQty - $previousUsedQty;

    $purchased = $product->productsPurchaseHistory()->where('product_id',$product_id)
    ->whereYear('created_at',$year)
    ->whereMonth('created_at',$month)
    ->sum('quantity');

    $used = productUsedInCurrentMonth($product_id,$month,$year);

    return ['opening'=>$opening,'purchased' => $purchased,'used' => $used];

}

function productUsedInCurrentMonth($product_id,$month,$year)
{
    $assignStocks = AssignStock::whereYear('created_at',$year)
                ->whereMonth('created_at',$month)->get();
    $qty = 0;
    if(!empty($assignStocks))
    {
      
      foreach($assignStocks as $stock)
      {
        $products = json_decode($stock->products_id);
        $qtys     = json_decode($stock->products_qty);
        if(in_array($product_id,$products))
        {
          $index = array_search($product_id,$products);
          $qty += $qtys[$index];
        }
      }

      return $qty;
    }

    return 0;
    
}

function previousMonthQtyUsed($product_id,$month,$year)
{

      $assignStocks = AssignStock::whereMonth('created_at','<',$month)
                                    ->whereYear('created_at','<=',$year)->get();
                                    
    $qty_used = 0;
    if(!empty($assignStocks))
    {
      
      foreach($assignStocks as $stock)
      {
        $products = json_decode($stock->products_id);
        $qtys     = json_decode($stock->products_qty);
        if(in_array($product_id,$products))
        {
          $index = array_search($product_id,$products);
          $qty_used += $qtys[$index];
        }
      }

      return $qty_used;
    }

    return 0;
}

function get_buyer_form_no(){

    $prefix = 'ICS-DB';

    $buyer = DirectBuyer::orderBy('id','desc')->first();

    if($buyer){
      $arr =  explode('-',$buyer->form_no);
      $no  = last($arr);
      $no = intVal($no) + 1;

      return $prefix.'-'.$no;
    }else{
      return $prefix.'-1';
    }
}

function get_return_form_no(){

    $prefix = 'ICS-RRS';

    $client = RrsClient::orderBy('id','desc')->first();

    if($client){
      $arr =  explode('-',$client->form_no);
      $no  = last($arr);
      $no = intVal($no) + 1;

      return $prefix.'-'.$no;
    }else{
      return $prefix.'-1';
    }
}

function array_key_exists_recursive($key, $array) {
    if (array_key_exists($key, $array)) {
        return true;
    }
    foreach($array as $k => $value) {
        if (is_array($value) && array_key_exists_recursive($key, $value)) {
            return true;
        }
    }
    return false;            
}





