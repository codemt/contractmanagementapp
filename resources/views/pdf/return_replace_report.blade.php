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
	.table-bordered>tdead>tr>td {
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
					<h1>Return Replace Scrap Report</h1>
				</center>
			</div>
		</div>
	</div>
	<br>
	<div class="container-fluid">
		<div class="col-xs-12 pb-10">
			<div class="col-xs-6">
				<strong> Buyer Name </strong> : {{$client->name}}<br>
				<strong>Mobile     </strong>: {{$client->mobile}}<br>
				<strong>Email      </strong>: {{$client->email}}<br>
				<strong>Date  </strong>: {{$client->date}}<br>
			</div>
			<div class="col-xs-6">
				<strong>Form No</strong>: {{$client->form_no}}<br>
				<strong>Description</strong>: {{$client->description}}
			</div>
		</div>
	</div>
	<br/>
	@isset($return_products)

	<div class="container-fluid">
		<div class="row" style="margin-top:20px">
			<div class="col-xs-12">
				<table class="table table-bordered" width="100%">

					<tbody>
						<tr>
							<td colspan="5"><strong>Return Products</strong> </td>
						</tr>
						<tr>
							<td>Product Name</td>
							<td>Brand</td>
							<td>Category</td>
							<td>Quantity</td>
							<td>Serial Number</td>
						</tr>
						@foreach($return_products as $product)
						<tr>
							<td>{{$product->product()->name}}</td>
							<td>{{$product->product()->brand->name}}</td>
							<td>{{$product->product()->category->name}}</td>
							<td>{{$product->qty}}</td>
							<td>{{$product->serial_no}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br/>
	@endisset
	@isset($replace_products)
	<div class="container-fluid">
		<div class="row" style="margin-top:20px">
			<div class="col-xs-12">
				<table class="table table-bordered" width="100%">
					
					<tbody>
						<tr>
							<td colspan="5"><strong>Replace Products</strong> </td>
						</tr>
						<tr>
							<td>Product Name</td>
							<td>Brand</td>
							<td>Category</td>
							<td>Quantity</td>
							<td>Serial Number</td>
						</tr>
						@foreach($replace_products as $product)
						<tr>
							<td>{{$product->product()->name}}</td>
							<td>{{$product->product()->brand->name}}</td>
							<td>{{$product->product()->category->name}}</td>
							<td>{{$product->qty}}</td>
							<td>{{$product->serial_no}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br/>
	@endisset
	@isset($scrap_products)	
	<div class="container-fluid">
		<div class="row" style="margin-top:20px">
			<div class="col-xs-12">
				<table class="table table-bordered" width="100%">

					<tbody>
						<tr>
							<td colspan="5"><strong>Scrap Products</strong> </td>
						</tr>
						<tr>
							<td>Product Name</td>
							<td>Brand</td>
							<td>Category</td>
							<td>Quantity</td>
							<td>Serial Number</td>
						</tr>
						@foreach($scrap_products as $product)
						<tr>
							<td>{{$product->product()->name}}</td>
							<td>{{$product->product()->brand->name}}</td>
							<td>{{$product->product()->category->name}}</td>
							<td>{{$product->qty}}</td>
							<td>{{$product->serial_no}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br/>
	@endisset
</body>
</html>
