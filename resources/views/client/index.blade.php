@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Quick Overview</span>
        </h1>
    </div>

    <div class="row gutter-xs">
        <div class="col-md-4 col-lg-4">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="media">
                        <div class="media-middle media-left">
                            <span class="bg-primary-inverse circle sq-48">
                                <span class="icon icon-hourglass-half"></span>
                            </span>
                        </div>

                        <div class="media-middle media-body">
                            <h6 class="media-heading">Pending Contract</h6>
                            <h3 class="media-heading">
                                <span class="fw-l">{{auth()->user()->contracts->where('contract_status','pending')->count()}}</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="media">
                        <div class="media-middle media-left">
                            <span class="bg-info-inverse circle sq-48">
                                <span class="icon icon-check"></span>
                            </span>
                        </div>
                        <div class="media-middle media-body">
                            <h6 class="media-heading">Approved Contract</h6>
                            <h3 class="media-heading">
                                <span class="fw-l">{{auth()->user()->contracts->where('contract_status','Approved')->count()}}</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="card bg-warning">
                <div class="card-body">
                    <div class="media">
                        <div class="media-middle media-left">
                            <span class="bg-warning-inverse circle sq-48">
                                <span class="icon icon-wpforms"></span>
                            </span>
                        </div>
                        <div class="media-middle media-body">
                            <h6 class="media-heading">Total Contract</h6>
                            <h3 class="media-heading">
                                <span class="fw-l">&#8377; {{count(auth()->user()->contracts)}}</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="row gutter-xs">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="card-actions">
                        <button type="button" class="card-action card-toggler" title="Collapse"></button>
                        <button type="button" class="card-action card-reload" title="Reload"></button>
                    </div>
                    <strong>Contracts</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Contract No.</th>
                            <th>Contract Date</th>
                            <th>Control Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td>ax</td>
                                <td>asa</td>
                                <td>sas</td>
                                <td>assa</td>
                                <td>
                                    <span class="badge badge-primary">Pending</span>
                                    <span class="badge badge-success">Approved</span>
                                </td>
                                <td>
                                    
                                     <a href="" target="_blank" class="btn btn-xs btn-outline-primary" data-toggle="tooltip" title="View Contract">
                                        <i class="icon icon-eye"></i>
                                    </button>

                                </td>
                            </tr>
                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   @endsection
