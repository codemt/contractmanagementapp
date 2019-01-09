<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupervisorStockAssign extends Model
{
    protected $fillable = [
    	'control_type',
    	'supervisor_id',
    	'contract_id',
    	'order_taken_by',
    	'due_date',
    	'unique_code',
    	'control',
    	'control_no',
    	'logic_board_details',
    	'box_size',
    	'contractor_details',
    	'mcb_details',
    	'overload_details',
    	'connector_wire_details',
    	'transformer_details',
    	'nutbolt',
        'wiser',
        'ol_relay',
        'lug',
        'ard_announcment',
        '9A_cont_24vdc',
    	'any_other_details',
    	'technician_id',
    	'tester',
    	'stock_id',
    	'status',
    	'contract_serial_number',
        'add_new',
        'remove_previous',
        'replace_old',
        'product_name',
        'previous_contract_id',
        'register_capacitor',
    ];

    public function technician()
    {
        return $this->belongsTo(Technician::class,'technician_id');
    }
     public function tester()
    {
        return $this->belongsTo(Technician::class,'tester');
    }
    public function stock()
    {
        return $this->belongsTo(Stock::class,'stock_id');
    }
    public function contract()
    {
        return $this->belongsTo(Contract::class,'contract_id');
    }

    public function assignStock()
    {
        return $this->hasMany(AssignStock::class);
    }

    public function productionReport()
    {
        return $this->hasOne(ProductionReport::class);
    }

    public function readyMadeProduct()
    {
        return $this->hasOne(ReadyMadeProduct::class);
    }
   
    
}
