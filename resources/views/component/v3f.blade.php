<div class="row">
    <label class="col-sm-3 control-label">No of Quantity: <sup class="text-primary">*</sup></label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="number" id="" name="no_of_qty" spellcheck="false" data-parsley-required="true">
            <label class="md-control-label"></label>
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-3 control-label" for="">Type of machine <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" value="Geared" type="radio" name="type_of_machine">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Geared</span>
        </label>
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" value="Gearless" type="radio" name="type_of_machine">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Gearless</span>
        </label>
    </div>
</div>
<div class="row">
    <label class="col-sm-3 control-label" for="">Duplex System <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" value="Yes" type="radio" name="duplex_system">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Yes</span>
        </label>
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" value="No" type="radio" name="duplex_system">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">No</span>
        </label>
    </div>
</div>
<div class="row">
    <label class="col-sm-3 control-label" for="no_of_floor_v3f">No. of Floor <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="no_of_floor_v3f" name="no_of_floor" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
    <label class="col-sm-2 control-label" for="indications_v3f">&amp; its Indications:</label>
    <div class="col-sm-4">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="indications_v3f" name="indications" spellcheck="false">
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

@component('component.sub-component.door-mode')

@endcomponent

<div class="row">
    <label class="col-sm-3 control-label" for="">Collective Mode <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="DN Collective" type="radio" name="collective_mode">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">DN Collective</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Collective Selective" type="radio" name="collective_mode">
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
            <input class="custom-control-input" value="5" type="radio" name="motor_hp">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">5 HP</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="7.5" type="radio" name="motor_hp">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">7.5 HP</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="10" type="radio" name="motor_hp">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">10 HP</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="15"  type="radio" name="motor_hp">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">15 HP</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="20" type="radio" name="motor_hp">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">20 HP</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="25" type="radio" name="motor_hp">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">25 HP</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input"  value="30" type="radio" name="motor_hp">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">30 HP</span>
        </label>
    </div>
</div>
<div class="row">
    <label class="col-sm-3 control-label" for="">Output contractor Require <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" value="Yes" name="output_contractor">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Yes</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" value="No" name="output_contractor">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">No</span>
        </label>
    </div>
</div>
<div class="row">
    <label class="col-sm-3 control-label" for="brake_voltage_v3f">Motor Brake Voltage <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="brake_voltage_v3f" name="motor_brake_voltage" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
    <label class="col-sm-2 control-label" for="rcam_voltage_v3f">R-CAM Voltage <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-4">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="rcam_voltage_v3f" name="r_cam_voltage" spellcheck="false">
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
            <input class="custom-control-input"value="No" type="radio" name="rc_circuit">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">No</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">COP & LOP Display Voltage <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" value="12V DC" name="display_voltage">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">12V DC</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" value="24V DC" name="display_voltage">
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

@component('component.sub-component.drive-details')

@endcomponent

<!-- Radio To Checkbox -->
<div class="row">
    <label class="col-sm-3 control-label other_accessory" for=""> Other Accessories :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id = "line_chock" type="checkbox" value="Line Choke" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Line Choke</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id = "limit_switch" type="checkbox" value="Limit Switch" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Limit Switch</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id = "no_reed" value="NO Reed" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">NO Reed</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id = "nc_reed" value="NC Reed" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">NC Reed</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id="load_sensor" value="Load Sensor" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Load Sensor</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id="accessory_ups_v3f" value="UPS" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">UPS</span>
        </label>
    </div>
</div>
<div class="row">
	<div class="col-sm-offset-3 col-sm-9">
		<div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="line_choke_qty" name="line_choke_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    	</div>
    	<div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="limit_switch_qty" name="limit_swith_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    	</div>
    	<div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="no_reed_qty" name="no_reed_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    	</div>
    	<div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="nc_reed_qty" name="nc_reed_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    	</div>
    	<div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="load_sensor_qty" name="load_sensor_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    	</div>
    	<div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="ups_qty" name="ups_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    	</div>
	</div>
</div>
<div class=" accessory_ups_v3f_div" style="display: none;">
    <div class="row">
        <label class="col-sm-3 control-label" for="">UPS :</label>
        <div class="col-sm-9">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="2.5 KVA" name="accessories_ups">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">2.5 KVA</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" value="2 KVA" type="radio" value="Limit Switch" name="accessories_ups">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">2 KVA</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="1.5 KVA" name="accessories_ups">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">1.5 KVA</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" value="900 VA" type="radio" name="accessories_ups">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">900 VA</span>
            </label>
        </div>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="other_specification_v3f">If any other specification require write here :</label>
    <div class="col-sm-9">
        <div class="md-form-group">
            <textarea class="md-form-control" id="other_specification_v3f" rows="3" name="other_specification"></textarea>
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
@push('page-script')

<script type="text/javascript">
    // Other Accessories Battery
    $("#accessory_ups_v3f").click(function() {
        $(".accessory_ups_v3f_div").toggle();
        if($(this).is(':checked'))
        {
        	$('#ups_qty').show();
        }
        else
        {
        	$('#ups_qty').hide();
        }
    });

    $('input[name="other_accessories[]"]').change(function(e){
    	switch($(this).attr('id'))
    	{
    		case 'line_chock':
    			if($('#line_chock').is(':checked'))
    			{
    				$('#line_choke_qty').show();
    			}
    			else
    			{
    				$('#line_choke_qty').hide();
    			}
    			break;
    		case 'limit_switch':
    			if($('#limit_switch').is(':checked'))
    			{
    				$('#limit_switch_qty').show();
    			}
    			else
    			{
    				$('#limit_switch_qty').hide();
    			}
    			break;
    		case 'no_reed':
    			if($('#no_reed').is(':checked'))
    			{
    				$('#no_reed_qty').show();
    			}
    			else
    			{
    				$('#no_reed_qty').hide();
    			}
    			break;
    		case 'nc_reed':
    			if($('#nc_reed').is(':checked'))
    			{
    				$('#nc_reed_qty').show();
    			}
    			else
    			{
    				$('#nc_reed_qty').hide();
    			}
    			break;
    		case 'load_sensor':
    			if($('#load_sensor').is(':checked'))
    			{
    				$('#load_sensor_qty').show();
    			}
    			else
    			{
    				$('#load_sensor_qty').hide();
    			}
    			break;				

    	}
    })
 
    //if moto_ hp selected then drive details hp >= motor_hp
    $('input[type=radio][name="motor_hp"]').change(function(){
    	var value = parseFloat($(this).val()).toFixed(1);

    	// $('input[name="ics_drive"]').filter(function(){
    		
    	// 	if(parseFloat($(this).val()).toFixed(1) < value){
    	// 		console.log(value+'-'+$(this).val());
    	// 		return true;

    	// 	}

    	// }).prop("disabled",true);

    	// $('input[name="ics_drive"]').each(function(i,v){
    	// 	var chk_value = parseFloat($(this).val()).toFixed(1); 
    	// 	if (chk_value < value){
    	// 		console.log(chk_value < value);
    	// 		$(this).prop("disabled",true);

    	// 	}
    	})

</script>

@endpush