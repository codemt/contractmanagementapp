@extends('layouts.master')

@section('page-content')

<div class="title-bar">
</div>
@if (Session::has('msg'))
<div class="alert alert-danger alert-dismissible fade in">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error!</strong> {{Session::get('msg')}}
</div>
@endif
<div class="row gutter-xs">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="card-actions">
					<button type="button" class="card-action card-toggler" title="Collapse"></button>
					<button type="button" class="card-action card-reload" title="Reload"></button>
				</div>
				
				<strong>Required Stock</strong>
			</div>
			<div class="card-body custom-scrollbar" style="max-height: 500px;overflow-y: scroll;">
				@if(is_null($stockAssign->previous_contract_id))
				<table class="table table-bordered">
					<tbody>
						@php 
						$logic_board_details = json_decode($stockAssign->logic_board_details,true);
						$transformer_details = json_decode($stockAssign->transformer_details,true);
						$contractor_details = json_decode($stockAssign->contractor_details,true);
						$mcb_details = json_decode($stockAssign->mcb_details,true);
						$transformer_detail = json_decode($stockAssign->transformer_details,true);
						$connector_wire_details = json_decode($stockAssign->connector_wire_details,true);
						$overload_details = json_decode($stockAssign->overload_details,true);
						$nutbolt = json_decode($stockAssign->nutbolt,true);
						$wiser = json_decode($stockAssign->wiser,true);
						$lug = json_decode($stockAssign->lug,true);
						$reg_capacitor = json_decode($contract->supervisorStockAssign->register_capacitor,true)??[];
						@endphp
						<tr>
							<td class="col-xs-6">Control Type:</td> 
							<td class="col-xs-6">{{ $stockAssign->control_type ?? '' }}</td>
						</tr>
						<tr>
							<td class="col-xs-6">Due Date:</td> 
							<td class="col-xs-6">{{ $stockAssign->due_date ?? '' }}</td>
						</tr>
						<tr>
							<td class="col-xs-6">Control:</td> 
							<td class="col-xs-6">{{ $stockAssign->control ?? '' }}</td>
						</tr>
						<tr>
							<td class="col-xs-6">Control No:</td> 
							<td class="col-xs-6">{{ $stockAssign->control_no ?? '' }}</td>
						</tr>
						<tr>
							<td class="col-xs-6">Logic Board Details:</td> 
							<td class="col-xs-6">
								@isset($logic_board_details['logic_board']['name'])
								@if(array_key_exists('logic_board', $logic_board_details))
								@for($i=0; $i < count($logic_board_details['logic_board']['name']); $i++)
							Name: {{$logic_board_details['logic_board']['name'][$i]}}</br>
							@endfor
							@endif
							<br><br>
							@endisset
							
							@isset($logic_board_details['power_supply']['name'])
								Power Supply: <br>
								@if(array_key_exists('power_supply', $logic_board_details))
								@for($i=0; $i < count($logic_board_details['power_supply']['name']); $i++)
								 {{$logic_board_details['power_supply']['name'][$i]}}</br>
							@endfor
							@endif
							<br><br>
							@endisset
							
							@isset($logic_board_details['ard_card']['name'])
								ARD Card: <br>
								
								@if(array_key_exists('ard_card', $logic_board_details))
								@for($i=0; $i < count($logic_board_details['ard_card']['name']); $i++)
								 {{$logic_board_details['ard_card']['name'][$i]}}</br>
							@endfor
							@endif
							<br><br>
							@endisset
							
								@isset($logic_board_details['relay_card']['name'])
								Relay Card: <br>
								@if(array_key_exists('relay_card', $logic_board_details))
								@for($i=0; $i < count($logic_board_details['relay_card']['name']); $i++)
								 {{$logic_board_details['relay_card']['name'][$i]}}</br>
							@endfor
							@endif
							<br><br>
							@endisset
							
								@isset($logic_board_details['voice_card']['name'])
								Voice Card: <br>
								@if(array_key_exists('voice_card', $logic_board_details))
								@for($i=0; $i < count($logic_board_details['voice_card']['name']); $i++)
								 {{$logic_board_details['voice_card']['name'][$i]}}</br>
							@endfor
							@endif
							<br><br>
							@endisset
							
								@isset($logic_board_details['other_card']['name'])
								Voice Card: <br>
								@if(array_key_exists('other_card', $logic_board_details))
								@for($i=0; $i < count($logic_board_details['other_card']['name']); $i++)
								 {{$logic_board_details['other_card']['name'][$i]}}</br>
							@endfor
							@endif
							@endisset
							<br>
						</td>
					</tr>
					<tr>
						<td class="col-xs-6">Box Size:</td> 
						<td class="col-xs-6">{{ $stockAssign->box_size ?? '' }}</td>
					</tr>
					<tr>
						<td class="col-xs-6">Contractor Details:</td> 
						<td class="col-xs-6">
							@isset($contractor_details['110 V AC']['name'])
							110 V AC:<br>
							@if(array_key_exists('110 V AC',$contractor_details))
							@for($i=0; $i < count($contractor_details['110 V AC']['name']); $i++)
							Name: {{$contractor_details['110 V AC']['name'][$i]}}<br/>
							Company: {{$contractor_details['110 V AC']['company'][$i]}}<br/>
							Quantity: {{$contractor_details['110 V AC']['qty'][$i]}}<br/>
							@endfor
							@endif
							<br>
							@endisset
							

							@isset($contractor_details['110 V DC']['name'])
							110 V DC:<br>
							@if(array_key_exists('110 V DC',$contractor_details))
							@for($i=0; $i < count($contractor_details['110 V DC']['name']); $i++)
							Name: {{$contractor_details['110 V DC']['name'][$i]}}<br/>
							Company: {{$contractor_details['110 V DC']['company'][$i]}}<br/>
							Quantity: {{$contractor_details['110 V DC']['qty'][$i]}}<br/>
							@endfor
							@endif
							<br>
							@endisset
							

							@isset($contractor_details['24 V DC']['name'])
							24 V DC:<br>
							@if(array_key_exists('24 V DC',$contractor_details))
							@for($i=0; $i < count($contractor_details['24 V DC']['name']); $i++)
							Name: {{$contractor_details['24 V DC']['name'][$i]}}<br/>
							Company: {{$contractor_details['24 V DC']['company'][$i]}}<br/>
							Quantity: {{$contractor_details['24 V DC']['qty'][$i]}}<br/>
							@endfor
							@endif
							<br>
							@endisset
							

							@isset($contractor_details['230 V DC']['name'])
							230 V DC:<br>
							@if(array_key_exists('230 V DC',$contractor_details))
							@for($i=0; $i < count($contractor_details['230 V DC']['name']); $i++)
							Name: {{$contractor_details['230 V DC']['name'][$i]}}<br/>
							Company: {{$contractor_details['230 V DC']['company'][$i]}}<br/>
							Quantity: {{$contractor_details['230 V DC']['qty'][$i]}}<br/><br/>
							@endfor
							@endif
							<br>
							@endisset
							

							@isset($contractor_details['Relay']['name'])
							Relay:<br>
							@if(array_key_exists('Relay',$contractor_details))
							@for($i=0; $i < count($contractor_details['Relay']['name']); $i++)
							Name: {{$contractor_details['Relay']['name'][$i]}}<br/>
							Company: {{$contractor_details['Relay']['company'][$i]}}<br/>
							Quantity: {{$contractor_details['Relay']['qty'][$i]}}<br/><br/>
							@endfor
							@endif
							<br>
							@endisset
							
							@isset($contractor_details['add-on-block']['name'])
							ADD ON BLOCK:<br>
							@if(array_key_exists('add-on-block',$contractor_details))
							@for($i=0; $i < count($contractor_details['add-on-block']['name']); $i++)
							Name: {{$contractor_details['add-on-block']['name'][$i]}}<br/>
							Quantity: {{$contractor_details['add-on-block']['qty'][$i]}}<br/><br/>
							@endfor
							@endif
							@endisset


						</td>
					</tr>
					@if(!empty($reg_capacitor))
			            <tr>
			              <td class="col-xs-6">Register/Capacitor:</td> 
			              <td class="col-xs-6">
			                  @if(array_key_exists('name',$reg_capacitor))
			                    @foreach($reg_capacitor['name'] as $index=>$value)
			                        {{$value}} Qty: {{$reg_capacitor['qty'][$index]}} <br>
			                    @endforeach
			                  @endif
			              </td>
			            </tr>
			        @endif
					<tr>
						<td class="col-xs-6">MCB Details:</td> 
						<td class="col-xs-6">
							 @isset($mcb_details['Three Pole']['name'])
							 Three Pole:<br>
							@if(array_key_exists('Three Pole',$mcb_details))
							@for($i=0; $i < count($mcb_details['Three Pole']['company']); $i++)
							Name:{{$mcb_details['Three Pole']['name'][$i]}}<br/>
							Company:{{$mcb_details['Three Pole']['company'][$i]}}<br/>
							Quantity:{{$mcb_details['Three Pole']['qty'][$i]}}<br/>
							@endfor
							@endif
							@endisset 
							<br>
							Two Pole:<br>
							@isset($mcb_details['Two Pole']['name'])
							@if(array_key_exists('Two Pole',$mcb_details))
							@for($i=0; $i < count($mcb_details['Two Pole']['company']); $i++)
							Name:{{$mcb_details['Two Pole']['name'][$i]}}<br/>
							Company:{{$mcb_details['Two Pole']['company'][$i]}}<br/>
							Quantity:{{$mcb_details['Two Pole']['qty'][$i]}}<br/>
							@endfor
							@endif
							@endisset
							<br>
							Single Pole:<br>
							@isset($mcb_details['Single Pole']['name'])
							@if(array_key_exists('Single Pole',$mcb_details))
							@for($i=0; $i < count($mcb_details['Single Pole']['company']); $i++)
							Name:{{$mcb_details['Single Pole']['name'][$i]}}<br/>
							Company:{{$mcb_details['Single Pole']['company'][$i]}}<br/>
							Quantity:{{$mcb_details['Single Pole']['qty'][$i]}}<br/>
							@endfor
							@endif
							@endisset

						</td>
					</tr>
      @if(!empty($overload_details))
            <tr>
              
              <td class="col-xs-6">Overload Details:</td> 
              @if(array_key_exists('pfr_need',$overload_details))
              <td class="col-xs-6">prf_need:{{$overload_details['pfr_need']}}
                @endif
                @if(array_key_exists('pfr_type',$overload_details))
                <br>
                prf_type:{{$overload_details['pfr_type']}}
                @endif

                 @if(array_key_exists('smps',$overload_details))
                <br>
                smps:{{$overload_details['smps']}}
                @endif


              </td>
            </tr>
            @endif
             @if(!empty($overload_details))
            <tr>
              
              <td class="col-xs-6">Battery Chrager:
              @isset($overload_details['battery-charger']) 
              @if(array_key_exists('battery-charger',$overload_details))
              <td class="col-xs-6">{{$overload_details['battery-charger']}}<br>
              @endif
              @endisset
                @isset($overload_details['battery-charger-option']['name'])
                @if(array_key_exists('battery-charger-option',$overload_details))
                  @for($i=0;$i < count($overload_details['battery-charger-option']); $i++)
                        {{-- {{$overload_details['battery-charger-option']['name'][$i]}} - {{$overload_details['battery-charger-option']['qty'][$i]}} Qty<br> --}}
                  @endfor
                @endif
                @endisset

                @isset($overload_details['battery-qty'])
                
                    Battery Qty: {{$overload_details['battery-qty']}}<br>
                @endisset

                @isset($overload_details['a_cont_24vdc'])
                
                    A CONT 24 V DC: {{$overload_details['a_cont_24vdc']}}<br>
                @endisset
                
              </td>
            </tr>
             @if(!empty($overload_details))
            <tr>
              
              <td class="col-xs-6">Battery 12V:</td> 
               <td class="col-xs-6">
              @if(array_key_exists('battery_12V',$overload_details))
             
               
                <br>
                @if(array_key_exists('name',$overload_details['battery_12V']))
                   @for($i = 0 ; $i < count($overload_details['battery_12V']['name']) ; $i++)
                      {{$overload_details['battery_12V']['name'][$i] ?? ''}} Qty: {{$overload_details['battery_12V']['qty'][$i] ?? ''}}<br>
                  @endfor
                @endif
                 @endif
                
              </td>
            </tr>
            @endif
            @endif
					<tr>
						@if(!empty($connector_wire_details) && count($connector_wire_details)>0)
						<td class="col-xs-6">Connection Wire Details:</td> 
						<td class="col-xs-6">Connector Field:<br>
							Quantity :{{$connector_wire_details['connector_field']['qty']}}<br/>
							Size: {{$connector_wire_details['connector_field']['size']}}<br/>
							Make: {{$connector_wire_details['connector_field']['make']}}<br/><br>
							Connector Power:<br>
							Quantity: {{$connector_wire_details['connector_power']['qty']}}<br/>
							Size: {{$connector_wire_details['connector_power']['size']}}<br/>
							Make: {{$connector_wire_details['connector_power']['make']}}<br/>
							<br/>
							Wire Field<br>
							Quantity: {{$connector_wire_details['wire_field']['qty']}}<br/>
							Size: {{$connector_wire_details['wire_field']['size']}}<br/>
							Make: {{$connector_wire_details['wire_field']['make']}}<br/>
							<br/>
							Wire Power:<br>
							Quantity:{{$connector_wire_details['wire_power']['qty']}}<br/>
							Size:{{$connector_wire_details['wire_power']['size']}}<br/>
							Make:{{$connector_wire_details['wire_power']['make']}}<br/>
						</td>
						@endif
					</tr>
					<tr>
						<td class="col-xs-6">Transformer Details:</td> 
						<td class="col-xs-6">
							@isset($transformer_detail)
							@if(array_key_exists('name',$transformer_detail))
							@for($i=0; $i < count($transformer_detail['name']); $i++)
							{{!empty($transformer_detail['name'][$i])?$transformer_detail['name'][$i]: ''}}<br/>
							@endfor
							@endif
							@endisset

						</td>
					</tr>
					<tr>
						<td class="col-xs-6">Nut Bolt:</td> 
						<td class="col-xs-6">3mm:{{$nutbolt['3mm'] }} Quantity<br>
							4mm: {{$nutbolt['4mm'] }} Quantity<br>
							6mm: {{$nutbolt['6mm'] }} Quantity
						</td>
					</tr>
					<tr>
						<td class="col-xs-6">Wiser:</td> 
						<td class="col-xs-6">3mm:{{$wiser['3mm'] }} Quantity<br>
							4mm: {{$wiser['4mm'] }} Quantity<br>
							6mm: {{$wiser['6mm'] }} Quantity
						</td>
					</tr>
					<tr>
						<td class="col-xs-6">Lug:</td> 
						<td class="col-xs-6">3mm:{{$wiser['3mm'] }}Quantity<br>
							2in: {{$wiser['4mm'] }} Quantity<br>
							2.5mm: {{$wiser['4mm'] }} Quantity<br>
							4mm ring: {{$wiser['6mm'] }} Quantity 
						</td>
					</tr>
					<tr>
						<td class="col-xs-6">Any Other Details:</td> 
						<td class="col-xs-6">{{ $stockAssign->any_other_details ?? '' }}</td>
					</tr>
				</tbody>
			</table>
			@else
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td>New Products</td>
							<td>{{$stockAssign->add_new}}</td>
						</tr>
						<tr>
							<td>Remove</td>
							<td>{{$stockAssign->remove_previous}}</td>
						</tr>
												<tr>
							<td>Replace</td>
							<td>{{$stockAssign->replace_old}}</td>
						</tr>
					</tbody>
				</table>
			@endif
		</div>
	</div>
