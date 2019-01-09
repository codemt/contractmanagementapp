@extends('layouts.master')

@section('page-content')

<div class="title-bar">
	<h1 class="title-bar-title">
		<span class="d-ib">Stock Report</span>
	</h1>
</div>
<div class="row gutter-xs">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="card-actions">
					<button type="button" class="card-action card-toggler" title="Collapse"></button>
					<button type="button" class="card-action card-reload" title="Reload"></button>
				</div>
				<strong>Product Purchase History</strong>
			</div>
			<div class="card-body">
				<table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>#</th>
							<th>Product Name</th>
							<th>quantity</th>
							<th>Purchased Date</th>
						</tr>
					</thead>
					<tbody>
						@isset($products)
						@for($i=0;$i< count($products) ;$i++)
						<tr>
							<td>{{ $i+1}}</td>
							<td>{{$products[$i]->productStock->name}}</td>
							<td>{{$products[$i]->quantity}}</td>
							<td>{{$products[$i]->created_at->format('d-m-Y')}}</td>
						</tr>
						@endfor
						@endisset
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection
