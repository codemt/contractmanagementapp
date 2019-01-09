<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contract;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContractDetail extends Model
{
    use softDeletes;

    protected $fillable = [
        'contract_id',
        'created_by',
        'created_by_id',
        'control_type',
        'motor_type',
        'motor_hp',
        'door_mode',
        'choose_battery',
        'ard_need_for_controller',
        'duplex_system',
        'no_of_floor',
        'floor_condition',
        'reed_type',
        'collective_mode',
        'output_contractor',
        'motor_brake_voltage',
        'r_cam_voltage',
        'register_capacitor_circuit',
        'display_voltage',
        'voice_announcement_system',
        'other_features',
        'drive_details',
        'other_accessories',
        'contractor_coil_voltage',
        'no_of_valve',
        'valve_coil_voltage',
        'power_pack_make_by',
        'ups_type_ard',
        'battery_for_ard',
        'inbuild_ups_type_ard',
        'encoder_details',
        'pg_card_details',
        'communication_mode',
        'other_specification',
        'speed_of_lift',
        'motor_current',
        'display_type',
        'battery',
        'ups',
        'gearless_quantity',
        'gearless_battery',
        'indications',
        'number_of_quantity',
        'type_of_machine',
        'motor_kw',
        'starting_register',
        'indications',
        'integrated_type',
        'integrated_battery',
        'integrated_ups'
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }
}
