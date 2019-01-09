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
        <div class="col-xs-6">
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="logic_board[name][]" value="PS-02/03">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">PS-02/03</span>
            </label>
        </div>
      
        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="logic_board[name][]" value="230V AC-110V DC">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">230V AC-110V DC</span>
            </label>
        </div>
      

        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="logic_board[name][]" value="INS CARD">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">INS CARD</span>
            </label>
        </div>
       
       

    </div>   <!-- end first box -->
    <br>


    <div class="clearfix"></div>

    <label class="col-md-12 col-xs-12 control-label" for="box-size">Box Size<sup class="text-primary">*</sup> :</label><br><br>
    <div class="col-md-12">

        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" type="radio" name="box-size" value="1">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">1 No</span>
        </label>
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" type="radio" name="box-size" value="2">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">2 No</span>
        </label>
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" type="radio" name="box-size" value="3">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">3 No</span>
        </label>
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" type="radio" name="box-size" value="MRL">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">MRL</span>
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
       
        <br>
        <div class="col-xs-6 hidden-xs text-center"><label>QTY</label></div>
        <div class="clearfix"></div>
        <div class="col-sm-12">  <!--  110 V Ac option start -->
            <div class="col-xs-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="9 AMP"  >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="9-amp-ac">9 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]"  class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
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
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="18 AMP" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="18-amp-ac">18 AMP</span>
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
                    <input class="md-form-control" type="text" id="connector_field"  placeholder="qty" name="Contractor[110 V AC][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="25 AMP" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="25-amp-ac">25 AMP</span>
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
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[110 V AC][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="32 AMP" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="32-amp-ac">32 AMP</span>
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
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[110 V AC][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="40 AMP" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="40-amp-ac">40 AMP</span>
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
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[110 V AC][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="55 AMP" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="55-amp-ac">55 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option  value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="LS">LS</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[110 V AC][qty][]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>
        </div>  <!-- end 110 V Ac Options -->

        <div class="col-sm-12">
            <div class="col-xs-6">
                <label class="custom-control-label" for="110-v-ac>110 V Ac">230 V DC</label>
            </div>

            <br>
            <div class="col-xs-6 hidden-xs text-center"><label>QTY</label></div>
            <div class="clearfix"></div>
            <div class="col-sm-12">  <!--  110 V Ac option start -->
                <div class="col-xs-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="Contractor[230 V DC][name][]" value="18 AMP">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="18-amp-dc">18 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="Contractor[230 V DC][company][]" class="form-control" >
                        <option selected disabled>!--Select Company--!</option>
                        <option  value="Siemens">Siemens</option>
                        <option value="Chint">Chint</option>
                        <option value="E-TON">E-TON</option>
                        <option  value="LS">LS</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[230 V DC][qty][]" spellcheck="false">
                        <label class="md-control-label"></label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="Contractor[230 V DC][name][]" value="22 AMP" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="22-amp-dc">22 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="Contractor[230 V DC][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option>Siemens</option>
                        <option>Chint</option>
                        <option>E-TON</option>
                        <option>LS</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[230 V DC][qty][]" spellcheck="false">
                        <label class="md-control-label"></label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="Contractor[230 V DC][name][]" value="25 AMP" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="25-amp-dc">25 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="Contractor[230 V DC][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option value="Siemens">Siemens</option>
                        <option value="Chint">Chint</option>
                        <option value="E-TON">E-TON</option>
                        <option value="LS">LS</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[230 V DC][qty][]" spellcheck="false">
                        <label class="md-control-label"></label>
                    </div>
                </div>
            </div>  <!-- end 24 v DC Options -->
        </div>  <!--  end 24 v DC -->
        <br><br>


        <div class="col-sm-12">
            <div class="col-xs-6">
                <label class="custom-control-label" for="relay">Relay</label>
            </div>
            <div class="col-xs-6 text-center hidden-xs"><label>QTY</label></div>
            <div class="clearfix"></div>
            <br>
            <div class="col-sm-12">  <!--  110 V Ac option start -->
                <div class="col-sm-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="Contractor[Relay][name][]" value="24 V" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="24V">24 V</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="Contractor[Relay][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option value="11 Pin" >11 Pin</option>
                        <option value="8 Pin">8 Pin</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[Relay][qty][]" spellcheck="false">
                        <label class="md-control-label"></label>
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="Contractor[Relay][name][]" value="12 V" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="12v">12 V</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="Contractor[Relay][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option  value="11 Pin">11 Pin</option>
                        <option value="8 Pin">8 Pin</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="Contractor[Relay][qty][]" spellcheck="false">
                        <label class="md-control-label"></label>
                    </div>
                </div>
            </div>  <!-- end 110 V Ac Options -->
        </div>  <!--  end 110 V DC -->





        <div class="clearfix"></div>
        <br><br>
        <label class="col-xs-12 control-label" for="mcb-details">MCB Details<sup class="text-primary">*</sup> :</label>


        <div class="col-xs-6">
            <label class="custom-control-label" for="110-v-ac>110 V Ac">Single Pole</label><br>
        </div>
        <div class="col-xs-6 text-center hidden-xs"><label>QTY</label></div>
        <br>
        <div class="clearfix"></div>


        <div class="col-sm-12">  <!-- mcb-details-option start -->
            <div class="col-sm-12">  <!--  110 V Ac option start -->
                <div class="col-sm-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="mcb[Single Pole][name][]" value="6 AMP" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="6-amp-single">6 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="mcb[Single Pole][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option value="Siemens">Siemens</option>
                        <option value="E-TON">E-TON</option>
                        <option value="Chint">Chint</option>                   
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="mcb[Single Pole][qty][]" spellcheck="false">
                        <label class="md-control-label"></label>
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="mcb[Single Pole][name][]" value="10 AMP" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="10-amp-single">10 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="mcb[Single Pole][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option value="Siemens">Siemens</option>
                        <option value="E-TON">E-TON</option>
                        <option value="Chint">Chint</option>   
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="mcb[Single Pole][qty][]" spellcheck="false">
                        <label class="md-control-label"></label>
                    </div>
                </div>
            </div>  <!-- end 110 V Ac Options -->
            <div class="col-xs-6">
                <label class="custom-control-label" for="two-pole">TWO Pole</label><br>
            </div>
            <div class="col-xs-6 text-center hidden-xs"><label>QTY</label></div>
            <br>
            <div class="clearfix"></div>
         
                <div class="col-sm-12">  <!--  110 V Ac option start -->
                    <div class="col-sm-4">
                        <label class="custom-control custom-control-primary custom-checkbox" >
                            <input class="custom-control-input" type="checkbox" name="mcb[Two Pole][name][]" value="6 AMP" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label" for="6-amp-two">6 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Two Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                            <option value="Siemens">Siemens</option>
                            <option value="E-TON">E-TON</option>
                            <option value="Chint">Chint</option>                   
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <div class="md-form-group">
                            <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="mcb[Two Pole][qty][]" spellcheck="false">
                            <label class="md-control-label"></label>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <label class="custom-control custom-control-primary custom-checkbox" >
                            <input class="custom-control-input" type="checkbox" name="mcb[Two Pole][name][]" value="10 AMP" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label" for="10-amp-two">10 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Two Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                            <option value="Siemens">Siemens</option>
                            <option value="E-TON">E-TON</option>
                            <option value="Chint">Chint</option>   
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <div class="md-form-group">
                            <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="mcb[Two Pole][qty][]" spellcheck="false">
                            <label class="md-control-label"></label>
                        </div>
                    </div>
                  
                </div>  <!-- end 110 V Ac Options -->
                <br>
        
            <div class="col-xs-6">
                <label class="custom-control-label" for="three-pole">Three Pole</label><br>
            </div>
            <div class="col-xs-6 text-center hidden-xs"><label>QTY</label></div>
            <br>
            <div class="clearfix"></div>
                <div class="col-sm-12">  <!--  110 V Ac option start -->
                    <div class="col-sm-4">
                        <label class="custom-control custom-control-primary custom-checkbox" >
                            <input class="custom-control-input" type="checkbox" name="mcb[Three Pole][name][]" value="6 AMP" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label" for="6-amp-three">6 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Three Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                            <option value="Siemens">Siemens</option>
                            <option value="E-TON">E-TON</option>
                            <option value="Chint">Chint</option>                   
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <div class="md-form-group">
                            <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="mcb[Three Pole][qty][]" spellcheck="false">
                            <label class="md-control-label"></label>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <label class="custom-control custom-control-primary custom-checkbox"  >
                            <input class="custom-control-input" type="checkbox" name="mcb[Three Pole][name][]" value="20 AMP" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label" for="20-amp-three">20 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Three Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                            <option value="Siemens">Siemens</option>
                            <option value="E-TON">E-TON</option>
                            <option value="Chint">Chint</option>   
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
                            <input class="custom-control-input" type="checkbox" name="mcb[Three Pole][name][]" value="32 AMP" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label" for="32-amp-three">32 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Three Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                            <option value="Siemens">Siemens</option>
                            <option value="E-TON">E-TON</option>
                            <option value="">Chint</option>   
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
                            <input class="custom-control-input" type="checkbox" name="mcb[Three Pole][name][]" value="40 AMP" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label" for="40-amp-three">40 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Three Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                            <option value="Siemens">Siemens</option>
                            <option value="E-TON">E-TON</option>
                            <option value="Chint">Chint</option>   
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
                            <input class="custom-control-input" type="checkbox" name="mcb[Three Pole][name][]" value="55 AMP" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label" for="55-amp-three">55 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Three Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                            <option value="Siemens">Siemens</option>
                            <option value="E-TON">E-TON</option>
                            <option value="Chint">Chint</option>   
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <div class="md-form-group">
                            <input class="md-form-control" type="text" id="connector_field" placeholder="qty" name="mcb[Three Pole][qty][]" spellcheck="false">
                            <label class="md-control-label"></label>
                        </div>
                    </div>
                </div>  <!-- end 110 V Ac Options -->
                <br>
        
            <br>
        </div> <!-- end of mcb details --> 



        <div class="clearfix"></div>
        <br>
        <div class="col-xs-4">
            <label class="control-label" for="pfr-need">PFR Need:<sup class="text-primary">*</sup> :</label>
        </div>

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
        <br>
          
            <label class="col-xs-3 control-label" for="pfr-type">PFR Type<sup class="text-primary">*</sup> :</label>
            <div class="col-xs-9">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="pfr-type" name="overload[pfr_type]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>    
     

             <br>
        <div class="col-xs-4">
            <label class="control-label" for="smps">SMPS:<sup class="text-primary">*</sup> :</label>
        </div>

        <div class="col-md-12">
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="overload[smps]" value="12 V 5A">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">12 V 5A</span>
            </label>

            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="overload[smps]" value="12 V 10A">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">12 V 10A</span>
            </label>
             <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="overload[smps]" value="24 V 5A">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">24 V 5A</span>
            </label>

             <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="overload[smps]" value="24 V 10A">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">24 V 10A</span>
            </label>
        </div>

        
            <!--   <label class="col-xs-3 control-label" for="sr-no">SR No<sup class="text-primary">*</sup> :</label>
            <div class="col-xs-9">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="sr-no" name="overload[smps_sr_no]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>    
        -->
        <div class="clearfix"></div>
        <br><br>
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
        </div>  <!-- connecter & wire details -->
        <br>
        <div class="col-sm-12">
            <div class="col-sm-4">
                <label>Connector Field:</label>
            </div>
            <div class="col-sm-8 col-xs-12">
                <div class="col-xs-4">
                    <input class="md-form-control" type="text" id="wire_filed" name="connector_field[qty]" placeholder="qty" spellcheck="false">
                </div>
                <div class="col-xs-4">
                    <input class="md-form-control" type="text" id="wire_filed" name="connector_field[size]" placeholder="size" spellcheck="false">
                </div>
                <div class="col-xs-4">
                    <input class="md-form-control" type="text" id="wire_filed" name="connector_field[make]" placeholder="make" spellcheck="false">
                </div>
            </div>
        </div>   <!-- connector feild -->
        <div class="col-sm-12">
            <div class="col-sm-4">
                <label>Connector Power:</label>
            </div>
            <div class="col-sm-8 col-xs-12">
                <div class="col-xs-4">
                    <input class="md-form-control" type="text" id="wire_filed" name="connector_power[qty]" placeholder="qty" spellcheck="false">
                </div>
                <div class="col-xs-4">
                    <input class="md-form-control" type="text" id="wire_filed" name="connector_power[size]" placeholder="size" spellcheck="false">
                </div>
                <div class="col-xs-4">
                    <input class="md-form-control" type="text" id="wire_filed" name="connector_power[make]" placeholder="make" spellcheck="false">
                </div>
            </div>
        </div> <!--  connector power -->
        <div class="col-sm-12">
            <div class="col-sm-4">
                <label>Wire Field:</label>
            </div>
            <div class="col-sm-8 col-xs-12">
                <div class="col-xs-4">
                    <input class="md-form-control" type="text" id="wire_filed" name="wire_field[qty]" placeholder="qty" spellcheck="false">
                </div>
                <div class="col-xs-4">
                    <input class="md-form-control" type="text" id="wire_filed" name="wire_field[size]" placeholder="size" spellcheck="false">
                </div>
                <div class="col-xs-4">
                    <input class="md-form-control" type="text" id="wire_filed" name="wire_field[make]" placeholder="make" spellcheck="false">
                </div>
            </div>
        </div>  <!-- end wire field -->
        <div class="col-sm-12">
            <div class="col-sm-4">
                <label>Wire Power:</label>
            </div>
            <div class="col-sm-8 col-xs-12">
                <div class="col-xs-4">
                    <input class="md-form-control" type="text" id="wire_filed" name="wire_power[qty]" placeholder="qty" spellcheck="false">
                </div>
                <div class="col-xs-4">
                    <input class="md-form-control" type="text" id="wire_filed" name="wire_power[size]" placeholder="size" spellcheck="false">
                </div>
                <div class="col-xs-4">
                    <input class="md-form-control" type="text" id="wire_filed" name="wire_power[make]" placeholder="make" spellcheck="false">
                </div>
            </div>
        </div>  <!-- end wire power -->
        <div class="clearfix"></div>
        <br><br>
        <div class="col-xs-12">
            <label class="control-label" for="connector_field">Transformer<sup class="text-primary">*</sup> :</label><br>
        </div>

        <div class="col-xs-12">
            <div class="col-sm-6">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Transformer[name][]" value="Input 230 V Output-110V, 24V, 12V">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">
                        Input 230 V Output-110V, 24V, 12V
                    </span>
                </label>
            </div>
           
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Transformer[name][]" value="Input 440 V Output-110V, 24V, 12V" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">
                        Input 440 V Output-110V, 24V, 12V
                    </span>
                </label>
            </div>
          
            <div class="clearfix"></div>

            <div class="col-sm-6">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Transformer[name][]" value="Input 440 V Output-230V ,110V , 24V, 12V" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">
                        Input 440 V Output-230V ,110V , 24V, 12V
                    </span>
                </label>
            </div>
          
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Transformer[name][]" value="Input 440 V Output-230V ,110V ,48V , 24V , 12V" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="ics-100">
                        Input 440 V Output-230V ,110V ,48V , 24V , 12V
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
          
        </div>  <!--  end Transformer -->
        <br><br>
        <label class="col-md-12 col-xs-12 control-label" for="box-size">LINE CHOKE<sup class="text-primary">*</sup> :</label><br><br>
        <div class="col-md-12">
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="drive[line_choke]" value="5HP">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">5HP</span>
            </label>

            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="drive[line_choke]" value="7.5HP">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">7.5HP</span>
            </label>

            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="drive[line_choke]" value="10HP">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">10HP</span>
            </label>

            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="drive[line_choke]" value="15HP">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">15HP</span>
            </label>
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="drive[line_choke]" value="20HP">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">20HP</span>
            </label>    
        </div> 
        <br><br>
        <div class="clearfix"></div>
        @isset($drive_detail['drive_details'])
        @if($drive_detail['drive_details'] != 'Supplied By Us')
        <label class="col-sm-4 control-label" for="drive">Drive</label><br><br>
<div class="col-md-12">
    <div class="col-sm-6">
        <label class="control-label" for="anyrequire">Make & Modle<sup class="text-primary">*</sup> :</label>
    </div>
    <div class="col-sm-6">
        <div class="md-form-group">
             <select name="drive[make_modle]" class="form-control" data-parsley-required="true">
                <option selected disabled>!--Select Drive--!</option>
                <option value="Yaskawa">Yaskawa</option>
                <option value="Fuji">Fuji</option>
                <option value="Toshiba">Toshiba</option>
                <option value="Delta">Delta</option>
                <option value="Invertek">Invertek</option>
            </select>
        </div>
    </div>
    <div class="col-sm-6">

        <label class="control-label" for="anyrequire">Drive HP:<sup class="text-primary">*</sup> :</label>
    </div>
    <div class="col-sm-6">
        <div class="md-form-group">
             <select name="drive[drive_hp]" class="form-control" data-parsley-required="true">
                <option selected disabled>!--Select Drive HP--!</option>
                <option value="5 Hp">5 Hp</option>
                <option value="7.5 Hp">7.5 Hp</option>
                <option value="10 Hp">10 Hp</option>
                <option value="15 Hp">15 Hp</option>
                <option value="20 Hp">20 Hp</option>
                <option value="25 Hp">25 Hp</option>
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <label class="control-label" for="anyrequire">DBR KW:<sup class="text-primary">*</sup> :</label>
    </div>
    <div class="col-sm-6">
        <div class="md-form-group">
             <select name="drive[dbr_kw]" class="form-control" data-parsley-required="true">
                <option selected disabled>!--Select DBR KW--!</option>
                <option value="750">750</option>
                <option value="1000">1000</option>
                <option value="1500">1500</option>
                <option value="2000">2000</option>
                <option value="2500">2500</option>
                <option value="3000">3000</option>
            </select>
        </div>
    </div>
    <div class="col-xs-6">
        <label class="control-label" for="anyrequire">DBR OHM:<sup class="text-primary">*</sup> :</label>
    </div>
    <div class="col-xs-6">
        <div class="md-form-group">
             <select name="drive[dbr_ohm]" class="form-control" data-parsley-required="true">
                <option selected disabled>!--Select DBR OHM--!</option>
                <option value="130 E">130 E</option>
                <option value="80/100 E">80/100 E</option>
                <option value="75/60 E">75/60 E</option>
                <option value="40/30 E">40/30 E</option>
                <option value="30/35 E">30/35 E</option>
                <option value="25 E">25 E</option>
                <option value="80 E">80 E</option>
                <option value=60 E">60 E</option>
                <option value=50 E">50 E</option>
                <option value="40 E">40 E</option>
                <option value="60/80 E">60/80 E</option>
                <option value="100/80 E">100/80 E</option>
                <option value="75/80 E">75/80 E</option>
                <option value="50/60 E">50/60 E</option>
                <option value="100 E">100 E</option>
                <option value="75 E">75 E</option>
            </select>
        </div>
    </div>
    <div class="col-xs-6">
        <label class="control-label" for="anyrequire">QTY:<sup class="text-primary">*</sup> :</label>
    </div>
    <div class="col-xs-6">
        <div class="md-form-group">
            <input class="md-form-control" type="text" id="anyrequire" name="drive[qty]" spellcheck="false">
            <label class="md-control-label"></label>
        </div>
    </div>
</div>
@endif
@endisset
<div class="col-md-12">
            <div class="col-sm-6">
                <label class="control-label" for="pg-card">PG CARD <sup class="text-primary">*</sup> :</label>
            </div>
            <div class="col-sm-6">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="pg-card" name="pg-card" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div> 
        </div>  <!-- if any -->

        <div class="col-xs-12">
            <div class="12"><label class="control-label" for="nut-bolt">Nut Bolt<sup class="text-primary">*</sup> :-</label></div>
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
        </div>  <!-- end nut bold -->
        <div class="col-xs-12">
            <div class="12"><label class="control-label" for="wiser">Wiser<sup class="text-primary">*</sup> :-</label></div>
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
        </div>   <!-- end wiser -->

        <div class="col-xs-12">
            <div class="12"><label class="control-label" for="lug">Lug<sup class="text-primary">*</sup> :-</label></div>
            <div class="col-xs-4">
                <label class="col-sm-7 control-label" for="0.5mm">0.5mm<sup class="text-primary">*</sup> :</label>
                <div class="col-sm-5">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="0.5mm" name="lug[0.5mm]" spellcheck="false">
                        <label class="md-control-label"></label>
                    </div>
                </div> 
            </div>
            <div class="col-xs-4">
                <label class="col-sm-6 control-label" for="2in">2in<sup class="text-primary">*</sup> :</label>
                <div class="col-sm-6">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="2in" name="lug[2in]" spellcheck="false">
                        <label class="md-control-label"></label>
                    </div>
                </div> 
            </div>
            <div class="col-xs-4">
                <label class="col-sm-7 control-label" for="2.5mm">2.5mm<sup class="text-primary">*</sup> :</label>
                <div class="col-sm-5">
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="2.5mm" name="lug[2.5mm]" spellcheck="false">
                        <label class="md-control-label"></label>
                    </div>
                </div> 
            </div>
            <div class="col-xs-6">
                <label class="col-sm-6 control-label" for="4mm-ring">4 mm Ring<sup class="text-primary">*</sup> :</label>
                <div class="col-sm-6">        
                    <div class="md-form-group">
                        <input class="md-form-control" type="text" id="4mm-ring" name="lug[4mm-ring]" spellcheck="false">
                        <label class="md-control-label"></label>
                    </div>
                </div> 
            </div>
        </div><!--  end lug -->
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
        </div>  <!-- if any -->

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

    </div></div>