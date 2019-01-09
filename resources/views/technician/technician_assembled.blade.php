
@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Technician </span>
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
                    <strong>Assembled Contract</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                    <th>Sr No.</th>
                                    <th> Order Taken By </th>
                                    <th>Contract No.</th>
                                    <th> Contract Serial No. </th>
                                    <th>Control Type</th>
                                    <th>Unique Code</th>
                                    <th> Status </th>
                                    <th>Action</th>
                            </tr>
                        </thead>
                            
                        <tbody>
                            @isset($stockassign)
                            @foreach($stockassign as $data)
                            <tr>
                               
                                    <td>{{$loop->iteration }}</td>
                                    <td> {{ $data->order_taken_by }}</td>
                                    <td>{{$data->contract_id}}</td>
                                    <td> {{ $data->contract_serial_number }} </td>
                                    <td>{{$data->control_type}}</td>
                                    <td>{{$data->unique_code}}</td>
                                    <td> {{ $data->status }}</td>
                            <td>
                                <a href="{{route('technician.asign.pdf',$data->id)}}"  class="btn btn-xs btn-outline-primary" target="_blank">
                                    <i class="icon icon-eye"></i> View Stock Assign
                                </a>
                                <a href="{{route('technician.product_assigned',$data->id)}}" class="btn btn-outline-success btn-xs" title="Stock Issued" target="_blank">
                                     <i class="icon icon-eye"></i> 
                                 </a>
                                 
                                @if($data->status == "Issue Found In Testing")
                                <a href="javascript:;"  class="btn btn-xs btn-outline-primary" target="_blank" data-id="{{$data->id}}" id="issue-solved-btn">
                                    <i class="icon icon-send"></i> Issue Solved Send to Test
                                </button></a>
                                @endif
                                <a href="{{route('technician.production_report_pdf',$data->id)}}" class="btn btn-outline-success btn-xs" title="View Pdf" target="_blank"><i class="icon icon-eye"></i></a>
                                
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
<script type="text/javascript">
    $('#issue-solved-btn').click(function(e){
        var id = $(this).attr('data-id');
        swal({
            title: "Are you sure?",
            text: "Issues Solve! Return product to tester!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((send) => {
            if (send) {
                $.ajax({
                    url:'/technician/returnToTester/'+id,
                    type:'post',
                    success : function(response) {
                        swal("Issues Solved! Gotcha!", {
                            icon: "success",
                        });
                        $( ".dataTable" ).load( "/technician/assembled_technician .dataTable" );
                    }
                })
            } else{
                swal("Your test result not return!");
            }
        });
    })
</script>
    
@endpush