</div>
@php
$param = [];
if(isset($assgin_stock_id))
{
	$param = [$stockAssign->id,$assgin_stock_id];
}
else
{
	$param = [$stockAssign->id];
}

@endphp
<form id="assignStockForm" method="POST" action="{{route('stock.postAssignStock',$param)}}">
	{{csrf_field()}}
	<div class="col-md-6">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="card-actions">
					<button type="button" class="card-action" data-toggle="modal" data-target="#stock_list" title="Assign Stock">
						<i class="icon icon-plus-circle icon-lg"></i>
					</button>
					<button type="button" class="card-action card-toggler" title="Collapse"></button>
					<button type="button" class="card-action card-reload" title="Reload"></button>
				</div>
				<strong>Assigned Stock</strong>
			</div>
			<div class="card-body custom-scrollbar" style="max-height: 500px;overflow-y: scroll;">
				<div class="table-responsive">

					<table id="addQuantityTable" class="table table-striped table-nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Product Name</th>
								<th>Brand</th>
								<th>Category</th>
								<th>Unit</th>
								<th>Qauntity</th>
								<th>Add Quantity</th>
								<th>Serial Number</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
			</div>
		</div>
<br><br>
		@isset($assignments)			
	<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="card-actions">
					
					<button type="button" class="card-action card-toggler" title="Collapse"></button>
					<button type="button" class="card-action card-reload" title="Reload"></button>
				</div>
				<strong>Assigned Stock</strong>
			</div>
			<div class="card-body custom-scrollbar" style="max-height: 500px;overflow-y: scroll;">
				<div class="table-responsive">

					<table id="" class="table table-striped table-nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Sr No</th>
								<th>Stock Assigned Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($assignments as $assignment)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$assignment->created_at->format('d-m-Y')}}</td>
									<td><a href="{{route('stock.product_assign_pdf',$assignment->id)}}" target="_blank" class="btn btn-sm btn-outline-primary"><i class="icon icon-eye"></i></a></td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
	@endisset

	</div>
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="card-actions">
					<button type="button" class="card-action card-toggler" title="Collapse"></button>
					<button type="button" class="card-action card-reload" title="Reload"></button>
				</div>
				<strong>Technicain Details</strong>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-3" style="text-align: center">
						<h3>Name : <span class="text-primary">{{$stockAssign->technician->name}}</span></h3>
					</div>
					<div class="col-md-3" style="text-align: center">
						<h3> Contact No: <span class="text-primary">{{$stockAssign->technician->phone}}</span></h3>
					</div>
					<div class="col-md-3" style="text-align: center">
						<h3>Email: <span class="text-primary">{{$stockAssign->technician->email}}</span></h3>
					</div>
				</div>
				<br>
				<!-- <div class="form-group">
					<div class="row">
						<div class="col-sm-3">
							<input type="text" id="code" name="unique_code" value="" class="form-control input-sm" placeholder="Enter technician Unique Code"><br/>
							<span class="label" id="verify-msg">

							</span>
							@if ($errors->has('unique_code'))
							<span class="label label-primary" id="error">
								{{ $errors->first('unique_code') }}
							</span>								
							@endif
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-outline-primary btn-sm" id="verify">
								<i class="icon icon-ok"></i> Verify
							</button>
						</div>
					</div>
				</div> -->
				<button type="button" class="btn btn-outline-primary" id="draft">
					<i class="icon icon-edit"></i> Save
				</button>
				<br>
				<br>

				<!-- <button type="submit" class="btn btn-primary" id="assign-stock" disabled="disabled">
					<i class="icon icon-plus"></i> Assign stock
				</button> -->
			</div>
		</div>
	</div>
