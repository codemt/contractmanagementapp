@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Assigned Contract</span>
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
                    <strong>List of Assigned Contract</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>

                            <tr>
                                <th>Contract No.</th>
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
                                    <td>{{$contract->contract->user->name ?? ''}}</td>
                                    <td>{{$contract->technician->name ?? ''}}</td>
                                    <td>{{$contract->stock->name ?? ''}}</td>
                                    <td>{{$contract->control_type ?? ''}}</td>
                                    <td>
                                        <button type="button" name="button" class="btn btn-xs btn-outline-primary change_technician" data-toggle="modal" data-name="{{json_encode($contract)}}"data-target="#change_technician">
                                            <i class="icon icon-ok"></i> Change Technician
                                        </button>
                                        <a href="{{route('supervisor.stock_assign_pdf',$contract->id)}}" class="btn btn-xs btn-outline-primary" title="View Assign Stock">
                                            <i class="fa fa-view"></i>
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

    @include('modals.technician')
     @include('modals.change_technician')
    @endsection
@push('page-script')
<script type="text/javascript">
     //update product
    $('.change_technician').click(function(){
        let contract =$(this).attr('data-name');
        contract = JSON.parse(contract);
        $(' select[name="technician_id"] option[value="'+contract.technician_id+'"]').prop("selected",true)
        $('input[type=hidden][name="id"]').val(contract.id);
       
    })
        </script>
@endpush
