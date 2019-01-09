
@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Testing</span>
        </h1>
    </div>
    <div class="row gutter-xs">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-actions">
                        <button type="button" class="card-action card-toggler" title="Collapse"></button>
                        <button type="button" class="card-action card-reload" title="Reload"></button>
                    </div>
                    <strong>Products Tested</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Contract No.</th>
                                <th>Control Type</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @isset($testedProducts)
                            @foreach($testedProducts as $product)
                            <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->contract->id}}</td>
                            <td>{{$product->contract->detail->control_type}}</td>
                            <td>{{\Carbon\Carbon::parse($product->due_date)->format('d-m-Y')}}</td>
                            <td>{{$product->status}}</td>
                            <td>
                                @if($product->status != "Tested")
                                <a href="{{route('technician.edit_test',$product->id)}}" class="btn btn-xs btn-outline-primary">
                                    <i class="icon icon-edit"></i> Edit
                                </a>
                                 <a href="javascript:;" data-id="{{$product->id}}" class="btn btn-xs btn-outline-primary" id="send-to-supervisor">
                                    <i class="icon icon-send"></i> Send To Supervisor
                                </a>
                                @if($product->status != 'Issue Found In Testing')
                                <a href="javascript:;" data-id="{{$product->id}}" class="btn btn-xs btn-outline-primary" title="Return to technician" id="return-to-technician"><i class="icon icon-share-square"></i> Issue Found Return
                                </a>
                                @endif
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
@push('page-script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script>
    $(document).on('click', '#send-to-supervisor', function(){
        let id = $(this).attr('data-id');
        swal({
            title: "Are you sure?",
            text: "Once Testing Result Send, you will not be able to recover this test!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((send) => {
            if (send) {
                $.ajax({
                    url:'/technician/sendToSupervisor/'+id,
                    type:'post',
                    success : function(response) {
                        swal("Send! Your test result has been send!", {
                            icon: "success",
                        });
                        $( ".dataTable" ).load( "/tester/product_tested .dataTable" );
                    }
                })
            } else {
                swal("Your test result not send!");
            }
        });
    });

    //issue found send to technician 
    $(document).on('click','#return-to-technician',function(e){
        var id = $(this).attr('data-id');
        swal({
            title: "Are you sure?",
            text: "Issues found! Return product to technician!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((send) => {
            if (send) {
                $.ajax({
                    url:'/technician/returnToTechnician/'+id,
                    type:'post',
                    success : function(response) {
                        swal("Returned! Product return to technician!", {
                            icon: "success",
                        });
                        $( ".dataTable" ).load( "/technician/product_tested .dataTable" );
                    }
                })
            } else{
                swal("Your test result not return!");
            }
        });
    });

    </script>
@endpush
