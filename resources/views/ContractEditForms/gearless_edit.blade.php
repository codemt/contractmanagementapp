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
<form data-toggle="md-validator" action="{{route('contractdetail.update',[$contract_details->id])}}" method="POST">
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
    <label class="col-sm-3 control-label" for="">Duplex System <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input type="hidden" name="control_type" value="">
            <input class="custom-control-input" value="Yes" type="radio" name="duplex_sysytem">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Yes</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="No" type="radio" name="duplex_sysytem">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">No</span>
        </label>
    </div>
</div>
<div class="row">
    <label class="col-sm-3 control-label" for="no_of_floor_gearless">No. of Floor <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="no_of_floor_gearless" name="no_of_floor" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
    <label class="col-sm-2 control-label" for="indications_gearless">&amp; its Indications:</label>
    <div class="col-sm-4">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="indications_gearless" name="indications" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">Reed Type <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Car Top Reed" type="radio" name="reed_type">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label"> Car Top Reed</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Floor Reed" type="radio" name="reed_type">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Floor Reed</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">Door Mode <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="door_mode" value="Manual Door">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Manual Door</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="door_mode" value="Auto Door">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Auto Door</span>
        </label>
    </div>
</div>

<div class="row">
    <div data-type="auto_door" class="col-sm-offset-3">
        <div class="col-sm-9">
           <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="door_mode_auto_type" value="Vertical Auto Door">
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
            <input class="custom-control-input" type="radio" name="door_mode_auto_type" value="Otis Type (DO, DC)">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Otis Type (DO, DC)</span>
        </label>           
    </div>
</div>

<div class="clearfix"></div>

<div data-type="vertical_door">
    <label class="col-sm-3 control-label" for="no_of_car_door">No. of Car Door <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="no_of_car_door" name="no_of_car_door">
            <label class="md-control-label"></label>
        </div>
    </div>
    <label class="col-sm-3 control-label" for="no_of_landing_door">Number Of Landing Door <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="no_of_landing_door" name="no_of_landing_door">
            <label class="md-control-label"></label>
        </div>
    </div>
    <div class="clearfix"></div>
    <label class="col-sm-3 control-label" for="door_motor_HP"> Door Motor HP <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="door_motor_HP" name="door_motor_HP">
            <label class="md-control-label"></label>
        </div>
    </div>

    <label class="col-sm-3 control-label" for="door_motor_voltage"> Door Motor Voltage <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="door_motor_voltage" name="door_motor_voltage" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
    <div class="clearfix"></div>
    <label class="col-sm-3 control-label" for="door_drive"> Need Door Drive :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="door_drive" value="Yes">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Yes</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="door_drive" value="No">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">No</span>
        </label>
    </div>
</div>

<div class="clearfix"></div>

<div data-type="door_drive">
    <label class="col-sm-3 control-label" for="door_drive"> Yaskawa :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="yaskawa" value="1HP">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">1HP</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="yaskawa" value="2Hp">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">2Hp</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="yaskawa" value="3Hp">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">3Hp</span>
        </label>
    </div>
    <div class="clearfix"></div>
    <label class="col-sm-3 control-label" for="innovance"> Innovance :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="innovance" value="1HP">
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
    </div>
    <div class="clearfix"></div>
    <label class="col-sm-3 control-label" for="invt">Invt :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="invt" value="1HP">
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
    </div>
</div>
</div>


