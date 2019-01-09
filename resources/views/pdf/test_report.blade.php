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
	<div class="container-fluid">
		<div class="col-xs-12 bo pb-10">
			<div class="col-xs-6">
			<center>
				<img class="img-responsive" src="{{ asset('img/logo.jpg') }}">
			</center>
			</div>
			<div class="col-xs-6">
			<center>
				<h1>Testing Results</h1>
			</center>
			</div>
		</div>
	</div>
	<br/>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
			<table class="table table-bordered" width="100%">
				
				<tbody>
					<tr>
						<td colspan="2"><b>Contract Details:</b> </td>
					</tr>
					<tr>
						<td>
							<b>Contract Number</b> :{{$testResults->contract_id}}<br/>
							<b>Client Name</b> : {{$testResults->contract->client_name}}<br/>
							<b>Due Date</b> :{{date('d-m-Y',strtotime($testResults->contract->supervisorStockAssign->due_date))}}
						</td>
						<td>
							<b>Technician Name</b> :{{$testResults->contract->supervisorStockAssign->technician->name}}<br/>
							<b>Tester Name</b> :{{$testResults->contract->supervisorStockAssign->technician->name}}
						</td>
					</tr>	
				</tbody>
			</table>
			</div>
		</div>
		<div class="row" style="margin-top:20px">
			<div class="col-xs-12">
			<table class="table table-bordered" width="100%">
				
				<tbody>
					<tr>
						<td colspan="5"><b>Voltage Checking Insp:</b> </td>
					</tr>
					<tr>
						<td>Input Voltage</td>
						<td>440V AC</td>
						<td>110V AC</td>
						<td>24V AC</td>
						<td>12V AC</td>
					</tr>
					<tr>
						<td>Output Voltage</td>
						@isset($voltage_checking_insp->output_voltage)
						@for($i=0;$i<count($voltage_checking_insp->output_voltage);$i++)
							<td>{{$voltage_checking_insp->output_voltage[$i]}} V AC</td>
						@endfor
						@endisset
					</tr>
					<tr>
						<td>DC Voltage</td>
						@isset($voltage_checking_insp->dc_voltage)
						@for($i=0;$i<count($voltage_checking_insp->dc_voltage);$i++)
							<td>{{$voltage_checking_insp->dc_voltage[$i]}} V DC</td>
						@endfor
						@endisset
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class="row" style="margin-top:20px">
			<div class="col-xs-12">
			<table class="table table-bordered" width="100%">
				
				<tbody>
					<tr>
						<td colspan="2"><b>Testing Type, Checkpoint And Status:</b> </td>
					</tr>
					<tr>
						@isset($checkpoints)
						<td>
						<ul>
						@foreach($checkpoints as $index=>$checkpoint)
						<li>
							{{$checkpoint->testingType->name}}-{{$checkpoint->checkpoint}}-{{$status[$index]}}
						</li>
						@endforeach
						</ul>
						</td>
						@endisset
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class="row" style="margin-top:20px">
			<div class="col-xs-12">
			<table class="table table-bordered" width="100%">
				
				<tbody>
					<tr>
						<td colspan="4"><b>Voltage Checking:</b> </td>
					</tr>
					<tr>
						<td rowspan="2">ARD Motor Option Volt</td>
						<td>RY</td>
						<td>BY</td>
						<td>BR</td>
					</tr>
					<tr>
						@foreach($voltage_checking->ard_motor_opt_vlt as $value)
						<td>{{$value}} V AC</td>
						@endforeach
					</tr>
					<tr>
						<td>BR/RC OUTPUT VOLTAGE</td>
						<td colspan="3" style="text-align: center">{{$voltage_checking->br_rc_opt_volt}} V DC</td>
					</tr>
					<tr>
						<td>BR/RC OUTPUT VOLTAGE</td>
						<td colspan="3" style="text-align: center">{{$voltage_checking->VAC_light_fan}} V AC</td>
					</tr>
					<tr>
						<td>BR/RC OUTPUT VOLTAGE</td>
						<td colspan="3" style="text-align: center">{{$voltage_checking->battery_voltage}} V DC</td>
					</tr>
				</tbody>
			</table>
		</div>
		</div>
	</div>
	<br/>
	<div class="container-fluid">
	</div>
</body>
</html>
