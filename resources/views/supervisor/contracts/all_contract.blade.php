@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Controller History</span>
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
                    <strong>Contract List</strong>
                </div>
                <div class="card-body">
                    <div class="row" style="margin-top: 10px;margin-bottom: 20px">
                        <form action="{{route('supervisor.filter_contract')}}" method="POST">
                            {{csrf_field()}}
                            <label class="col-sm-2 control-label" for="status">Select Status</label>
                            <div class="col-sm-4">
                                <div class=" md-label-floating">
                                    <select name="status" id="status" class="md-form-control" required="" aria-required="true">
                                        <option value="" selected="" disabled="disabled">Select Status</option>
                                        <option value="pending">pending</option>
                                        <option value="approved">approved</option>
                                        <option value="Assigned To Stock">Assigned To Stock</option>
                                        <option value="Stock Assigned">Stock Assigned</option>
                                        <option value="Assembled">Assembled</option>
                                        <option value="Tested">Tested</option>
                                    </select>
                                    <label class="md-control-label"></label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-outline-primary btn-block" type="submit">
                                    <i class="icon icon-paper-plane"></i> Filter
                                </button>
                            </div>
                        </form>
                        </div>
                                   <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>

                            <tr>
                                <th>Contract No.</th>
                                <th>Client Name</th>
                                <th>technician Name</th>
                                <th>stock Name</th>
                                <th>Technician Assigned Date</th>
                                <th>Date of Completion</th>
                                <th>Date of Testing</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($contracts as $contract)
                              <tr>
                                    <td>{{$contract->id}}</td>
                                    <td>{{$contract->client_name ?? ''}}</td>
                                    <td>{{$contract->detail->technician->name ?? 'Technician Not Assigned'}}</td>
                                    <td>{{$contract->detail->stock->name ?? 'Stock Not Assigned'}}</td>
                                    <td>{{$contract->supervisorStockAssign->created_at ?? '-'}}</td>
                                    <td>
                                        @foreach($contract->remarks as $key => $value)

                                          @if($value->status == "Product Completed")

                                            {{$value->created_at ?? '-'}}       

                                          @endif

                                        @endforeach

                                    </td>
                                    <td>
                                        @foreach($contract->remarks as $key => $value)

                                          @if($value->status == "Product Tested")
                                    
                                            {{$value->created_at ?? '-'}}       

                                          @endif

                                        @endforeach

                                    </td>
                                    <td>
                                        <a href="{{route('contractPdf',[$contract->id])}}" target="_blank">
                                    <button type="button" class="btn btn-xs btn-outline-primary" data-toggle="tooltip" title="View Contract">
                                        <i class="icon icon-eye"></i>
                                    </button></a>
                                      <a href="{{route('supervisor.contract_history',$contract->id)}}" class="btn tbn-xs btn-outline-primary" title="view history" target="_blank">
                                          <i class="icon icon-refresh"></i>
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
