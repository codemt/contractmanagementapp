@extends('layouts.master')


@section('page-content')
<div class="title-bar">
    <h1 class="title-bar-title">
        <span class="d-ib">Update Profile</span>
    </h1>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-1">
        <form data-toggle="md-validator" action="{{ route('updateProfile') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="role" value="{{get_guard()}}">
            <div class="md-form-group md-label-floating">
                <input class="md-form-control" type="text" name="name" spellcheck="false" required value="{{auth()->guard((get_guard()=="client")?"web":get_guard())->user()->name}}" readonly="readonly">
                <label class="md-control-label">Name<sup class="text-primary">*</sup></label>
            </div>
            <div class="md-form-group md-label-floating">
                <input class="md-form-control" type="text" value="{{auth()->guard((get_guard()=="client")?"web":get_guard())->user()->email}}" name="email">
                <label class="md-control-label">Email Id</label>
            </div>
            <div class="md-form-group md-label-floating">
                <input class="md-form-control" type="text" value="{{auth()->guard((get_guard()=="client")?"web":get_guard())->user()->phone}}" name="phone" spellcheck="false" readonly="readonly">
                <label class="md-control-label">Mobile No.<sup class="text-primary">*</sup></label>
            </div>
            <div class="row">
                <div class="col-xs-11">
                   <div class="md-form-group md-label-floating">
                    <input class="md-form-control" id="password" type="password" name="password" required>
                    <label class="md-control-label">Enter New Password</label>
                </div>
            </div>
            <div class="col-xs-1">
                <button id="view" type="button" class="btn btn-xs btn-outline-primary">
                    <i class="icon icon-eye-slash btn-icon"></i>
                </button> 
            </div>
        </div>        

        <div class="col-sm-offset-8">
            <button class="btn btn-primary btn-block">
                <i class="icon icon-paper-plane"></i> Update Profile
            </button>
        </div>
    </form>
</div>
</div>

@endsection

@push('page-script')
<script>
    $("#view").click(function(){
        if($('#password').attr('type') == 'password') {
            $('#password').prop('type', 'text');
            $('.btn-icon').removeClass('icon-eye-slash');
            $('.btn-icon').addClass('icon-eye');
        }
        else{
            $('#password').prop('type', 'password');
            $('.btn-icon').removeClass('icon-eye');
            $('.btn-icon').addClass('icon-eye-slash');
        }
    });
</script>
@endpush
