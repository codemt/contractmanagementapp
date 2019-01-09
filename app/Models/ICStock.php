<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ICStock extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
    	'name','category_id','brand_id','unit','quantity','used_quantity','minimum_qty',
    ];


    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function brand()
    {
    	return $this->belongsTo(Brand::class);
    }

    public function productsPurchaseHistory()
    {
        return $this->hasMany(ProductsPurchaseHistory::class,'product_id');
    }



}
