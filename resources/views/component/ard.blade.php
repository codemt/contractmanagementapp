
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
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" type="radio" name="motor_hp" value="5">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">5 HP</span>
        </label>
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" type="radio" name="motor_hp" value="7.5" >
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">7.5 HP</span>
        </label>
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" type="radio" name="motor_hp" value="10">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">10 HP</span>
        </label>
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" type="radio" name="motor_hp" value="15" >
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">15 HP</span>
        </label>
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" type="radio" name="motor_hp" value="20">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">20 HP</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">Motor Type <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="motor_type" value="Geared">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Geared</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="motor_type" value="Gearless">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Gearless</span>
        </label>
    </div>
</div>

@component('component.sub-component.door-mode')

@endcomponent

<div class="row">
    <label class="col-sm-3 control-label" for="">Battery Supply By <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="choose_battery" value="by icon">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">By Icon</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="choose_battery" value="by client">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">By Client</span>
        </label>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="">ARD Need for Which controller <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="controller" value="Icon Controller">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Icon Controller</span>
        </label>
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="controller" value="Other Controller">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Other Controller</span>
        </label>
    </div>
</div>

<div data-type="control_details_by_us">
    <div class="row">
        <label class="col-sm-3 control-label" for="control_make_by_ard">Control Make By:</label>
        <div class="col-sm-9">
            <div class="md-form-group">
                <input class="md-form-control" type="text" id="control_make_by_ard" name="control_make_by" spellcheck="false">
                <label class="md-control-label"></label>
            </div>
        </div>
    </div>
    <div class="row">
        <label class="col-sm-3 control-label" for="control_type_ard">Control Type:</label>
        <div class="col-sm-9">
            <div class="md-form-group">
                <input class="md-form-control" type="text" id="control_type_ard" name="controller_control_type" spellcheck="false">
                <label class="md-control-label"></label>
            </div>
        </div>
    </div>
    <div class="row">
        <label class="col-sm-3 control-label" for="control_specification_ard">Other Specification:</label>
        <div class="col-sm-9">
            <div class="md-form-group">
                <input class="md-form-control" type="text" id="control_specification_ard" name="control_specification" spellcheck="false">
                <label class="md-control-label"></label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <label class="col-sm-3 control-label" for="other_specification_ard"> If any other specification require write here:</label>
    <div class="col-sm-9">
        <div class="md-form-group">
            <textarea class="md-form-control" id="other_specification_ard" rows="3" name="other_specification"></textarea>
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
    </script>
@endpush
