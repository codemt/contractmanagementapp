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
        <center><h3 class="text-center"><u>Control Specification</u></h3></center>
        <div class="row">
                    <label class="col-sm-3 col-sm-offset-1 control-label">Control Type: </label>
                   <div class="col-sm-3">
                    <div class="md-form-group">
                        <label class="control-label">{{$contract->detail->control_type}}</label>
                    </div>
                </div>
            </div>
        <div class="row">
            <label class="col-sm-3 col-sm-offset-1  control-label">No of Quantity: <sup class="text-primary">*</sup></label>
            <div class="col-sm-3">
                <div class="md-form-group">
                    <input class="md-form-control" type="number" id="" name="no_of_qty" spellcheck="false"data-parsley-required="true">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                    <label class="col-sm-3 control-label" for="">Type <sup class="text-primary">*</sup> :</label>
                    <div class="col-sm-9">
                        <label class="custom-control custom-control-primary custom-radio">
                            <input type="hidden" name="control_type" value="">
                            <input class="custom-control-input" value="INVT" type="radio" name="integrated_type" data-parsley-multiple required data-parsley-errors-container="#type_error">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">INVT</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" value="Monarch" type="radio" name="integrated_type">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">Monarch</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" value="Monarch Open Loop" type="radio" name="integrated_type" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">Monarch Open Loop</span>
                        </label>
                        <span id="type_error" class="text-primary"></span>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-3 control-label" for="no_of_floor">Communication Mode <sup class="text-primary">*</sup> :</label>
                    <div class="col-sm-9">
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" value="Serial" type="radio" name="communication_mode" data-parsley-multiple required data-parsley-errors-container="#comm_mode_error">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">Serial</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-checkbox">
                            <input class="custom-control-input" value="Parallel" type="radio" name="communication_mode">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">Parallel</span>
                        </label>
                        <span id="comm_mode_error" class="text-primary"></span>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-3 control-label" for="no_of_floor_intgrated">No. of Floor <sup class="text-primary">*</sup> :</label>
                    <div class="col-sm-3">
                        <div class="md-form-group">
                            <input class="md-form-control" type="text" id="no_of_floor_intgrated" name="no_of_floor" spellcheck="false" data-parsley-required="true">
                            <label class="md-control-label"></label>
                        </div>
                    </div>
                    <label class="col-sm-2 control-label" for="indications_intgrated">&amp; its Indications:</label>
                    <div class="col-sm-4">
                        <div class="md-form-group">
                            <input class="md-form-control" type="text" id="indications_intgrated" name="indications" spellcheck="false" data-parsley-required="true">
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
                <label class="col-sm-3 control-label" for="">Collective Mode <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" value="DN Collective" name="collective_mode" data-parsley-multiple required data-parsley-errors-container="#collective_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">DN Collective</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" type="radio" value="Collective Selective" name="collective_mode">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Collective Selective</span>
                    </label>
                    <span id="collective_error" class="text-primary"></span>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 control-label" for="">Speed of Lift <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="0.3" type="radio" name="speed_of_lift" data-parsley-multiple required data-parsley-errors-container="#speed_of_lift_error">
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
                    <span id="speed_of_lift_error" class="text-primary"></span>
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
                        <input class="custom-control-input" value="10.00"  type="radio" name="motor_hp">
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
                    <span id="motorhp_error" class="text-primary"></span>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 control-label" for="">Motor Type <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="Geared" type="radio" name="motor_type" data-parsley-multiple required data-parsley-errors-container="#motor_type_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Geared</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="Gearless" type="radio" name="motor_type">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Gearless</span>
                    </label>
                    <span id="text-primary" class="text-primary"></span>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 control-label" for="brake_voltage_intgrated">Motor Brake Voltage <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-9">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="brake_voltage_intgrated" name="motor_brake_voltage" spellcheck="false" data-parsley-required="true">
                        <label class="md-control-label"></label>
                    </div>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 control-label" for=""> Encoder Details <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="ECN 1387" type="radio" name="encoder_details" data-parsley-multiple required data-parsley-errors-container="#encoder_error">
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
                    <span id="encoder_error" class="text-primary"></span>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 control-label" for=""> Inbulid UPS type ARD System <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" value="Yes" type="radio" name="ups_type_ard" data-parsley-multiple required data-parsley-errors-container="#ups_type_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Yes</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" value="No" type="radio" name="ups_type_ard">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">No</span>
                    </label>
                    <span id="ups_type_error" class="text-primary"></span>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 control-label" for="">COP & LOP Display Voltage :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" value="12V DC" type="radio" name="display_voltage" data-parsley-multiple required data-parsley-errors-container="#display_vlt_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">12V DC</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" value="24V DC" type="radio" name="display_voltage">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">24V DC</span>
                    </label>
                    <span id="display_vlt_error" class="text-primary"></span>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 control-label" for="">Display Type <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" type="radio" value="7 Segment" name="display_type" data-parsley-multiple required data-parsley-errors-container="#display_type_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">7 Segment</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" type="radio" value="Dot Matrix" name="display_type">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Dot Matrix</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-radio">
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
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" value="Yes" type="radio" name="voice_system" data-parsley-multiple required data-parsley-errors-container="#voice_announce_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Yes</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" value="No" type="radio" name="voice_system">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">No</span>
                    </label>
                    <span id="voice_announce_error" class="text-primary"></span>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 control-label" for=""> Other Features :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-checkbox">
                        <input class="custom-control-input" value="Attendance" type="checkbox" name="other_features[]" data-parsley-multiple required data-parsley-errors-container="#other_fetures_error">
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
                    <span id="other_fetures_error" class="text-primary"></span>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 control-label" for="integrity_drive_details">Drive Details <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" type="radio" name="drive_details" value="Take from icon control system" data-parsley-multiple required data-parsley-errors-container="#drive_error">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Take from icon control system</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" type="radio" name="drive_details" value="Supplied By Us">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Supplied By Us</span>
                    </label>
                    <span id="drive_error" class="text-primary"></span>
                </div>
            </div>
            <div class="row">
                <div data-type="integrity_drive_details_by_ics">
                    <label class="col-sm-3 control-label" for="Monarch"></label>
                    <div class="col-sm-9">
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="monarch" value="Monarch-Parallel" data-parsley-multiple required data-parsley-errors-container="#monarch_error">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label"> Monarch Parallel</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="monarch" value="Monarch-Serial">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label"> Monarch Serial</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="monarch" value="Monarch-open-loop">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label"> Monarch Open Loop</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="monarch" value="invt-ec-160">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">INVT EC-160</span>
                        </label>
                        <span id="monarch_error" class="text-primary"></span>
                    </div>
                </div>

                <div data-type="monarch_details_by_ics">
                    <label class="col-sm-3 control-label" for=""></label>
                    <div class="col-sm-9">
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="monrch_drive_hp" value="5 HP" data-parsley-multiple required data-parsley-errors-container="#monrch_drive_error">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">5 HP</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="monrch_drive_hp" value="7.5 HP">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">7.5 HP</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="monrch_drive_hp" value="10 HP">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label"> 10 HP</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="monrch_drive_hp" value="20 HP">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label"> 20 HP</span>
                        </label>
                        <span id="monrch_drive_error" class="text-primary"></span>
                    </div>
                </div>    

                <div data-type="integrity_drive_details_by_us">
                    <label class="col-sm-3 control-label" for="drive_make_by">Drive Make By:</label>
                    <div class="col-sm-9">
                        <div class="md-form-group">
                            <input class="md-form-control" type="text" id="drive_make_by" name="drive_make_by" spellcheck="false" data-parsley-required="true">
                            <label class="md-control-label"></label>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <label class="col-sm-3 control-label" for="drive_modle">Drive Modle:</label>
                    <div class="col-sm-9">
                        <div class="md-form-group">
                            <input class="md-form-control" type="text" id="drive_modle" name="drive_modle" spellcheck="false" data-parsley-required="true">
                            <label class="md-control-label"></label>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <label class="col-sm-3 control-label" for="drive_HP">Drive HP:</label>
                    <div class="col-sm-9">
                        <div class="md-form-group">
                            <input class="md-form-control" type="text" id="drive_HP" name="drive_HP" spellcheck="false" data-parsley-required="true">
                            <label class="md-control-label"></label>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <label class="col-sm-3 control-label" for="DBR_rating">DBR Rating:</label>
                    <div class="col-sm-9">
                        <div class="md-form-group">
                            <input class="md-form-control" type="text" id="DBR_rating" name="DBR_rating" spellcheck="false" data-parsley-required="true">
                            <label class="md-control-label"></label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <label class="col-sm-3 control-label" for="pg_card_details_intgrated"> PG Card Details <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-9">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="pg_card_details_intgrated" name="pg_card_details" data-parsley-required="true">
                        <label class="md-control-label"></label>
                    </div>
                </div>
            </div>

           <div class="row">
    <label class="col-sm-3 control-label" for=""> Other Accessories :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id="line_chock_integrated" type="checkbox" value="Line Choke" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Line Choke</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id="limit_switch_integrated" type="checkbox" value="Limit Switch" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Limit Switch</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="NO Reed" id="no_reed_integrated" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">NO Reed</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="NC Reed" id="nc_reed_integrated" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">NC Reed</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id="load_sensor_integrated" value="Load Sensor" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Load Sensor</span>
        </label>
    </div>
