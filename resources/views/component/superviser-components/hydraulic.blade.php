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
                <input class="custom-control-input" value="ICS-100" type="radio" name="logic_board[name][]" value="">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">ICS-100</span>
            </label>
        </div>
      
        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="logic_board[name][]" value="HYDRO-02">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">HYDRO-02</span>
            </label>
        </div>
       
        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" value="ICS-2500" type="radio" name="logic_board[name][]" value="">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">ICS-2500</span>
            </label>
        </div>
      
    </div>   <!-- end first box -->
    <br>

    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            <label>Power Supply</label>
        </div>
       
        <br><br>
        <div class="col-xs-6">
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="power_supply[name][]" value="PS-01">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">PS-01</span>
            </label>
        </div>
        
        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="power_supply[name][]" value="PS-02/03">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">PS-02/03</span>
            </label>
        </div>
      
    </div>   <!-- end POWER SEPPLY -->
    <br>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            <label>Relay Card</label>
        </div>
    
        <br><br>
        <div class="col-xs-6">
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" value="HYDRO-RELAY" type="radio" name="relay_card[name][]" value="">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">HYDRO-RELAY</span>
            </label>
        </div>
      
        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="radio" value="UPS RELAY" name="relay_card[name][]" value="">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">UPS RELAY</span>
            </label>
        </div>
        
    </div>   <!-- end relay card -->
    <br>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            <label>Voice Card</label>
        </div>
      
        <br><br>
        <div class="col-xs-6">
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="voice_card[name][]" value="VOICE 04">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">VOICE 04</span>
            </label>
        </div>
       
        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="voice_card[name][]" value="SD-74B">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">SD-74B</span>
            </label>
        </div>
       
    </div>   <!-- end relay card -->
    <br>
    <div class="col-sm-12">
        <div class="col-sm-6 col-xs-6">
            <label>Other Card</label>
        </div>
      
    </div>
    <div class="clearfix"></div>
    <br>

    <div class="col-sm-12">
        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox" >
                <input class="custom-control-input" value="INS CARD" type="checkbox" name="other_card[name][]" >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label" for="ins-card">INS CARD</span>
            </label>
        </div>
      


        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox" >
                <input class="custom-control-input" value="TIMER" type="checkbox" name="other_card[name][]" >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label" for="timer">TIMER</span>
            </label>
        </div>
       
        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox" >
                <input class="custom-control-input" value="CNT DZ" type="checkbox" name="other_card[name][]" >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label" for="cnt-dz">CNT DZ</span>
            </label>
        </div>
      
        <div class="col-sm-6 col-xs-6">
            <label class="custom-control custom-control-primary custom-checkbox" >
                <input class="custom-control-input" value="24 V DC" type="checkbox" name="other_card[name][]" >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label" for="24v-dc">24 V DC</span>
            </label>
        </div>
       

    </div>
    <div class="clearfix"></div>

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
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" value="2" type="radio" name="box-size" value="">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">2 No</span>
        </label>
        <label class="custom-control custom-control-primary custom-radio">
            <input class="custom-control-input" value="3" type="radio" name="box-size" value="">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">3 No</span>
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
            <label class="custom-control-label" for="110-v-ac">110 V Ac</label>
        </div>
        <br>
        <div class="col-xs-6 hidden-xs text-center"><label>QTY</label></div>
        <div class="clearfix"></div>
        <div class="col-sm-12">  <!--  110 V Ac option start -->
            <div class="col-xs-4">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="9 AMP" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="9ampac">9 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="Schinder">Schinder</option>
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
                    <input class="custom-control-input" value="18 AMP" type="checkbox" name="Contractor[110 V AC][name][]" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="18ampac">18 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="Schinder">Schinder</option>
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
                    <span class="custom-control-label" for="25ampac">25 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="Schinder">Schinder</option>
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
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V Ac][name][]" value="32 AMP" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="32ampac">32 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="Schinder">Schinder</option>
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
                    <span class="custom-control-label" for="40ampac">40 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="Schinder">Schinder</option>
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
                    <input class="custom-control-input" type="checkbox" value="55 AMP" name="Contractor[110 V AC][name][]" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="55ampac">55 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="Schinder">Schinder</option>
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
                    <input class="custom-control-input" value="65 AMP" type="checkbox" name="Contractor[110 V AC][name][]" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="65ampac">65 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="Schinder">Schinder</option>
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
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="80 AMP" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="81ampac">80 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="Schinder">Schinder</option>
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
                    <input class="custom-control-input" type="checkbox" name="Contractor[110 V AC][name][]" value="115 AMP" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="115ampac">115 AMP</span>
                </label>
            </div>
            <div class="col-sm-4">
                <select name="Contractor[110 V AC][company][]" class="form-control">
                    <option selected disabled>!--Select Company--!</option>
                    <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="Schinder">Schinder</option>
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
                <label class="custom-control-label" for="230-v-dc">230 V DC</label>
            </div>

            <br>
            <div class="col-xs-6 hidden-xs text-center"><label>QTY</label></div>
            <div class="clearfix"></div>
            <div class="col-sm-12">  <!--  110 V Ac option start -->
                <div class="col-xs-4">
                    <label class="custom-control custom-control-primary custom-checkbox" >
                        <input class="custom-control-input" type="checkbox" name="Contractor[230 V DC][name][]" value="18 AMP" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="18ampdc">18 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="Contractor[230 V DC][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="Schinder">Schinder</option>
                    <option value="LS">LS</option>
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
                        <span class="custom-control-label" for="25ampdc">25 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="Contractor[230 V DC][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
                    <option value="Schinder">Schinder</option>
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
                        <span class="custom-control-label" for="24v">24 V</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="Contractor[Relay][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option value="11 Pin">11 Pin</option>
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
                        <option value="11 Pin">11 Pin</option>
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
            <label class="custom-control-label" for="single-pole">Single Pole</label><br>
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
                        <span class="custom-control-label" for="6ampsingle">6 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="mcb[Single Pole][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>             
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
                        <input class="custom-control-input" type="checkbox" name="mcb[Single Pole][name][]" value="20 AMP" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="20ampsingle">20 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="mcb[Single Pole][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>  
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
                        <input class="custom-control-input" type="checkbox" name="mcb[Single Pole][name][]" value="32 AMP" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="32ampsingle">32 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="mcb[Single Pole][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option> 
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
                        <input class="custom-control-input" type="checkbox" name="mcb[Single Pole][name][]" value="40 AMP" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="40ampsingle">40 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="mcb[Single Pole][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                       <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>   
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
                        <input class="custom-control-input" type="checkbox" name="mcb[Single Pole][name][]" value="55 AMP" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label" for="55ampsingle">55 AMP</span>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select name="mcb[Single Pole][company][]" class="form-control">
                        <option selected disabled>!--Select Company--!</option>
                        <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>   
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
            <div class="col-sm-12">  <!-- mcb-details-option start -->
                <div class="col-sm-12">  <!--  110 V Ac option start -->
                    <div class="col-sm-4">
                        <label class="custom-control custom-control-primary custom-checkbox" >
                            <input class="custom-control-input" type="checkbox" name="mcb[Two Pole][name][]" value="6 AMP" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label" for="6amptwo">6 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Two Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                            <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>                   
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
                            <input class="custom-control-input" type="checkbox" name="mcb[Two Pole][name][]" value="20 AMP" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label" for="20amptwo">20 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Two Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                         <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>  
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
            </div> <!-- end of mcb details --> 
            <div class="col-xs-6">
                <label class="custom-control-label" for="three-pole">Three Pole</label><br>
            </div>
            <div class="col-xs-6 text-center hidden-xs"><label>QTY</label></div>
            <br>
            <div class="clearfix"></div>
            <div class="col-sm-12">  <!-- mcb-details-option start -->
                <div class="col-sm-12">  <!--  110 V Ac option start -->
                    <div class="col-sm-4">
                        <label class="custom-control custom-control-primary custom-checkbox" >
                            <input class="custom-control-input" type="checkbox" name="mcb[Three Pole][name][]" value="6 AMP" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label" for="6ampthree">6 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Three Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                           <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>                   
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
                            <input class="custom-control-input" type="checkbox" name="mcb[Three Pole][name][]" value="20 AMP" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label" for="20ampthree">20 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Three Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                           <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
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
                            <span class="custom-control-label" for="30ampthree">32 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Three Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                           <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
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
                            <span class="custom-control-label" for="40ampthree">40 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Three Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                            <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
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
                            <span class="custom-control-label" for="55ampthree">55 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Three Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                           <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
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
                            <input class="custom-control-input" type="checkbox" name="mcb[Three Pole][name][]" value="65 AMP" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label" for="65ampthree">65 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Three Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                            <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>   
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
                            <input class="custom-control-input" type="checkbox" name="mcb[Three Pole][name][]" value="80 AMP" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label" for="80ampthree">80 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Three Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                            <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option>
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
                            <input class="custom-control-input" type="checkbox" name="mcb[Three Pole][name][]" value="115 AMP" >
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-label" for="115ampthree">115 AMP</span>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <select name="mcb[Three Pole][company][]" class="form-control">
                            <option selected disabled>!--Select Company--!</option>
                            <option value="Siemens">Siemens</option>
                    <option value="Chint">Chint</option>
                    <option value="E-TON">E-TON</option> 
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
            </div> <!-- end of mcb details --> 
            <br>
        </div> <!-- end of mcb details --> 

        <div class="clearfix"></div>
        <br><br>

        <div class="col-xs-4">
            <label class="control-label" for="order_taken_by">Over Load Details<sup class="text-primary">*</sup> :</label>
        </div>

        <div class="col-md-12">
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input"  type="radio" name="overload[name]" value="06-10">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">06-10</span>
            </label>

            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="overload[name]" value="9-14">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">9-14</span>
            </label>
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="overload[name]" value="13-22">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">13-22</span>
            </label>
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="overload[name]" value="20-33">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">20-33</span>
            </label>
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="overload[name]" value="30-50">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">30-50</span>
            </label>
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="overload[name]" value="45-75">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">45-75</span>
            </label>
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="overload[name]" value="55-110">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">55-110</span>
            </label>
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="overload[name]" value="1.5-2.5">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">1.5-2.5</span>
            </label>
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="overload[name]" value="4-6">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">4-6</span>
            </label>
        </div> <!--  end over load details -->
        <br>
        <div class="col-xs-4">
            <label class="control-label" for="order_taken_by">PFR Need<sup class="text-primary">*</sup> :</label>
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

        <div class="col-xs-12">
            <label class="col-xs-3 control-label" for="prfe_type">PFR Type<sup class="text-primary">*</sup> :</label>
            <div class="col-xs-9">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="prfe_type" name="overload[pfr_type]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>    
        </div>
        <div class="clearfix"></div>
        <br>

        <div class="col-xs-4"><label class="control-label" for="order_taken_by">Door Drive<sup class="text-primary">*</sup> :</label></div>

        <div class="col-md-12">
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="drive[door_drive]" value="1 AH">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">1 AH</span>
            </label>

            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="drive[door_drive]" value="2 AH">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">2 AH</span>
            </label>
            <label class="custom-control custom-control-primary custom-radio">
                <input class="custom-control-input" type="radio" name="drive[door_drive]" value="3 AH">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">3 AH</span>
            </label>
        </div>  <!-- end door Dirve -->
        <div class="col-xs-12">
            <label class="col-xs-3 control-label" for="make">Make<sup class="text-primary">*</sup> :</label>
            <div class="col-xs-9">
                <div class="md-form-group">
                    <input class="md-form-control" type="text" id="make" name="drive[make]" spellcheck="false">
                    <label class="md-control-label"></label>
                </div>
            </div>    
        </div> <!-- end make -->
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
                    <input class="md-form-control" type="text"  name="connector_field[qty]" placeholder="qty" spellcheck="false">
                    </div>
                    <div class="col-xs-4">
                    <input class="md-form-control" type="text"  name="connector_field[size]" placeholder="size" spellcheck="false">
                    </div>
                    <div class="col-xs-4">
                    <input class="md-form-control" type="text"  name="connector_field[make]" placeholder="make" spellcheck="false">
                    </div>
            </div>
        </div>   <!-- connector feild -->
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
        </div> <!--  connector power -->
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
        </div>  <!-- end wire field -->
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
        </div>  <!-- end wire power -->
        <div class="clearfix"></div>
        <br><br>
        <div class="col-xs-12">
            <label class="control-label" for="connector_field">Transformer<sup class="text-primary">*</sup> :</label><br>
        </div>

        <div class="col-xs-12">
            <div class="col-sm-6">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="radio" name="Transformer[name][]" value="Input 230 V Output-110V, 24V, 12V" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="trans1">
                        Input 230 V Output-110V, 24V, 12V
                    </span>
                </label>
            </div>
         
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Transformer[name][]" value="Input 440 V Output-110V, 24V, 12V" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="trans2">
                        Input 440 V Output-110V, 24V, 12V
                    </span>
                </label>
            </div>
          
            <div class="clearfix"></div>

            <div class="col-sm-6">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Transformer[name][]" value="Input 440 V Output-230V ,110V , 24V, 12V" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="trans3">
                        Input 440 V Output-230V ,110V , 24V, 12V
                    </span>
                </label>
            </div>
          
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <label class="custom-control custom-control-primary custom-checkbox" >
                    <input class="custom-control-input" type="checkbox" name="Transformer[name][]" value="Input 440 V Output-230V ,110V,48V, 24V, 12V" >
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label" for="trans4">
                        Input 440 V Output-230V ,110V,48V, 24V, 12V
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
        </div>  <!-- end nut bold -->
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
        </div>   <!-- end wiser -->

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
                <select name="technician" class="form-control" required>
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
                <select name="stock" class="form-control" required>
                    <option selected disabled>!--Select Company--!</option>
                    @foreach($stocks as $stock)
                    <option value="{{$stock->id}}">{{$stock->name}}</option>
                    @endforeach
                </select>
            </div>
            <label class="col-sm-6 control-label" for="contract_date">Due Date<sup class="text-primary">*</sup></label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="Date" value="" data-provide="datepicker" data-date-today-highlight="true" data-date-autoclose="true" data-date-format="DD, MM d, yyyy" name="contract_date" required>
                <span class="form-control-feedback" aria-hidden="true">
                    <span class="icon"></span>
                </span>
            </div><br>
            <button class="btn btn-success pull-right btnSubmit">Submit</button>
        </div>  <!--  end of class -->

    </div></div>