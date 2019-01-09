<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssignStock extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'products_id',
    	'products_qty',
        'sr_no',
    	'supervisor_stock_assign_id',
    	'status',
    ];

    public function supervisorStockAssign()
    {
    	return $this->belongsTo(SupervisorStockAssign::class,'supervisor_stock_assign_id');
    }
}
