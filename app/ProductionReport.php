<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductionReport extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'supervisor_stock_assign_id',
    	'control_no',
    	'start_date',
    	'drive_sr_no',
    	'technical_change',
    	'approved_by',
    	'approved_date',
        'remark',
        'production_report',
    ];

    protected $dates = [
    	'created_at',
        'updated_at',
        'deleted_at',
        'start_date',
        'approved_date',
    ];

    protected $casts = [
    	'created_at' => 'datetime:d-m-Y',
    	'updated_at' => 'datetime:d-m-Y',
    	'deleted_at' => 'datetime:d-m-Y',
    	'start_date' => 'datetime:d-m-Y',
    	'approved_date' => 'datetime:d-m-Y',
    ];

    public function supervisorStockAssign()
    {
    	return $this->belognsTo(SupervisorStockAssign::class,'supervisor_stock_assign_id');
    }
}
