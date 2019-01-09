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
    <label class="col-sm-3 control-label" for="no_of_floor_ss">No. of Floor <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="no_of_floor_ss" name="no_of_floor" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
    <label class="col-sm-2 control-label" for="indications_ss">&amp; its Indications:</label>
    <div class="col-sm-4">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="indications_ss" name="indications" spellcheck="false">
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
    <label class="col-sm-3 control-label" for="">Motor HP <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input"value="5" type="radio" name="motor_hp">
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
    <label class="col-sm-3 control-label" for="">Contractor Coil Voltage <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="110V AC" type="radio" name="coil_voltage">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">110V AC</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" value="110V DC" type="radio" name="coil_voltage">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">110V DC</span>
        </label>
    </div>
</div>
<div class="row">
    <label class="col-sm-3 control-label" for="brake_voltage_ss">Motor Brake Voltage <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-3">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="brake_voltage_ss" name="motor_brake_voltage" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
    <label class="col-sm-2 control-label" for="rcam_voltage_ss">R-CAM Voltage :</label>
    <div class="col-sm-4">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="rcam_voltage_ss" name="r_cam_voltage" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
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
    <label class="col-sm-3 control-label" for="other_specification_ss">Other Specification:</label>
    <div class="col-sm-9">
        <div class="md-form-group">
            <textarea class="md-form-control" id="other_specification_ss" rows="3" name="other_specification"></textarea>
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