</div>

<div class="row">
    <div class="col-sm-offset-3 col-sm-9">
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="line_choke_qty_integrated" name="line_choke_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="limit_switch_qty_integrated" name="limit_swith_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="no_reed_qty_integrated" name="no_reed_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="nc_reed_qty_integrated" name="nc_reed_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="load_sensor_qty_integrated" name="load_sensor_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="ups_qty_integrated" name="ups_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
    </div>
</div>
            <div class="accessory_battery_div_intgrated">
                <div class="row">
                    <label class="col-sm-3 control-label" for="">Battery :</label>
                    <div class="col-sm-9">
                        <label class="custom-control custom-control-primary custom-checkbox">
                            <input class="custom-control-input" value="By Icon" type="radio" name="integrated_battery" data-parsley-multiple required data-parsley-errors-container="#battery_error">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">By Icon</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-checkbox">
                            <input class="custom-control-input"value="By Client" type="radio" name="integrated_battery">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">By Client</span>
                        </label>
                        <span id="battery_error" class="text-primary"></span>
                    </div>
                </div>
            </div>
            <div class="div_integrated_ups">
                <div class="row">
                    <label class="col-sm-3 control-label" for="">UPS :</label>
                    <div class="col-sm-9">
                        <label class="custom-control custom-control-primary custom-checkbox">
                            <input class="custom-control-input" value="By Icon" type="radio" name="integrated_ups" data-parsley-multiple required data-parsley-errors-container="#ups_error">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">By Icon</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-checkbox">
                            <input class="custom-control-input"value="By Client" type="radio" name="integrated_ups">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">By Client</span>
                        </label>
                        <span id="ups_error" class="text-primary"></span>
                    </div>
                </div>
            </div>

            <div class=" accessory_ups_div_intgrated" style="display:none">
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" value="Line Choke" name="ups_vlt" data-parsley-multiple required data-parsley-errors-container="#ups_vlt_error">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">2.5 KVA</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" value="Limit Switch" name="ups_vlt">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">2 KVA</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="ups_vlt">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">1.5 KVA</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                            <input class="custom-control-input" type="radio" name="ups_vlt">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label">900 VA</span>
                        </label>
                        <span id="ups_vlt_error" class="text-primary"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 control-label" for="other_specification_intgrated">Other Specification:</label>
                <div class="col-sm-9">
                    <div class="md-form-group">
                        <textarea class="md-form-control" id="other_specification_intgrated" rows="3" name="other_specification"></textarea>
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
            $('input[type=radio][name=integrity_drive_details]').change(function() {
             if (this.value == 'Supplied By Us') {
                $('[data-type=integrity_drive_details_by_ics]').hide();
                $('[data-type=integrity_drive_details_by_us]').show();
                $('[data-type=monarch_details_by_ics]').hide();
                $('input[type=radio][name=monarch]').prop( "checked", false );
            }
            else {
                $('[data-type=integrity_drive_details_by_us]').hide(); 
                $('[data-type=integrity_drive_details_by_ics]').show();
            }
        });

            $('input[type=radio][name=monarch]').click(function() {
              $('[data-type=monarch_details_by_ics]').show();
          });
     // Other Accessories Battery
     $("#accessory_ups_v3f_ard").click(function() {
        $(".accessory_ups_v3f_ard_div").toggle();
    });

     $('[data-type="drive_details_by_ics"] input[type=radio]').change(function(){
        $('[data-type="drive_details_by_ics"] input[type=radio]').attr('name','ics_drive'); 
        var val=$(this).attr('data-name');
        $(this).attr('name',val);
        $(this).prop("checked",true);
        $('input[type=radio][name="ics_drive"]').prop("checked",false);
        
    });

        // ARD Controller
        $('input[type=radio][name=controller]').change(function() {
            if (this.value == 'Other Controller') {
                $('[data-type=control_details_by_us]').show('slow');
                $('[data-type=control_details_by_us] input').attr("data-parsley-required","true");
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
                $('[data-type=vertical_door] input').attr("data-parsley-required","true");
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
        
        $('input[type=radio][name=drive_details]').change(function() {
         if (this.value == 'Supplied By Us') {
            $('[data-type=integrity_drive_details_by_ics]').hide();
            $('[data-type=integrity_drive_details_by_us]').show();
            $('[data-type=integrity_drive_details_by_us] input').attr("data-parsley-required","true");
            $('[data-type=monarch_details_by_ics]').hide();
            $('input[type=radio][name=monarch]').prop( "checked", false );
        }
        else {
            $('[data-type=integrity_drive_details_by_us]').hide(); 
            $('[data-type=integrity_drive_details_by_ics]').show();
        }
    });
        $('input[name="integrated_ups"]').change(function() {
            if($(this).val() == "By Icon")
            {
                $(".accessory_ups_div_intgrated").show();
            }
            else
            {
                $(".accessory_ups_div_intgrated").hide();
            }
            
        });

        $('input[type=radio][name=monarch]').click(function() {
          $('[data-type=monarch_details_by_ics]').show();
      });
         $('input[name="other_accessories[]"]').change(function(e){
        switch($(this).attr('id'))
        {
            case 'line_chock_integrated':
                if($('#line_chock_integrated').is(':checked'))
                {
                    $('#line_choke_qty_integrated').show();
                }
                else
                {
                    $('#line_choke_qty_integrated').hide();
                }
                break;
            case 'limit_switch_integrated':
                if($('#limit_switch_integrated').is(':checked'))
                {
                    $('#limit_switch_qty_integrated').show();
                }
                else
                {
                    $('#limit_switch_qty_integrated').hide();
                }
                break;
            case 'no_reed_integrated':
                if($('#no_reed_integrated').is(':checked'))
                {
                    $('#no_reed_qty_integrated').show();
                }
                else
                {
                    $('#no_reed_qty_integrated').hide();
                }
                break;
            case 'nc_reed_integrated':
                if($('#nc_reed_integrated').is(':checked'))
                {
                    $('#nc_reed_qty_integrated').show();
                }
                else
                {
                    $('#nc_reed_qty_integrated').hide();
                }
                break;
            case 'load_sensor_integrated':
                if($('#load_sensor_integrated').is(':checked'))
                {
                    $('#load_sensor_qty_integrated').show();
                }
                else
                {
                    $('#load_sensor_qty_integrated').hide();
                }
                break;              

        }
    })

    </script>

    </script>
    <script type="text/javascript">

        var contractdetail = {!!json_encode($contract_details)!!};
        console.log(contractdetail.duplex_system);
        $('input[type=radio][name="duplex_system"][value="'+contractdetail.duplex_system+'"]').prop("checked",true);
        $('input[type=radio][name="duplex_system"][value="'+contractdetail.duplex_system+'"]').prop("checked",true);
        $('input[type=radio][name="communication_mode"][value="'+contractdetail.communication_mode+'"]').prop("checked",true);
        $('input[type=radio][name="integrated_type"][value="'+contractdetail.integrated_type+'"]').prop("checked",true);
        $('input[type=radio][name="motor_type"][value="'+contractdetail.motor_type+'"]').prop("checked",true);
        $('input[type=radio][name="encoder_details"][value="'+contractdetail.encoder_details+'"]').prop("checked",true);
        $('input[type=radio][name="ups_type_ard"][value="'+contractdetail.ups_type_ard+'"]').prop("checked",true);



        $('input[type=text][name="no_of_floor"]').val( contractdetail.no_of_floor );
        $('input[type=text][name="indications"]').val( contractdetail.indications );
        $('input[type=radio][name="reed_type"][value="'+contractdetail.reed_type+'"]').prop("checked",true);
        
        //door mode data
        var  door_mode = JSON.parse(contractdetail.door_mode);
        $('input[type=radio][name="door_mode"][value="'+door_mode.door_mode+'"]').prop("checked",true);
        if(door_mode.door_mode != "Auto Door")
        {
            $('label[for=rcam_voltage_ss]').show();
            $('input[type=text][name="r_cam_voltage"]').show().val(contractdetail.r_cam_voltage);
            $('[data-type=auto_door]').hide();
            $('[data-type=vertical_door]').hide();
            $('[data-type=door_drive]').hide();
            $('input[type=radio][name=door_mode_auto_type]').prop( "checked", false );
            $('input[type=radio][name=door_drive]').prop( "checked", false );
        }
        else
        {
            $('input[name="door_mode_auto_type"]').attr("data-parsley-required","true");
            $('label[for=rcam_voltage_ss]').hide();
            $('input[type=text][name="r_cam_voltage"]').hide();
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
        $('input[type=hidden][name="control_type"]').val( contractdetail.control_type);
        $('input[type=number][name="no_of_qty"]').val(contractdetail.no_of_quantity);

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
        if(other_features != null)
        {
            for(var i=0; i<other_features.length;i++)
            {
             $('input[type=checkbox][name="other_features[]"][value="'+other_features[i]+'"]').prop("checked",true);
         }
     }
     
     
            //drive details
            var  drive_details = JSON.parse(contractdetail.drive_details);
            $('input[type=radio][name="drive_details"][value="'+drive_details.drive_details+'"]').prop("checked",true);
            if(drive_details.drive_details == "Take from icon control system")
            {
               $('[data-type=integrity_drive_details_by_us]').hide(); 
               $('[data-type=integrity_drive_details_by_ics]').show();
           }
           else
           {
            $('[data-type=integrity_drive_details_by_ics]').hide();
            $('[data-type=integrity_drive_details_by_us]').show();
            $('[data-type=monarch_details_by_ics]').hide();
            $('input[type=radio][name=monarch]').prop( "checked", false );
        }
        var keys = ['INVT_GD300', 'INOVANCE_MD380','DELTA_E_ SERIES','FUJI_ACE', 'YASKAWA_V1000','INVERTEK_GEARED','INVT_GD300L','DELTA_ED_SERIES','YASKAWA_L1000','INVERTEK_GEARLESS'];
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
              $('input[type=radio][data-name="'+keys[val]+'"][name="ics_drive"][value="'+drive_details[drive_details_keys[i]]+'"]').prop("checked",true); 
              break;
          }
      } 
      $('input[type=radio][name="monarch"][value="'+drive_details.monarch+'"]').prop("checked",true);
      $('input[type=radio][name="monrch_drive_hp"][value="'+drive_details.monrch_drive_hp+'"]').prop("checked",true);
      $('input[type=text][name="drive_make_by"]').val(drive_details.drive_make_by );
      $('input[type=text][name="drive_modle"]').val(drive_details.drive_modle );
      $('input[type=text][name="drive_HP"]').val(drive_details.drive_HP);
      $('input[type=text][name="DBR_rating"]').val(drive_details.DBR_rating);
      
      $('input[type="text"][name="pg_card_details"]').val(contractdetail.pg_card_details);
          //other accessories
          var  other_accessories = JSON.parse(contractdetail.other_accessories);
          if(other_accessories)
          {
            for(var i=0; i<other_accessories.length;i++)
            {
                $('input[type=checkbox][name="other_accessories[]"][value="'+other_accessories[i]+'"]').prop("checked",true);
            }
        }

          //integrated battery and ups
          $('input[type=radio][name="integrated_battery"][value="'+contractdetail.integrated_battery+'"]').prop('checked',true);
          let integrated_ups = contractdetail.integrated_ups.split('~');
          console.log(integrated_ups);
          $('input[type=radio][name="integrated_ups"][value="'+integrated_ups[0]+'"]').prop("checked",true);
          if(integrated_ups[1] != "")
          {

            $('input[type=radio][name="ups_vlt"][value="'+integrated_ups[1]+'"]').prop("checked",true);
            $(".accessory_ups_div_intgrated").show();
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
            // else
            // {
            //     $('#ContractForm  :input:hidden').not('input[type="hidden"]').attr({"disabled":false,"data-parsley-required":"true"}); 
            //     console.log('invalid');
            // }

            $('#ContractForm').submit();
                
        })

    </script>


    @endpush

