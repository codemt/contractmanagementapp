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
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Yes" type="radio" name="duplex_system">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Yes</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="No" type="radio" name="duplex_system">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">No</span>
        </label>
    </div>
</div>
<div class="row">
    <label class="col-sm-3 control-label" for="no_of_floor_v3f_ard">No. of Floor <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="no_of_floor_v3f_ard" name="no_of_floor" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
    <label class="col-sm-2 control-label" for="indications_v3f_ard">&amp; its Indications:</label>
    <div class="col-sm-4">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="indications_v3f_ard" name="indications" spellcheck="false">
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
            <input class="custom-control-input" value="15" type="radio" name="motor_hp">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">15 HP</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="20" type="radio" name="motor_hp">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">20 HP</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-2 control-label" for="motor_current_v3f_ard">Motor Current <sup class="text-primary">*</sup> :</label>
    <div class="col-xs-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="motor_current_v3f_ard" name="motor_current">
            <label class="md-control-label"></label>
        </div>
    </div>
    <label class="col-sm-2 col-xs-1 control-label">Amp</label>
     <label class="col-sm-2 control-label" for="motor_current_v3f_ard">Motor KW <sup class="text-primary">*</sup> :</label>
    <div class="col-xs-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="motor_kw" name="motor_kw">
            <label class="md-control-label"></label>
        </div>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">Choose Battery <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="12V 7AH" type="radio" name="choose_battery">
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
    <label class="col-sm-3 control-label" for="brake_voltage_v3f_ard">Motor Brake Voltage <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="brake_voltage_v3f_ard" name="motor_brake_voltage" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
    <label class="col-sm-2 control-label" for="rcam_voltage_v3f_ard">R-CAM Voltage <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-4">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="rcam_voltage_v3f_ard" name="r_cam_voltage" spellcheck="false">
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

@component('component.sub-component.drive-details')

@endcomponent

<!-- Radio To Checkbox -->
<div class="row">
    <label class="col-sm-3 control-label other_accessory" for=""> Other Accessories :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id = "line_chock_v_ard" type="checkbox" value="Line Choke" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Line Choke</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id = "limit_switch_v_ard" type="checkbox" value="Limit Switch" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Limit Switch</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id = "no_reed_v_ard" value="NO Reed" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">NO Reed</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id = "nc_reed_v_ard" value="NC Reed" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">NC Reed</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id="load_sensor_v_ard" value="Load Sensor" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Load Sensor</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" id="accessory_ups_v3f_ard" value="UPS" type="checkbox" name="other_accessories[]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">UPS</span>
        </label>
    </div>
</div>

<div class="row">
    <div class="col-sm-offset-3 col-sm-9">
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="line_choke_qty_v_ard" name="line_choke_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="limit_switch_qty_v_ard" name="limit_swith_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="no_reed_qty_v_ard" name="no_reed_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="nc_reed_qty_v_ard" name="nc_reed_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="load_sensor_qty_v_ard" name="load_sensor_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="md-form-group">
            <input class="md-form-control other_accessory_qty" type="text" id="ups_qty_v_ard" name="ups_qty" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
        </div>
    </div>
</div>

<div class="accessory_ups_v3f_ard_div" style="display: none;">
    <div class="row">
        <label class="col-sm-3 control-label" for="">UPS :</label>
        <div class="col-sm-9">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="2.5" name="accessories_ups">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">2.5 KVA</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="2" name="accessories_ups">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">2 KVA</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="1.5" name="accessories_ups">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">1.5 KVA</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="900" name="accessories_ups">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">900 VA</span>
            </label>
        </div>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="other_specification_v3f_ard">Other Specification:</label>
    <div class="col-sm-9">
        <div class="md-form-group">
            <textarea class="md-form-control" id="other_specification_v3f_ard" rows="3" name="other_specification"></textarea>
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
    $("#accessory_ups_v3f_ard").click(function() {
        $(".accessory_ups_v3f_ard_div").toggle();
                if($(this).is(':checked'))
        {
            $('#ups_qty_v_ard').show();
        }
        else
        {
            $('#ups_qty_v_ard').hide();
        }
    });

        $('input[name="other_accessories[]"]').change(function(e){
            switch($(this).attr('id'))
           {

            case 'line_chock_v_ard':
                if($('#line_chock_v_ard').is(':checked'))
                {
                    $('#line_choke_qty_v_ard').show();
                }
                else
                {
                    $('#line_choke_qty_v_ard').hide();
                }
                break;
            case 'limit_switch_v_ard':
                if($('#limit_switch_v_ard').is(':checked'))
                {
                    $('#limit_switch_qty_v_ard').show();
                }
                else
                {
                    $('#limit_switch_qty_v_ard').hide();
                }
                break;
            case 'no_reed_v_ard':
                if($('#no_reed_v_ard').is(':checked'))
                {
                    $('#no_reed_qty_v_ard').show();
                }
                else
                {
                    $('#no_reed_qt_v_ard').hide();
                }
                break;
            case 'nc_reed_v_ard':
                if($('#nc_reed_v_ard').is(':checked'))
                {
                    $('#nc_reed_qty_v_ard').show();
                }
                else
                {
                    $('#nc_reed_qty_v_ard').hide();
                }
                break;
            case 'load_sensor_v_ard':
                if($('#load_sensor_v_ard').is(':checked'))
                {
                    $('#load_sensor_qty_v_ard').show();
                }
                else
                {
                    $('#load_sensor_qty_v_ard').hide();
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

</script>

@endpush