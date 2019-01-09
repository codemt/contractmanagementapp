<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
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
		border: 1px solid black;
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
				<h1>Product Assigned</h1>
			</center>
			</div>
		</div>
	</div>
	<br/>
	<div class="container-fluid">
		<div class="row" style="margin-top:20px">
			<div class="col-xs-12">
			<table class="table table-bordered" width="100%">

				<tbody>
				@isset($products)
				@foreach($products as $product)

					<tr>
						<td colspan="5">Date :{{$product['assign_date']}}</td>
					</tr>
				<tr>
					<td style="border-top: 1px solid #0000">Product Name</td>
					<td>Brand</td>
					<td>Category</td>
					<td>Unit</td>
					<td>Given Quantity</td>
				</tr>
				@foreach($product['items'] as $item)
					<tr>
						<td>{{$item['name']}}</td>
						<td>{{$item['brand']['name']}}</td>
						<td>{{$item['category']['name']}}</td>
						<td>{{$item['unit']}}</td>
						<td>{{$item['assign_qty']}}</td>
					</tr>
					@endforeach
				@endforeach
				@endisset
				</tbody>
			</table>
		</div>
		</div>
	</div>
	<br/>
</body>
</html>
