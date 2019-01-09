
@extends('layouts.master')

@section('page-content')
<div class="title-bar">
    <h1 class="title-bar-title">
        <span class="d-ib">Technician </span>
    </h1>
</div>
@if(Session::has('errors'))
<div class="alert alert-warning">
    @foreach(Session::get('errors')->all() as $error_message)
        <p>{{ $error_message }}</p>
    @endforeach
</div>
@endif
<div class="row gutter-xs">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-actions">
                    <button type="button" class="card-action card-toggler" title="Collapse"></button>
                    <button type="button" class="card-action card-reload" title="Reload"></button>
                </div>
                <strong>Stock Assign</strong>
            </div>
            <div class="card-body">
                <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Contract No.</th>
                            <th>Control No.</th>
                            <th> Contract Serial No. </th>
                            <th>Control Type</th>
                            <th>Unique Code</th>
                            <th> Status </th>
                            <th>Due Date</th>
                            <th>Stock List</th>
                            <th>Stock Issued</th>
                            <th>Received Full Stock</th>
                            <th>Complete</th>
                        </tr>
                    </thead>

                    <tbody>
                        @isset($stockassign)
                        @foreach($stockassign as $data)
                        <tr>
                                
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->contract_id}}</td>
                            <td> {{ $data->control_no }} </td>
                            <td> {{ $data->contract_serial_number }} </td>
                            <td>{{$data->control_type}}</td>
                            <td>{{$data->unique_code}}</td>
                            <td> {{ $data->status }}</td>
                            <td>{{date('d-m-Y',strtotime($data->due_date))}}</td>
                            <td>
                                <a href="{{route('technician.asign.pdf',$data->id)}}"  class="btn btn-xs btn-outline-success" target="_blank" title="Stock List">
                                    <i class="icon icon-eye"></i> 
                                </button></a>
                            </td>
                            <td>
                                    <a href="{{route('technician.product_assigned',$data->id)}}" class="btn btn-outline-success btn-xs" title="Stock Issued" target="_blank">
                                     <i class="icon icon-eye"></i> 
                                 </a>
                                 
                            </td>
                            <td>
                                 @if($data->status == 'Stock Drafted')
                                   
                                 <a href="javascript:;" class="btn btn-outline-success btn-xs get-all-stock" data-id = "{{$data->id}}" title="Received Full Stock">
                                     <i class="icon icon-check"></i>
                                 </a>
                                 @endif
                            </td>
                              <td>
                                
                                @if($data->status == 'Stock Assigned')
                                <a href="javascript:;" data-name="{{json_encode($data)}}" class="assembled btn btn-outline-success btn-xs" data-toggle="modal" data-target="#production_report" title="complete">
                                     <i class="icon icon-check"></i>
                                 </a>
                                 @endif
                            </td>
                         </tr>
                         @endforeach
                         @endisset
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div> <!-- end normal control testing -->
 @endsection
 @section('modals')
    @include('modals.production_report')
 @endsection
 @push('page-script')
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
 <script type="text/javascript">
    //delete contract
    $(document).on('click','.stockassign',function(){
        let stockassign_id = $(this).attr('data-stockassgin_id');
        console.log(stockassign_id);
        swal({
            title: "Are you sure?",
            text: "You want to Assembled this contract!",
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
                url: "technician/assembled_product/"+stockassign_id,
                type: "POST",
                data: {},
                dataType: "html",
                success: function (response) {
                    console.log(response);
                    swal("Done!","It was succesfully Assembled!","success");
                    location.reload();
                    
                }
            });
        }
    });
    })

    $('.assembled').click(function(){
		let stock =$(this).attr('data-name');
		stock = JSON.parse(stock);
		
		$(' input[type=text][name="control_no"]').val(stock.control_no);
		$(' input[type=hidden][name="control_id"]').val(stock.id);
	})

   $('#production_report').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
})

    //btn-delete click
    $(document).on('click','.get-all-stock',function(){
        var id = $(this).attr('data-id');
        console.log(id);
        swal({
            title: "Are you sure?",
            text: "You get all required stock from stock manager",
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
                url: "/technician/get_all_stock/"+id,
                type: "POST",
                success: function (response) {
                    console.log(response);
                    swal("Done!","It was succesfully completed!","success");
                    location.reload();
                }
            });
          }
       });
    })


</script>

@endpush
