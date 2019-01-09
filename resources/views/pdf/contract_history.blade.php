<!DOCTYPE html>
<html>
<head>
	<title>Test Results</title>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<style>
	@media print {
		body {
			-webkit-print-color-adjust: exact;
		}
	}
	img { padding: 10px; }
	.bo { border: 1px solid #000; }
	.table-bordered>tbody>tr>td, 
	.table-bordered>tfoot>tr>td, 
	.table-bordered>thead>tr>td {
		border: 1px solid #000;
		font-size: 18px;
	}
	table { page-break-inside:auto }
	tr    { page-break-inside:avoid; page-break-after:auto }
</style>
</head>
<body>
   <div class="container">
   	
    
     <h3 class="text-center" style="margin-top: 50px;">
       <img src="{{ asset('img/logo.jpg') }}" width="10%">
    </h3>

    <table class="table table-bordered" style="margin-top: 35px;">
     <tr>
       <td><strong>Contact No. </strong>{{$contract->mobile_number}}</td>
       <td><strong>Date: </strong>{{ \Carbon\Carbon::parse($contract->contract_date)->format('d/m/Y')}}</td>
       <td><strong>Requirement: </strong>  {{ $contract->detail->control_type ?? '' }}</td>
    </tr>
    <tr>
     <td><strong>Client Name: </strong>{{$contract->client_name}}</td>
     <td><strong>Site Address: </strong>{{$contract->site_address}}</td>
     <td><strong>Person Contact: </strong>{{$contract->site_address}}</td>
  </tr>
  <tr>
     <td><strong>Company Name:</strong>{{$contract->client_name}}</td>
     <td><strong>Contact Person:</strong>{{$contract->contact_person}}</td>
     <td></td>
  </tr>
</table>

<!-- end first block -->


<h3 class="text-center" style="margin-top: 50px;">CONTRACT FOR : {{ $contract->detail->control_type ?? '' }}</h3>

    @php 
    $door_mode = json_decode($contract->detail->door_mode,true);
    $controllers = json_decode($contract->detail->ard_need_for_controller,true) ?? '';
    $drive_detail = json_decode($contract->detail->drive_details,true);
    $ard_need = json_decode($contract->detail->ard_need_for_controller,true);
    $other_features = json_decode($contract->detail->other_features);
    $other_accessories = json_decode($contract->detail->other_accessories);
    @endphp
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td class="col-xs-6">Control Type:</td> 
          <td class="col-xs-6">{{ $contract->detail->control_type ?? '' }}</td> 
        </tr>
        @if(isset($contract->detail->no_of_quantity))
        <tr>
          <td class="col-xs-6">No of Quantity</td>
          <td class="col-xs-6">{{$contract->detail->no_of_quantity}}</td>
        </tr>
        @endif
        @if(isset($contract->detail->integrated_type))
        <tr>
          <td class="col-xs-6">Integrated Type:</td> 
          <td class="col-xs-6">{{ $contract->detail->integrated_type ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->motor_hp))
        <tr>
          <td class="col-xs-6">Motor HP:</td> 
          <td class="col-xs-6">{{ $contract->detail->motor_hp ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->motor_type))
        <tr>
          <td class="col-xs-6">Motor Type:</td> 
          <td class="col-xs-6">{{ $contract->detail->motor_type ?? '' }}</td> 
        </tr>
        @endif


        @if(isset($door_mode['door_mode']))
        <tr>
          <td class="col-xs-6">Door Mode:</td> 
          <td class="col-xs-6">{{ $door_mode['door_mode'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @if(isset( $door_mode['door_mode_auto_type'] ))
            Door Mode Auto Type:{{ $door_mode['door_mode_auto_type'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif

            @if(isset($door_mode['no_of_car_door']))
            No Of Car Door: {{ $door_mode['no_of_car_door'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset($door_mode['no_of_landing_door']))
            No Of Landing Door:{{ $door_mode['no_of_landing_door'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset($door_mode['door_motor_HP']))
            Door Motor HP:{{ $door_mode['door_motor_HP'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $door_mode['door_motor_voltage']))
            Door Mode Auto Type:{{ $door_mode['door_motor_voltage'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset($door_mode['door_drive']))
            Door Drive:{{ $door_mode['door_drive'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $door_mode['yaskawa'] ))
            Yaskawa:{{ $door_mode['yaskawa'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $door_mode['innovance']))
            Innovance:{{ $door_mode['innovance'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset($door_mode['invt']))
            Invt:{{ $door_mode['invt'] ?? '' }}&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            @endif

          </td> 
        </tr>
        @endif


        @if(isset( $drive_detail['drive_details']))
        <tr>
          <td class="col-xs-6">Drive Detail:</td> 
          <td class="col-xs-6">{{$drive_detail['drive_details'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @if(isset( $drive_detail['monarch']))
            Monarch:{{ $drive_detail['monarch'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $drive_detail['drive_make_by']))
            Drive Make By:{{ $drive_detail['drive_make_by'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $drive_detail['INVT_GD300']))
            INVT_GD300:{{ $drive_detail['INVT_GD300'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $drive_detail['INOVANCE_MD380']))
            INOVANCE_MD380:{{ $drive_detail['INOVANCE_MD380'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $drive_detail['DELTA_E_SERIES']))
            DELTA_E_SERIES:{{ $drive_detail['DELTA_E_SERIES'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $drive_detail['FUJI_ACE']))
            FUJI_ACE:{{ $drive_detail['FUJI_ACE'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $drive_detail['YASKAWA_V1000']))
            YASKAWA_V1000:{{ $drive_detail['YASKAWA_V1000'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $drive_detail['INVERTEK_GEARED']))
            INVERTEK_GEARED:{{ $drive_detail['INVERTEK_GEARED'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $drive_detail['INVT_GD300L']))
            INVT_GD300L:{{ $drive_detail['INVT_GD300L'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $drive_detail['DELTA_ED_SERIES']))
            DELTA_ED_SERIES:{{ $drive_detail['DELTA_ED_SERIES'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $drive_detail['YASKAWA_L1000']))
            YASKAWA_L1000:{{ $drive_detail['YASKAWA_L1000'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $drive_detail['INVERTEK_GEARLESS']))
            INVERTEK_GEARLESS:{{ $drive_detail['INVERTEK_GEARLESS'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            
            
            @if(isset( $drive_detail['drive_modle']))
            Drive Modle:{{ $drive_detail['drive_modle'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $drive_detail['drive_HP']))
            drive_HP:{{ $drive_detail['drive_HP'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $drive_detail['DBR_rating']))
            DBR_rating:{{ $drive_detail['DBR_rating'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset( $drive_detail['monrch_drive_hp']))
            Monrch Drive HP:{{ $drive_detail['monrch_drive_hp'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
          </td> 
        </tr>
        @endif
        @if(isset( $ard_need['controller']))
        <tr>
          <td class="col-xs-6">ARD Need For Controller:</td> 
          <td class="col-xs-6">{{ $ard_need['controller'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @if(isset($ard_need['control_make_by'] ))
            Control make by:{{ $ard_need['control_make_by'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset($ard_need['controller_control_type']))
            controller control type: {{ $ard_need['controller_control_type'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif
            @if(isset($ard_need['control_specification']))
            control specification:{{ $ard_need['control_specification'] ?? '' }}<br>&nbsp &nbsp &nbsp &nbsp
            @endif



          </td> 
        </tr>
        @endif


        @if(isset($contract->detail->duplex_system))
        <tr>
          <td class="col-xs-6">Duplex System:</td> 
          <td class="col-xs-6">{{ $contract->detail->duplex_system ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->indications))
        <tr>
          <td class="col-xs-6">Indications:</td> 
          <td class="col-xs-6">{{ $contract->detail->indications ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->reed_type))
        <tr>
          <td class="col-xs-6">Reed Type:</td> 
          <td class="col-xs-6">{{ $contract->detail->reed_type ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->collective_mode))
        <tr>
          <td class="col-xs-6">Collective Mode:</td> 
          <td class="col-xs-6">{{ $contract->detail->collective_mode ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->output_contractor))
        <tr>
          <td class="col-xs-6">Output contractor Require:</td> 
          <td class="col-xs-6">{{ $contract->detail->output_contractor ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->motor_brake_voltage))
        <tr>
          <td class="col-xs-6">Motor Brake Voltage:</td> 
          <td class="col-xs-6">{{ $contract->detail->motor_brake_voltage ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->drive_detail))
        <tr>
          <td class="col-xs-6">Drive Detail:</td> 
          <td class="col-xs-6">{{ $contract->detail->drive_detail ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->r_cam_voltage))
        <tr>
          <td class="col-xs-6">R cam Voltage:</td> 
          <td class="col-xs-6">{{ $contract->detail->r_cam_voltage ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->speed_of_lift))
        <tr>
          <td class="col-xs-6">Speed Of Lift:</td> 
          <td class="col-xs-6">{{ $contract->detail->speed_of_lift ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->register_capacitor_circuit))
        <tr>
          <td class="col-xs-6">Register Capacitor Circuit:</td> 
          <td class="col-xs-6">{{ $contract->detail->register_capacitor_circuit ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->display_voltag))
        <tr>
          <td class="col-xs-6"> COP & LOP Display Voltage:</td> 
          <td class="col-xs-6">{{ $contract->detail->display_voltag ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->voice_accouncement_system))
        <tr>
          <td class="col-xs-6"> Voice Accouncement System:</td> 
          <td class="col-xs-6">{{ $contract->detail->voice_accouncement_system ?? '' }}</td> 
        </tr>
        @endif

        @if(isset($contract->detail->choose_battery))
        <tr>
          <td class="col-xs-6">Choose Battery:</td> 
          <td class="col-xs-6">{{ $contract->detail->choose_battery}}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->contractor_coil_voltage))
        <tr>
          <td class="col-xs-6"> Contractor Coil Voltage:</td> 
          <td class="col-xs-6">{{ $contract->detail->contractor_coil_voltage ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->no_of_floor))
        <tr>
          <td class="col-xs-6"> No Of Floor:</td> 
          <td class="col-xs-6">{{ $contract->detail->no_of_floor ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->no_of_valve))
        <tr>
          <td class="col-xs-6"> No Of Valve:</td> 
          <td class="col-xs-6">{{ $contract->detail->no_of_valve ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->valve_coil_voltage))
        <tr>
          <td class="col-xs-6"> Valve Coil Voltage:</td> 
          <td class="col-xs-6">{{ $contract->detail->valve_coil_voltage ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->power_pack))
        <tr>
          <td class="col-xs-6"> Power Pack:</td> 
          <td class="col-xs-6">{{ $contract->detail->power_pack ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->ups_type_ard))
        <tr>
          <td class="col-xs-6"> UPS type ARD System:</td> 
          <td class="col-xs-6">{{ $contract->detail->ups_type_ard ?? '' }}</td>  
        </tr>
        @endif
        @if(isset($contract->detail->display_voltage))
        <tr>
          <td class="col-xs-6">Display Voltage:</td> 
          <td class="col-xs-6">{{ $contract->detail->display_voltage ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->voice_announcement_system))
        <tr>
          <td class="col-xs-6">Voice Announcement System:</td> 
          <td class="col-xs-6">{{ $contract->detail->voice_announcement_system ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->display_type))
        <tr>
          <td class="col-xs-6">Display Type:</td> 
          <td class="col-xs-6">{{ $contract->detail->display_type ?? '' }}</td> 
        </tr>
        @endif

        @if(isset($contract->detail->encoder_details))
        <tr>
          <td class="col-xs-6"> Encoder Details:</td> 
          <td class="col-xs-6">{{ $contract->detail->encoder_details ?? '' }}</td> 
        </tr>
        @endif 
        @if(isset($contract->detail->pg_card_details))
        <tr>
          <td class="col-xs-6"> PG Card Details:</td> 
          <td class="col-xs-6">{{ $contract->detail->pg_card_details ?? '' }}</td> 
        </tr>
        @endif

        @if(isset($contract->detail->communication_mode))
        <tr>
          <td class="col-xs-6"> Communication Mode:</td> 
          <td class="col-xs-6">{{$contract->detail->communication_mode ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->other_features))
        <tr>
          <td class="col-xs-6"> Other Features:</td> 
          <td class="col-xs-6">{{ implode(',',$other_features) }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->other_accessories))
        <tr>
          <td class="col-xs-6"> Other Accessories:</td> 
          <td class="col-xs-6">{{ implode(',',$other_accessories) }}</td> 
        </tr>
        @endif

        @if(isset($contract->detail->gearless_battery))
        <tr>
          <td class="col-xs-6"> Battery:</td> 
          <td class="col-xs-6">{{ $contract->detail->gearless_battery ?? '' }}</td> 
        </tr>
        @endif

        @if(isset($contract->detail->gearless_quantity ))
        <tr>
          <td class="col-xs-6"> Battery Quantity:</td> 
          <td class="col-xs-6">{{ $contract->detail->gearless_quantity  ?? '' }}</td> 
        </tr>
        @endif

        @if(isset($contract->detail->ups))
        <tr>
          <td class="col-xs-6"> UPS:</td> 
          <td class="col-xs-6">{{ $contract->detail->ups ?? '' }}</td> 
        </tr>
        @endif
        @if(isset($contract->detail->other_specification))
        <tr>
          <td class="col-xs-6"> Other Specification:</td> 
          <td class="col-xs-6">{{ $contract->detail->other_specification ?? '' }}</td> 
        </tr>
        @endif

      </tbody>
    </table>
<!-- end second block -->

<h3 class="text-center" style="margin-top: 50px;">STOCK REPORT</h3>

<table class="table table-bordered">
            <tbody>
              @php 
              $logic_board_details = json_decode($contract->supervisorStockAssign->logic_board_details??'',true)??[];
              $transformer_details = json_decode($contract->supervisorStockAssign->transformer_details??'',true)??[];
              $contractor_details = json_decode($contract->supervisorStockAssign->contractor_details??'',true)??[];
              $mcb_details = json_decode($contract->supervisorStockAssign->mcb_details??'',true)??[];
              $transformer_detail = json_decode($contract->supervisorStockAssign->transformer_details??'',true)??[];
              $connector_wire_details = json_decode($contract->supervisorStockAssign->connector_wire_details??'',true)??[];
              $overload_details = json_decode($contract->supervisorStockAssign->overload_details??'',true)??[];
              $nutbolt = json_decode($contract->supervisorStockAssign->nutbolt??'',true)??[];
              $wiser = json_decode($contract->supervisorStockAssign->wiser??'',true)??[];
              $lug = json_decode($contract->supervisorStockAssign->lug??'',true)??[];
              @endphp
              <tr>
                <td class="col-xs-6">Control Type:</td> 
                <td class="col-xs-6">{{ $contract->supervisorStockAssign->control_type ?? '' }}</td>
              </tr>
              <tr>
                <td class="col-xs-6">Due Date:</td> 
                <td class="col-xs-6">{{ $contract->supervisorStockAssign->due_date ?? '' }}</td>
              </tr>
              <tr>
                <td class="col-xs-6">Control:</td> 
                <td class="col-xs-6">{{ $contract->supervisorStockAssign->control ?? '' }}</td>
              </tr>
              <tr>
                <td class="col-xs-6">Control No:</td> 
                <td class="col-xs-6">{{ $contract->supervisorStockAssign->control_no ?? '' }}</td>
              </tr>
              <tr>
                <td class="col-xs-6">Logic Board Details:</td> 
                <td class="col-xs-6">
                @if(array_key_exists('name',$logic_board_details) && isset($logic_board_details['name']))

                  @for($i=0; $i < count($logic_board_details['name']); $i++)
                Name:{{$logic_board_details['name'][$i]}}</br>
                SR_No:{{$logic_board_details['sr_no'][$i]}}
                @endfor
                @endif
                <br>
              </td>
            </tr>
            <tr>
              <td class="col-xs-6">Box Size:</td> 
              <td class="col-xs-6">{{ $contract->supervisorStockAssign->box_size ?? '' }}</td>
            </tr>
            <tr>
              <td class="col-xs-6">Contractor Details:</td> 
              <td class="col-xs-6">110 V Ac:<br>
                @if(array_key_exists('110 V Ac',$contractor_details) && isset($contractor_details['110 V Ac']['name']))
                @for($i=0; $i < count($contractor_details['110 V Ac']['name']); $i++)
                Name:{{$contractor_details['110 V Ac']['name'][$i]}}<br/>
                Company:{{$contractor_details['110 V Ac']['company'][$i]}}<br/>
                Quantity:{{$contractor_details['110 V Ac']['qty'][$i]}}<br/>
                @endfor
                @endif
                <br>
                Relay:<br>
                @if(array_key_exists('Relay',$contractor_details) && isset($contractor_details['Relay']['name']))
                @for($i=0; $i < count($contractor_details['Relay']['name']); $i++)
                Name:{{$contractor_details['Relay']['name'][$i]??''}}<br/>
                Company:{{$contractor_details['Relay']['company'][$i]??''}}<br/>
                Quantity:{{$contractor_details['Relay']['qty'][$i]??''}}<br/>
                @endfor
                @endif


              </td>
            </tr>
            <tr>
              <td class="col-xs-6">MCB Details:</td> 
              <td class="col-xs-6">Three Pole:<br>
                @if(array_key_exists('Three Pole',$mcb_details) && isset($mcb_details['Three Pole']['name']))
                @for($i=0; $i < count($mcb_details['Three Pole']['name']); $i++)
                Name:{{$mcb_details['Three Pole']['name'][$i]}}<br/>
                Company:{{$mcb_details['Three Pole']['company'][$i]}}<br/>
                Quantity:{{$mcb_details['Three Pole']['qty'][$i]}}<br/>
                @endfor
                @endif
                <br>
                Two Pole:<br>
                @if(array_key_exists('Two Pole',$mcb_details) && isset($mcb_details['Two Pole']['name']))
                @for($i=0; $i < count($mcb_details['Two Pole']['name']); $i++)
                Name:{{$mcb_details['Two Pole']['name'][$i]}}<br/>
                Company:{{$mcb_details['Two Pole']['company'][$i]}}<br/>
                Quantity:{{$mcb_details['Two Pole']['qty'][$i]}}<br/>
                @endfor
                @endif
                <br>
                Two Pole:<br>
                @if(array_key_exists('Single Pole',$mcb_details) && isset($mcb_details['Single Pole']['name']))
                @for($i=0; $i < count($mcb_details['Single Pole']['company']); $i++)
                {{--Name:{{$mcb_details['Single Pole']['name'][$i]}}<br/>--}}
                Company:{{$mcb_details['Single Pole']['company'][$i]}}<br/>
                Quantity:{{$mcb_details['Single Pole']['qty'][$i]}}<br/>
                @endfor
                @endif

              </td>
            </tr>
            @if(!empty($overload_details))
            <tr>
              
              <td class="col-xs-6">Overload Details:</td> 
              @if(array_key_exists('pfr_need',$overload_details))
              <td class="col-xs-6">prf_need:{{$overload_details['pfr_need']}}
                @endif
                @if(array_key_exists('pfr_type',$overload_details)  && isset($overload_details['prf_type']))
                <br>
                prf_type:{{$overload_details['prf_type']}}
                @endif
              </td>
            </tr>
            @endif
            <tr>
              @if(!empty($connector_wire_details) && count($connector_wire_details)>0)
              <td class="col-xs-6">Connection Wire Details:</td> 
              <td class="col-xs-6">connector_field:<br>
                Quantity:{{$connector_wire_details['connector_field']['qty']??''}}<br/>
                Size:{{$connector_wire_details['connector_field']['size']??''}}<br/>
                Make:{{$connector_wire_details['connector_field']['make']??''}}<br/><br>
                connector_power:<br>
                Quantity:{{$connector_wire_details['connector_power']['qty']??''}}<br/>
                Size:{{$connector_wire_details['connector_power']['size']??''}}<br/>
                Make:{{$connector_wire_details['connector_power']['make']??''}}<br/>
                <br/>
                wire_field:<br>
                Quantity:{{$connector_wire_details['wire_field']['qty']??''}}<br/>
                Size:{{$connector_wire_details['wire_field']['size']??''}}<br/>
                Make:{{$connector_wire_details['wire_field']['make']??''}}<br/>
                <br/>
                wire_power:<br>
                Quantity:{{$connector_wire_details['wire_power']['qty']??''}}<br/>
                Size:{{$connector_wire_details['wire_power']['size']??''}}<br/>
                Make:{{$connector_wire_details['wire_power']['make']??''}}<br/>
              </td>
              @endif
            </tr>
            <tr>
              <td class="col-xs-6">Transformer Details:</td> 
              <td class="col-xs-6">
                @if(array_key_exists('sr_no',$transformer_detail))
                @for($i=0; $i < count($transformer_detail['sr_no']); $i++)
                Name:{{!empty($transformer_detail['sr_no'][$i])?$transformer_detail['sr_no'][$i]: ''}}<br/>
                Company:{{!empty($transformer_detail['name'][$i])?$transformer_detail['name'][$i]: ''}}<br/><br/>
                @endfor
                @endif

              </td>
            </tr>
            <tr>
              <td class="col-xs-6">Nut Bolt:</td> 
              <td class="col-xs-6">3mm:{{$nutbolt['3mm'] ??''}} Quantity<br>
                4mm:{{$nutbolt['4mm'] ??''}} Quantity<br>
                6mm:{{$nutbolt['6mm'] ??''}} Quantity
              </td>
            </tr>
            <tr>
              <td class="col-xs-6">Wiser:</td> 
              <td class="col-xs-6">3mm:{{$wiser['3mm']??'' }} Quantity<br>
                4mm:{{$wiser['4mm'] ??''}} Quantity<br>
                6mm:{{$wiser['6mm'] ??''}} Quantity
              </td>
            </tr>
            <tr>
              <td class="col-xs-6">Lug:</td> 
              <td class="col-xs-6">3mm:{{$wiser['3mm'] ??''}}Quantity<br>
                2in:{{$wiser['4mm'] ??''}} Quantity<br>
                2.5mm:{{$wiser['4mm'] ??''}} Quantity<br>
                4mm ring:{{$wiser['6mm'] ??''}} Quantity 
              </td>
            </tr>
            <tr>
              <td class="col-xs-6">Any Other Details:</td> 
              <td class="col-xs-6">{{ $contract->supervisorStockAssign->any_other_details ?? '' }}</td>
            </tr>
          </tbody>
        </table>
<!-- end third block -->

<table class="table table-bordered" style="margin-top: 35px;">
 <tr>
  <th width="20%">Description / qty</th>
  <td></td>
</tr>
</table>
<!-- end fourth block -->

<table class="table table-bordered" style="margin-top: 35px;">
   <tr>
    <td><strong>Technician Assigned:</strong> {{$contract->supervisorStockAssign->technician->name ?? ''}}</td>
    <td><strong>Date of assignment:</strong>{{$contract->supervisorStockAssign->created_at ?? ''}}</td>
    <td><strong>Stock assign date:</strong>
      @foreach($contract->remarks as $key => $value)

    @if($value['status'] == 'Assigned to Stock')
        {{$value['created_at']}}
    @endif


    @endforeach
  </td>
 </tr>
 <tr>
   <td><strong>Status :</strong>{{$contract->supervisorStockAssign->status ?? ''}} </td>
   <td><strong>Assembe complete date:</strong> {{$contract->supervisorStockAssign->due_date ?? ''}}</td>
   <td></td>
</tr>
<tr>
   <td><strong>Product serial no:</strong>  {{$contract->supervisorStockAssign->contract_serial_number ?? ''}}</td>
   <td></td>
   <td></td>
</tr>
</table>
<!-- end fifth block -->

<table class="table table-bordered" style="margin-top: 35px;">
  <tr>
    <td><strong>Tester assigned date:</strong>
    @foreach($contract->remarks as $key => $value)

    @if($value['status'] == 'Tester Assigned')
        {{$value['created_at']}}
    @endif


    @endforeach
    </td>
    <td><strong>Tester name:</strong>{{$contract->supervisorStockAssign->tester->name ?? ''}}</td>
 </tr>
 <tr>
  <td><strong>Test status:</strong> 
   @foreach($contract->remarks as $key => $value)

    @if($value['status'] == 'Tester Assigned')
        {{$value['status']}}
    @endif


    @endforeach

  </td>
  <td><strong>Tester remark:</strong>
   @foreach($contract->remarks as $key => $value)

    @if($value['status'] == 'Tester Assigned')
        {{$value['remark']}}
    @endif


    @endforeach
  </td>
</tr>
</table>
<!-- end sixth block -->

<h3 class="text-center" style="margin-top: 50px;">Test Report</h3>

<table class="table table-bordered" style="margin-top: 35px;">
  <tr>
    <th>Sr No. </th>
    <th>Test Cases</th>
    <th>Results</th>
 </tr>
 <tr>
  <td>1</td>
  <td></td>
  <td></td>
</tr>

</table>


</div>
</body>
</html>
