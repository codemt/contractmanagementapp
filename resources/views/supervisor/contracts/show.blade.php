@extends('layouts.master')

@section('page-content')

    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">All Contract</span>
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
                    <strong>Contract To Approve</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Contract No.</th>
                                <th>Client Name </th>
                                <th>Contact Person</th>
                                <th>Mobile Number</th>
                    
                                <th>Contract Date</th>
                                <th>Control Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($count = 1)
                            @foreach($contracts as $contract)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{$contract->id}}</td>
                                    <td>{{$contract->client_name}}</td>
                                    <td>{{$contract->contact_person}}</td>
                                    <td>{{$contract->mobile_number}}</td>
                                   
                                    <td>{{ Carbon\Carbon::parse($contract->created_at)->format('d-m-Y') }}</td>
                                    <td>{{$contract->detail->control_type ?? ''}}</td>
                                    <td>
                                     <a href="{{route('contract.edit',[$contract->id])}}" class="btn btn-xs btn-outline-warning" data-toggle="tooltip" title="Edit Contract">
                                        <i class="icon icon-edit"></i>
                                    </a>
                                        <a href="{{route('contractPdf',[$contract->id])}}" target="_blank">
                                    <button type="button" class="btn btn-xs btn-outline-primary" data-toggle="tooltip" title="View Contract">
                                        <i class="icon icon-eye"></i>
                                    </button></a>

                                        <Button class="btn btn-xs btn-outline-success verify" data-id="{{$contract->id}}" type="submit">
                                            <i class="icon icon-check"></i> Approve
                                        </Button>
                                        <a href="contractCancelled/{{$contract->id}}"
                                        <Button class="btn btn-xs btn-outline-primary" data-id="{{$contract->id}}" >
                                            <i class="icon icon-uncheck"></i> Cancelled
                                        </Button></a>
                                           <a href="javascript:;" data-contract_id={{$contract->id}}" class="deleteContract">
                                    <button type="button" class="btn btn-xs btn-outline-primary" data-toggle="tooltip" title="Delete Contract">
                                        <i class="icon icon-trash"></i>
                                    </button></a>


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

    <script type="text/javascript">

        $(document).on('click','.verify',function () {
            // alert("ok");
            var id =  $(this).attr("data-id");
            //alert(id);
            $.ajax({

                type:'post',
                url:'/status',
                data:{'id':id},
                success:function (response) {
                    location.reload(true);
                }


            })
        })

    </script>
  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    //delete contract
    $('.deleteContract').click(function(){
        let contract_id = $(this).data('contract_id');
            swal({
            title: "Are you sure?",
            text: "You will not be able to recover this contract!",
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
                url: "/contract/"+contract_id,
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



