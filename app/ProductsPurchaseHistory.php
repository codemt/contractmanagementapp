<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductsPurchaseHistory extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'product_id',
    	'quantity',
    ];

    public function productStock()
    {
    	return $this->belongsTo(ProductStock::class,'product_id');
    }
}
