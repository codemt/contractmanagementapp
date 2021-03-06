@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Tested Product</span>
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
                    <strong>List Of Test Product</strong>
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
                                    <a href="{{route('supervisor.testedProductPdf',[$contract->id])}}" class="btn btn-xs btn-outline-primary" title="Test Result" target="_blank">
                                            <i class="icon icon-eye"></i> Test Result</a>
                                        <a href="{{route('supervisor.assignStock.completed',[$contract->id])}}">
                                        <button class="btn btn-xs btn-outline-primary"  type="button" data-toggle="tooltip" title="Assign Stock">
                                            <i class="icon icon-check"></i> Complete
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

@section('modals')
    @include('modals.technician')
    @include('modals.tester_report')
@endsection
