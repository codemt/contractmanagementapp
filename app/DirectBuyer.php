<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class DirectBuyer extends Model
{
	use SoftDeletes;

    protected $fillable = [
    	'form_no',
    	'name',
    	'mobile',
    	'email',
    	'description',
    	'sold_date',
    ];

    public function directSoldProduct(){
    		return $this->hasMany(DirectSoldProduct::class);
    }

    public function getSoldDateAttribute($value){
    	return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }
}
