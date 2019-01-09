<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContractRemark extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'action_taken_by',
    	'contract_id',
    	'status',
    	'remarks',
    ];
}
