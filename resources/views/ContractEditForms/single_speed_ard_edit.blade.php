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
			<input class="md-form-control" id="contact_person" type="text" name="contact_person" spellcheck="false" value="{{$contract->contact_person}}" data-parsley-required="true">
			<label class="md-control-label"></label>
		</div>
	</div>

	<label class="col-sm-2 control-label" for="mobile_number">
		Mobile Number<sup class="text-primary">*</sup>
	</label>
	<div class="col-sm-4">
		<div class="md-form-group md-label-floating">
			<input class="md-form-control" id="mobile_number" type="text" data-parsley-required="true" name="mobile_number" spellcheck="false" value="{{$contract->mobile_number}}">
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
                    <label class="col-sm-3 control-label">Control Type: </label>
                   <div class="col-sm-3">
                    <div class="md-form-group">
                        <label class="control-label">{{$contract->detail->control_type}}</label>
                    </div>
                </div>
	<div class="row">
        <label class="col-sm-3 col-sm-offset-1  control-label">No of Quantity: <sup class="text-primary">*</sup></label>
        <div class="col-sm-3">
            <div class="md-form-group">
                <input class="md-form-control" type="number" id="" name="no_of_qty" spellcheck="false">
                <label class="md-control-label"></label>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
		<div class="row">
				<label class="col-sm-3 control-label" for="no_of_floor">No. of Floor <sup class="text-primary">*</sup> :</label>
				<div class="col-sm-3">
					<div class="md-form-group">
						<input type="hidden" name="control_type" value="">
						<input class="md-form-control" type="text" id="no_of_floor" name="no_of_floor" spellcheck="false" data-parsley-required="true">
						<label class="md-control-label"></label>
					</div>
				</div>
				<label class="col-sm-2 control-label" for="indications">&amp; its Indications:</label>
				<div class="col-sm-4">
					<div class="md-form-group">
						<input class="md-form-control" type="text" id="indications" name="indications" spellcheck="false" data-parsley-required="true">
						<label class="md-control-label"></label>
					</div>
				</div>
			</div>

			<div class="row">
				<label class="col-sm-3 control-label" for="">Reed Type <sup class="text-primary">*</sup> :</label>
				<div class="col-sm-9">
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="radio" name="reed_type" value="Car Top Reed" data-parsley-required="true">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label"> Car Top Reed</span>
					</label>
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="radio" name="reed_type" value="Floor Reed">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">Floor Reed</span>
					</label>
				</div>
			</div>

			<div class="row">
				<label class="col-sm-3 control-label" for="">Door Mode <sup class="text-primary">*</sup> :</label>
				<div class="col-sm-9">
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="radio" name="door_mode" value="Manual Door" data-parsley-required="true">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">Manual Door</span>
					</label>
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="radio" name="door_mode" value="Auto Door">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">Auto Door</span>
					</label>
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="radio" name="door_mode" value="Semi Auto" data-parsley-required="true">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">Semi Auto Door</span>
					</label>
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
							<input class="custom-control-input" type="radio" name="door_mode_auto_type" value="Otis Type (DO, DC)">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-label">Otis Type (DO, DC)</span>
						</label>
						<span id="auto_door_error" class="text-primary"><br/></span>      
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
							<input class="md-form-control" type="text" id="no_of_landing_door" name="no_of_landing_door"  data-parsley-required="true">
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
							<input class="custom-control-input" type="radio" name="yaskawa" value="2Hp">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-label">2Hp</span>
						</label>
						<label class="custom-control custom-control-primary custom-checkbox">
							<input class="custom-control-input" type="radio" name="yaskawa" value="3Hp">
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
						<span id="innov_error" class="text-primary"><br></span>
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
						<input class="custom-control-input" type="radio" name="collective_mode" value="DN Collective">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">DN Collective</span>
					</label>
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="radio" name="collective_mode" value="Collective Selective">
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
						<input class="custom-control-input" type="radio" name="motor_hp" value="5.00" data-parsley-required="true">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">5 HP</span>
					</label>
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="radio" name="motor_hp" value="7.50">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">7.5 HP</span>
					</label>
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="radio" name="motor_hp" value="10.00">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">10 HP</span>
					</label>
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="radio" name="motor_hp" value="15.00">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">15 HP</span>
					</label>
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="radio" name="motor_hp" value="20.00">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">20 HP</span>
					</label>
				</div>
			</div>

			<div class="row">
				<label class="col-sm-2 control-label" for="motor_current_v3f_ard">Motor Current <sup class="text-primary">*</sup> :</label>
				<div class="col-sm-3 col-sm-offset-1">
					<div class="md-form-group">
						<input class="md-form-control" type="text" id="motor_current_v3f_ard" name="motor_current" data-parsley-required="true">
						<label class="md-control-label"></label>
					</div>     
				</div>
				<label class="col-sm-1 control-label">Amp</label>
				<label class="col-sm-2 control-label" for="motor_current_v3f_ard">Motor KW <sup class="text-primary">*</sup> :</label>
				<div class="col-sm-3">
					<div class="md-form-group">
						<input class="md-form-control" type="text" id="motor_kw" name="motor_kw" data-parsley-required="true">
						<label class="md-control-label"></label>
					</div>
				</div>
			</div>

			<div class="row">
				<label class="col-sm-3 control-label" for="">Choose Battery <sup class="text-primary">*</sup> :</label>
				<div class="col-sm-9">
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" value="12V 7AH" type="radio" name="choose_battery" data-parsley-required="true">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">12V 7AH</span>
					</label>
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="radio" value="12V 12AH" name="choose_battery">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">12V 12AH</span>
					</label>
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" value="12V 17AH" type="radio" name="choose_battery">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">12V 17AH</span>
					</label>
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" value="Purchase Later" type="radio" name="choose_battery">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">Purchase Later</span>
					</label>
				</div>
			</div>

			<div class="row">
				<label class="col-sm-3 control-label" for="brake_voltage">Motor Brake Voltage <sup class="text-primary">*</sup> :</label>
				<div class="col-sm-3">
					<div class="md-form-group">
						<input class="md-form-control" type="text" id="brake_voltage" name="motor_brake_voltage" spellcheck="false" data-parsley-required="true">
						<label class="md-control-label"></label>
					</div>
				</div>
				<label class="col-sm-2 control-label" for="rcam_voltage">R-CAM Voltage :</label>
				<div class="col-sm-4">
					<div class="md-form-group">
						<input class="md-form-control" type="text" id="rcam_voltage" name="r_cam_voltage" spellcheck="false" data-parsley-required="true">
						<label class="md-control-label"></label>
					</div>
				</div>
			</div>

			<div class="row">
				<label class="col-sm-3 control-label" for="">Resister-Capacitor circuit require :</label>
				<div class="col-sm-9">
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" value="Yes" type="radio" name="rc_circuit" data-parsley-required="true">
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
						<input class="custom-control-input" type="radio" name="display_voltage" value="12V DC" data-parsley-required="true">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">12V DC</span>
					</label>
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="radio" name="display_voltage" value="24V DC">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">24V DC</span>
					</label>
				</div>
			</div>

			<div class="row">
				<label class="col-sm-3 control-label" for="">Display Type <sup class="text-primary">*</sup> :</label>
				<div class="col-sm-9">
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="radio" value="7 Segment" name="display_type" data-parsley-required="true">
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
						<input class="custom-control-input" type="radio" name="voice_system" value="Yes" data-parsley-required="true">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">Yes</span>
					</label>
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="radio" name="voice_system" value="No">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">No</span>
					</label>
				</div>
			</div>

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
					
					<span id="other_features_error" class="text-primary"><br/></span>
				</div>
			</div>

