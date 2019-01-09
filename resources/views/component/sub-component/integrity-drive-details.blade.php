<div class="row">
    <label class="col-sm-3 control-label" for="integrity_drive_details">Drive Details <sup class="text-primary">*</sup> :</label>
    <div class="col-sm-9">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input class="custom-control-input" type="radio" name="drive_details" value="Take from icon control system">
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
<div class="row">
    <div data-type="integrity_drive_details_by_ics">
        <label class="col-sm-3 control-label" for="Monarch"></label>
        <div class="col-sm-9">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" name="monarch" value="Monarch-Parallel">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> Monarch Parallel</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" name="monarch" value="Monarch-Serial">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> Monarch Serial</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" name="monarch" value="Monarch-open-loop">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> Monarch Open Loop</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" name="monarch" value="invt-ec-160">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">INVT EC-160</span>
            </label>
        </div>
    </div>

    <div data-type="monarch_details_by_ics">
        <label class="col-sm-3 control-label" for=""></label>
        <div class="col-sm-9">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" name="monrch_drive_hp" value="5 HP">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 5 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" name="monrch_drive_hp" value="7.5 HP">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">7.5 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" name="monrch_drive_hp" value="10 HP">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 10 HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" name="monrch_drive_hp" value="20 HP">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label"> 20 HP</span>
            </label>
        </div>
       {{--  <div class="col-sm-12 col-sm-offset-3">
            <div class="row">
                <div class="col-sm-2 col-xs-6">
                    <select class="form-control input-sm" name="monrch_drive_hp">
                        <option value="5 HP">5 HP</option>
                        <option value="7.5 HP">7.5 HP</option>
                        <option value="10 HP">10 HP</option>
                        <option value="20 HP">20 HP</option>
                    </select>
                </div>
                <div class="col-sm-2 col-xs-6" name="monarch_drive_type">
                    <select class="form-control input-sm">
                        <option value="GEARED">GEARED</option>
                        <option value="GEARLESS">GEARLESS</option>
                    </select>
                </div>
            </div>
        </div> --}}    
    </div>    

    <div data-type="integrity_drive_details_by_us">
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
@push('page-script')
<script>
   $('input[type=radio][name=drive_details]').change(function() {
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
</script>
@endpush