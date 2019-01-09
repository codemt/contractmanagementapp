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
/*[data-type] {
    display: none;
    }*/
</style>
@endpush
@section('page-content')
<div class="title-bar">
    <h1 class="title-bar-title">
        <span class="d-ib">Basic Requirements</span>
    </h1>
    <p class="title-bar-description">
        <small>
            Please complete the follwoing details <br/>
            <span class="text-primary">
                (*) Mandatory Fields
            </span>
        </small>
    </p>
</div>
<form id="ContractForm" data-toggle="md-validator" action="{{route('contractdetail.update',[$contract_details->id])}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <label class="col-sm-2 control-label" for="client_name">
        Client Name<sup class="text-primary">*</sup>
    </label>
    <div class="col-sm-4">
        <div class="md-form-group md-label-floating">
            <input class="md-form-control" id="client_name" type="text" name="client_name" spellcheck="false" readonly="readonly" value="{{auth()->user()->name ?? $contract->user->name}}">
            <label class="md-control-label"></label>
        </div>
    </div>

    <label class="col-sm-2 control-label" for="contact_person">
        Contact Person <sup class="text-primary">*</sup>
    </label>
    <div class="col-sm-4">
        <div class="md-form-group md-label-floating">
            <input class="md-form-control" id="contact_person" type="text" name="contact_person" spellcheck="false" value="{{$contract->contact_person}}" required>
            <label class="md-control-label"></label>
        </div>
    </div>

    <label class="col-sm-2 control-label" for="mobile_number">
        Mobile Number<sup class="text-primary">*</sup>
    </label>
    <div class="col-sm-4">
        <div class="md-form-group md-label-floating">
            <input class="md-form-control" id="mobile_number" type="text" required name="mobile_number" spellcheck="false" value="{{$contract->mobile_number}}">
            <label class="md-control-label"></label>
        </div>
    </div>

    <label class="col-sm-2 control-label" for="email">
        Email Address
    </label>
    <div class="col-sm-4">
        <div class="md-form-group md-label-floating">
            <input class="md-form-control" id="email" type="email" name="email" spellcheck="false" value="{{auth()->user()->email ?? $contract->user->email}}" readonly="readonly">
            <label class="md-control-label"></label>
        </div>
    </div>

    <label class="col-sm-2 control-label" for="office_address">
        Office Address :
    </label>
    <div class="col-sm-4">
        <div class="md-form-group md-label-floating">
            <textarea class="md-form-control" id="office_address" rows="2" name="office_address">{{$contract->office_address}}</textarea>
            <label class="md-control-label"></label>
        </div>
    </div>

    <label class="col-sm-2 control-label" for="site_address">
        Site Address :
    </label>
    <div class="col-sm-4">
        <div class="md-form-group md-label-floating">
            <textarea class="md-form-control" id="site_address" rows="2" name="site_address">{{$contract->site_address}}</textarea>
            <label class="md-control-label"></label>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr/>
    <div class="row">
        <label class="col-sm-3 col-sm-offset-1  control-label">No of Quantity: <sup class="text-primary">*</sup></label>
        <div class="col-sm-3">
            <div class="md-form-group">
                <input class="md-form-control" type="number" id="" name="no_of_qty" spellcheck="false" data-parsely-required="true">
                <label class="md-control-label"></label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="row">
                    <label class="col-sm-3 control-label">Control Type: </label>
                   <div class="col-sm-3">
                    <div class="md-form-group">
                        <label class="control-label">{{$contract->detail->control_type}}</label>
                    </div>
                </div>
            <div class="row">
                <label class="col-sm-3 control-label" for="">Motor HP <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="5.00" type="radio" name="motor_hp" data-parsley-multiple required data-parsley-errors-container="#motorhp_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">5 HP</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="7.50" type="radio" name="motor_hp">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">7.5 HP</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="10.00" type="radio" name="motor_hp">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">10 HP</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="15.00" type="radio" name="motor_hp">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">15 HP</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="20.00" type="radio" name="motor_hp">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">20 HP</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="25.00" type="radio" name="motor_hp">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">25 HP</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="30" type="radio" name="motor_hp">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">30 HP</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="40.00" type="radio" name="motor_hp">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">40 HP</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="50" type="radio" name="motor_hp">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">50 HP</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="60.00" type="radio" name="motor_hp">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">60 HP</span>
                    </label>
                    <span id="motorhp_error" class="text-primary"></span>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 control-label" for="">Motor Type <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="Star-Delta Start" type="radio" name="motor_type" data-parsley-multiple required data-parsley-errors-container="#motor_type_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Star-Delta Start</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="Direct Online Start" type="radio" name="motor_type">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Direct Online Start</span>
                    </label>
                    <span id="motor_type_error" class="text-primary"></span>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-3 control-label" for="no_of_valve_hydraulic">No. of Valve <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="no_of_valve_hydraulic" name="no_of_valve" spellcheck="false"
                        data-parsley-required="true">
                        <label class="md-control-label"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-3 control-label" for="valve_coil_voltage_hydraulic">Valve Coil Voltage <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="valve_coil_voltage_hydraulic" name="valve_coil_voltage" spellcheck="false" data-parsley-required="true">
                        <label class="md-control-label"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-3 control-label" for="power_pack_hydraulic">Power Pack make by<sup class="text-primary">*</sup> :</label>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="power_pack_hydraulic" name="power_pack" spellcheck="false" data-parsley-required="true">
                        <label class="md-control-label"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-3 control-label" for="no_of_floor_hydraulic">No. of Floor<sup class="text-primary">*</sup> :</label>
                <div class="col-sm-3">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="no_of_floor_hydraulic" name="no_of_floor" spellcheck="false" data-parsley-required="true">
                        <label class="md-control-label"></label>
                    </div>
                </div>
                <label class="col-sm-2 control-label" for="indications_hydraulic">&amp; its Indications:</label>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="indications_hydraulic" name="indications" spellcheck="false" data-parsley-required="true">
                        <label class="md-control-label"></label>
                    </div>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 control-label" for="">Door Mode <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="door_mode" value="Manual Door" data-parsley-multiple required data-parsley-errors-container="#door_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Manual Door</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="door_mode" value="Auto Door" data-parsley-required="true">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Auto Door</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="door_mode" value="Semi Auto" data-parsley-required="true">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Semi Auto Door</span>
                    </label>
                    <span id="door_error" class="text-primary"></span>
                </div>
            </div>

            <div class="row">
                <div data-type="auto_door" class="col-sm-offset-3">
                    <div class="col-sm-9">
                     <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="door_mode_auto_type" value="Vertical Auto Door" data-parsley-multiple required data-parsley-errors-container="#auto_door_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Vertical Auto Door</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="door_mode_auto_type" value="Fermater type Auto Door">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Fermater type Auto Door</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="door_mode_auto_type" value="Wittur">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Wittur</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="door_mode_auto_type" value="Otis Type (DO, DC)" data-parsley-required="true">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Otis Type (DO, DC)</span>
                    </label>  
                    <span id="auto_door_error" class="text-primary"></span>         
                </div>
            </div>

            <div class="clearfix"></div>

            <div data-type="vertical_door">
                <label class="col-sm-3 control-label" for="no_of_car_door">No. of Car Door <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-3">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="no_of_car_door" name="no_of_car_door" data-parsley-required="true">
                        <label class="md-control-label"></label>
                    </div>
                </div>
                <label class="col-sm-3 control-label" for="no_of_landing_door">Number Of Landing Door <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-3">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="no_of_landing_door" name="no_of_landing_door" data-parsley-required="true">
                        <label class="md-control-label"></label>
                    </div>
                </div>
                <div class="clearfix"></div>
                <label class="col-sm-3 control-label" for="door_motor_HP"> Door Motor HP <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-3">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="door_motor_HP" name="door_motor_HP" data-parsley-required="true">
                        <label class="md-control-label"></label>
                    </div>
                </div>

                <label class="col-sm-3 control-label" for="door_motor_voltage"> Door Motor Voltage <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-3">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="door_motor_voltage" name="door_motor_voltage" spellcheck="false" data-parsley-required="true">
                        <label class="md-control-label"></label>
                    </div>
                </div>
                <div class="clearfix"></div>
                <label class="col-sm-3 control-label" for="door_drive"> Need Door Drive :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="door_drive" value="Yes" data-parsley-multiple required data-parsley-errors-container="#need_drive_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Yes</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="door_drive" value="No">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">No</span>
                    </label>
                    <span id="need_drive_error" class="text-primary"></span>
                </div>
            </div>

            <div class="clearfix"></div>

            <div data-type="door_drive">
                <label class="col-sm-3 control-label" for="door_drive"> Yaskawa :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="yaskawa" value="1HP" data-parsley-multiple required data-parsley-errors-container="#yaskawa_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">1HP</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="yaskawa" value="2Hp" data-parsley-required="true">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">2Hp</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="yaskawa" value="3Hp" data-parsley-required="true">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">3Hp</span>
                    </label>
                    <span id="yaskawa_error" class="text-primary"></span>
                </div>
                <div class="clearfix"></div>
                <label class="col-sm-3 control-label" for="innovance"> Innovance :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="innovance" value="1HP" data-parsley-multiple required data-parsley-errors-container="#innov_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">1HP</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="innovance" value="2Hp">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">2Hp</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="innovance" value="3Hp">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">3Hp</span>
                    </label>
                    <span id="innov_error" class="text-primary"></span>
                </div>
                <div class="clearfix"></div>
                <label class="col-sm-3 control-label" for="invt">Invt :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="invt" value="1HP" data-parsley-multiple required data-parsley-errors-container="#invt_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">1HP</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="invt" value="2Hp">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">2Hp</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" name="invt" value="3Hp">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">3Hp</span>
                    </label>
                    <span id="invt_error" class="text-primary"></span>
                </div>
            </div>
        </div>


        <div class="row">
            <label class="col-sm-3 control-label" for="">UPS type ARD System <sup class="text-primary">*</sup> :</label>
            <div class="col-sm-9">
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="Yes" type="radio" name="ups_type_ard" data-parsley-multiple required data-parsley-errors-container="#ups_type_ard_error">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">Yes</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input"value="No" type="radio" name="ups_type_ard">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">No</span>
                </label>
                <span id="ups_type_ard_error" class="text-primary"></span>
            </div>
        </div>

        <div class="row">
            <label class="col-sm-3 control-label" for="">Select UPS & Battery for ARD <sup class="text-primary">*</sup> :</label>
            <div class="col-sm-9">
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="600V" type="radio" name="ups_and_battery" data-parsley-multiple required data-parsley-errors-container="#ups_battery_ard_error">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">600V</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="900V" type="radio" name="ups_and_battery">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">900V</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="1.5KVA" type="radio" name="ups_and_battery">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">1.5KVA</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="Purchase Later" type="radio" name="ups_and_battery">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">Purchase Later</span>
                </label>
                <span id="ups_battery_ard_error" class="text-primary"></span>
            </div>
        </div>

        <div class="row">
            <label class="col-sm-3 control-label" for="">Choose Battery <sup class="text-primary">*</sup> :</label>
            <div class="col-sm-9">
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="7AH" type="radio" name="choose_battery" data-parsley-multiple required data-parsley-errors-container="#choose_battery_error">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">7AH</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="12AH" type="radio" name="choose_battery">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">12AH</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="17AH" type="radio" name="choose_battery">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">17AH</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="Purchase Later" type="radio" name="choose_battery">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">Purchase Later</span>
                </label>
                <span id="choose_battery_error" class="text-primary"></span>
            </div>
        </div>

        <div class="row">
            <label class="col-sm-3 control-label" for="">COP & LOP Display Voltage <sup class="text-primary">*</sup> :</label>
            <div class="col-sm-9">
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="12V DC" type="radio" name="display_voltage" data-parsley-multiple required data-parsley-errors-container="#display_voltage_error">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">12V DC</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="24V DC" type="radio" name="display_voltage">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">24V DC</span>
                </label>
                <span id="display_voltage_error" class="text-primary"></span>
            </div>
        </div>

        <div class="row">
            <label class="col-sm-3 control-label" for="">Display Type <sup class="text-primary">*</sup> :</label>
            <div class="col-sm-9">
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" type="radio" value="7 Segment" name="display_type" data-parsley-multiple required data-parsley-errors-container="#display_type_error">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">7 Segment</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" type="radio" value="Dot Matrix" name="display_type">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">Dot Matrix</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" type="radio" value="LCD" name="display_type">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">LCD</span>
                </label>
                <span id="display_type_error" class="text-primary"></span>
            </div>
        </div>

        <div class="row">
            <label class="col-sm-3 control-label" for=""> Voice Announcement System Require <sup class="text-primary">*</sup> :</label>
            <div class="col-sm-9">
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="Yes" type="radio" name="voice_system" data-parsley-multiple required data-parsley-errors-container="#voice_system_error">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">Yes</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input"value="No" type="radio" name="voice_system">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">No</span>
                </label>
                <span id="voice_system_error" class="text-primary"></span>
            </div>
        </div>

        <!-- Radio To Checkbox -->
        <div class="row">
            <label class="col-sm-3 control-label" for=""> Other Features :</label>
            <div class="col-sm-9">
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="Attendance" type="checkbox" name="other_features[]" data-parsley-multiple required data-parsley-errors-container="#other_features_error">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">Attendance</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="Fire" type="checkbox" name="other_features[]">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">Fire</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" value="Non Stop" type="checkbox" name="other_features[]">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">Non Stop</span>
                </label>
                <span id="other_features_error" class="text-primary"></span>
            </div>
        </div>


       <!-- Radio To Checkbox -->
