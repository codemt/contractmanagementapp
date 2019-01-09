@extends('layouts.master')

@section('page-content')

<div class="title-bar">
	<h1 class="title-bar-title">
		<span class="d-ib">All Brand</span>
	</h1>
</div>
<div class="row gutter-xs">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="card-actions">
					<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#brand_list" title="Add Stock">
						<i class="icon icon-plus-circle icon-lg"></i> Add New Brand
					</button>
				</div>
				<strong>Managed Brand</strong>
			</div>
			<div class="card-body">
				
				<div class="pull-right">
					
				</div>

				<table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>#</th>
							<th>Brand Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@isset($brand)
						@foreach($brand as $brnd)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>
								<input readonly="readonly" class="form-control" type="text" value="{{$brnd->name}}">

								<button data-id="{{$brnd->id}}" class="btn btn-link btn-edit">
									<i class="icon icon-pencil"></i>
								</button>
								
							</td>
							<td>

								<button class="btn btn-primary btn-xs btn-delete" data-id="{{$brnd->id}}">
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
@include('modals.add_brand')
@endsection

{{-- javascript --}}
@push('page-script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

	$("#addBrandBtn").click(function(e) {
		e.preventDefault();
		var name = $('#addBrand input[name="name"]').val();
		var url = $('#addBrand').attr('action')
		$.post(url,{name:name})
		.done(function(data) {

			$("#brand_list").modal("hide");
			location.reload();
		})
		.fail(function(data) {
			$("#brand_list").modal("show");
			$('#addBrand input[type=text][name="name"]').siblings('span').text(data.responseJSON.errors.name[0]);
		});
	});

	//btn-edit click
	var brand = "";
	$(".btn-edit").click(function() {
		brand = $(this).parent('td').find('input[type="text"]').val();
		var id = $(this).attr('data-id');
		var actionButtons = "<button class='btn btn-xs btn-success btn-update' data-id="+id+"><i 						class='icon icon-check'></i></button><button class='btn btn-xs 							btn-danger btn-cancel' data-id="+id+"><i class='icon icon-times'></i></button>";
		$(this).after(actionButtons);
		$(this).parent('td').find('input[type="text"]').removeAttr("readonly");
		$(this).hide();
	});

	//btn-update click
	$(document).on('click','.btn-update',function(){
		var id = $(this).attr('data-id');
		var new_brand = $(this).parent('td').find('input[type="text"]').val();
		$.ajax({
			url:"/stock/brand/"+id,
			type:"post",
			data:{_method:'put',brand:new_brand},
			success:function(response){
				
			}
		});
				$(this).parent('td').find('input[type="text"]').attr("readonly","readonly").val(new_brand);
				$('.btn-update[data-id='+id+']').remove();
				$('.btn-cancel[data-id='+id+']').remove();
				$('.btn-edit[data-id="'+id+'"]').show();

	});

	//btn-cancel click
	$(document).on('click','.btn-cancel',function(){
		var id = $(this).attr('data-id');
		$('.btn-edit[data-id="'+id+'"]').show();
		$(this).parent('td').find('input[type="text"]').attr("readonly","readonly").val(brand);
		$('.btn-update[data-id='+id+']').remove();
		$('.btn-cancel[data-id='+id+']').remove();

	});

	//btn-delete click
	$('.btn-delete').click(function(){
		var brand_id = $(this).attr('data-id');
		console.log(brand_id);
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this brand!",
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
                url: "/stock/brand/"+brand_id,
                type: "POST",
                data: {_method:'delete'},
                dataType: "html",
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