<div class="row">
    <label class="col-sm-3 control-label" for="">Collective Mode <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="DN Collective" type="radio" name="collective_mode">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">DN Collective</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" value="Collective Selective" name="collective_mode">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Collective Selective</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">Speed of Lift <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="0.3" type="radio" name="speed_of_lift">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">0.3 m/s</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="0.7" type="radio" name="speed_of_lift">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">0.7 m/s</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="1" type="radio" name="speed_of_lift">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">1 m/s</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="1.5" type="radio" name="speed_of_lift">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">1.5 m/s</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="2.5" type="radio" name="speed_of_lift">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">2.5 m/s</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">Motor HP <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="5.00" type="radio" name="motor_hp">
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
            <input class="custom-control-input" value="30.00" type="radio" name="motor_hp">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">30 HP</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for=""> Inbulid UPS type ARD System <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Yes" type="radio" name="ups_type_ard">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Yes</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="No" type="radio" name="ups_type_ard">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">No</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="brake_voltage_gearless">Motor Brake Voltage <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="brake_voltage_gearless" name="motor_brake_voltage" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
    <label class="col-sm-2 control-label" for="rcam_voltage_gearless">R-CAM Voltage <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-4">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="rcam_voltage_gearless" name="r_cam_voltage" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">Resister-Capacitor circuit require :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Yes" type="radio" name="rc_circuit">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Yes</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="No" type="radio" name="rc_circuit">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">No</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">COP & LOP Display Voltage <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="12V DC" type="radio" name="display_voltage">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">12V DC</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="24V DC" type="radio" name="display_voltage">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">24V DC</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">Display Type <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" value="7 Segment" name="display_type">
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
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for=""> Voice Announcement System Require <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Yes" type="radio" name="voice_system">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Yes</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="No" type="radio" name="voice_system">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">No</span>
        </label>
    </div>
</div>

<!-- Radio To Checkbox -->
<div class="row">
    <label class="col-sm-3 control-label" for=""> Other Features :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Attendance" type="checkbox" name="other_features[]">
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
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for=""> Encoder Details :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="ECN 1387" type="radio" name="encoder_details">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">ECN 1387</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="ECN 1313" type="radio" name="encoder_details">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">ECN 1313</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="ECN 113" type="radio" name="encoder_details">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">ECN 113</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="ECN 413" type="radio" name="encoder_details">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">ECN 413</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Incremental" type="radio" name="encoder_details">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Incremental</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="drive_details">Drive Details <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio"  name="drive_details" value="Take from icon control system">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Take from icon control system</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="drive_details" value="Supplied By Us">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Supplied By Us</span>
        </label>
    </div>
</div>
<!-- radio name ="same" -->
<div class="row">
    

    <div data-type="drive_details_by_ics_for_gearless">
        <label class="col-sm-3 control-label" for="invt-gd300l">INVT GD300L:</label>
        <div class="col-sm-9">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="INVT_GD300L" value="5" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 5 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="INVT_GD300L" value="7.5" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 7.5 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="INVT_GD300L" value="10" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 10 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="INVT_GD300L" value="15" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 15 HP</span>
            </label>
        </div>
        <label class="col-sm-3 control-label" for="delta-ed-series">DELTA ED SERIES:</label>
        <div class="col-sm-9">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="DELTA_ED_SERIES" value="5" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 5 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="DELTA_ED_SERIES" value="7.5" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 7.5 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="DELTA_ED_SERIES" value="10" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 10 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="DELTA_ED_SERIES" value="15" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 15 HP</span>
            </label>
        </div>
        <label class="col-sm-3 control-label" for="yaskawa-l1000">YASKAWA L1000:</label>
        <div class="col-sm-9">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="YASKAWA_L1000" value="5" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 5 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="YASKAWA_L1000" value="7.5" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 7.5 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="YASKAWA_L1000" value="10" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 10 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="YASKAWA_L1000" value="15" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 15 HP</span>
            </label>
        </div>
        <label class="col-sm-3 control-label" for="invertek-gearless">INVERTEK GEARLESS:</label>
        <div class="col-sm-9">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="INVERTEK_GEARLESS" value="5" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 5 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="INVERTEK_GEARLESS" value="7.5" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 7.5 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="INVERTEK_GEARLESS" value="10" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 10 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" data-name="INVERTEK_GEARLESS" value="15" type="radio" name="ics_drive">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 15 HP</span>
            </label>
        </div>
    </div>

    <div data-type="drive_details_by_us">
        <label class="col-sm-3 control-label" for="drive_make_by">Drive Make By:</label>
        <div class="col-sm-9">
            <div class="md-form-group">
                <input class="md-form-control" type="text" id="drive_make_by" name="drive_make_by" spellcheck="false">
                <label class="md-control-label"></label>
            </div>
        </div>
        <div class="clearfix"></div>
        <label class="col-sm-3 control-label" for="drive_modle">Drive Modle:</label>
        <div class="col-sm-9">
            <div class="md-form-group">
                <input class="md-form-control" type="text" id="drive_modle" name="drive_modle" spellcheck="false">
                <label class="md-control-label"></label>
            </div>
        </div>
        <div class="clearfix"></div>
        <label class="col-sm-3 control-label" for="drive_HP">Drive HP:</label>
        <div class="col-sm-9">
            <div class="md-form-group">
                <input class="md-form-control" type="text" id="drive_HP" name="drive_HP" spellcheck="false">
                <label class="md-control-label"></label>
            </div>
        </div>
        <div class="clearfix"></div>
        <label class="col-sm-3 control-label" for="DBR_rating">DBR Rating:</label>
        <div class="col-sm-9">
            <div class="md-form-group">
                <input class="md-form-control" type="text" id="DBR_rating" name="DBR_rating" spellcheck="false">
                <label class="md-control-label"></label>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <label class="col-sm-3 control-label" for="pg_card_details_gearless"> PG Card Details :</label>
    <div class="col-sm-9">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="pg_card_details_gearless" name="pg_card_details">
            <label class="md-control-label"></label>
        </div>
        {{-- <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="INVT" type="radio" name="pg_card_details">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">INVT</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" value="YASKAWA" name="pg_card_details" value="pg_card_yaskawa">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">YASKAWA</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" value="DELTA" name="pg_card_details">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">DELTA</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" value="INVERTEK" name="pg_card_details">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">INVERTEK</span>
        </label> --}}
    </div>