<div class="row">
    <label class="col-sm-3 control-label other_accessory" for=""> Other Accessories :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id="limit_switch_ss_ard" type="checkbox" value="Limit Switch" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Limit Switch</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="NO Reed" type="checkbox" name="other_accessories[]"  id="no_reed_ss_ard">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">NO Reed</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="NC Reed" type="checkbox" name="other_accessories[]" id="nc_reed_ss_ard">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">NC Reed</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Load Sensor" type="checkbox" name="other_accessories[]" id="load_sensor_ss_ard">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Load Sensor</span>
        </label>
    </div>
</div>

<div class="row">
    <div class="col-sm-offset-3 col-sm-9">
        
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="limit_switch_qty_ss_ard" name="limit_swith_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="no_reed_qty_ss_ard" name="no_reed_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="nc_reed_qty_ss_ard" name="nc_reed_qty_ss_ard" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="load_sensor_qty_ss_ard" name="load_sensor_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>

    </div>
</div>
			<div class="row">
				<label class="col-sm-3 control-label" for="other_specification">Other Specification:</label>
				<div class="col-sm-9">
					<div class="md-form-group">
						<textarea class="md-form-control" id="other_specification" rows="3" name="other_specification"></textarea>
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
 $("#accessory_ups_ss_ard").click(function() {
 	$(".accessory_ups_ss_ard_div").toggle();
 });

     $('input[name="other_accessories[]"]').change(function(e){
        switch($(this).attr('id'))
        {
            case 'limit_switch_ss_ard':
                if($('#limit_switch_ss_ard').is(':checked'))
                {
                    $('#limit_switch_qty_ss_ard').show();
                }
                else
                {
                    $('#limit_switch_qty_ss_ard').hide();
                }
                break;
            case 'no_reed_ss_ard':
                if($('#no_reed_ss_ard').is(':checked'))
                {
                    $('#no_reed_qty_ss_ard').show();
                }
                else
                {
                    $('#no_reed_qty_ss_ard').hide();
                }
                break;
            case 'nc_reed_ss_ard':
                if($('#nc_reed_ss_ard').is(':checked'))
                {
                    $('#nc_reed_qty_ss_ard').show();
                }
                else
                {
                    $('#nc_reed_qty_ss_ard').hide();
                }
                break;
            case 'load_sensor_ss_ard':
                if($('#load_sensor_ss_ard').is(':checked'))
                {
                    $('#load_sensor_qty_ss_ard').show();
                }
                else
                {
                    $('#load_sensor_qty_ss_ard').hide();
                }
                break;              

        }
    })

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
</script>

