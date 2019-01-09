<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReadyMadeProduct extends Model
{
    use SoftDeletes;

     protected $fillable = [
    	'supervisor_stock_assign_id','product_name','client_id','technician_id','tester_id','qty','price','desc',
    ];

    public function supervisorStockAssign()
    {
    	return $this->belongsTo(SupervisorStockAssign::class,'supervisor_stock_assign_id');
    }
}
