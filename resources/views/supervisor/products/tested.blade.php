@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Tested  Products</span>
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
                    <strong>Ready To Launch</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Contract No.</th>
                                <th>Control Type</th>
                                <th>Assign Date</th>
                                <th>Completed Date</th>
                                <th>Tester Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0; $i < 3; $i++)
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>ds-115</td>
                                    <td>S.S</td>
                                    <td>9/8/27</td>
                                    <td>15/8/27</td>
                                    <td>John Doe</td>
                                    <td>
                                        <button class="btn btn-xs btn-outline-primary" data-toggle="modal" data-target="#tester_report" type="button">
                                            <i class="icon icon-check"></i> Check Status
                                        </button>

                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('modals')
    @include('modals.tester_report')
@endsection