</div>

<!-- Radio To Checkbox -->
<div class="row">
    <label class="col-sm-3 control-label" for=""> Other Accessories :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="checkbox" value="Line Choke" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Line Choke</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="checkbox" value="Limit Switch" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Limit Switch</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="NO Reed" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">NO Reed</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="NC Reed" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">NC Reed</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Load Sensor" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Load Sensor</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id="accessory_battery" value="Battery" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Battery</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id="accessory_ups" value="UPS" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">UPS</span>
        </label>
    </div>
</div>

<div class="accessory_battery_div">
    <div class="row">
        <label class="col-sm-3 control-label" for="">Battery :</label>
        <div class="col-sm-9">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="Line Choke" name="accessories_battery">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">7 AH</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="Limit Switch" name="accessories_battery">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">12 AH</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" name="accessorie_battery">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">17 AH</span>
            </label>
        </div>
    </div>
    <div class="row">
        <label class="col-sm-3 control-label" for="Quantity"> Quantity :</label>
        <div class="col-sm-9">
            <div class="md-form-group">
                <input class="md-form-control" type="text" id="Quantity" name="gearless_quantity" placeholder="Quantity">
                <label class="md-control-label"></label>
            </div>
        </div>
    </div>
</div>

<div class=" accessory_ups_div">
    <div class="row">
        <label class="col-sm-3 control-label " for="">UPS :</label>
        <div class="col-sm-9">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="Line Choke" name="accessories_ups">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">2.5 KVA</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="Limit Switch" name="accessories_ups">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">2 KVA</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" name="accessories_ups">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">1.5 KVA</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" name="accessories_ups">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">900 VA</span>
            </label>
        </div>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="other_specification_gearless">Other Specification:</label>
    <div class="col-sm-9">
        <div class="md-form-group">
            <textarea class="md-form-control" id="other_specification_gearless" rows="3" name="other_specification"></textarea>
            <label class="md-control-label"></label>
        </div>
    </div>
</div>

<br/>
<div class="col-sm-offset-8">
    <button class="btn btn-outline-primary btn-block btnSubmit">
        <i class="icon icon-paper-plane"></i> Save and Create Contract
    </button>
</div>

</div>
@endsection

