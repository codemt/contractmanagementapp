<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\ProductStock;
use App\DirectSoldProduct;


class DirectSoldProduct extends Model
{
	 use SoftDeletes;

	 protected $fillable = [
	 	'direct_buyer_id',
	 	'product_id',
	 	'qty',
	 	'serial_no',
	 	'form_no',
	 ];
    

    public function directBuyer(){
    	return $this->belongsTo(DirectBuyer::class);
    }

    public function product(){
    	return ProductStock::find($this->product_id);
    }

    public function getProductWithFormNo($form_no){
    	return DirectSoldproduct::where('form_no',$form_no)->get();
    }
}
