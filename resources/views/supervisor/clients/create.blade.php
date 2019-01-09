@extends('layouts.master')

@section('page-content')
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success! </strong>{{Session::get('success')}}
    </div>
    @endif
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Add Client</span>
        </h1>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <form class="form form-horizontal" data-toggle="validator" action="/createclient" method="POST">
                {{ csrf_field() }}
               
                <div class="form-group has-feedback">
                    <label class="col-sm-3 control-label" for="client_name">Client Name<sup class="text-primary">*</sup></label>
                    <div class="col-sm-9">
                        <input id="name" class="form-control" type="text" name="name">
                        <div style="color: red;">{{ $errors->first('name') }}</div>
                        <span class="form-control-feedback" aria-hidden="true">
                            <span class="icon"></span>
                        </span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label class="col-sm-3 col-xs-12 control-label" for="demo-select2-5-input">Contact No.<sup class="text-primary">*</sup></label>
                    <div class="col-sm-9">
                        <input id="demo-select2-5-input" class="form-control" type="text" value="" name="phone">
                         <div style="color: red;">{{ $errors->first('phone') }}</div>
                        <span class="form-control-feedback" aria-hidden="true">
                            <span class="icon"></span>
                        </span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label class="col-sm-3 control-label" for="email">Email Address</label>
                    <div class="col-sm-9">
                        <input id="email" class="form-control" type="email" name="email">
                         <div style="color: red;">{{ $errors->first('email') }}</div>
                        <span class="form-control-feedback" aria-hidden="true">
                            <span class="icon"></span>
                        </span>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-5">
                    <button class="btn btn-outline-primary btn-block" type="submit" name="createClient" value="createClient">
                        <i class="icon icon-paper-plane"></i> Create Client
                    </button>
                </div>
                <div class="col-sm-offset-8">
                    <button class="btn btn-outline-primary btn-block" type="submit" name="createContract" value="createContract">
                        <i class="icon icon-paper-plane"></i> Save and Create Contract
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
