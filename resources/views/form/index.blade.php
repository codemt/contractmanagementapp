@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">All Forms</span>
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
                    <strong>Created Forms</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Control Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 1;
                            @endphp
                            @for ($i=0; $i < 10; $i++)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>V3F</td>
                                    <td>
                                        <a href="#" class="btn btn-xs btn-outline-info">
                                            <i class="icon icon-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-xs btn-outline-primary">
                                            <i class="icon icon-trash"></i>
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
