<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'user_id',
      'contract_date',
      'client_name',
      'email',
      'contact_person',
      'mobile_number',
      'alt_phone',
      'site_address',
      'contract_status',
    ];

    public function detail()
    {
        return $this->hasOne(ContractDetail::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function supervisorStockAssign()
    {
      return $this->hasOne(SupervisorStockAssign::class);
    }

    public function testingResult()
    {
      return $this->hasOne(TestingResult::class);
    }

    public function remarks()
    {
       return $this->hasMany(ContractRemark::class);
    }
  
}