@push('page-script')
<script>

    // Other Accessories Battery
    $("#accessory_ups_v3f_ard").click(function() {
        $(".accessory_ups_v3f_ard_div").toggle();
    });

   
    //drive details
    $('[data-type="drive_details_by_ics_for_gearless"] input[type=radio]').change(function(){
        $('[data-type="drive_details_by_ics_for_gearless"] input[type=radio]').attr('name','ics_drive'); 
        var val=$(this).attr('data-name');
        $(this).attr('name',val);
        $(this).prop("checked",true);
        $('input[type=radio][name="ics_drive"]').prop("checked",false);
    });

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
            $('[data-type=auto_door]').show('slow');
        }
        else if (this.value == 'Manual Door')   {
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
    // console.log(contractdetail.duplex_system);
    $('input[type=radio][name="motor_hp"][value="'+contractdetail.motor_hp+'"]').prop("checked",true);
    $('input[type=radio][name="duplex_system"][value="'+contractdetail. duplex_system+'"]').prop("checked",true);
    $('input[type=radio][name="encoder_details"][value="'+contractdetail. encoder_details+'"]').prop("checked",true);
    // $('input[type=radio][name="no_of_floor"][value="'+contractdetail.no_of_floor+'"]').prop("checked",true);
    $('input[type=text][name="no_of_floor"]').val( contractdetail.no_of_floor);
    $('input[type=text][name="ups_system"]').val( contractdetail.ups_type_ard);
$('input[type=text][name="pg_card_details"]').val( contractdetail.pg_card_details);
    //door mode data
    var  door_mode = JSON.parse(contractdetail.door_mode);
    $('input[type=radio][name="door_mode"][value="'+door_mode.door_mode+'"]').prop("checked",true);
    $('input[type=radio][name="door_mode_auto_type"][value="'+door_mode.door_mode_auto_type+'"]').prop("checked",true);
    $('input[type=radio][name="no_of_car_door"][value="'+door_mode.no_of_car_door+'"]').prop("checked",true);
    $('input[type=radio][name="no_of_landing_door"][value="'+door_mode.no_of_landing_door+'"]').prop("checked",true);
    $('input[type=radio][name="door_motor_HP"][value="'+door_mode.door_motor_HP+'"]').prop("checked",true);
    $('input[type=radio][name="door_motor_voltage"][value="'+door_mode.door_motor_voltage+'"]').prop("checked",true);
    $('input[type=radio][name="door_drive"][value="'+door_mode.door_drive+'"]').prop("checked",true);
    $('input[type=radio][name="yaskawa"][value="'+door_mode.yaskawa+'"]').prop("checked",true);
    $('input[type=radio][name="innovance"][value="'+door_mode.innovance+'"]').prop("checked",true);
    $('input[type=radio][name="invt"][value="'+door_mode.invt+'"]').prop("checked",true);

</script>
  <script type="text/javascript">

    var contractdetail = {!!json_encode($contract_details)!!};
        console.log(contractdetail.duplex_system);
    $('input[type=radio][name="duplex_system"][value="'+contractdetail.duplex_system+'"]').prop("checked",true);
    $('input[type=radio][name="duplex_system"][value="'+contractdetail.duplex_system+'"]').prop("checked",true);
    $('input[type=text][name="no_of_floor"]').val( contractdetail.no_of_floor );
    $('input[type=text][name="indications"]').val( contractdetail.indications );
    $('input[type=radio][name="reed_type"][value="'+contractdetail.reed_type+'"]').prop("checked",true);
    
   
   //door mode data
    var  door_mode = JSON.parse(contractdetail.door_mode);
    $('input[type=radio][name="door_mode"][value="'+door_mode.door_mode+'"]').prop("checked",true);
    $('input[type=radio][name="door_mode_auto_type"][value="'+door_mode.door_mode_auto_type+'"]').prop("checked",true);
    $('input[type=text][name="no_of_car_door"]').val( door_mode.no_of_car_door);
    $('input[type=text][name="no_of_landing_door"]').val( door_mode.no_of_landing_door);
    $('input[type=text][name="door_motor_HP"]').val( door_mode.door_motor_HP);
    $('input[type=text][name="door_motor_voltage"]').val( door_mode.door_motor_voltage);

    $('input[type=radio][name="door_drive"][value="'+door_mode.door_drive+'"]').prop("checked",true);
    $('input[type=radio][name="yaskawa"][value="'+door_mode.yaskawa+'"]').prop("checked",true);
    $('input[type=radio][name="innovance"][value="'+door_mode.innovance+'"]').prop("checked",true);
    $('input[type=radio][name="invt"][value="'+door_mode.invt+'"]').prop("checked",true);
 $('input[type=hidden][name="control_type"]').val( contractdetail.control_type);


    $('input[type=radio][name="collective_mode"][value="'+contractdetail.collective_mode+'"]').prop("checked",true);
    $('input[type=radio][name="speed_of_lift"][value="'+contractdetail.speed_of_lift+'"]').prop("checked",true);
    $('input[type=radio][name="motor_hp"][value="'+contractdetail.motor_hp+'"]').prop("checked",true);
    $('input[type=text][name="motor_current"]').val( contractdetail.motor_current );
    $('input[type=radio][name="output_contractor"][value="'+contractdetail.output_contractor +'"]').prop("checked",true);
     $('input[type=text][name="motor_brake_voltage"]').val( contractdetail.motor_brake_voltage );
     $('input[type=text][name="r_cam_voltage"]').val( contractdetail.r_cam_voltage );
     $('input[type=radio][name="rc_circuit"][value="'+contractdetail.register_capacitor_circuit+'"]').prop("checked",true);
     $('input[type=radio][name="display_voltage"][value="'+contractdetail.display_voltage+'"]').prop("checked",true);
     $('input[type=radio][name="display_type"][value="'+contractdetail.display_type+'"]').prop("checked",true);
     $('input[type=radio][name="voice_system"][value="'+contractdetail.voice_announcement_system+'"]').prop("checked",true);


     var  other_features = JSON.parse(contractdetail.other_features);
    
     for(var i=0; i<other_features.length;i++)
     {
       
        $('input[type=checkbox][name="other_features[]"][value="'+other_features[i]+'"]').prop("checked",true);
     }
    
    //drive details
        var  drive_details = JSON.parse(contractdetail.drive_details);
      $('input[type=radio][name="drive_details"][value="'+drive_details.drive_details+'"]').prop("checked",true);
      var keys = ['INVT_GD300', 'INOVANCE_MD380','DELTA_E_SERIES','FUJI_ACE', 'YASKAWA_V1000','INVERTEK_GEARED','INVT_GD300L','DELTA_ED_SERIES','YASKAWA_L1000','INVERTEK_GEARLESS'];
      var drive_details_keys = Object.keys(drive_details);
      for(var i=0;i<Object.keys(drive_details).length;i++)
      {
            var val = $.inArray(drive_details_keys[i],keys);
           
            if(val == -1)
            {
                continue;
            }
            else
            {  
              $('input[type=radio][data-name="'+keys[val]+'"][name="ics_drive"][value="'+drive_details[drive_details_keys[i]]+'"]').prop("checked",true).attr('name',keys[val]); 
              break;
            }
      } 
    
    $('[data-type="drive_details_by_ics"] input[type=radio]').change(function(){
        $('[data-type="drive_details_by_ics"] input[type=radio]').attr('name','ics_drive'); 
        var val=$(this).attr('data-name');
        $(this).attr('name',val);
        $(this).prop("checked",true);
        $('input[type=radio][name="ics_drive"]').prop("checked",false);
        
    });  
      
      $('input[type=text][name="drive_make_by"]').val(drive_details.drive_make_by );
      $('input[type=text][name="drive_make_by"]').val(drive_details.drive_modle );
      $('input[type=text][name="drive_make_by"]').val(drive_details.drive_HP);
      $('input[type=text][name="drive_make_by"]').val(drive_details.DBR_rating);
    


      //other accessories
      var  other_accessories = JSON.parse(contractdetail.other_accessories);
      for(var i=0; i<other_accessories.length;i++)
     {
   
        $('input[type=checkbox][name="other_accessories[]"][value="'+other_accessories[i]+'"]').prop("checked",true);
     }
     
        $('input[type=radio][name="accessories_ups"][value="'+contractdetail.ups+'"]').prop("checked",true);
         $('input[type=radio][name="accessories_battery"][value="'+contractdetail.gearless_battery+'"]').prop("checked",true);
        $('textarea[name="other_specification"]').val(contractdetail.other_specification);
        $('input[type=text][name="gearless_quantity"]').val(contractdetail.gearless_quantity);

 

</script>


@endpush