<div class="row">
    <label class="col-sm-3 control-label" for=""> Other Accessories :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Limit Switch"  type="checkbox" name="other_accessories[]" id="limit_switch_hydrolic">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Limit Switch</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="NO Reed" type="checkbox" name="other_accessories[]" id="no_reed_hydrolic">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">NO Reed</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="NC Reed" type="checkbox" name="other_accessories[]" id="nc_reed_hydrolic">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">NC Reed</span>
        </label>
    </div>
</div>
<div class="row">
    <div class="col-sm-offset-3 col-sm-9">
        
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="limit_switch_qty_hydrolic" name="limit_swith_qty_hydrolic" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="no_reed_qty_hydrolic" name="no_reed_qty_hydrolic" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="nc_reed_qty_hydrolic" name="nc_reed_qty__hydrolic" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
    </div>
</div>
        <div class="row">
            <label class="col-sm-3 control-label" for="other_specification_hydraulic">Other Specification:</label>
            <div class="col-sm-9">
                <div class="md-form-group">
                    <textarea class="md-form-control" id="other_specification_hydraulic" rows="3" name="other_specification"></textarea>
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>

        <br/>
        <div class="col-sm-offset-8">
            <button class="btn btn-outline-primary btn-block btnSubmit">
                <i class="icon icon-paper-plane"></i> Update Contract
            </button>
        </div>



    </div>
    @endsection

    @push('page-script')
    <script>
     // ARD Controller
     $('input[type=radio][name=controller]').change(function() {
        if (this.value == 'Other Controller') {
            $('[data-type=control_details_by_us]').show('slow');
        }
        else {
            $('[data-type=control_details_by_us]').hide('slow');
        }
    });
     // Door Mode Auto
     $('input[type=radio][name=door_mode]').change(function() {
        if (this.value == 'Auto Door') {
            $('input[name="door_mode_auto_type"]').attr("data-parsley-required","true");
            $('label[for=rcam_voltage_v3f],label[for=rcam_voltage_v3f_ard],label[for=rcam_voltage],label[for=rcam_voltage_ss]').hide();
            $('input[type=text][name="r_cam_voltage"]').hide();
            $('[data-type=auto_door]').show('slow');
        }
        else if(this.value ==  'Semi Auto' || this.value == 'Manual Door'){
            $('input[name="door_mode_auto_type"]').attr("data-parsley-required","false");
            $('label[for=rcam_voltage]').show();
            $('input[type=text][name="r_cam_voltage"]').show();
            $('[data-type=auto_door]').hide();
            $('[data-type=vertical_door]').hide();
            $('[data-type=door_drive]').hide();
            $('input[type=radio][name=door_mode_auto_type]').prop( "checked", false );
            $('input[type=radio][name=door_drive]').prop( "checked", false );
        }

    });
    // Vertical Auto Door
    $('input[type=radio][name=door_mode_auto_type]').change(function() {
        if (this.value == 'Vertical Auto Door') {
            $('[data-type=vertical_door]').show('slow');
        }
        else if(this.value == 'Fermater type Auto Door'){
            $('[data-type=vertical_door]').hide();
            $('[data-type=door_drive]').hide();
            $('input[type=radio][name=door_drive]').prop( "checked", false );
        }
    });
    // Door Drive
    $('input[type=radio][name=door_drive]').change(function() {
        if (this.value == 'Yes') {
            $('[data-type=door_drive]').show('slow');
        }
        else {
            $('[data-type=door_drive]').hide();
        }
    });


    $('input[type=radio][name=control_type]').change(function() {
        if (this.value == 'GEARLESS') {
            $('input[type=radio][name=drive_details]').change(function() {
                if (this.value == 'Supplied By Us') {
                    $('[data-type=drive_details_by_ics]').hide();
                    $('[data-type=drive_details_by_ics_for_gearless]').hide();
                    $('[data-type=drive_details_by_us]').show();
                    $('[data-type=drive_details_by_ics] input[type=radio]').prop( "checked", false );
                    $('[data-type=drive_details_by_ics_for_gearless] input[type=radio]').prop( "checked", false );
                }
                else if (this.value == 'Take from icon control system') {
                    $('[data-type=drive_details_by_ics]').hide();
                    $('[data-type=drive_details_by_us]').hide();
                    $('[data-type=drive_details_by_ics_for_gearless]').show();
                }
            });
        }
        else {
            $('input[type=radio][name=drive_details]').change(function() {
                if (this.value == 'Supplied By Us') {
                    $('[data-type=drive_details_by_ics]').hide();
                    $('[data-type=drive_details_by_ics_for_gearless]').hide();
                    $('[data-type=drive_details_by_us]').show();
                    $('[data-type=drive_details_by_ics] input[type=radio]').prop( "checked", false );
                    $('[data-type=drive_details_by_ics_for_gearless] input[type=radio]').prop( "checked", false );
                }
                else if (this.value == 'Take from icon control system') {
                    $('[data-type=drive_details_by_ics_for_gearless]').hide();
                    $('[data-type=drive_details_by_us]').hide();
                    $('[data-type=drive_details_by_ics]').show();
                }
            });
        }
    });
