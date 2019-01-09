<?php

    namespace App\Http\Controllers;
    use App\Contract;
    use App\ContractDetail;
    use App\User;
    use Carbon\Carbon;
    use App\ContractRemark;
    use Illuminate\Http\Request;
    use Session;

    class ContractDetailController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {

        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {

        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
           $this->validate($request, [
            'client_name' => 'required|max:50',
            'mobile_number' => 'required',
            'email'         => 'required|email',
            'no_of_qty' => 'required',
        ]);

          
           $user = null;
           if($request->has('user_id'))
           {
            $user = User::find($request->user_id);
        }else{
            $user = auth()->user();
        }

            //door_mode data
        $door_mode = $request->only(['door_mode', 'door_mode_auto_type', 'no_of_car_door', 'no_of_landing_door', 'door_motor_HP',
            'door_motor_voltage', 'door_drive', 'yaskawa', 'innovance', 'invt']);

            //drive detail
        $drive_detail = NULL;
        if($request->has('drive_details'))
        {
            $drive_detail = $request->only(['drive_details','INVT_GD300', 'INOVANCE_MD380','DELTA_E_SERIES','FUJI_ACE', 'YASKAWA_V1000','INVERTEK_GEARED','INVT_GD300L','DELTA_ED_SERIES','YASKAWA_L1000','INVERTEK_GEARLESS','drive_make_by', 'drive_modle', 'drive_HP', 'invertek-geard','DBR_rating','monarch','monrch_drive_hp','monarch_drive_type']);

        }


            //ard_need_for_controller Database
        $ard_need =NULL;
        if($request->has('controller'))
        {
            $ard_need = $request->only(['controller', 'control_make_by', 'controller_control_type', 'control_specification']); 
        }

           //other features
        $other_features = NULL;
        if($request->other_features)
        {
            $other_features = json_encode($request->other_features);
        }

            //other accessories
        $other_accessories=NULL;
        if($request->other_accessories)
        {

            $qtys = [$request->line_choke_qty,$request->limit_swith_qty,$request->no_reed_qty,$request->nc_reed_qty,$request->load_sensor_qty,$request->ups_qty]; 

            $qtys = array_values(array_filter_recursive($qtys));

            $other_accessories = ['accesories' => $request->other_accessories,'qty'=>$qtys];
            $other_accessories = json_encode($other_accessories);
        }

        for($i=0;$i<intVal($request->no_of_qty);$i++)
        {

        $contract = new Contract();
        $contract->user_id = $user->id;
        $contract->created_by = get_guard();
        $contract->contact_person = $request->contact_person;
        $contract->site_address = $request->site_address;
        $contract->office_address = $request->office_address;
        $contract->client_name = $user->name;
        $contract->mobile_number = $request->mobile_number;
        $contract->email = $user->email;
        $contract->contract_date = Carbon::now();
        $contract->save();

        ContractDetail::create([
            'contract_id' => $contract->id,
            'created_by' => get_guard(),
            'created_by_id' => get_current_user_id(),
            'control_type' => $request->control_type,
            'number_of_quantity' => $request->no_of_qty,
            'type_of_machine' => $request->type_of_machine,
            'motor_hp' => $request->motor_hp,
            'motor_type' => $request->motor_type,
            'door_mode' => json_encode($door_mode),
            'choose_battery' => $request->choose_battery,
            'ard_need_for_controller' => json_encode($ard_need),
            'other_specification' => $request->ard_other_specification,
            'duplex_system' => $request->duplex_system,
            'no_of_floor' => $request->no_of_floor,
            'indications' => $request->indications,
            'reed_type' => $request->reed_type,
            'collective_mode' => $request->collective_mode,
            'output_contractor' => $request->output_contractor,
            'motor_brake_voltage' => $request->motor_brake_voltage,
            'r_cam_voltage' => $request->r_cam_voltage,
            'register_capacitor_circuit' => $request->rc_circuit,
            'display_voltage' => $request->display_voltage,
            'voice_announcement_system' => $request->voice_system,
            'other_features' => $other_features,
            'other_accessories' => $other_accessories,
            'other_specification' => $request->other_specification,
            'drive_details' => json_encode($drive_detail),
            'contractor_coil_voltage' => $request->coil_voltage,
            'no_of_valve' => $request->no_of_valve,
            'valve_coil_voltage' => $request->valve_coil_voltage,
            'power_pack' => $request->power_pack,
            'ups_system' => $request->ups_system,
            'bettry_for_ard' => $request->ups_and_battery,
            'pg_card_details' => $request->pg_card_details,
            'communication_mode' => $request->communication_mode,
            'encoder_details' => $request->encoder_details,
            'speed_of_lift' => $request->speed_of_lift,
            'motor_current' => $request->motor_current,
            'motor_kw'      => $request->motor_kw,
            'starting_register' => $request->starting_register,
            'display_type' => $request->display_type,
            'gearless_battery' => $request->accessories_battery,
            'ups' => $request->accessories_ups,
            'gearless_quantity' => $request->gearless_quantity ?? NULL,
            'power_pack_make_by' => $request->power_pack,
            'battery_for_ard' => $request->ups_and_battery,
            'ups_type_ard'    => $request->ups_type_ard,
            'integrated_type' => $request->integrated_type,
            'integrated_ups'  => $request->integrated_ups."~".$request->ups_vlt,
            'integrated_battery' => $request->integrated_battery,

        ]);

            ContractRemark::create([
                'action_taken_by' => get_guard(),
                'contract_id' => $contract->id,
                'status'      => 'Contract Created',
                'remarks'      =>  'create',

            ]);

        } 

        Session::flash('success', 'Contract created successfully');

        if ($request->created_by == 'Supervisor') {
            return redirect('contract');
        } else {
            return redirect('/contract');
        } 
    }

    public function show(ContractDetail $contractDetail)
    {
                    //
    }

    public function edit(Contract $contract)
    {


    }

    public function update(Request $request, ContractDetail $contractdetail)
    {
        
     $user = null;
     if($request->has('user_id'))
     {
        $user = User::find($request->user_id);
     }else{
        $user = auth()->user();
    }


    //dd($contractdetail);
    $contract = Contract::find($contractdetail->contract_id);
    $contract->contact_person = $request->contact_person;
    $contract->site_address = $request->site_address;
    $contract->office_address = $request->office_address;
    $contract->mobile_number = $request->mobile_number;
    $contract->contract_date = Carbon::now();
    $contract->update();

            //door_mode data
    $door_mode = $request->only(['door_mode', 'door_mode_auto_type', 'no_of_car_door', 'no_of_landing_door', 'door_motor_HP',
        'door_motor_voltage', 'door_drive', 'yaskawa', 'innovance', 'invt']);

            //drive detail
    $drive_detail = NULL;
    if($request->has('drive_details'))
    {
        $drive_detail = $request->only(['drive_details','INVT_GD300', 'INOVANCE_MD380','DELTA_E_SERIES','FUJI_ACE', 'YASKAWA_V1000','INVERTEK_GEARED','INVT_GD300L','DELTA_ED_SERIES','YASKAWA_L1000','INVERTEK_GEARLESS','drive_make_by', 'drive_modle', 'drive_HP', 'invertek-geard','DBR_rating','monarch','monrch_drive_hp','monarch_drive_type']);
    }


            //ard_need_for_controller Database
    $ard_need =NULL;
    if($request->has('controller'))
    {
        $ard_need = $request->only(['controller', 'control_make_by', 'controller_control_type', 'control_specification']); 
    }

           //other features
    $other_features = NULL;
    if($request->other_features)
    {
        $other_features = json_encode($request->other_features);
    }

            //other accessories
    $other_accessories=NULL;
    if($request->other_accessories)
    {
        $other_accessories = json_encode($request->other_accessories);
    }

    ContractDetail::where('id',$contractdetail->id)
    ->update([
        'contract_id' => $contract->id,
        'created_by' => get_guard(),
        'created_by_id' => get_current_user_id(),
        'motor_hp' => $request->motor_hp,
        'motor_type' => $request->motor_type,
        'number_of_quantity' => $request->no_of_qty,   
        'type_of_machine' => $request->type_of_machine,
        'door_mode' => json_encode($door_mode),
        'choose_battery' => $request->choose_battery,
        'ard_need_for_controller' => json_encode($ard_need),
        'other_specification' => $request->ard_other_specification,
        'duplex_system' => $request->duplex_system,
        'no_of_floor' => $request->no_of_floor,
        'indications' => $request->indications,
        'reed_type' => $request->reed_type,
        'collective_mode' => $request->collective_mode,
        'output_contractor' => $request->output_contractor,
        'motor_brake_voltage' => $request->motor_brake_voltage,
        'r_cam_voltage' => $request->r_cam_voltage,
        'register_capacitor_circuit' => $request->rc_circuit,
        'display_voltage' => $request->display_voltage,
        'voice_announcement_system' => $request->voice_system,
        'other_features' => $other_features,
        'other_accessories' => $other_accessories,
        'other_specification' => $request->other_specification,
        'drive_details' => json_encode($drive_detail),
        'contractor_coil_voltage' => $request->coil_voltage,
        'no_of_valve' => $request->no_of_valve,
        'valve_coil_voltage' => $request->valve_coil_voltage,
        'power_pack_make_by' => $request->power_pack,
        'ups_system' => $request->ups_system,
        'pg_card_details' => $request->pg_card_details,
        'communication_mode' => $request->communication_mode,
        'encoder_details' => $request->encoder_details,
        'speed_of_lift' => $request->speed_of_lift,
        'motor_current' => $request->motor_current,
        'motor_kw'      => $request->motor_kw,
        'starting_register' => $request->starting_register,
        'display_type' => $request->display_type,
        'gearless_battery' => $request->accessories_battery,
        'ups' => $request->accessories_ups,
        'gearless_quantity' => $request->gearless_quantity ?? NULL,
        'battery_for_ard' => $request->ups_and_battery,
        'ups_type_ard'    => $request->ups_type_ard,
        'integrated_type' => $request->integrated_type,
        'integrated_ups'  => $request->integrated_ups."~".$request->ups_vlt,
        'integrated_battery' => $request->integrated_battery,

    ]);

    ContractRemark::create([
                'action_taken_by' => get_guard(),
                'contract_id' => $contract->id,
                'status'      => 'Contract Updated',
                'remark'      =>  'updated',

            ]);

    Session::flash('success', 'Contract created successfully');

    if ($request->created_by == 'Supervisor') {
        return redirect('contract');
    } else {
        return redirect('/contract');
    } 
    }


    public function destroy(ContractDetail $contractDetail)
    {
                    //
    }

    public function clientcontract($id)
    {
        $contracts = Contract::where('user_id', $id)->get();
        return view('supervisor.clients.clientcontract', compact('contracts'));
    }

    }