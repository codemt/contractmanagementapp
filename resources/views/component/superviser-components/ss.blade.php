<br>
<hr>
<div class="row">
    <label class="col-xs-12 control-label" for="logic-board-details">Logic Board Details <sup class="text-primary">*</sup> :</label>
    <br> <br>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            <label> Board Name</label>
        </div>
      
        <br><br>
        <div class="col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox" >
                <input class="custom-control-input" type="checkbox" value="ICS-100" name="logic_board[name][]" value="ICS-100" >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label" for="ics-100">ICS-100</span>
            </label>
        </div>
      

        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox" >
                <input class="custom-control-input" type="checkbox" value="ICS-2500" name="logic_board[name][]" value="ICS-2500" >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label" for="ics-2500">ICS-2500</span>
            </label>
        </div>
        

        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox" >
                <input class="custom-control-input" type="checkbox" value="PSST-01" name="logic_board[name][]" value="PSST-01" >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label" for="psst-01">PSST-01</span>
            </label>
        </div>
      
        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox" >
                <input class="custom-control-input" type="checkbox" value="MNT" name="logic_board[name][]" value="MNT" >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label" for="mnt">MNT</span>
            </label>
        </div>
      
        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox" >
                <input class="custom-control-input" type="checkbox" value="Annoucement" name="logic_board[name][]" value="Annoucement" >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label" for="annoucement">Annoucement</span>
            </label>
        </div>
       
    </div>   <!-- end first box -->
    <div class="clearfix"></div>

    <br>
    <label class="col-md-12 col-xs-12 control-label" for="box-size">Box Size<sup class="text-primary">*</sup> :</label><br><br>
    <div class="col-md-12">
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" value="0" type="radio" name="box-size" value="">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">0 No</span>
        </label>

        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" value="1" type="radio" name="box-size" value="">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">1 No</span>
        </label>
    </div>
    <div class="clearfix"></div>
    <br>
    <label class="col-sm-4 control-label" for="contractor-details">Contractor Details</label><br><br>
    <label class="col-xs-12 control-label" for="">Contractor Coil Voltage <sup class="text-primary">*</sup> :</label>
    <div class="clearfix"></div>
    <br>

    <div class="col-sm-12">
        <div class="col-xs-6">
            <label class="custom-control-label" for="110-v-ac>110 V Ac">110 V Ac</label>
        </div>
        <div class="col-xs-6 hidden-xs text-center"><label>QTY</label></div>
        <div class="clearfix"></div>
        <div class="col-sm-12">  <!--  110 V Ac option start -->
            <div class="col-xs-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" value="9 AMP" type="checkbox" name="Contractor[110 V AC][name][]" value="9 AMP" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">9 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                    <option value="SCHINDER">SCHINDER</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[110 V AC][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" value="18 AMP" type="checkbox" name="Contractor[110 V AC][name][]" value="18 AMP" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">18 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                    <option value="SCHINDER">SCHINDER</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field"  placeholder="qty" name="Contractor[110 V AC][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" value="25 AMP" name="Contractor[110 V AC][name][]" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">25 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                    <option value="SCHINDER">SCHINDER</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[110 V AC][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" value="32 AMP" name="Contractor[110 V AC][name][]" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">32 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                    <option value="SCHINDER">SCHINDER</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="Contractor[110 V AC][qty][]" placeholder="qty" name="connector_field" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" value="40 AMP" name="Contractor[110 V AC][name][]" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">40 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                    <option value="SCHINDER">SCHINDER</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="Contractor[110 V AC][qty][]" placeholder="qty" name="connector_field" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>  <!-- end 110 V Ac Options -->

    </div>  <!--  end 110 V AC -->
    <br>
    <div class="col-sm-12">
        <div class="col-xs-6">
            <label class="custom-control-label" for="110-v-ac>110 V Ac">110 V Dc</label>
        </div>
        <div class="col-xs-6 text-center"><label>QTY</label></div>
        <div class="clearfix"></div>
        <div class="col-sm-12">  <!--  110 V Ac option start -->
            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" value="18 AMP" type="checkbox" name="Contractor[110 V DC][name][]" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">18 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V DC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                    <option value="SCHINDER">SCHINDER</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[110 V DC][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" value="25 AMP" type="checkbox" name="Contractor[110 V DC][name][]" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">25 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V DC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                    <option value="SCHINDER">SCHINDER</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[110 V DC][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" value="32 AMP" type="checkbox" name="Contractor[110 V DC][name][]" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">32 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V DC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                    <option value="SCHINDER">SCHINDER</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[110 V DC][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" value="40 AMP" type="checkbox" name="Contractor[110 V DC][name][]" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">40 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V DC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                    <option value="SCHINDER">SCHINDER</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[110 V DC][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>  <!-- end 110 V Ac Options -->
    </div>  <!--  end 110 V DC -->


    <div class="clearfix"></div>
    <br><br>
    <label class="col-xs-12 control-label" for="mcb-details">MCB Details<sup class="text-primary">*</sup> :</label>
    <div class="col-xs-6">
        <label class="custom-control-label" for="110-v-ac>110 V Ac">Three Pole</label>
    </div>
    <div class="col-xs-6 text-center"><label>QTY</label></div>
    <br>
    <div class="clearfix"></div>
    <div class="col-sm-12">  <!-- mcb-details-option start -->
        <div class="col-sm-12">  <!--  110 V Ac option start -->
            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" value="6 AMP" name="mcb[Three Pole][name][]" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">6 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="mcb[Three Pole][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                    <option value="SCHINDER">SCHINDER</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="mcb[Three Pole][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" value="20 AMP" type="checkbox" name="mcb[Three Pole][name][]" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">20 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="mcb[Three Pole][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                    <option value="SCHINDER">SCHINDER</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="mcb[Three Pole][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" value="32 AMP" name="mcb[Three Pole][name][]" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">32 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="mcb[Three Pole][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                    <option value="SCHINDER">SCHINDER</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="mcb[Three Pole][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" value="40 AMP" name="mcb[Three Pole][name][]" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">40 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="mcb[Three Pole][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                    <option value="SCHINDER">SCHINDER</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="mcb[Three Pole][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>  <!-- end 110 V Ac Options -->
    </div> <!--  MCB details option end -->

    <div class="clearfix"></div>
    <br><br>

    <div class="col-xs-4"><label class="control-label" for="order_taken_by">PFR Need<sup class="text-primary">*</sup> :</label></div>

    <div class="col-md-12">
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" type="radio" name="overload[pfr_need]" value="Yes">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Yes</span>
        </label>

        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" type="radio" name="overload[pfr_need]" value="No">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">No</span>
        </label>
    </div>

    <div class="col-xs-12">
        <label class="col-xs-3 control-label" for="prf_type">PFR Type<sup class="text-primary">*</sup> :</label>
        <div class="col-xs-9">
            <div class="md-form-group">
                <input class="md-form-control" type="text" id="prf_type" name="overload[pfr_type]" spellcheck="false">
                <label class="md-control-label"></label>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <br><br>

    <div class="col-sm-12 connector-wire-details">
        <div class="col-sm-4">
            <label class="control-label">Connector & Wire Details</label>
        </div>
        <div class="col-sm-8 hidden-xs">
            <div class="col-sm-4">
                <label>QTY</label>
            </div>
            <div class="col-sm-4">
                <label>SIZE</label>
            </div>
            <div class="col-sm-4">
                <label>MAKE</label>
            </div>
        </div>
    </div>
    <br>
    <div class="col-sm-12">
        <div class="col-sm-4">
            <label>Connector Field:</label>
        </div>
        <div class="col-sm-8 col-xs-12">
            <div class="col-xs-4">
                <input class="md-form-control" type="text"  name="connector_field[qty]" placeholder="qty" spellcheck="false">
            </div>
            <div class="col-xs-4">
                <input class="md-form-control" type="text"  name="connector_field[size]" placeholder="size" spellcheck="false">
            </div>
            <div class="col-xs-4">
                <input class="md-form-control" type="text"  name="connector_field[make]" placeholder="make" spellcheck="false">
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="col-sm-4">
            <label>Connector Power:</label>
        </div>
        <div class="col-sm-8 col-xs-12">
            <div class="col-xs-4">
                <input class="md-form-control" type="text"  name="connector_power[qty]" placeholder="qty" spellcheck="false">
            </div>
            <div class="col-xs-4">
                <input class="md-form-control" type="text"  name="connector_power[size]" placeholder="size" spellcheck="false">
            </div>
            <div class="col-xs-4">
                <input class="md-form-control" type="text"  name="connector_power[make]" placeholder="make" spellcheck="false">
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="col-sm-4">
            <label>Wire Field:</label>
        </div>
        <div class="col-sm-8 col-xs-12">
            <div class="col-xs-4">
                <input class="md-form-control" type="text"  name="wire_field[qty]" placeholder="qty" spellcheck="false">
            </div>
            <div class="col-xs-4">
                <input class="md-form-control" type="text"  name="wire_field[size]" placeholder="size" spellcheck="false">
            </div>
            <div class="col-xs-4">
                <input class="md-form-control" type="text"  name="wire_field[make]" placeholder="make" spellcheck="false">
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="col-sm-4">
            <label>Wire Power:</label>
        </div>
        <div class="col-sm-8 col-xs-12">
            <div class="col-xs-4">
                <input class="md-form-control" type="text"  name="wire_power[qty]" placeholder="qty" spellcheck="false">
            </div>
            <div class="col-xs-4">
                <input class="md-form-control" type="text"  name="wire_power[size]" placeholder="size" spellcheck="false">
            </div>
            <div class="col-xs-4">
                <input class="md-form-control" type="text"  name="wire_power[make]" placeholder="make" spellcheck="false">
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <br><br>
    <div class="col-xs-12">
        <label class="control-label" for="connector_field">Transformer<sup class="text-primary">*</sup> :</label>
    </div>
    <br>
    <div class="col-xs-12">
        <div class="col-sm-6">
            <label class="custom-control custom-control-primary custom-checkbox" >
                <input class="custom-control-input" type="checkbox" value="Input 230 V Output-110V, 24V, 12V" name="Transformer[name][]" >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label" for="ics-100">
      Input 230 V Output-110V, 24V, 12V
    </span>
            </label>
        </div>
       
        <div class="clearfix"></div>
        <div class="col-sm-6">
            <label class="custom-control custom-control-primary custom-checkbox" >
                <input class="custom-control-input" type="checkbox" value="Input 440V Output-110V, 24V, 12V" name="Transformer[name][]" >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label" for="ics-100">
    Input 440V Output-110V, 24V, 12V
  </span>
            </label>
        </div>
     
        <div class="clearfix"></div>
        <div class="col-sm-6">
            <label class="custom-control custom-control-primary custom-checkbox" >
                <input class="custom-control-input" type="checkbox" value="Input 440V Output-230V, 110V ,24V, 12V" name="Transformer[name][]" >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label" for="ics-100">
      Input 440V Output-230V, 110V ,24V, 12V
    </span>
            </label>
        </div>
                    <br><div class="clearfix"></div>

        <div class="col-sm-6">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="Transformer[name][]" value="ARD Transformer" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="ics-100">
                           ARD Transformer
                        </span>
                    </label>
                </div>
       

    </div>
    <hr>
    <div class="col-xs-12">
        <div class="12"><label class="control-label" for="wire_filed">o/l Relay <sup class="text-primary">*</sup> :-</label></div>
        <div class="col-xs-6">
            <label class="col-sm-6 control-label" for="3mm">Qty<sup class="text-primary">*</sup> :</label>
            <div class="col-sm-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="3mm" name="ol_relay[qty]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>
        <div class="col-xs-6">
            <label class="col-sm-6 control-label" for="4mm">Range<sup class="text-primary">*</sup> :</label>
            <div class="col-sm-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="4mm" name="ol_relay[range]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>
    </div>
     <div class="col-xs-12">
        <div class="12"><label class="control-label" for="wire_filed">Nut Bolt<sup class="text-primary">*</sup> :-</label></div>
        <div class="col-xs-4">
            <label class="col-sm-6 control-label" for="3mm">3mm<sup class="text-primary">*</sup> :</label>
            <div class="col-sm-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="3mm" name="nutbolt[3mm]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <label class="col-sm-6 control-label" for="4mm">4mm<sup class="text-primary">*</sup> :</label>
            <div class="col-sm-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="4mm" name="nutbolt[4mm]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <label class="col-sm-6 control-label" for="6mm">6mm<sup class="text-primary">*</sup> :</label>
            <div class="col-sm-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="6mm" name="nutbolt[6mm]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="12"><label class="control-label" for="wire_filed">Wiser<sup class="text-primary">*</sup> :-</label></div>
        <div class="col-xs-4">
            <label class="col-sm-6 control-label" for="3mm">3mm<sup class="text-primary">*</sup> :</label>
            <div class="col-sm-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="3mm" name="wiser[3mm]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <label class="col-sm-6 control-label" for="4mm">4mm<sup class="text-primary">*</sup> :</label>
            <div class="col-sm-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="4mm" name="wiser[4mm]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <label class="col-sm-6 control-label" for="6mm">6mm<sup class="text-primary">*</sup> :</label>
            <div class="col-sm-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="6mm" name="wiser[6mm]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="12"><label class="control-label" for="wire_filed">Lug<sup class="text-primary">*</sup> :-</label></div>
        <div class="col-xs-4">
            <label class="col-sm-7 control-label" for="3mm">0.5mm<sup class="text-primary">*</sup> :</label>
            <div class="col-sm-5">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="3mm" name="lug[0.5mm]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <label class="col-sm-6 control-label" for="4mm">2in<sup class="text-primary">*</sup> :</label>
            <div class="col-sm-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="4mm" name="lug[2in]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <label class="col-sm-7 control-label" for="6mm">2.5mm<sup class="text-primary">*</sup> :</label>
            <div class="col-sm-5">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="6mm" name="lug[2.5mm]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>
        <div class="col-xs-6">
            <label class="col-sm-6 control-label" for="6mm">4 mm Ring<sup class="text-primary">*</sup> :</label>
            <div class="col-sm-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="6mm" name="lug[4mm Ring]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>
    </div>
   <div class="col-xs-12">

            <div class="clearfix"></div><br>
            <div class="col-sm-6">
                <label class="control-label">Assign Technician
                </label>
            </div>
            <div class="col-sm-6">
                <select name="technician" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    @foreach($technicians as $technician)
                    <option value="{{$technician->id}}">{{$technician->name}}</option>
                    @endforeach
                </select>
                 <span><strong class="control_no_span"></strong></span>
            </div>
            <div class="clearfix"></div>
            <br>
            <div class="col-sm-6">
                <label class="control-label">Assign Stock</label>
            </div>

            <div class="col-sm-6">
                <select name="stock" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    @foreach($stocks as $stock)
                    <option value="{{$stock->id}}">{{$stock->name}}</option>
                    @endforeach
                </select>
            </div>
            <label class="col-sm-6 control-label" for="contract_date">Due Date<sup class="text-primary">*</sup></label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="Date" value="" data-provide="datepicker" data-date-today-highlight="true" data-date-autoclose="true" data-date-format="DD, MM d, yyyy" name="contract_date">
                <span class="form-control-feedback" aria-hidden="true">
                    <span class="icon"></span>
                </span>
            </div><br><br>
            <button class="btn btn-success pull-right btnSubmit">Submit</button>
   </div>  <!--  end of class -->

</div>   <!-- top row end -->