@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Assembled Contract</span>
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
                    <strong>Ready To Test</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>

                            <tr>
                                <th>Contract No.</th>
                                <th> Order Taken by </th>
                                <th> Contract Serial No. </th>
                                <th> Status </th>
                                <th>Client Name</th>
                                <th>technician Name</th>
                                <th>stock Name</th>
                                <th>Control Type</th>
                                <th>Tester Name</th>
                               <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($contracts as $cntr)
                              <tr>
                                    <td>{{ $id++ }}</td>
                                    <td>{{ $cntr->order_taken_by }}</td>
                                    <td> {{ $cntr->contract_serial_number }} </td>
                                    <td> {{ $cntr->status }} </td>
                                    <td>{{$cntr->contract->user->name ?? ''}}</td>
                                    <td>{{$cntr->technician->name ?? ''}}</td>
                                    <td>{{$cntr->stock->name ?? ''}}</td>
                                    <td>{{$cntr->control_type ?? ''}}</td>
                                    <td>{{$cntr->testers->name ?? ''}}</td>
                                    <td>
                                        @if($cntr->contract->supervisorStockAssign->tester == NULL || $cntr->contract->supervisorStockAssign->tester == '')
                                        <button type="button" name="button" class="btn btn-xs btn-outline-primary assign_tester" data-toggle="modal" data-id="{{$cntr->id}}" data-target="#assign_tester">
                                            <i class="icon icon-ok"></i> Assign Tester
                                        </button>
                                        @endif
                                        <a href="{{route('supervisor.production_report_pdf',$cntr->contract->supervisorStockAssign->id)}}" class="btn btn-outline-success btn-xs" title="View Pdf" target="_blank"><i class="icon icon-eye"> </i></a>
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
    @include('modals.tester')
@endsection
@push('page-script')
<script type="text/javascript">
//update product
    $('.assign_tester').click(function(){
        let contract =$(this).attr('data-id');
        console.log(contract);
        $(' input[type=hidden][name="id"]').val(contract);
       
    })
    </script>
@endpush