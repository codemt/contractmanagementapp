@extends('layouts.master')

@section('page-content')
@if(Session::has('success'))
<p class="alert-success">{{ Session::get('success') }}</p>
@elseif(Session::has('error'))
	<p class="alert-danger">{{ Session::get('error') }}</p>
@endif
<div class="title-bar">
	<h1 class="title-bar-title">
		<span class="d-ib">Replace/Return</span>
	</h1>
</div>
<form action="{{route('stock.rrs_store')}}" method="post">
	{{csrf_field()}}
<div class="row gutter-xs">
	<div class="col-md-12">
			<div class="card" style="overflow: auto;padding: 20px;">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Form No:</label>
						<input type="text" name="form_no" class="form-control" required="required" value="{{get_return_form_no()}}" readonly="readonly">
					</div>
				</div>		
				<div class="col-sm-4">
					<div class="form-group">
						<label>Date:</label>
						<input class="form-control" type="text" id="Date" value="" data-provide="datepicker" data-date-today-highlight="true" data-date-autoclose="true" data-date-format="DD, MM d, yyyy" name="date" required="required">
		                <span class="form-control-feedback" aria-hidden="true">
		                    <span class="icon"></span>
		                </span>
					</div>
				</div>
				<div class="col-sm-4">
						<div class="form-group">
							<label>Choose Client/Controller:</label>
							<select class="form-control" name="type">
								<option value="Controller">Controller</option>
								<option value="Client" selected="selected">Client</option>
							</select>
						</div>
				</div>
				
	
				<div class="col-sm-6">
					<div class="form-group">
						<label>Name:</label>
						<input type="text" name="name" class="form-control" required="required">
					</div>
				</div>	
				<div class="col-sm-6">
					<div class="form-group">
						<label>Mobile:</label>
						<input type="text" name="mobile" class="form-control" required="required">
					</div>
				</div>	
				<div class="col-sm-6">
					<div class="form-group">
						<label>Email:</label>
						<input type="email" name="email" class="form-control">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<label>Description:</label>
						<textarea class="form-control" rows="5" name="description"></textarea>
					</div>
				</div>	
			<div class="row" id="controller-div" style="display:none">
				<div class="col-sm-6">
						<div class="form-group">
							<label>Choose Controller No:</label>
									<select class="form-control" name="controller_no">
										<option value="Controller">Controller</option>
										<option value="Client" selected="selected">Client</option>
									</select>
						</div>
				</div>
				<div class="col-sm-6">
						<div class="form-group">
							<label>Choose Technician:</label>
									<select class="form-control" name="technician">
										<option selected disabled>Select Technician</option>
										@foreach($technicians as $i => $tech)
										<option value="{{$tech->id}}">{{$tech->name}}</option>
										@endforeach
									</select>
						</div>
				</div>
			</div>
	</div>
