@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">New Assignment</span>
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
                    <strong>Assigment List</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Technician Name</th>
                                <th>Order Date</th>
                                <th>Due Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($count = 1)
                            @isset($stock)
                            @foreach($stock as $data)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{$data->technician->name ?? ''}}</td>
                                    <td>{{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</td>
                                    <td>{{$data->due_date}}</td>
                                    <td>
                                        <a href="{{ route('ic.assign_stock',$data->id) }}" class="btn btn-xs btn-outline-success" data-toggle="tooltip" title="View Order/(s)">
                                            <i class="icon icon-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @endisset
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
