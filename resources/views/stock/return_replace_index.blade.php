@extends('layouts.master')

@section('page-content')


<div class="title-bar">
	<h1 class="title-bar-title">
		<span class="d-ib">Return Replace Scrap</span>
	</h1>
</div>
<div class="row gutter-xs">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="card-actions">
					<a href="{{route ('stock.replace-return')}}"><button type="button" class="btn btn-xs btn-primary"  title="Add Stock">
						<i class="icon icon-plus-circle icon-lg"></i> Add New
					</button></a>
				</div>
				<strong>List</strong>
			</div>
			<div class="card-body">
				<table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>#</th>
							<th>Form No</th>
							<th>Type</th>
							<th>Name</th>
							<th>Mobile</th>
							<th>Email</th>
							<th>Controller No</th>
							<th>Technician Name</th>
							<th>Date</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@isset($clients)
						@foreach($clients as $client)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$client->form_no}}</td>
							<td>{{$client->type}}</td>
							<td>{{$client->name}}</td>
							<td>{{$client->mobile}}</td>
							<td>{{$client->email}}</td>
							<td>{{$client->controller_no}}</td>
							<td>{{$client->technician()}}</td>
							<td>{{\Carbon\Carbon::parse($client->date)->format('d-m-Y')}}</td>
							<td>{{$client->description}}</td>
							
							<td>
								<a href="{{ route('stock.return_replace_report',$client->id) }}" class="btn btn-xs btn-outline-success" data-toggle="tooltip" title="View Report" target="_blank">
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

