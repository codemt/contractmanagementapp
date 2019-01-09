@extends('layouts.master')
@push('page-style')
    <style media="all">
    .control-label {
        font-size: 15px;
    }
    .custom-control {
        margin-bottom: 20px;
    }
    .custom-radio .custom-control-indicator {
        -webkit-background-size: 70% 70%;
        background-size: 70% 70%;
    }
    .custom-control-label {
        margin-left: 30px;
        margin-top: 3px;
        font-size: 15px;
        padding-right: 10px;
    }
    .custom-control+.custom-control {
        margin-left: 0px;
    }
    .custom-control-indicator {
        height: 20px;
        width: 20px;
    }
    .md-form-group {
        margin-bottom: 0px;
        padding: 0 0 20px 0;
    }
    .input-sm {
        margin-bottom: 10px;
    }
    [data-type] {
        display: none;
    }

   
</style>
@endpush
@section('page-content')
<div class="row">
<div class="col-sm-6" style="position: sticky;top: 0px;left: 0px;width: 50%;height: auto;">
    <br/>
    <div class="container-fluid">
        <div class="col-xs-12 bo pb-10">
            <div class="col-xs-12" style="margin-top: 50px;">
                <h4 class="text-capitalize">
                    <strong>Name: </strong>
                    {{$contract->client_name}}
                </h4>
                <h4 class="text-capitalize">
                    <strong>Mobile No: </strong>
                    {{$contract->mobile_number}}
                </h4>
                <h4 class="text-capitalize">
                    <strong>Site Address: </strong>
                    {{$contract->site_address}}
                </h4>
                <h4 class="text-capitalize">
                    <strong>Office Address: </strong>
                    {{$contract->office_address}}
                </h4>
            </div>
        </div>
    </div>
    <br/>
    <div class="container-fluid" >
        <h2 class="text-center">
            Control Specification
        </h2>
        @php 
        $door_mode = json_decode($contract->detail->door_mode,true);
        $controllers = json_decode($contract->detail->ard_need_for_controller,true) ?? '';
        $drive_detail = json_decode($contract->detail->drive_details,true);
        $ard_need = json_decode($contract->detail->ard_need_for_controller,true);
        $other_features = json_decode($contract->detail->other_features);
        $other_accessories = json_decode($contract->detail->other_accessories);
        @endphp
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td class="col-xs-6">Control Type:</td> 
                    <td class="col-xs-6">{{ $contract->detail->control_type ?? '' }} 
