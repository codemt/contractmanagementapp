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
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="door_mode" value="Semi Auto">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Semi Auto Door</span>
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
