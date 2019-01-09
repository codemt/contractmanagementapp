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
    <label class="col-sm-3 control-label" for="">Type <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="INVT" type="radio" name="integrated_type">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">INVT</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Monarch" type="radio" name="integrated_type">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Monarch</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Monarch Open Loop" type="radio" name="integrated_type" >
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Monarch Open Loop</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="no_of_floor">Communication Mode <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Serial" type="radio" name="communication_mode">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Serial</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Parallel" type="radio" name="communication_mode">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Parallel (only 16 stop down collective)</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="no_of_floor_intgrated">No. of Floor <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="no_of_floor_intgrated" name="no_of_floor" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
    <label class="col-sm-2 control-label" for="indications_intgrated">&amp; its Indications:</label>
    <div class="col-sm-4">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="indications_intgrated" name="indications" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
</div>

@component('component.sub-component.door-mode')

@endcomponent

<div class="row">
    <label class="col-sm-3 control-label" for="">Collective Mode <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" value="DN Collective" name="collective_mode">
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
            <input class="custom-control-input" value="10"  type="radio" name="motor_hp">
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
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="25" type="radio" name="motor_hp">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">25 HP</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="30" type="radio" name="motor_hp">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">30 HP</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">Motor Type <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Geared" type="radio" name="motor_type">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Geared</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="Gearless" type="radio" name="motor_type">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Gearless</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="brake_voltage_intgrated">Motor Brake Voltage <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="brake_voltage_intgrated" name="motor_brake_voltage" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for=""> Encoder Details <sup class="text-primary">*</sup> :</label>
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
    <label class="col-sm-3 control-label" for="">COP & LOP Display Voltage :</label>
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

@component('component.sub-component.integrity-drive-details')
@endcomponent

<div class="row">
    <label class="col-sm-3 control-label" for="pg_card_details_intgrated"> PG Card Details <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="pg_card_details_intgrated" name="pg_card_details">
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
            <input class="custom-control-input" value="By Icon" type="radio" name="integrated_battery">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">By Icon</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input"value="By Client" type="radio" name="integrated_battery">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">By Client</span>
        </label>
    </div>
    </div>
</div>
<div class="div_integrated_ups">
    <div class="row">
        <label class="col-sm-3 control-label" for="">UPS :</label>
       <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="By Icon" type="radio" name="integrated_ups">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">By Icon</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input"value="By Client" type="radio" name="integrated_ups">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">By Client</span>
        </label>
    </div>
    </div>
</div>

<div class=" accessory_ups_div_intgrated" style="display:none">
    <div class="row">
        <div class="col-sm-9 col-sm-offset-3">
             <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="3.5 KVA" name="ups_vlt">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">3.5 KVA</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="2.5 KVA" name="ups_vlt">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">2.5 KVA</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="2 KVA" name="ups_vlt">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">2 KVA</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="1.5 KVA" name="ups_vlt">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">1.5 KVA</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="900 KVA" name="ups_vlt">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">900 KVA</span>
            </label>
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
        <i class="icon icon-paper-plane"></i> Save and Create Contract
    </button>
</div>

@push('page-script')

<script type="text/javascript">
    // Other Accessories Battery
    

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

@endpush