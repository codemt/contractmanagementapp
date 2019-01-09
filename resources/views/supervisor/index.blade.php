@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Quick Overview</span>
        </h1>
    </div>
 
    <div class="row gutter-xs">
        <div class="col-md-6 col-lg-3">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="media">
                        <div class="media-middle media-left">
                            <span class="bg-primary-inverse circle sq-48">
                                <span class="icon icon-user"></span>
                            </span>
                        </div>

                        <div class="media-middle media-body">
                            <h6 class="media-heading">Clients</h6>
                            <h3 class="media-heading">
                                <span class="fw-l">1,031,760</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="media">
                        <div class="media-middle media-left">
                            <span class="bg-info-inverse circle sq-48">
                                <span class="icon icon-hourglass-1"></span>
                            </span>
                        </div>
                        <div class="media-middle media-body">
                            <h6 class="media-heading">Pending Orders</h6>
                            <h3 class="media-heading">
                                <span class="fw-l">1,256</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card bg-warning">
                <div class="card-body">
                    <div class="media">
                        <div class="media-middle media-left">
                            <span class="bg-warning-inverse circle sq-48">
                                <span class="icon icon-user"></span>
                            </span>
                        </div>
                        <div class="media-middle media-body">
                            <h6 class="media-heading">Technician</h6>
                            <h3 class="media-heading">
                                <span class="fw-l">55,352.47</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="media">
                        <div class="media-middle media-left">
                            <span class="bg-info-inverse circle sq-48">
                                <span class="icon icon-hourglass"></span>
                            </span>
                        </div>
                        <div class="media-middle media-body">
                            <h6 class="media-heading">Completed Orders</h6>
                            <h3 class="media-heading">
                                <span class="fw-l">1,256</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="card-body">
             <h1 class="title-bar-title">
            <span class="d-ib">List of Contract</span>
        </h1>
                    <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>
 
                            <tr>
                                <th>Contract No.</th>
                                <th>Client Name</th>
                                <th>Control Type</th>
                                <th>Date</th>
                                <th>Status</th>
                                
                               <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($contracts as $contract)
                              <tr>
                                    <td>{{$contract->id}}</td>
                                    <td>{{$contract->user->name ?? ''}}</td>
                                    <td>{{$contract->detail->control_type ?? ''}}</td>
                                    <td>{{$contract->created_at}}</td>
                                    <td>{{$contract->contract_status}}</td>
                                   <td><a href="{{route('contractPdf',[$contract->id])}}" target="_blank">
                                    <button type="button" class="btn btn-xs btn-outline-primary" data-toggle="tooltip" title="View Contract">
                                        <i class="icon icon-eye"></i>
                                    </button></a></td>
                          
                                </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
  
@endsection
