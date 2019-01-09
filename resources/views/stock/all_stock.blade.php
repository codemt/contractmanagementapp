@extends('layouts.master')

@section('page-content')

<div class="title-bar">
	<h1 class="title-bar-title">
		<span class="d-ib">All Stock</span>
	</h1>
</div>
<div class="row gutter-xs">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="card-actions">
					<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#stock_list" title="Add Stock">
						<i class="icon icon-plus-circle icon-lg"></i> Add Stock
					</button>
					<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#new_stock" title="Add Stock">
						<i class="icon icon-plus-circle icon-lg"></i> Add New Product
					</button>
				</div>
				<strong>Required Stock</strong>
			</div>
			<div class="card-body">
				<div class="row">
					<form action="{{route('stock.search-filter')}}" method="POST">
						{{csrf_field()}}
						<div class="col-md-3">
                        <div class="form-group">
                            <label for="demo-select2-2" class="form-label">Product Category</label>
                            <select id="demo-select2-2" class="form-control required" name="category_name" required>
                                <option value="" selected="selected" disabled="disabled">Select Category</option>
                                @isset($categories)
                                @foreach($categories as $category)    
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                          
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="demo-select2-3" class="form-label">Brand</label>
                            <select id="demo-select2-3" class="form-control required" name="brand_name" required>
                                <option value="" selected="selected" disabled="disabled">Select Brand</option>
                                @isset($brands)
                                @foreach($brands as $brand)    
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                    	<label class="form-label"></label>
                        <button type="submit" class="btn btn-primary btn-outline-primary">Search</button>
                    </div>               
                    
					</form>
					</div>

				<table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>#</th>
							<th>Product Name</th>
							<th>Category</th>
							<th>Brand</th>
							<th>Unit</th>
							<th>Minimum Qty</th>
							<th>Quantity</th>
							<th>Used Qty</th>
							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@isset($ProductStock)
						@foreach($ProductStock as $product)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$product->name}}</td>
							<td>{{$product->category->name ?? ''}}</td>
							<td>{{$product->brand->name ?? ''}}</td>
							<td>{{$product->unit}}</td>
							<td>{{$product->minimum_qty}}</td>
							<td>{{$product->quantity}}</td>
							<td>{{$product->used_quantity}}</td>
							
							<td>

								<button class="btn btn-warning btn-xs edit-product" data-toggle="modal" data-target="#edit_stock" data-name="{{json_encode($product)}}" title="Edit Stock">
									<i class="icon icon-edit"></i>
								</button>
								<button class="btn btn-primary btn-xs delete-product" data-id="{{$product->id}}">
									<i class="icon icon-trash"></i>
								</button>
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
@section('modals')
@include('modals.add_stock')
@include('modals.add_new_stock')
@include('modals.edit_stock')
@endsection

@push('page-script')

@if(Session::has('errors'))





<script type="text/javascript">
	$(document).ready(function(){
		$('#edit_stock').modal({show:true});
	})
</script>
@endif
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
	//add new product
	$(document).on('click','#add_product_btn',function(e){
		$('#add_product_form .errors').empty();
		e.preventDefault();
		$.ajax({
			url: $('#add_product_form').attr('action'),
			type:'post',
			data: $('#add_product_form').serialize(),
			success:function(response){
				if(typeof response.errors != "undefined" && response.errors != null && response.errors.length != null && response.errors.length > 0)
				{
					$('#add_product_form .errors').append('<p>Errors:</p>');
					for(var i=0;i<response.errors.length;i++)
					{
						console.log(response.errors[i]);
						$('#add_product_form .errors').append('<p>'+response.errors[i]+'</p>');
						$('#add_product_form .errors').show();
						
					}
				}
				else
				{
					$('#new_stock').hide();
					location.reload();
				}
			},	
		})
	})

	//close modal clear all fields

	$('#new_stock,#stock_list').on('hidden.bs.modal', function (e) {
		$(this)
		.find("input,textarea,select")
		.val('')
		.end()
		.find("input[type=checkbox], input[type=radio]")
		.prop("checked", "")
		.end();
		$('.errors').empty().hide(); 
	})

	//add quantity to product
	$('#add-qty').click(function(e){
		e.preventDefault();
		$('#add-quantity-form .errors').empty();
		var product_id = $('#add-quantity-form select[name="product"]').val();
		$.ajax({
			url:"/stock/addQuantity",
			type:"POST",
			data:$('#add-quantity-form').serialize(),
			success:function(response){
				
				if(typeof response.errors != "undefined" && response.errors != null && response.errors.length != null && response.errors.length > 0)
				{
					$('#add-quantity-form .errors').append('<p>Errors:</p>');
					for(var i=0;i<response.errors.length;i++)
					{
						$('#add-quantity-form .errors').append('<p>'+response.errors[i]+'</p>');
						$('#add-quantity-form .errors').show();	
					}
				}
				else
				{
					$('#stock_list').hide();
					location.reload();
				}
			}
		})
	});

	//update product
	$('.edit-product').click(function(){
		let product =$(this).attr('data-name');
		product = JSON.parse(product);
		console.log(product);
		$(' input[type=text][name="product_name"]').val(product.name);
		$('	select[name="category"] option[value="'+product.category_id+'"]').prop("selected",true)
		$('	select[name="brand"] option[value="'+product.brand_id+'"]').prop("selected",true)
		$(' input[type=text][name="unit"]').val(product.unit);
		$(' input[type=number][name="quantity"]').val(product.minimum_qty);
		$(' input[type=hidden][name="id"]').val(product.id);
		$('#edit_product_form').attr('action','/stock/ProductStock/'+product.id);
	})

	//delete Product
	$('.delete-product').click(function(){
        let product_id = $(this).attr('data-id');
        console.log(product_id);
            swal({
            title: "Are you sure?",
            text: "You will not be able to recover this product!",
            icon: "warning",
            buttons: {
            cancel: true,
            confirm: true,
            },
             dangerMode: true,
        }).
        then((value) => {
           if (value) {
            $.ajax({
                url: "/stock/ProductStock/"+product_id,
                type: "POST",
                data: {_method:'delete'},
                success: function (response) {
                    console.log(response);
                    swal("Done!","It was succesfully deleted!","success");
                    location.reload();
                }
            });
          }
       });
    })

</script>	

@endpush