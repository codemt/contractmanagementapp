@extends('layouts.master')
@push('page-style')
<style type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
</style>

@section('page-content')

<div class="title-bar">
	<h1 class="title-bar-title">
		<span class="d-ib">Stock Report</span>
	</h1>
</div>
<div class="row gutter-xs">
	<div class="col-md-6">
		 <div class="demo-form-wrapper">
                <form class="form form-inline" action="{{route('stock.stockPurchaseHistory')}}" method="post">
                	{{csrf_field()}}
                  <div class="form-group">
                    <div class="input-with-icon">
                      <select name="month" class="form-control" type="text" placeholder="Select Month" required>
                      	<option selected="selected" disabled="disabled">Select Month</option>
                      	<option value="1">January</option>
                      	<option value="2">February</option>
                      	<option value="3">March</option>
                      	<option value="4">April</option>
                      	<option value="5">May</option>
                      	<option value="6">June</option>
                      	<option value="7">July</option>
                      	<option value="8">August</option>
                      	<option value="9">September</option>
                      	<option value="10">October</option>
                      	<option value="11">November</option>
                      	<option value="12">December</option>
                      </select>
                      <div class="icon icon-calendar-o input-icon"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-with-icon">
                      <input class="form-control" type="text" id="year" value="{{$year}}" name="year" required="required" autocomplete="off">
                      <div class="icon icon-calendar-o input-icon"></div>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit"><span class="icon icon-search"></span> Search</button>
                </form>
                <br>
              </div>
	</div>
</div>
<div class="row gutter-xs">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="card-actions">
					<button type="button" class="card-action card-toggler" title="Collapse"></button>
					<button type="button" class="card-action card-reload" title="Reload"></button>
				</div>
				<strong>Stock Purchase Report</strong>
			</div>
			<div class="card-body">
				<table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>#</th>
							<th>Product Name</th>
							<th>Opening</th>
							<th>Purchased</th>
							<th>Used</th>
							<th>Balanced</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
						<tr>
							<td>{{ $loop->iteration}}</td>
							<td>{{$product->name}}</td>
							<td>{{$product->data['opening']}}</td>
							<td>{{$product->data['purchased']}}</td>
							<td>{{$product->data['used']}}</td>
							<td>{{$product->data['purchased'] - $product->data['used']}}
							<td>
								<a href="{{route('stock.product_purchase_history',$product->id)}}" class="btn btn-xs btn-outline-primary"><i class="icon icon-eye"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection

@push('page-script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript">
		$('input[name="year"]').datepicker({
         minViewMode: 2,
         format: 'yyyy',
         autoclose:true,
       });

		$('select[name="month"]').val({{$month}});

		$(function () {
			$('.dataTable').DataTable({
				'scrollX': true,
				 retrieve: true,
				dom: 'Bfrtip',
				buttons: [
				{
					extend: 'excelHtml5',
					text : 'Export',
					exportOptions: {
						columns: [ 0, 1, 2,3,4,5]
					}
				},
				]
			})
		})
	</script>
@endpush