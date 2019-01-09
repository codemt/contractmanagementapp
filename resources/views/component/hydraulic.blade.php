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
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">Motor Type <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Star-Delta Start" type="radio" name="motor_type">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Star-Delta Start</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Direct Online Start" type="radio" name="motor_type">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Direct Online Start</span>
        </label>
    </div>
</div>
<div class="row">
    <label class="col-sm-3 control-label" for="no_of_valve_hydraulic">No. of Valve <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="no_of_valve_hydraulic" name="no_of_valve" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-3 control-label" for="valve_coil_voltage_hydraulic">Valve Coil Voltage <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="valve_coil_voltage_hydraulic" name="valve_coil_voltage" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-3 control-label" for="power_pack_hydraulic">Power Pack make by<sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="power_pack_hydraulic" name="power_pack" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-3 control-label" for="no_of_floor_hydraulic">No. of Floor<sup class="text-primary">*</sup> :</label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="no_of_floor_hydraulic" name="no_of_floor" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
    <label class="col-sm-2 control-label" for="indications_hydraulic">&amp; its Indications:</label>
    <div class="col-sm-4">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="indications_hydraulic" name="indications" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
</div>

@component('component.sub-component.door-mode')

@endcomponent

<div class="row">
    <label class="col-sm-3 control-label" for="">UPS type ARD System <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Yes" type="radio" name="ups_type_ard">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Yes</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input"value="No" type="radio" name="ups_type_ard">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">No</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">Select UPS & Battery for ARD <sup class="text-primary">*</sup> :</label>
     <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="By Icon" type="radio" name="ups_and_battery">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">By Icon</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input"value="By Client" type="radio" name="ups_and_battery">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">By Client</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">Choose Battery <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="7AH" type="radio" name="choose_battery">
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
            <input class="custom-control-input"value="No" type="radio" name="voice_system">
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
        <i class="icon icon-paper-plane"></i> Save and Create Contract
    </button>
</div>
@push('page-script')

<script type="text/javascript">

    $('input[name="other_accessories[]"]').change(function(e){
        switch($(this).attr('id'))
        {
            case 'limit_switch_hydrolic':
                if($('#limit_switch_hydrolic').is(':checked'))
                {
                    $('#limit_switch_qty_hydrolic').show();
                }
                else
                {
                    $('#limit_switch_qty_hydrolic').hide();
                }
                break;
            case 'no_reed_hydrolic':
                if($('#no_reed_hydrolic').is(':checked'))
                {
                    $('#no_reed_qty_hydrolic').show();
                }
                else
                {
                    $('#no_reed_qty_hydrolic').hide();
                }
                break;
            case 'nc_reed_hydrolic':
                if($('#nc_reed_hydrolic').is(':checked'))
                {
                    $('#nc_reed_qty_hydrolic').show();
                }
                else
                {
                    $('#nc_reed_qty_hydrolic').hide();
                }
                break;         

        }
    })
</script>

@endpush