</form>
@isset($assign_products)
	<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="card-actions">
					
					<button type="button" class="card-action card-toggler" title="Collapse"></button>
					<button type="button" class="card-action card-reload" title="Reload"></button>
				</div>
				<strong>Assigned products till now</strong>
			</div>
			<div class="card-body custom-scrollbar" style="max-height: 500px;overflow-y: scroll;">
				<div class="table-responsive">

					<table id="" class="table table-striped table-nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Sr No</th>
								<th>Product Name</th>
								<th>Brnad</th>
								<th>Category</th>
								<th>Unit</th>
								<th>Quantity</th>
								<th>Add Quantity</th>
							</tr>
						</thead>
						<tbody>
							@foreach($assign_products as $item)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$item[0]->name}}</td>
								<td>{{$item[0]->brand->name}}</td>
								<td>{{$item[0]->category->name}}</td>
								<td>{{$item[0]->unit}}</td>
								<td>{{$item[0]->quantity}}</td>
								<td>{{$item->assign_qty}}</td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
@endisset	
</div>

@endsection
@section('modals')
@include('modals.stock_list')
@endsection
@push('page-script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
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
						'<td><input type="number" min="1" max="'+product.quantity+'" value="" name="qty[]" data-parsley-required="true" class="form-control"/></td>'+
						'<td><textarea class="form-control" name="sr_no[]" placeholder="Add serial number"></textarea></td>'+
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

		
		//stock assign button click
		$("#assign-stock").click(function(e){
			e.preventDefault();
			swal({
				title: "Are you sure?",
				text: "You want Assign Stock!",
				icon: "warning",
				buttons: {
					cancel: true,
					confirm: true,
				},
				dangerMode: true,
			}).
			then((value) => {
				if (value) {
					if($('#assignStockForm').parsley().validate())
					{
						$("#assignStockForm").submit();
					}
				}
			});
		});

		//unique code verify button click
		// $("#verify").click(function(e){
		// 	e.preventDefault();
		// 	$('#verify-msg,#error').removeClass('label-success label-primary').empty();
		// 	var unique_code = $('input[name="unique_code"]').val();
		// 	if(unique_code == "{{$stockAssign->unique_code}}")
		// 	{
		// 		$('#verify-msg').addClass('label-success').text('Verified Successufully');
		// 		$('input[name="unique_code"]').prop('readonly',true);
		// 		$('#assign-stock').removeAttr('disabled');
		// 	}
		// 	else
		// 	{
		// 		$("#verify-msg").addClass("label-primary").text("Invalid unique code");
		// 		$("#assign-stock").attr("disabled","disabled");
		// 	}
		// });

	//reassign product
	

		//stock save to draft
		$('#draft').click(function(e){
			e.preventDefault();
			swal({
				title: "Are you sure?",
				text: "You want Draft Stock!",
				icon: "warning",
				buttons: {
					cancel: true,
					confirm: true,
				},
				dangerMode: true,
			}).
			then((value) => {
				if (value) {
					if($('#assignStockForm').parsley().validate())
					{
						var url ="{{route('stock.draftStock',$param)}}";
						$('#assignStockForm').attr('action',url)
						$("#assignStockForm").submit();
					}
				}
			});
		})

	//complete drafted stock
	@isset($assign_stock)
	var id_array = {!!$assign_stock->products_id!!};
	console.log(id_array);
	var qty_array = {!!$assign_stock->products_qty!!};
	for(var i=0;i<id_array.length;i++)
	{
		$('input[name="product[]"][data-id="'+id_array[i]+'"]').prop("checked",true).prop("disabled",true);
	}

	var ids = $("input[name='product[]']:checked:disabled").map(function(){$(this).prop("disabled",true);return parseInt($(this).val());}).get();
	console.log(ids);
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

		filteredProducts.forEach(function(product,index) {
			console.log(product)
			addRows += '<tr><td>'+product.name+'</td><td>'+product.category.name+'</td>'+
			'<td>'+product.brand.name+'</td><td>'+product.unit+'</td><td>'+product.quantity+'</td>'+
			'<td><input type="number" min="1" max="'+product.quantity+'" value="" name="qty[]" data-parsley-required="true" class="form-control"/></td>'+
			'<td><textarea class="form-control" name="sr_no[]" placeholder="Add serial number" value="'+product.sr_no+'"></textarea></td>'+
			'<td><a href="javascript:;" class="btn btn-xs btn-outline-danger removeProduct" data-toggle="tooltip" data-id="'+product.id+'" title="Remove Product"><i class="icon icon-trash"></i></a></td><input type="hidden" name="id[]" value="'+product.id+'"></tr>';
		});

		$('#addQuantityTable tbody').append(addRows);
	}	

	@endisset


</script>
@endpush