</td> 
                </tr>
                @if(isset($contract->detail->integrated_type))
                <tr>
                    <td class="col-xs-6">Integrated Type:</td> 
                    <td class="col-xs-6">{{ $contract->detail->integrated_type ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->motor_hp))
                <tr>
                    <td class="col-xs-6">Motor HP:</td> 
                    <td class="col-xs-6">{{ $contract->detail->motor_hp ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->motor_type))
                <tr>
                    <td class="col-xs-6">Motor Type:</td> 
                    <td class="col-xs-6">{{ $contract->detail->motor_type ?? '' }}</td> 
                </tr>
                @endif


                @if(isset($door_mode['door_mode']))
                <tr>
                    <td class="col-xs-6">Door Mode:</td> 
                    <td class="col-xs-6">{{ $door_mode['door_mode'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @if(isset( $door_mode['door_mode_auto_type'] ))
                        Door Mode Auto Type:{{ $door_mode['door_mode_auto_type'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif

                        @if(isset($door_mode['no_of_car_door']))
                        No Of Car Door: {{ $door_mode['no_of_car_door'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset($door_mode['no_of_landing_door']))
                        No Of Landing Door:{{ $door_mode['no_of_landing_door'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset($door_mode['door_motor_HP']))
                        Door Motor HP:{{ $door_mode['door_motor_HP'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $door_mode['door_motor_voltage']))
                        Door Mode Auto Type:{{ $door_mode['door_motor_voltage'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset($door_mode['door_drive']))
                        Door Drive:{{ $door_mode['door_drive'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $door_mode['yaskawa'] ))
                        Yaskawa:{{ $door_mode['yaskawa'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $door_mode['innovance']))
                        Innovance:{{ $door_mode['innovance'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset($door_mode['invt']))
                        Invt:{{ $door_mode['invt'] ?? '' }}&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        @endif

                    </td> 
                </tr>
                @endif


                @if(isset( $drive_detail['drive_details']))
                <tr>
                    <td class="col-xs-6">Drive Detail:</td> 
                    <td class="col-xs-6">{{$drive_detail['drive_details'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @if(isset( $drive_detail['monarch']))
                        Monarch:{{ $drive_detail['monarch'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $drive_detail['drive_make_by']))
                        Drive Make By:{{ $drive_detail['drive_make_by'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $drive_detail['INVT_GD300']))
                        INVT_GD300:{{ $drive_detail['INVT_GD300'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $drive_detail['INOVANCE_MD380']))
                        INOVANCE_MD380:{{ $drive_detail['INOVANCE_MD380'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $drive_detail['DELTA_E_SERIES']))
                        DELTA_E_SERIES:{{ $drive_detail['DELTA_E_SERIES'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $drive_detail['FUJI_ACE']))
                        FUJI_ACE:{{ $drive_detail['FUJI_ACE'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $drive_detail['YASKAWA_V1000']))
                        YASKAWA_V1000:{{ $drive_detail['YASKAWA_V1000'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $drive_detail['INVERTEK_GEARED']))
                        INVERTEK_GEARED:{{ $drive_detail['INVERTEK_GEARED'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $drive_detail['INVT_GD300L']))
                        INVT_GD300L:{{ $drive_detail['INVT_GD300L'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $drive_detail['DELTA_ED_SERIES']))
                        DELTA_ED_SERIES:{{ $drive_detail['DELTA_ED_SERIES'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $drive_detail['YASKAWA_L1000']))
                        YASKAWA_L1000:{{ $drive_detail['YASKAWA_L1000'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $drive_detail['INVERTEK_GEARLESS']))
                        INVERTEK_GEARLESS:{{ $drive_detail['INVERTEK_GEARLESS'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        
                        
                        @if(isset( $drive_detail['drive_modle']))
                        Drive Modle:{{ $drive_detail['drive_modle'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $drive_detail['drive_HP']))
                        drive_HP:{{ $drive_detail['drive_HP'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $drive_detail['DBR_rating']))
                        DBR_rating:{{ $drive_detail['DBR_rating'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset( $drive_detail['monrch_drive_hp']))
                        Monrch Drive HP:{{ $drive_detail['monrch_drive_hp'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                    </td> 
                </tr>
                @endif
                @if(isset( $ard_need['controller']))
                <tr>
                    <td class="col-xs-6">ARD Need For Controller:</td> 
                    <td class="col-xs-6">{{ $ard_need['controller'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @if(isset($ard_need['control_make_by'] ))
                        Control make by:{{ $ard_need['control_make_by'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset($ard_need['controller_control_type']))
                        controller control type: {{ $ard_need['controller_control_type'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif
                        @if(isset($ard_need['control_specification']))
                        control specification:{{ $ard_need['control_specification'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
                        @endif



                    </td> 
                </tr>
                @endif


                @if(isset($contract->detail->duplex_system))
                <tr>
                    <td class="col-xs-6">Duplex System:</td> 
                    <td class="col-xs-6">{{ $contract->detail->duplex_system ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->indications))
                <tr>
                    <td class="col-xs-6">Indications:</td> 
                    <td class="col-xs-6">{{ $contract->detail->indications ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->starting_register))
                <tr>
                    <td class="col-xs-6">Indications:</td> 
                    <td class="col-xs-6">{{ $contract->detail->starting_register ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->reed_type))
                <tr>
                    <td class="col-xs-6">Reed Type:</td> 
                    <td class="col-xs-6">{{ $contract->detail->reed_type ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->collective_mode))
                <tr>
                    <td class="col-xs-6">Collective Mode:</td> 
                    <td class="col-xs-6">{{ $contract->detail->collective_mode ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->output_contractor))
                <tr>
                    <td class="col-xs-6">Output contractor Require:</td> 
                    <td class="col-xs-6">{{ $contract->detail->output_contractor ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->motor_brake_voltage))
                <tr>
                    <td class="col-xs-6">Motor Brake Voltage:</td> 
                    <td class="col-xs-6">{{ $contract->detail->motor_brake_voltage ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->drive_detail))
                <tr>
                    <td class="col-xs-6">Drive Detail:</td> 
                    <td class="col-xs-6">{{ $contract->detail->drive_detail ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->r_cam_voltage))
                <tr>
                    <td class="col-xs-6">Drive Detail:</td> 
                    <td class="col-xs-6">{{ $contract->detail->r_cam_voltage ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->register_capacitor_circuit))
                <tr>
                    <td class="col-xs-6">Register Capacitor Circuit:</td> 
                    <td class="col-xs-6">{{ $contract->detail->register_capacitor_circuit ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->display_voltag))
                <tr>
                    <td class="col-xs-6"> COP & LOP Display Voltage:</td> 
                    <td class="col-xs-6">{{ $contract->detail->display_voltag ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->voice_accouncement_system))
                <tr>
                    <td class="col-xs-6"> Voice Accouncement System:</td> 
                    <td class="col-xs-6">{{ $contract->detail->voice_accouncement_system ?? '' }}</td> 
                </tr>
                @endif

                @if(isset($contract->detail->choose_battery))
                <tr>
                    <td class="col-xs-6">Choose Battery:</td> 
                    <td class="col-xs-6">{{ $contract->detail->choose_battery}}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->contractor_coil_voltage))
                <tr>
                    <td class="col-xs-6"> Contractor Coil Voltage:</td> 
                    <td class="col-xs-6">{{ $contract->detail->contractor_coil_voltage ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->no_of_floor))
                <tr>
                    <td class="col-xs-6"> No Of Floor:</td> 
                    <td class="col-xs-6">{{ $contract->detail->no_of_floor ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->no_of_valve))
                <tr>
                    <td class="col-xs-6"> No Of Valve:</td> 
                    <td class="col-xs-6">{{ $contract->detail->no_of_valve ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->valve_coil_voltage))
                <tr>
                    <td class="col-xs-6"> Valve Coil Voltage:</td> 
                    <td class="col-xs-6">{{ $contract->detail->valve_coil_voltage ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->power_pack))
                <tr>
                    <td class="col-xs-6"> Power Pack:</td> 
                    <td class="col-xs-6">{{ $contract->detail->power_pack ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->ups_system))
                <tr>
                    <td class="col-xs-6"> UPS type ARD System:</td> 
                    <td class="col-xs-6">{{ $contract->detail->ups_system ?? '' }}</td> 
                </tr>
                @endif

                @if(isset($contract->detail->encoder_details))
                <tr>
                    <td class="col-xs-6"> Encoder Details:</td> 
                    <td class="col-xs-6">{{ $contract->detail->encoder_details ?? '' }}</td> 
                </tr>
                @endif 
                @if(isset($contract->detail->pg_card_details))
                <tr>
                    <td class="col-xs-6"> PG Card Details:</td> 
                    <td class="col-xs-6">{{ $contract->detail->pg_card_details ?? '' }}</td> 
                </tr>
                @endif

                @if(isset($contract->detail->communication_mode))
                <tr>
                    <td class="col-xs-6"> Communication Mode:</td> 
                    <td class="col-xs-6">{{$contract->detail->communication_mode ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->other_features))
                <tr>
                    <td class="col-xs-6"> Other Features:</td> 
                    <td class="col-xs-6">{{ implode(',',$other_features) }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->other_accessories))
                <tr>
                    <td class="col-xs-6"> Other Accessories:</td> 
                    <td class="col-xs-6">
                        @foreach($other_accessories->accesories as $index=>$accessory)
                    {{ $accessory }}:{{$other_accessories->qty[0] ?? ''}}<br>
                        @endforeach
                    </td> 
                </tr>
                @endif

                @if(isset($contract->detail->gearless_battery))
                <tr>
                    <td class="col-xs-6"> Battery:</td> 
                    <td class="col-xs-6">{{ $contract->detail->gearless_battery ?? '' }}</td> 
                </tr>
                @endif

                @if(isset($contract->detail->gearless_quantity ))
                <tr>
                    <td class="col-xs-6"> Battery Quantity:</td> 
                    <td class="col-xs-6">{{ $contract->detail->gearless_quantity  ?? '' }}</td> 
                </tr>
                @endif

                @if(isset($contract->detail->ups))
                <tr>
                    <td class="col-xs-6"> UPS:</td> 
                    <td class="col-xs-6">{{ $contract->detail->ups ?? '' }}</td> 
                </tr>
                @endif
                @if(isset($contract->detail->other_specification))
                <tr>
                    <td class="col-xs-6"> Other Specification:</td> 
                    <td class="col-xs-6">{{ $contract->detail->other_specification ?? '' }}</td> 
                </tr>
                @endif

            </tbody>
        </table>
    </div>
    <br/>
</div>
<div class="col-md-6 col-sm-12" style="position: relative;">
        	<form id="assign-stock-form" data-toggle="md-validator" action="{{route('supervisor.supervisorStockAssign.store')}}" method="POST" id="assign-stock-form">
                {{ csrf_field() }}
                <input type="hidden" value="{{$contract->id}}" name="contract_id">
                <h3 class="text-center"><u>Client Requirements</u></h3>
                <br/>
                <div class="row">
                	<label class="col-sm-4 control-label" for="order_taken_by">Order Taken By <sup class="text-primary">*</sup> :</label>
                	<div class="col-sm-8">
                	     <div class="md-form-group">
			                <input class="md-form-control" type="text" id="order_taken_by" name="order_taken_by" spellcheck="false" data-parsley-required="true">
			                <label class="md-control-label"></label>
			            </div>
			        </div>
			       
			        <label class="col-sm-3 control-label" for="control_no">Control No. <sup class="text-primary" data-parsley-required="true">*</sup> :</label>
                	<div class="col-sm-9">
                	     <div class="md-form-group">
			                <input class="md-form-control" type="text" id="control_no" name="control_no" spellcheck="false" readonly>
			                <label class="md-control-label"></label>
			            </div>
			        </div>
			         <label class="col-sm-3 control-label" for="control_no">Control Type <sup class="text-primary">*</sup> :</label>

			         <div class="col-sm-9">
			        	 <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="control_type" value="SS">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">Single Speed</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="control_type" value="V3F">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">V3F</span>
                        </label>
                           <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="control_type" value="V3F+ARD">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">V3F+ARD</span>
                        </label>
                      
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="control_type" value="ARD">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">ARD</span>
                        </label>

                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="control_type" value="SS+ARD">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">SINGLE SPEED+ARD</span>
                        </label>

                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="control_type" value="HYDRAULIC">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">Hydraulic</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="control_type" value="GEARLESS">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">Gearless V3F </span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="control_type" value="INTEGRATED">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">Integrated</span>
                        </label>
			        </div>
                   
                </div>

                <div data-type="SS">
                    @component('component.superviser-components.ss',['drive_detail' => $drive_detail])
                    @endcomponent
                </div>
                <div data-type="V3F">
                    @component('component.superviser-components.v3f',['drive_detail' => $drive_detail])
                    @endcomponent
                </div>               
                <div data-type="ARD">
                    @component('component.superviser-components.ard',['drive_detail' => $drive_detail])
                    @endcomponent
                </div>
                <div data-type="SS+ARD">
                    @component('component.superviser-components.ss_ard',['drive_detail' => $drive_detail])
                    @endcomponent
                </div>
                <div data-type="HYDRAULIC">
                    @component('component.superviser-components.hydraulic',['drive_detail' => $drive_detail])
                    @endcomponent
                </div>
                <div data-type="INTEGRATED">
                    @component('component.superviser-components.integrated',['drive_detail' => $drive_detail])
                    @endcomponent
                </div>
                <div data-type="V3F+ARD">
                    @component('component.superviser-components.v3fard',['drive_detail' => $drive_detail])
                    @endcomponent
                </div> 
            </form>
</div>
</div>
@endsection

@push('page-script')
    <script>
    var control_type = "{{$contract->detail->control_type}}";
    var components = ['SS','V3F','ARD','SS+ARD','HYDRAULIC','INTEGRATED','V3F+ARD'];

    $('input[type=radio][name="control_type"]').prop('checked',false).prop('disabled',true);
    $('input[name=control_type][value="'+control_type+'"]').prop('checked',true).prop('disabled',false);
    $('[data-type="'+control_type+'"]').show();
    console.log(control_type);
    //filter components
    components = components.filter(comp => comp != control_type);
    $.each(components,function(index,value){
            console.log(value);
        $('[data-type="'+value+'"]').remove();
    })

    //required if checkbox checked
            window.Parsley.addValidator("requiredIf", {
             validateString : function(value, requirement) {
                console.log(value+"-"+requirement);
              if ($(requirement).is(':checked')){
               return !!value;
            } 
           return true;
            },
            priority: 33,
            messages: {en: 'If you select checkbox also enter in these field"'}
        })

     //submit button click
        $('.btnSubmit').click(function(e){
            e.preventDefault()  
        $('#assign-stock-form  :input:hidden').not('input[type="hidden"]').attr({"disabled":true,"data-parsley-required":"false"});
        //validation using parsely
          
         if ($('#assign-stock-form').parsley().validate()) {
            $('#assign-stock-form  :input:hidden').not('input[type="hidden"]').attr({"disabled":true,"data-parsley-required":"false"});
            $('#assign-stock-form').submit();
        }
        else
        {
            console.log("invalid");
            $('#assign-stock-form  :input:hidden').not('input[type="hidden"]').attr({"disabled":false,"data-parsley-required":"true"}); 
        }
            
    })

        $(document).on('change','input[type="radio"][name="overload[battery-charger]"]',function(){
            
            var val = $(this).val();

            if(val == 'Yes')
            {
                $('.battery_charger_option').show('slow');
            }
            else
            {
                $('.battery_charger_option').hide('slow');
            }
        })

        $('select[name="technician"]').change(function(){
            id = $(this).val();
            $.ajax({
                type:'get',
                url:'/supervisor/getControlNo/'+id,
                success:function(response){
                    $('input[name="control_no"]').val(response);
                    $('.control_no_span').text('control no: '+response);
                }
            })
        })

    </script>
@endpush
