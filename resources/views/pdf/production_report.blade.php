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
				<h1>PRODUCTION REPORT</h1>
			</div>
		</div>
	</div>
	<br/>
	
	<br/>
	<div class="container-fluid">
		<div class="col-xs-12 bo pb-10">
			<div class="col-xs-12">
				<h4 class="text-capitalize">
					<strong>Control Number: </strong>
					{{$reports->control_no}}
				</h4>
				<h4 class="text-capitalize">
					<strong>Production Start Date: </strong>
					{{date('d-m-Y',strtotime($reports->start_date))}}
				</h4>
				<h4 class="text-capitalize">
					<strong>Previous Derive used: </strong>
					{{!empty($reports->drive_sr_no)? $reports->drive_sr_no: 'Not used'}}
				</h4>
				<h4 class="text-capitalize">
					<strong>Technical Changes: </strong>
					{{$reports->technical_change}}
				</h4>
				<h4 class="text-capitalize">
					<strong>Approved By: </strong>
					{{$reports->approved_by}}
				</h4>
				<h4 class="text-capitalize">
					<strong>Approved Date: </strong>
					{{date('d-m-Y',strtotime($reports->approved_date))}}
				</h4>
				<h4 class="text-capitalize">
					<strong>Remark: </strong>
					{{$reports->remark}}
				</h4>
			</div>
		</div>
	</div>
</body>
</html>
