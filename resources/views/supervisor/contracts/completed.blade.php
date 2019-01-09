@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Completed Contract</span>
        </h1>
    </div>
    <div class="row gutter-xs">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="card-actions">
                        <button type="button" class="card-action card-toggler" title="Collapse"></button>
                        <button type="button" class="card-action card-reload" title="Reload"></button>
                    </div>
                    <strong>Complete Product</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>

                            <tr>
                                <th>Contract No.</th>
                                <th> Order Taken By </th>
                                <th> Control No </th>
                                <th> Contract Serial No. </th>
                                <th>Client Name</th>
                                <th>technician Name</th>
                                <th>stock Name</th>
                                <th>Control Type</th>
                               <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($contracts as $contract)
                              <tr>
                                    <td>{{$contract->id}}</td>
                                    <td> {{ $contract->order_taken_by }} </td>
                                    <td> {{ $contract->control_no }} </td>
                                    <td> {{ $contract->contract_serial_number }} </td>
                                    <td>{{$contract->contract->user->name ?? ''}}</td>
                                    <td>{{$contract->technician->name ?? ''}}</td>
                                    <td>{{$contract->stock->name ?? ''}}</td>
                                    <td>{{$contract->control_type ?? ''}}</td>
                                    <td>
                                        <a href="{{route('contractPdf',[$contract->id])}}" target="_blank">
                                    <button type="button" class="btn btn-xs btn-outline-primary" data-toggle="tooltip" title="View Contract">
                                        <i class="icon icon-eye"></i>
                                    </button></a>
                                        <button class="btn btn-xs btn-outline-primary add_to_stock" type="button" data-toggle="tooltip" title="Add To Ready Made Stock" data-stockassign_id="{{$contract->id}}">
                                            <i class="icon icon-check"></i> Add To Ready Made Stock
                                        </button>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('page-script')
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script type="text/javascript">
        $(document).on('click','.add_to_stock',function(){
        let stockassign_id = $(this).attr('data-stockassign_id');
        console.log(stockassign_id);
        swal({
            title: "Are you sure?",
            text: "You want to Add this to Ready Made Product!",
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
                url: "/supervisor/addToReadyMadeStock/"+stockassign_id,
                type: "POST",
                data: {},
                dataType: "html",
                success: function (response) {
                    console.log(response);
                   swal("Done!","It was succesfully Added!","success");
                   location.reload();
                    
                }
            });
        }
    });
    })
    </script>
@endpush
