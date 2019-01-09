<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestingResult extends Model
{
     use SoftDeletes;

     protected $fillable = [
     	'checkpoint_id',
     	'contract_id',
     	'supervisorStockAssign_id',
     	'status',
     	'remarks',
     	'voltage_checking_insp',
     	'voltage_checking',
     	'primary_checking',
     	'received_date',
     	'other_data',
     ];

     public function contract()
     {
          return $this->belongsTo(Contract::class,'contract_id');
     }

}
