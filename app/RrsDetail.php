<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\ProductStock;



class RrsDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'rrs_client_id',
    	'product_id',
    	'qty',
    	'serial_no',
    	'status',
    ];

    public function rrsClient(){
    	return $this->belongsTo(RrsClient::class);
    }

    public function product(){
        return ProductStock::find($this->product_id);
    }



}
