@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Completed Assignment</span>
        </h1>
    </div>
    <div class="row gutter-xs">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="card-actions">
                        <button type="button" class="card-action card-toggler" title="Collapse"></button>
                        <button type="button" class="card-action card-reload" title="Reload"></button>
                    </div>
                    <strong>Stock List</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Technician Name</th>
                                <th>Rceived Date</th>
                                <th>Completed Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @php($count = 1)
                            @isset($completedStock)
                            @foreach($completedStock as $stock )
                                <tr>

                                    <td>{{ $count++ }}</td>
                                    <td>{{$stock->supervisorStockAssign->technician->name ?? ''}}</td>
                                    <td>--</td>
                                    <td>{{$stock->created_at->format('m/d/Y')}}</td>

                                    <td>
                                        <a href="{{ route('stock.show_assigned_stock',$stock->id) }}" class="btn btn-sm btn-primary">
                                            <i class="icon icon-eye"></i> View Stock
                                        </a>

                                        {{-- <a href="{{route('stock.reassign_stock',$stock->id)}}" class="btn btn-sm btn-primary">
                                            <i class="icon icon-eye"></i> Reassign Stock
                                        </a> --}}
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
