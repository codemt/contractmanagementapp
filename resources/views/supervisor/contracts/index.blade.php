@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Contracts</span>
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
                    <strong>Contact List</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Client Name</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                                @foreach($contracts as $contract)
                                <tr>
                                    <td></td>
                                    <td>{{$contract->client_name}}</td>
                                    <td>{{$contract->site_address}}</td>
                                    <td>{{$contract->mobile_number}}</td>
                                    <td>
                                        <a href="{{ route('all_contract') }}" class="btn btn-xs btn-outline-success" data-toggle="tooltip" title="View Contract/(s)">
                                            <i class="icon icon-eye"></i>
                                        </a>
                                        {{--<input type="hidden" value="{{$contract->id}}" class="contractid" name="contractid" >--}}
                                            <Button class="btn btn-success btn-sm verify" data-id="{{$contract->id}}" type="submit">
                                            <i class="fa fa-check-square"></i> Approve
                                        </Button>
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
