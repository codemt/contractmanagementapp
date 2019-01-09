@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">All Client</span>
        </h1>
    </div>
    <div class="row gutter-xs">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-actions">
                        <button type="button" class=" btn btn-sm btn-dark"  id="importClient" data-toggle="modal" data-target="#clientImportModal">Import Client</button>
                        <button type="button" class="card-action card-toggler" title="Collapse"></button>
                        <button type="button" class="card-action card-reload" title="Reload"></button>
                    </div>
                    <strong>Client List</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Client Name</th>
                                <th>Contact Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->phone}}</td>
                                    <td>
                                        <a href="clientcontract/{{$client->id}}" class="btn btn-xs btn-outline-success" data-toggle="tooltip" title="View Contract">
                                            <i class="icon icon-eye"></i>
                                        </a>
                                        @if(count($client->contracts)>0)
                                        <button type="button" class="btn btn-xs btn-outline-primary" data-toggle="tooltip" title="Client have Contract" disabled="disabled">
                                            <i class="icon icon-trash"></i>
                                        </button>
                                        @else
                                         <a href="javascript:;" data-client_id={{$client->id}}" class="deleteclient">
                                    <button type="button" class="btn btn-xs btn-outline-primary" data-toggle="tooltip" title="Delete Contract">
                                        <i class="icon icon-trash"></i>
                                    </button></a>
                                        @endif
                                        <a href="{{route('create_contract',[$client->id])}}">
                                        <button class="btn btn-xs btn-outline-primary" data-target="#assign_technician" type="button">
                                            Add Contract
                                        </button>
                                        </a>
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
@section('modals')

<div id="clientImportModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Import Client</h4>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form method='post' action='{{route('supervisor.import_client')}}' enctype="multipart/form-data">
            {{csrf_field()}}
          Select file : <input type='file' name='import_client' id='file' class='form-control' ><br>
          <input type='submit' class='btn btn-info' value='Upload' id='upload'>
        </form>
    </div>

  </div>
</div>
@endsection


@push('page-script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    //delete contract
    $('.deleteclient').click(function(){
        let client_id = $(this).data('client_id');
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
                url: "/deleteClient/"+client_id,
                type: "POST",
                data: {},
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
