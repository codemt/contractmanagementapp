@extends('layouts.master')

@section('page-content')


<div class="title-bar">
	<h1 class="title-bar-title">
		<span class="d-ib">Direct Buyers</span>
	</h1>
</div>
<div class="row gutter-xs">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="card-actions">
					<a href="{{route ('stock.add_stock')}}"><button type="button" class="btn btn-xs btn-primary"  title="Add Stock">
						<i class="icon icon-plus-circle icon-lg"></i> Add Stock
					</button></a>
				</div>
				<strong>Direct Buyers</strong>
			</div>
			<div class="card-body">
				<table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>#</th>
							<th>Form No</th>
							<th>Name</th>
							<th>Mobile</th>
							<th>Email</th>
							<th>Date</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@isset($buyers)
						@foreach($buyers as $buyer)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$buyer->form_no}}</td>
							<td>{{$buyer->name}}</td>
							<td>{{$buyer->mobile}}</td>
							<td>{{$buyer->email}}</td>
							<td>{{$buyer->sold_date}}</td>
							<td>{{$buyer->description}}</td>
							
							<td>
								<a href="{{ route('stock.direct_deduct_report',$buyer->id) }}" class="btn btn-xs btn-outline-success" data-toggle="tooltip" title="View Report" target="_blank">
                                            <i class="icon icon-eye"></i>
                                        </a>
							</td>
						</tr>
						@endforeach
						@endisset
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