</script>
<script type="text/javascript">

    var contractdetail = {!!json_encode($contract_details)!!};
    
    $('input[type=radio][name="duplex_system"][value="'+contractdetail.duplex_system+'"]').prop("checked",true);
    $('input[type=text][name="no_of_floor"]').val( contractdetail.no_of_floor );
    $('input[name="no_of_valve"]').val( contractdetail.no_of_valve );
    $('input[name="valve_coil_voltage"]').val( contractdetail.valve_coil_voltage );

    $('input[type=text][name="power_pack"]').val( contractdetail.power_pack_make_by );
    $('input[type=text][name="indications"]').val( contractdetail.indications );
    $('input[type=radio][name="reed_type"][value="'+contractdetail.reed_type+'"]').prop("checked",true);
    $('input[type=radio][name="ups_type_ard"][value="'+contractdetail.ups_type_ard+'"]').prop("checked",true);
    $('input[type=radio][name="ups_and_battery"][value="'+contractdetail.battery_for_ard+'"]').prop("checked",true);
    $('input[type=radio][name="choose_battery"][value="'+contractdetail.choose_battery+'"]').prop("checked",true);
    $('input[type=hidden][name="control_type"]').val( contractdetail.control_type);
 //door mode data
 var  door_mode = JSON.parse(contractdetail.door_mode);
 $('input[type=radio][name="door_mode"][value="'+door_mode.door_mode+'"]').prop("checked",true);
 if(door_mode.door_mode != "Auto Door")
 {
    $('[data-type=auto_door]').hide();
    $('[data-type=vertical_door]').hide();
    $('[data-type=door_drive]').hide();
    $('input[type=radio][name=door_mode_auto_type]').prop( "checked", false );
    $('input[type=radio][name=door_drive]').prop( "checked", false );
}
else
{
    $('input[type=radio][name="door_mode_auto_type"][value="'+door_mode.door_mode_auto_type+'"]').prop("checked",true);

    if(door_mode.door_mode_auto_type != "Vertical Auto Door")
    {
        $('[data-type=vertical_door]').hide();
        $('[data-type=door_drive]').hide();
    }
    else
    {
        $('input[type=text][name="no_of_car_door"]').val(door_mode.no_of_car_door);
        $('input[type=text][name="no_of_landing_door"]').val( door_mode.no_of_landing_door);
        $('input[type=text][name="door_motor_HP"]').val( door_mode.door_motor_HP);
        $('input[type=text][name="door_motor_voltage"]').val( door_mode.door_motor_voltage);
        $('input[type=radio][name="door_drive"][value="'+door_mode.door_drive+'"]').prop("checked",true);

        if(door_mode.door_drive != "Yes")
        {
            $('[data-type=door_drive]').hide();
        }
        else
        {
            $('[data-type=door_drive]').show();
            $('input[type=radio][name="yaskawa"][value="'+door_mode.yaskawa+'"]').prop("checked",true);
            $('input[type=radio][name="innovance"][value="'+door_mode.innovance+'"]').prop("checked",true);
            $('input[type=radio][name="invt"][value="'+door_mode.invt+'"]').prop("checked",true);
        }
    }
}



$('input[type=radio][name="collective_mode"][value="'+contractdetail.collective_mode+'"]').prop("checked",true);
$('input[type=radio][name="speed_of_lift"][value="'+contractdetail.speed_of_lift+'"]').prop("checked",true);
$('input[type=radio][name="motor_hp"][value="'+contractdetail.motor_hp+'"]').prop("checked",true);
$('input[type=radio][name="motor_type"][value="'+contractdetail.motor_type+'"]').prop("checked",true);
$('input[type=text][name="motor_current"]').val( contractdetail.motor_current );
$('input[type=radio][name="output_contractor"][value="'+contractdetail.output_contractor +'"]').prop("checked",true);
$('input[type=text][name="motor_brake_voltage"]').val( contractdetail.motor_brake_voltage );
$('input[type=text][name="r_cam_voltage"]').val( contractdetail.r_cam_voltage );
$('input[type=radio][name="rc_circuit"][value="'+contractdetail.register_capacitor_circuit+'"]').prop("checked",true);
$('input[type=radio][name="display_voltage"][value="'+contractdetail.display_voltage+'"]').prop("checked",true);
$('input[type=radio][name="display_type"][value="'+contractdetail.display_type+'"]').prop("checked",true);
$('input[type=radio][name="voice_system"][value="'+contractdetail.voice_announcement_system+'"]').prop("checked",true);