</div>
	
	<div class="col-sm-6">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="card-actions">
					<button type="button" class="btn btn-xs btn-primary multiple"  data-toggle="modal" data-target="#stock_return" title="Add Stock">
						<i class="icon icon-plus-circle icon-lg"></i> Add </button>
					</div>
					<strong>Add Multiple Stocks</strong>
				</div>
				<div class="card-body">
					<div class="multi-stock">
						<table class="table" id="returnTable">
							<thead>
								<tr>
									<th>Product Name</th>
									<th>Brand</th>
									<th>Category</th>
									<th>Unit</th>
									<th>Qty</th>
									<th>Add Qty</th>
									<th>Serial No</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
									
								</tbody>
						</table>

					</div>   <!-- end multi stock -->
					<div class="multiple-feilds">

					</div> <!-- end multiple feilds -->
				</div>
			</div>
		</div>	
		<div class="col-sm-6">
			<div class="card">
				<div class="card-header bg-primary">
					<div class="card-actions">
						<button type="button" class="btn btn-xs btn-primary multiple"  data-toggle="modal" data-target="#stock_replace" title="Add Stock">
							<i class="icon icon-plus-circle icon-lg"></i> Add </button>
						</div>
						<strong>Replace Multiple Stocks</strong>
					</div>
					<div class="card-body">
						<div class="multi-stock">
							<table class="table" id="replaceTable">
								<thead>
								<tr>
									<th>Product Name</th>
									<th>Brand</th>
									<th>Category</th>
									<th>Unit</th>
									<th>Qty</th>
									<th>Add Qty</th>
									<th>Serial No</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
									
								</tbody>

							</table>

						</div>   <!-- end multi stock -->
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<div class="form-group">
					<label>Scrap</label>
					<input type="checkbox" name="scrap" id="scrap" value="true">
				</div>

				<div class="test"></div>
			</div>
			<div class="clearfix"></div>
			<div class="">
				<input type="submit" class="btn btn-primary" style="padding: 5px 30px 5px 30px;" value="Submit">
			</div>
		</div>
	</form>





		@endsection


		@push('page-script')

		<script>
			$(document).ready(function(){
				$("#scrap").change(function(){
					if($(this).is(':checked')){
					$(".test").append(`<div class="col-sm-12">
						<div class="card">
						<div class="card-header bg-primary">
						<div class="card-actions">
						<button type="button" class="btn btn-xs btn-primary multiple"  data-toggle="modal" data-target="#stock_scrap" title="Add Stock">
						<i class="icon icon-plus-circle icon-lg"></i> Add </button>
						</div>
						<strong>Remove Multiple Stocks</strong>
						</div>
						<div class="card-body">
						<div class="multi-stock">
						<table class="table" id="scrapTable">
						<thead>
						<tr>
						<th>Product Name</th>
						<th>Brand</th>
						<th>Category</th>
						<th>Unit</th>
						<th>Qty</th>
						<th>Add Qty</th>
						<th>Serial No</th>
						<th>Action</th>
						</tr>
						</thead>
						<tbody>
						</tbody>
						</table>
						</div>   <!-- end multi stock -->
						</div>
						</div>
						</div>`)
					}else{
					   $(".test").empty();
					}
				});

			});

			$('select[name="type"]').change(function(){
				if($(this).val() == 'Controller'){
					$('#controller-div').show();
					$('#client-div').hide();
				}else{
					$('#controller-div').hide();
					$('#client-div').show();
				}
			})
		</script>

		@endpush


		@section('modals')
		@include('modals.add_replace_stock')
		@include('modals.add_return_stock')
		@include('modals.add_scrap_stock')
		@endsection

		@push('page-script')
			<script type="text/javascript">
					var products = @json($products);
				var filteredProducts = [];

		//Assign Return Product
		$('#add-return-product').click(function(){
			var filteredProducts = [];
			if(products)
			{
				var ids = $("input[name='product_return[]']:checked").not(":disabled").map(function(){$(this).prop("disabled",true);return parseInt($(this).val());}).get();
				if(ids.length > 0)
				{
					for(var j=0; j<products.length;j++)
					{
						$index = $.inArray(products[j].id,ids);

						if($index != -1)
						{
							filteredProducts.push(products[j]);
						}
					}

					var addRows = '';

					filteredProducts.forEach(product => {
						console.log(product)
						addRows += '<tr><td>'+product.name+'</td><td>'+product.category.name+'</td>'+
						'<td>'+product.brand.name+'</td><td>'+product.unit+'</td><td>'+product.quantity+'</td>'+
						'<td><input type="number" min="1"  value="" name="qty_return[]" data-parsley-required="true" class="form-control" required></td>'+
						'<td><textarea class="form-control" name="sr_no_return[]" placeholder="Add serial number" required></textarea></td>'+
						'<td><a href="javascript:;" class="btn btn-xs btn-outline-danger removeProductReturn" data-toggle="tooltip" data-id="'+product.id+'" title="Remove Product"><i class="icon icon-trash"></i></a></td><input type="hidden" name="id_return[]" value="'+product.id+'"></tr>';
					});

					$('#returnTable tbody').append(addRows);
				}				
			}			
		});

		//Remove Product
		$(document).on('click','.removeProductReturn',function(){
			var id = $(this).attr('data-id');
			$('.stock-return input[type="checkbox"][data-id="'+id+'"]').prop("checked",false).prop("disabled",false);
			$(this).closest('tr').remove();
		});

		//assign replace product

		$('#add-replace-product').click(function(){
			var filteredProducts = [];
			if(products)
			{
				var ids = $("input[name='product_replace[]']:checked").not(":disabled").map(function(){$(this).prop("disabled",true);return parseInt($(this).val());}).get();
				if(ids.length > 0)
				{
					for(var j=0; j<products.length;j++)
					{
						$index = $.inArray(products[j].id,ids);

						if($index != -1)
						{
							filteredProducts.push(products[j]);
						}
					}

					var addRows = '';

					filteredProducts.forEach(product => {
						console.log(product)
						addRows += '<tr><td>'+product.name+'</td><td>'+product.category.name+'</td>'+
						'<td>'+product.brand.name+'</td><td>'+product.unit+'</td><td>'+product.quantity+'</td>'+
						'<td><input type="number" min="1"  value="" name="qty_replace[]" data-parsley-required="true" class="form-control"/ required></td>'+
						'<td><textarea class="form-control" name="sr_no_replace[]" placeholder="Add serial number" required></textarea></td>'+
						'<td><a href="javascript:;" class="btn btn-xs btn-outline-danger removeProductReplace" data-toggle="tooltip" data-id="'+product.id+'" title="Remove Product"><i class="icon icon-trash"></i></a></td><input type="hidden" name="id_replace[]" value="'+product.id+'"></tr>';
					});

					$('#replaceTable tbody').append(addRows);
				}				
			}			
		});

		//Remove Product
		$(document).on('click','.removeProductReplace',function(){
			var id = $(this).attr('data-id');
			console.log(id);
			$('.stock-replace input[type="checkbox"][data-id="'+id+'"]').prop("checked",false).prop("disabled",false);
			$(this).closest('tr').remove();
		});



		//
				//assign scrap product

		$('#add-scrap-product').click(function(){
			var filteredProducts = [];
			if(products)
			{
				var ids = $("input[name='product_scrap[]']:checked").not(":disabled").map(function(){$(this).prop("disabled",true);return parseInt($(this).val());}).get();
				if(ids.length > 0)
				{
					for(var j=0; j<products.length;j++)
					{
						$index = $.inArray(products[j].id,ids);

						if($index != -1)
						{
							filteredProducts.push(products[j]);
						}
					}

					var addRows = '';

					filteredProducts.forEach(product => {
						console.log(product)
						addRows += '<tr><td>'+product.name+'</td><td>'+product.category.name+'</td>'+
						'<td>'+product.brand.name+'</td><td>'+product.unit+'</td><td>'+product.quantity+'</td>'+
						'<td><input type="number" min="1"  value="" name="qty_scrap[]" data-parsley-required="true" class="form-control"/ required></td>'+
						'<td><textarea class="form-control" name="sr_no_scrap[]" placeholder="Add serial number" required></textarea></td>'+
						'<td><a href="javascript:;" class="btn btn-xs btn-outline-danger removeProductScrap" data-toggle="tooltip" data-id="'+product.id+'" title="Remove Product"><i class="icon icon-trash"></i></a></td><input type="hidden" name="id_scrap[]" value="'+product.id+'"></tr>';
					});

					$('#scrapTable tbody').append(addRows);
				}				
			}			
		});

		//Remove Product
		$(document).on('click','.removeProductScrap',function(){
			var id = $(this).attr('data-id');
			console.log(id);
			$('.stock-scrap input[type="checkbox"][data-id="'+id+'"]').prop("checked",false).prop("disabled",false);
			$(this).closest('tr').remove();
		});
			</script>
		@endpush