<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
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
	<div class="container-fluid">
		<div class="col-xs-12 bo pb-10">
			<div class="col-xs-6">
				<img class="img-responsive" src="{{ asset('img/logo.jpg') }}">
			</div>
			<div class="col-xs-6">
				<h1>STOCK ASSIGN DETAILS</h1>
				<h4>
					<strong>Date:</strong>
					{{ \Carbon\Carbon::parse($contract->contract_date)->format('d/m/Y')}}
					|
					<strong>Sr. No:</strong>
				</h4>
			</div>
		</div>
	</div>
	<br/>
	<div class="row gutter-xs">
  <div class="col-md-6">
        <table class="table table-bordered">
          <tbody>
            @php 
            $logic_board_details = json_decode($stockAssign->logic_board_details,true);
            $transformer_details = json_decode($stockAssign->transformer_details,true);
            $contractor_details = json_decode($stockAssign->contractor_details,true);
            $mcb_details = json_decode($stockAssign->mcb_details,true);
            $transformer_detail = json_decode($stockAssign->transformer_details,true);
            $connector_wire_details = json_decode($stockAssign->connector_wire_details,true);
            $overload_details = json_decode($stockAssign->overload_details,true);
            $nutbolt = json_decode($stockAssign->nutbolt,true);
            $wiser = json_decode($stockAssign->wiser,true);
            $lug = json_decode($stockAssign->lug,true);
            $reg_capacitor = json_decode($contract->supervisorStockAssign->register_capacitor,true)??[];
            @endphp
            <tr>
              <td class="col-xs-6">Control Type:</td> 
              <td class="col-xs-6">{{ $stockAssign->control_type ?? '' }}</td>
            </tr>
            <tr>
              <td class="col-xs-6">Due Date:</td> 
              <td class="col-xs-6">{{ $stockAssign->due_date ?? '' }}</td>
            </tr>
            <tr>
              <td class="col-xs-6">Control:</td> 
              <td class="col-xs-6">{{ $stockAssign->control ?? '' }}</td>
            </tr>
            <tr>
              <td class="col-xs-6">Control No:</td> 
              <td class="col-xs-6">{{ $stockAssign->control_no ?? '' }}</td>
            </tr>
            <tr>
              <td class="col-xs-6">Logic Board Details:</td> 
              <td class="col-xs-6">
                @isset($logic_board_details['logic_board']['name'])
                @if(array_key_exists('logic_board', $logic_board_details))
                @for($i=0; $i < count($logic_board_details['logic_board']['name']); $i++)
              Name: {{$logic_board_details['logic_board']['name'][$i]}}</br>
              @endfor
              @endif
              <br><br>
              @endisset
              
              @isset($logic_board_details['power_supply']['name'])
                Power Supply: <br>
                @if(array_key_exists('power_supply', $logic_board_details))
                @for($i=0; $i < count($logic_board_details['power_supply']['name']); $i++)
                 {{$logic_board_details['power_supply']['name'][$i]}}</br>
              @endfor
              @endif
              <br><br>
              @endisset
              
              @isset($logic_board_details['ard_card']['name'])
                ARD Card: <br>
                
                @if(array_key_exists('ard_card', $logic_board_details))
                @for($i=0; $i < count($logic_board_details['ard_card']['name']); $i++)
                 {{$logic_board_details['ard_card']['name'][$i]}}</br>
              @endfor
              @endif
              <br><br>
              @endisset
              
                @isset($logic_board_details['relay_card']['name'])
                Relay Card: <br>
                @if(array_key_exists('relay_card', $logic_board_details))
                @for($i=0; $i < count($logic_board_details['relay_card']['name']); $i++)
                 {{$logic_board_details['relay_card']['name'][$i]}}</br>
              @endfor
              @endif
              <br><br>
              @endisset
              
                @isset($logic_board_details['voice_card']['name'])
                Voice Card: <br>
                @if(array_key_exists('voice_card', $logic_board_details))
                @for($i=0; $i < count($logic_board_details['voice_card']['name']); $i++)
                 {{$logic_board_details['voice_card']['name'][$i]}}</br>
              @endfor
              @endif
              <br><br>
              @endisset
              
                @isset($logic_board_details['other_card']['name'])
                Voice Card: <br>
                @if(array_key_exists('other_card', $logic_board_details))
                @for($i=0; $i < count($logic_board_details['other_card']['name']); $i++)
                 {{$logic_board_details['other_card']['name'][$i]}}</br>
              @endfor
              @endif
              @endisset
              <br>
            </td>
          </tr>
          <tr>
            <td class="col-xs-6">Box Size:</td> 
            <td class="col-xs-6">{{ $stockAssign->box_size ?? '' }}</td>
          </tr>
          <tr>
            <td class="col-xs-6">Contractor Details:</td> 
            <td class="col-xs-6">
              @isset($contractor_details['110 V AC']['name'])
              110 V AC:<br>
              @if(array_key_exists('110 V AC',$contractor_details))
              @for($i=0; $i < count($contractor_details['110 V AC']['name']); $i++)
              Name: {{$contractor_details['110 V AC']['name'][$i]}}<br/>
              Company: {{$contractor_details['110 V AC']['company'][$i]}}<br/>
              Quantity: {{$contractor_details['110 V AC']['qty'][$i]}}<br/>
              @endfor
              @endif
              <br>
              @endisset
              

              @isset($contractor_details['110 V DC']['name'])
              110 V DC:<br>
              @if(array_key_exists('110 V DC',$contractor_details))
              @for($i=0; $i < count($contractor_details['110 V DC']['name']); $i++)
              Name: {{$contractor_details['110 V DC']['name'][$i]}}<br/>
              Company: {{$contractor_details['110 V DC']['company'][$i]}}<br/>
              Quantity: {{$contractor_details['110 V DC']['qty'][$i]}}<br/>
              @endfor
              @endif
              <br>
              @endisset
              

              @isset($contractor_details['24 V DC']['name'])
              24 V DC:<br>
              @if(array_key_exists('24 V DC',$contractor_details))
              @for($i=0; $i < count($contractor_details['24 V DC']['name']); $i++)
              Name: {{$contractor_details['24 V DC']['name'][$i]}}<br/>
              Company: {{$contractor_details['24 V DC']['company'][$i]}}<br/>
              Quantity: {{$contractor_details['24 V DC']['qty'][$i]}}<br/>
              @endfor
              @endif
              <br>
              @endisset
              

              @isset($contractor_details['230 V DC']['name'])
              230 V DC:<br>
              @if(array_key_exists('230 V DC',$contractor_details))
              @for($i=0; $i < count($contractor_details['230 V DC']['name']); $i++)
              Name: {{$contractor_details['230 V DC']['name'][$i]}}<br/>
              Company: {{$contractor_details['230 V DC']['company'][$i]}}<br/>
              Quantity: {{$contractor_details['230 V DC']['qty'][$i]}}<br/><br/>
              @endfor
              @endif
              <br>
              @endisset
              

              @isset($contractor_details['Relay']['name'])
              Relay:<br>
              @if(array_key_exists('Relay',$contractor_details))
              @for($i=0; $i < count($contractor_details['Relay']['name']); $i++)
              Name: {{$contractor_details['Relay']['name'][$i]}}<br/>
              Company: {{$contractor_details['Relay']['company'][$i]}}<br/>
              Quantity: {{$contractor_details['Relay']['qty'][$i]}}<br/><br/>
              @endfor
              @endif
              <br>
              @endisset
              
              @isset($contractor_details['add-on-block']['name'])
              ADD ON BLOCK:<br>
              @if(array_key_exists('add-on-block',$contractor_details))
              @for($i=0; $i < count($contractor_details['add-on-block']['name']); $i++)
              Name: {{$contractor_details['add-on-block']['name'][$i]}}<br/>
              Quantity: {{$contractor_details['add-on-block']['qty'][$i]}}<br/><br/>
              @endfor
              @endif
              @endisset


            </td>
          </tr>
          @if(!empty($reg_capacitor))
                  <tr>
                    <td class="col-xs-6">Register/Capacitor:</td> 
                    <td class="col-xs-6">
                        @if(array_key_exists('name',$reg_capacitor))
                          @foreach($reg_capacitor['name'] as $index=>$value)
                              {{$value}} Qty: {{$reg_capacitor['qty'][$index]}} <br>
                          @endforeach
                        @endif
                    </td>
                  </tr>
              @endif
          <tr>
            <td class="col-xs-6">MCB Details:</td> 
            <td class="col-xs-6">
               @isset($mcb_details['Three Pole']['name'])
               Three Pole:<br>
              @if(array_key_exists('Three Pole',$mcb_details))
              @for($i=0; $i < count($mcb_details['Three Pole']['company']); $i++)
              Name:{{$mcb_details['Three Pole']['name'][$i]}}<br/>
              Company:{{$mcb_details['Three Pole']['company'][$i]}}<br/>
              Quantity:{{$mcb_details['Three Pole']['qty'][$i]}}<br/>
              @endfor
              @endif
              @endisset 
              <br>
              Two Pole:<br>
              @isset($mcb_details['Two Pole']['name'])
              @if(array_key_exists('Two Pole',$mcb_details))
              @for($i=0; $i < count($mcb_details['Two Pole']['company']); $i++)
              Name:{{$mcb_details['Two Pole']['name'][$i]}}<br/>
              Company:{{$mcb_details['Two Pole']['company'][$i]}}<br/>
              Quantity:{{$mcb_details['Two Pole']['qty'][$i]}}<br/>
              @endfor
              @endif
              @endisset
              <br>
              Single Pole:<br>
              @isset($mcb_details['Single Pole']['name'])
              @if(array_key_exists('Single Pole',$mcb_details))
              @for($i=0; $i < count($mcb_details['Single Pole']['company']); $i++)
              Name:{{$mcb_details['Single Pole']['name'][$i]}}<br/>
              Company:{{$mcb_details['Single Pole']['company'][$i]}}<br/>
              Quantity:{{$mcb_details['Single Pole']['qty'][$i]}}<br/>
              @endfor
              @endif
              @endisset

            </td>
          </tr>
      @if(!empty($overload_details))
            <tr>
              
              <td class="col-xs-6">Overload Details:</td> 
              @if(array_key_exists('pfr_need',$overload_details))
              <td class="col-xs-6">prf_need:{{$overload_details['pfr_need']}}
                @endif
                @if(array_key_exists('pfr_type',$overload_details))
                <br>
                prf_type:{{$overload_details['pfr_type']}}
                @endif

                 @if(array_key_exists('smps',$overload_details))
                <br>
                smps:{{$overload_details['smps']}}
                @endif


              </td>
            </tr>
            @endif
             @if(!empty($overload_details))
            <tr>
              
              <td class="col-xs-6">Battery Chrager:
              @isset($overload_details['battery-charger']) 
              @if(array_key_exists('battery-charger',$overload_details))
              <td class="col-xs-6">{{$overload_details['battery-charger']}}<br>
              @endif
              @endisset
                @isset($overload_details['battery-charger-option']['name'])
                @if(array_key_exists('battery-charger-option',$overload_details))
                  @for($i=0;$i < count($overload_details['battery-charger-option']); $i++)
                        {{$overload_details['battery-charger-option']['name'][$i]}} - {{$overload_details['battery-charger-option']['qty'][$i]}} Qty<br>
                  @endfor
                @endif
                @endisset

                @isset($overload_details['battery-qty'])
                
                    Battery Qty: {{$overload_details['battery-qty']}}<br>
                @endisset

                @isset($overload_details['a_cont_24vdc'])
                
                    A CONT 24 V DC: {{$overload_details['a_cont_24vdc']}}<br>
                @endisset
                
              </td>
            </tr>
             @if(!empty($overload_details))
            <tr>
              
              <td class="col-xs-6">Battery 12V:</td> 
               <td class="col-xs-6">
              @if(array_key_exists('battery_12V',$overload_details))
             
               
                <br>
                @if(array_key_exists('name',$overload_details['battery_12V']))
                   @for($i = 0 ; $i < count($overload_details['battery_12V']['name']) ; $i++)
                      {{$overload_details['battery_12V']['name'][$i] ?? ''}} Qty: {{$overload_details['battery_12V']['qty'][$i] ?? ''}}<br>
                  @endfor
                @endif
                 @endif
                
              </td>
            </tr>
            @endif
            @endif
          <tr>
            @if(!empty($connector_wire_details) && count($connector_wire_details)>0)
            <td class="col-xs-6">Connection Wire Details:</td> 
            <td class="col-xs-6">Connector Field:<br>
              Quantity :{{$connector_wire_details['connector_field']['qty']}}<br/>
              Size: {{$connector_wire_details['connector_field']['size']}}<br/>
              Make: {{$connector_wire_details['connector_field']['make']}}<br/><br>
              Connector Power:<br>
              Quantity: {{$connector_wire_details['connector_power']['qty']}}<br/>
              Size: {{$connector_wire_details['connector_power']['size']}}<br/>
              Make: {{$connector_wire_details['connector_power']['make']}}<br/>
              <br/>
              Wire Field<br>
              Quantity: {{$connector_wire_details['wire_field']['qty']}}<br/>
              Size: {{$connector_wire_details['wire_field']['size']}}<br/>
              Make: {{$connector_wire_details['wire_field']['make']}}<br/>
              <br/>
              Wire Power:<br>
              Quantity:{{$connector_wire_details['wire_power']['qty']}}<br/>
              Size:{{$connector_wire_details['wire_power']['size']}}<br/>
              Make:{{$connector_wire_details['wire_power']['make']}}<br/>
            </td>
            @endif
          </tr>
          <tr>
            <td class="col-xs-6">Transformer Details:</td> 
            <td class="col-xs-6">
              @isset($transformer_detail)
              @if(array_key_exists('name',$transformer_detail))
              @for($i=0; $i < count($transformer_detail['name']); $i++)
              {{!empty($transformer_detail['name'][$i])?$transformer_detail['name'][$i]: ''}}<br/>
              @endfor
              @endif
              @endisset

            </td>
          </tr>
          <tr>
            <td class="col-xs-6">Nut Bolt:</td> 
            <td class="col-xs-6">
              3mm:{{$nutbolt['3mm'] }}  Quantity<br>
              4mm: {{$nutbolt['4mm'] }} Quantity<br>
              6mm: {{$nutbolt['6mm'] }} Quantity
            </td>
          </tr>
          <tr>
            <td class="col-xs-6">Wiser:</td> 
            <td class="col-xs-6">3mm:{{$wiser['3mm'] }} Quantity<br>
              4mm: {{$wiser['4mm'] }} Quantity<br>
              6mm: {{$wiser['6mm'] }} Quantity
            </td>
          </tr>
          <tr>
            <td class="col-xs-6">Lug:</td> 
            <td class="col-xs-6">3mm:{{$wiser['3mm'] }}Quantity<br>
              2in: {{$wiser['4mm'] }} Quantity<br>
              2.5mm: {{$wiser['4mm'] }} Quantity<br>
              4mm ring: {{$wiser['6mm'] }} Quantity 
            </td>
          </tr>
          <tr>
            <td class="col-xs-6">Any Other Details:</td> 
            <td class="col-xs-6">{{ $stockAssign->any_other_details ?? '' }}</td>
          </tr>
        </tbody>
      </table>
	</div>
</div>
	<br/>
</body>
</html>
