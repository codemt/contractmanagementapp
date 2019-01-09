@extends('layouts.master')

@section('page-content')

<div class="title-bar">
	<h1 class="title-bar-title">
		<span class="d-ib">Add Stock</span>
	</h1>
</div>
<form action="{{route('stock.direct_buyer.store')}}" method="post">
	{{csrf_field()}}
<div class="row gutter-xs">
	<div class="col-md-12">
			<div class="card" style="overflow: auto;padding: 20px;">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Form No:</label>
						<input type="text" name="form_no" class="form-control" required="required" value="{{get_buyer_form_no()}}" readonly="readonly">
					</div>
				</div>		
				<div class="col-sm-4">
					<div class="form-group">
						<label>Date:</label>
						<input class="form-control" type="text" id="Date" value="" data-provide="datepicker" data-date-today-highlight="true" data-date-autoclose="true" data-date-format="DD, MM d, yyyy" name="sold_date" required="required">
		                <span class="form-control-feedback" aria-hidden="true">
		                    <span class="icon"></span>
		                </span>
					</div>
				</div>	
				<div class="col-sm-4">
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
			</div>
	</div>
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="card-actions">
						<button type="button" class="btn btn-xs btn-primary multiple"  data-toggle="modal" data-target="#stock_list" title="Add Stock">
						<i class="icon icon-plus-circle icon-lg"></i> Add </button>
				</div>
				<strong>Add Multiple Stocks</strong>
			</div>
			<div class="card-body">
				<div class="multi-stock">
					<table class="table" id="addQuantityTable">
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
				</div>   
				
				<div class="multiple-feilds mt-10">
						<input type="submit" name="" value="Submit" class="btn btn-sm btn-primary">
				</div> 
			</div>
		</div>
	</div>
</div>
</form>


@endsection


@push('page-script')

@endpush


@section('modals')
@include('modals.add_multiple_stock')
@endsection

@push('page-script')
	<script type="text/javascript">
	var products = @json($products);
	var filteredProducts = [];

		//Assign Product
		$('#add-product').click(function(){
			var filteredProducts = [];
			if(products)
			{
				var ids = $("input[name='product[]']:checked").not(":disabled").map(function(){$(this).prop("disabled",true);return parseInt($(this).val());}).get();
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
						'<td><input type="number" min="1" max="'+product.quantity+'" value="" name="qty[]" data-parsley-required="true" class="form-control"/ required></td>'+
						'<td><textarea class="form-control" name="sr_no[]" placeholder="Add serial number" required></textarea></td>'+
						'<td><a href="javascript:;" class="btn btn-xs btn-outline-danger removeProduct" data-toggle="tooltip" data-id="'+product.id+'" title="Remove Product"><i class="icon icon-trash"></i></a></td><input type="hidden" name="id[]" value="'+product.id+'"></tr>';
					});

					$('#addQuantityTable tbody').append(addRows);
				}				
			}			
		});

		//Remove Product
		$(document).on('click','.removeProduct',function(){
			var id = $(this).attr('data-id');
			console.log(id);
			$('.stock-list input[type="checkbox"][data-id="'+id+'"]').prop("checked",false).prop("disabled",false);
			$(this).closest('tr').remove();
		});

	</script>
@endpush