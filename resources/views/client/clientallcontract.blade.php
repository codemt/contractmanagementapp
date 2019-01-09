@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">All Contract</span>
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
                    <strong>Approved Contract</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Contract No.</th>
                            <th>Contract Date</th>
                            <th>Control Type</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($count = 1)
                        @foreach($contracts as $contract)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{$contract->id}}</td>
                                <td>{{$contract->created_at->format('d-m-Y')}}</td>
                                <td>{{$contract->detail->control_type ?? ''}}</td>

                                <td>
                                    {{--<a href="#" class="btn btn-xs btn-outline-warning" data-toggle="tooltip" title="Edit Contract">--}}
                                        {{--<i class="icon icon-edit"></i>--}}
                                    {{--</a>--}}
                                    <a href="/contractPdf/{{$contract->id}}" target="_blank" class="btn btn-xs btn-outline-info" data-toggle="tooltip" title="View Contract PDF">
                                        <i class="icon icon-eye"></i>
                                    </a>


                                    {{--<button type="button" class="btn btn-xs btn-outline-primary" data-toggle="tooltip" title="Delete Contract">--}}
                                        {{--<i class="icon icon-trash"></i>--}}
                                    {{--</button>--}}

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