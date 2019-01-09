@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Assembled Products</span>
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
                                <th>#</th>
                                <th>Contract No.</th>
                                <th>Control Type</th>
                                <th>Technician Assign Date</th>
                                <th>Technician Completed Date</th>
                                <th>Technician Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($count = 1)
                            @for ($i=0; $i < 3; $i++)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>ds-115</td>
                                    <td>S.S</td>
                                    <td>12/8/18</td>
                                    <td>20/9/18</td>
                                    <td>John Doe</td>
                                    <td>
                                        <a href="" class="btn btn-xs btn-outline-info" data-toggle="tooltip" title="View Contract PDF">
                                            <i class="icon icon-eye"></i>
                                        </a>
                                        <button class="btn btn-xs btn-outline-primary" data-toggle="modal" data-target="#assign_tester" type="button">
                                            <i class="icon icon-check"></i> Assign Tester
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
    @include('modals.tester')
@endsection
