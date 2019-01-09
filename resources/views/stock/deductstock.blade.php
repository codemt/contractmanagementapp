@extends('layouts.master')

@section('page-content')


<div class="title-bar">
	<h1 class="title-bar-title">
		<span class="d-ib">Deduct Stock</span>
	</h1>
</div>
<div class="row gutter-xs">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="card-actions">
					<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#deduct_stock" title="Add Stock">
						<i class="icon icon-plus-circle icon-lg"></i> Add Stock
					</button>
				</div>
				<strong>Required Stock</strong>
			</div>
			<div class="card-body">
				<table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>#</th>
							<th>Form No</th>
							<th>Client Name</th>
							<th>Phone No</th>
							<th>Date</th>
							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						
						<tr>
							<td>1</td>
							<td>2</td>
							<td>4</td>
							<td>6</td>
							<td>8</td>
							
							<td class="text-center">

								<button class="btn btn-warning btn-xs edit-product" data-toggle="modal" data-target="#edit_stock" data-name="" title="View Stock">
									<i class="icon icon-eye"></i>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
@section('modals')
@include('modals.add_deductstock')
@endsection