var  other_features = JSON.parse(contractdetail.other_features);
if(other_features != null)
{
    for(var i=0; i<other_features.length;i++)
    {
        $('input[type=checkbox][name="other_features[]"][value="'+other_features[i]+'"]').prop("checked",true);
    }
}

      //other accessories
      var  other_accessories = JSON.parse(contractdetail.other_accessories);
      if(other_accessories != null)
      {
        for(var i=0; i<other_accessories.length;i++)
        {
            $('input[type=checkbox][name="other_accessories[]"][value="'+other_accessories[i]+'"]').prop("checked",true);
        }
    }
    $('textarea[name="other_specification"]').val(contractdetail.other_specification);

    //submit button click
    $('.btnSubmit').click(function(e){
        e.preventDefault()  
        $('#ContractForm  :input:hidden').not('input[type="hidden"]').attr({"disabled":true,"data-parsley-required":"false"});
        //validation using parsely
        // if ($('#ContractForm').parsley().validate()) {
        //     $('#ContractForm  :input:hidden').not('input[type="hidden"]').attr({"disabled":true,"data-parsley-required":"false"});
        //     $('#ContractForm').submit();
        // }
        // $('#ContractForm  :input:hidden').not('input[type="hidden"]').attr({"disabled":false,"data-parsley-required":"true"});    

        $('#ContractForm').submit();
 
    })





</script>
@endpush
