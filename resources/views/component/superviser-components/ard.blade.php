<br>
<hr>
<div class="row">
    <label class="col-xs-12 control-label" for="logic-board-details">Logic Board Details <sup class="text-primary">*</sup> :</label>
    <br> <br>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            <label>Main Board Name</label>
        </div>
       
        <br><br>
        <span id="main_board_error" class="text-primary"></span>
        <div class="col-xs-6"> 
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="logic_board[name][]" value="ARD-05" data-parsley-multiple   id="logic_board_name1" data-parsley-required="true" required>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">ARD-05</span>
            </label>
        </div>
        
        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="logic_board[name][]" value="DRIVER-2" id="logic_board_name2">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">DRIVER-2</span>
            </label>
        </div>
      

        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="logic_board[name][]" value="3-&#x3A6;ARD" id="logic_board_name3">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">3-&#x3A6;ARD</span>
            </label>
        </div>

        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="logic_board[name][]" value="SINE WAVE INVERT" id="logic_board_name4">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">SINE WAVE INVERT</span>
            </label>
        </div>
   <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="logic_board[name][]" value="SQURE WAVE INVERT" id="logic_board_name5">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">SQURE WAVE INVERT</span>
            </label>
        </div>
       <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="logic_board[name][]" value="INVERTER TIMER" id="logic_board_name6">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">INVERTER TIMER</span>
            </label>
        </div>
     <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="logic_board[name][]" value="DZ-CNT" id="logic_board_name7">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">DZ-CNT</span>
            </label>
        </div>

    </div>   <!-- end first box -->
    <br>

    <div class="clearfix"></div>

    <label class="col-md-12 col-xs-12 control-label" for="box-size">Box Size<sup class="text-primary">*</sup> :</label><br><br>
    <div class="col-md-12">
        <span id="box_size_error" class="text-primary"></span>
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" type="radio" name="box_size" value="0" data-parsley-required="true" required>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">0 No</span>
        </label>

        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" type="radio" name="box_size" value="1">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">1 No</span>
        </label>
        <span id="box_size_error" class="text-primary"></span>

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
        <div class="clearfix"></div>
        <br>
        <div class="col-xs-6 hidden-xs text-center"><label>QTY</label></div>
        <div class="clearfix"></div>
        <div class="col-sm-12"> 
         <!--  110 V Ac option start -->
            <span id="vac_error" class="text-primary"></span>
            <div class="col-xs-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="9 AMP" id="vac110_name1" data-parsley-required="true" required>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">9 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control" id="vac110_company1" data-parsley-required="true" required>
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="vac110_qty1" placeholder="qty" name="Contractor[110 V AC][qty][]" spellcheck="false" data-parsley-required="true" required>
                    <label class="md-control-label"></label>
                </div>
            </div>
            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="18 AMP" id="vac110_name2">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">18 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control" id="vac110_company2" >
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field"  placeholder="qty" name="Contractor[110 V AC][qty][]" spellcheck="false" >
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="25 AMP"  id="vac110_name3">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">25 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control" >
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[110 V AC][qty][]" spellcheck="false" >
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="32 AMP" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">32 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control" >
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[110 V AC][qty][]" spellcheck="false" >
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="40 AMP"  id="vac110_name5">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">40 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control" >
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[110 V AC][qty][]" spellcheck="false" >
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="55 AMP"  id="vac110_name6">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">55 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                </select>
            </div>
           <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[110 V AC][qty][]" spellcheck="false" >
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>  <!-- end 110 V Ac Options -->

        <div class="col-sm-12">
            <span id="vdc_error" class="text-primary"></span>
            <div class="col-xs-6">
                <label class="custom-control-label" for="110-v-ac>110 V Ac">24 V DC</label>
            </div>
            <div class="clearfix"></div>
            <br>
            <div class="col-xs-6 hidden-xs text-center"><label>QTY</label></div>
            <div class="clearfix"></div>
            <div class="col-sm-12">  <!--  110 V Ac option start -->
                 <div class="col-xs-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="Contractor[24 V DC][name][]" value="9 AMP" id="vdc110_name1">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="ics-100">9 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="Contractor[24 V DC][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option value="Siemens">Siemens</option>
                        <option value="Chint">Chint</option>
                        <option value="E-TON">E-TON</option>
                        <option value="LS">LS</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[24 V DC][qty][]" spellcheck="false" >
                        <label class="md-control-label"></label>
                    </div>
                </div>

                <div class="col-xs-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="Contractor[24 V DC][name][]" value="18 AMP" id="vdc110_name1">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="ics-100">18 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="Contractor[24 V DC][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option value="Siemens">Siemens</option>
                        <option value="Chint">Chint</option>
                        <option value="E-TON">E-TON</option>
                        <option value="LS">LS</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[24 V DC][qty][]" spellcheck="false" >
                        <label class="md-control-label"></label>
                    </div>
                </div>

            </div>  <!-- end 24 v DC Options -->
        </div>  <!--  end 24 v DC -->
        <br><br>

        <div class="col-sm-12 col-xs-12">
            <span id="aob_error" class="text-primary"></span>
            <div class="col-sm-6 col-xs-6">
                <label>ADD-ON BLOCK</label>
            </div>
            <div class="col-sm-6 col-xs-6 text-center">
                <label>QTY</label>
            </div>
            <br><br>
            <div class="col-xs-6">
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="Contractor[add-on-block][name][]" value="2 NO" id="aob1">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">2 NO</span>
                </label>
            </div>
            <div class="col-sm-6 col-xs-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="ics-100" name="Contractor[add-on-block][qty][]" spellcheck="false" placeholder="aob1" >
                    <label class="md-control-label"></label>
                </div>
            </div>
            <div class="col-xs-6">
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="Contractor[add-on-block][name][]" value="4 NC" id="aob2">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">4 NC</span>
                </label>
            </div>
            <div class="clearfixd"></div>
            <div class="col-sm-6 col-xs-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="ics-100" name="Contractor[add-on-block][qty][]" spellcheck="false" placeholder="qty" >
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>   <!-- end first box -->
        <div class="col-sm-12">
            <div class="col-xs-6">
                <label class="custom-control-label" for="110-v-ac>110 V Ac">Relay</label>
            </div>
            <div class="col-xs-6 text-center hidden-xs"><label>QTY</label></div>
            <div class="clearfix"></div>
            <br>
            <div class="col-sm-12">  <!--  110 V Ac option start -->
                <span id="relay_error" class="text-primary"></span>
                <div class="col-sm-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="Contractor[Relay][name][]" value="24 V"  id="relay1" data-parsley-required="true" required>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="ics-100">24 V</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="Contractor[Relay][company][]" class="form-control" data-parsley-required="true" required>
                        <option selected disabled>!--Select Company--!</option>
                        <option value="11 Pin">11 Pin</option>
                        <option value="8 Pin">8 Pin</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[Relay][qty][]" spellcheck="false" data-parsley-required="true" required>
                        <label class="md-control-label"></label>
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="Contractor[Relay][name][]" value="12 V" id="relay2">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="ics-100">12 V</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="Contractor[Relay][company][]" class="form-control" >
                        <option selected disabled>!--Select Company--!</option>
                        <option value="11 Pin">11 Pin</option>
                        <option value="8 Pin">8 Pin</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[Relay][qty][]" spellcheck="false" >
                        <label class="md-control-label"></label>
                    </div>
                </div>
            </div>  <!-- end 110 V Ac Options -->
        </div>  <!--  end 110 V DC -->


        <div class="clearfix"></div>
        <br><br>
        <label class="col-xs-12 control-label" for="mcb-details">MCB Details<sup class="text-primary">*</sup> :</label>
        <div class="col-xs-6">
            <label class="custom-control-label" for="110-v-ac">Single Pole</label>
        </div>
        <div class="col-xs-6 text-center hidden-xs"><label>QTY</label></div>
        <br>
        <div class="clearfix"></div>
        <div class="col-sm-12">
            <div class="col-sm-12">
                <span id="mcb_error" class="text-primary"></span>
                                <div class="col-sm-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="mcb[Single Pole][name][]" value="6 AMP" id="mcb1" data-parsley-required="true" required>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="ics-100">6 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="mcb[Single Pole][company][]" class="form-control" data-parsley-required="true" required>
                        <option selected disabled>!--Select Company--!</option>
                        <option value="Siemens">Siemens</option>
                        <option value="Chint">Chint</option>
                        <option value="E-TON">E-TON</option>                   
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="mcb[Single Pole][qty][]" spellcheck="false"  data-parsley-required="true" required>
                        <label class="md-control-label"></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6">
            <label class="custom-control-label" for="110-v-ac">TWO Pole</label><br>
        </div>
        <div class="col-xs-6 text-center hidden-xs"><label>QTY</label></div>
        <br>
        <div class="clearfix"></div>

        <div class="col-sm-12">  <!-- mcb-details-option start -->
            <div class="col-sm-12">  <!--  110 V Ac option start -->
                <span id="mcb_error" class="text-primary"></span>
                <div class="col-sm-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="mcb[Two Pole][name][]" value="6 AMP" id="mcb1">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="ics-100">6 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="mcb[Two Pole][company][]" class="form-control" >
                        <option selected disabled>!--Select Company--!</option>
                        <option value="Siemens">Siemens</option>
                        <option value="Chint">Chint</option>
                        <option value="E-TON">E-TON</option>                   
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="mcb[Two Pole][qty][]" spellcheck="false" >
                        <label class="md-control-label"></label>
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="mcb[Two Pole][name][]" value="20 AMP" id="mcb2">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="ics-100">20 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="mcb[Two Pole][company][]" class="form-control" >
                        <option selected disabled>!--Select Company--!</option>
                        <option value="Siemens">Siemens</option>
                        <option value="Chint">Chint</option>
                        <option value="E-TON">E-TON</option>  
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="mcb[Two Pole][qty][]" spellcheck="false" >
                        <label class="md-control-label"></label>
                    </div>
                </div>
            </div>  <!-- end 110 V Ac Options -->
            <br>


            <div class="clearfix"></div>
            <br><br>

            <div class="col-xs-4"><label class="control-label" for="order_taken_by">PFR Need<sup class="text-primary">*</sup> :</label></div>

            <div class="col-md-12">
                <span id="pfr_need" class="text-primary"></span>
                <label class="custom-control custom-control-primary custom-radio">
                    <input class="custom-control-input" type="radio" name="overload[pfr_need]" value="Yes" data-parsley-required="true" required>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">Yes</span>
                </label>

                <label class="custom-control custom-control-primary custom-radio">
                    <input class="custom-control-input" type="radio" name="overload[pfr_need]" value="No" data-parsley-required="true" required>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">No</span>
                </label>
            </div>

            <div class="col-xs-12">
                <label class="col-xs-3 control-label" for="prf_type">PFR Type<sup class="text-primary">*</sup> :</label>
                <div class="col-xs-9">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="prf_type" name="overload[pfr_type]" spellcheck="false" data-parsley-required="true" required>
                        <label class="md-control-label"></label>
                    </div>
                </div>    
            </div>
            <div class="clearfix"></div>
            <br>
            <div class="col-xs-4"><label class="control-label" for="order_taken_by">battery Charger<sup class="text-primary">*</sup> :</label></div>

                <div class="col-md-12">
                    <span id="battery_charger" class="text-primary"></span>
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" type="radio" name="overload[battery-charger]" value="Yes" data-parsley-required="true" required>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">Yes</span>
                    </label>

                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" type="radio" name="overload[battery-charger]" value="No" data-parsley-required="true" required>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label">No</span>
                    </label>
                </div>
               <div class="col-md-12 battery_charger_option" style="display: none">
            <div class="col-xs-12">
                
            <div class="col-xs-6">
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="overload[battery-charger-option][name][]" value="48V" data-parsley-required="true" required>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">48V</span>
                </label>
            </div>
            <div class="col-sm-6 col-xs-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="ics-100" name="overload[battery-charger-option][qty][]" spellcheck="false" placeholder="qty">
                    <label class="md-control-label"></label>
                </div>
            </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-6">
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="overload[battery-charger-option][name][]" value="72V">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">72V</span>
                </label>
                </div>
                            <div class="col-sm-6 col-xs-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="ics-100" name="overload[battery-charger-option][qty][]" spellcheck="false" placeholder="qty">
                    <label class="md-control-label"></label>
                </div>
                </div>
            </div>
        </div>
             
            <br>
            <br>
        <div class="col-sm-12 col-xs-12">
           <div class="col-xs-4"><label class="control-label" for="order_taken_by">battery 12V<sup class="text-primary">*</sup> :</label></div>
            <div class="col-sm-6 col-xs-6 text-center">
                <label>QTY</label>
            </div>
            <br><br>
            <div class="col-xs-6">
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="overload[battery_12V][name][]" value="7AH" data-parsley-required="true" required>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">7AH</span>
                </label>
            </div>
            <div class="col-sm-6 col-xs-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="ics-100" name="overload[battery_12V][qty][]" spellcheck="false" placeholder="qty" data-parsley-required="true" required>
                    <label class="md-control-label"></label>
                </div>
            </div>
            <div class="col-xs-6">
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="overload[battery_12V][name][]" value="12AH">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">12AH</span>
                </label>
            </div>
            <div class="col-sm-6 col-xs-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="ics-100" name="overload[battery_12V][qty][]" spellcheck="false" placeholder="qty">
                    <label class="md-control-label"></label>
                </div>
            </div>
            <div class="col-xs-6">
                <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="overload[battery_12V][name][]" value="17AH">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">17AH</span>
                </label>
            </div>
             <div class="col-sm-6 col-xs-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="ics-100" name="overload[battery_12V][qty][]" spellcheck="false" placeholder="qty">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>
    
            <br>
            <br>
            <div class="col-xs-4"><label class="control-label" for="order_taken_by">Battery Qty<sup class="text-primary">*</sup> :</label></div>

            <div class="col-md-12">
                <span id="battery_qty" class="text-primary"></span>
                <label class="custom-control custom-control-primary custom-radio">
                    <input class="custom-control-input" type="radio" name="overload[battery-qty]" value="4" data-parsley-required="true" required>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">4</span>
                </label>
                <label class="custom-control custom-control-primary custom-radio">
                    <input class="custom-control-input" type="radio" name="overload[battery-qty]" value="6" data-parsley-required="true" required>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">6</span>
                </label>
            </div>
            <br><br>
              <br>
            <div class="clearfix"></div>
        <br><br>
        <div class="col-xs-4">
            <label class="control-label" for="order_taken_by">9A cont 24vdc<sup class="text-primary">*</sup> :</label>
        </div>

        <div class="col-xs-12">
            <label class="col-xs-3 control-label" for="prfe_type">QTY<sup class="text-primary">*</sup> :</label>
            <div class="col-xs-9">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="prfe_type" name="overload[a_cont_24vdc]" spellcheck="false" data-parsley-required="true" required>
                    <label class="md-control-label"></label>
                </div>
            </div>    
        </div>
          <div class="clearfix"></div>
        <br><br>
        <div class="col-xs-4">
            <label class="control-label" for="order_taken_by">ARD Announcment<sup class="text-primary">*</sup> :</label>
        </div>

        <div class="col-xs-12">
            <label class="col-xs-3 control-label" for="prfe_type">QTY<sup class="text-primary">*</sup> :</label>
            <div class="col-xs-9">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="prfe_type" name="overolad[ard_anno]" spellcheck="false" data-parsley-required="true" required>
                    <label class="md-control-label"></label>
                </div>
            </div>    
        </div>
            <div class="clearfix"></div>

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
                 <span id="tr_error" class="text-primary"></span>
                <label class="control-label" for="connector_field">Transformer<sup class="text-primary">*</sup> :</label><br>
            </div>

            <div class="col-xs-12"> <span id="tr_error" class="text-primary"></span>
                <div class="col-sm-6">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="Transformer[name][]" value="ARD SQURE WAVE" id="tr1" data-parsley-required="true" required>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="ics-100">
                            ARD SQURE WAVE
                        </span>
                    </label>
                </div>
              
                <div class="col-sm-6">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="Transformer[name][]" value="ARD SIGNERWAVE" id="tr2">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="ics-100">
                            ARD SIGNERWAVE
                        </span>
                    </label>
                </div>
               
                <div class="col-sm-6">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="Transformer[name][]" value="ARD 48V INPUT 440 V OUT PUT" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="ics-100">
                            ARD 48V INPUT 440 V OUT PUT
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
            <br><br>

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
                            <input class="md-form-control" type="text" id="3mm" name="lug[3mm]" spellcheck="false">
                            <label class="md-control-label"></label>
                        </div>
                    </div> 
                </div>
                <div class="col-xs-4">
                    <label class="col-sm-6 control-label" for="4mm">2in<sup class="text-primary">*</sup> :</label>
                    <div class="col-sm-6">
                        <div class="md-form-group">
                            <input class="md-form-control" type="text" id="2in" name="lug[2in]" spellcheck="false">
                            <label class="md-control-label"></label>
                        </div>
                    </div> 
                </div>
                <div class="col-xs-4">
                    <label class="col-sm-7 control-label" for="6mm">2.5mm<sup class="text-primary">*</sup> :</label>
                    <div class="col-sm-5">
                        <div class="md-form-group">
                            <input class="md-form-control" type="text" id="2.5mm" name="lug[2.5mm]" spellcheck="false">
                            <label class="md-control-label"></label>
                        </div>
                    </div> 
                </div>
                <div class="col-xs-6">
                    <label class="col-sm-6 control-label" for="4mm">4 mm Ring<sup class="text-primary">*</sup> :</label>
                    <div class="col-sm-6">        
                        <div class="md-form-group">
                            <input class="md-form-control" type="text" id="4mm" name="lug[4mm_ring]" spellcheck="false">
                            <label class="md-control-label"></label>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-sm-6">
                    <label class="control-label" for="anyrequire">If Any Other Materials Require Write here <sup class="text-primary">*</sup> :</label>
                </div>
                <div class="col-sm-6">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="anyrequire" name="any_other_details" spellcheck="false">
                        <label class="md-control-label"></label>
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
                <select name="technician" class="form-control" data-parsley-required="true">
                    <option selected disabled>!--Select Technician--!</option>
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
                <select name="stock" class="form-control" data-parsley-required="true">
                    <option selected disabled>!--Select Stock--!</option>
                    @foreach($stocks as $stock)
                    <option value="{{$stock->id}}">{{$stock->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="clearfix"></div>
            <br>
            <div class="col-sm-6">
                 <label class="col-sm-6 control-label" for="contract_date">Due Date<sup class="text-primary">*</sup></label>
            </div>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="Date" value="" data-provide="datepicker" data-date-today-highlight="true" data-date-autoclose="true" data-date-format="DD, MM d, yyyy" name="contract_date" data-parsley-required="true">
                <span class="form-control-feedback" aria-hidden="true">
                    <span class="icon"></span>
                </span>
            </div><br><br>
            <button class="btn btn-info pull-right btnSubmit">Assign</button>
        </div>

        </div>   <!-- top row end -->
    </div>
</div>
@push('page-script')
    <script>

         
    </script>
@endpush