<script type="text/javascript">

	var contractdetail = {!!json_encode($contract_details)!!};

	$('input[type=radio][name="duplex_system"][value="'+contractdetail.duplex_system+'"]').prop("checked",true);
	console.log(contractdetail.motor_brake_voltage);
	$('input[type=text][name="no_of_floor"]').val( contractdetail.no_of_floor );
	$('input[type=text][name="indications"]').val( contractdetail.indications );
	$('input[type=text][name="motor_brake_voltage"]').val( contractdetail.motor_brake_voltage );
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


      $('input[type=radio][name="collective_mode"][value="'+contractdetail.collective_mode+'"]').prop("checked",true);
      $('input[type=radio][name="speed_of_lift"][value="'+contractdetail.speed_of_lift+'"]').prop("checked",true);
      $('input[type=radio][name="motor_hp"][value="'+contractdetail.motor_hp+'"]').prop("checked",true);
      $('input[type=text][name="motor_current"]').val( contractdetail.motor_current );
      $('input[type=text][name="motor_kw"]').val( contractdetail.motor_kw);
      $('input[type=radio][name="output_contractor"][value="'+contractdetail.output_contractor +'"]').prop("checked",true);
      $('input[type=text][name="motor_brake_voltage"]').val( contractdetail.motor_brake_voltage );
      $('input[type=text][name="r_cam_voltage"]').val( contractdetail.r_cam_voltage );
      $('input[type=radio][name="rc_circuit"][value="'+contractdetail.register_capacitor_circuit+'"]').prop("checked",true);
      $('input[type=radio][name="display_voltage"][value="'+contractdetail.display_voltage+'"]').prop("checked",true);
      $('input[type=radio][name="display_type"][value="'+contractdetail.display_type+'"]').prop("checked",true);
      $('input[type=radio][name="voice_system"][value="'+contractdetail.voice_announcement_system+'"]').prop("checked",true);
      $('input[type=radio][name="choose_battery"][value="'+contractdetail.choose_battery+'"]').prop("checked",true);

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
        //  if ($('#ContractForm').parsley().validate()) {
        //  	$('#ContractForm  :input:hidden').not('input[type="hidden"]').attr({"disabled":true,"data-parsley-required":"false"});
        //     $('#ContractForm').submit();
        // }
        // $('#ContractForm  :input:hidden').not('input[type="hidden"]').attr({"disabled":false,"data-parsley-required":"true"});  
        $('#ContractForm').submit();   
    })
</script>
@endpush
