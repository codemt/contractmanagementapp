@extends('layouts.app')

@section('content')
<h3 class="login-heading">Client Register</h3>
<div class="login-form">
    <form data-toggle="md-validator"  method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        
        @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif

        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif

        @if ($errors->has('phone'))
        <span class="help-block">
            <strong>{{ $errors->first('phone') }}</strong>
        </span>
        @endif

        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif

        <div class="md-form-group md-label-static{{ $errors->has('name') ? ' has-error' : '' }}">
            <input class="md-form-control" type="text" name="name" value="{{ old('name') }}" spellcheck="false" autocomplete="off" data-msg-required="Please enter your name." required>
            <label class="md-control-label">Enter Name</label>
        </div>

        <div class="md-form-group md-label-static{{ $errors->has('email') ? ' has-error' : '' }}">
            <input class="md-form-control" type="email" name="email" value="{{ old('email') }}" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email." required autocomplete="off">
            <label class="md-control-label">Enter Email Address</label>
        </div>

        <div class="md-form-group md-label-static{{ $errors->has('phone') ? ' has-error' : '' }}">
            <input class="md-form-control" type="text" name="phone" value="{{ old('phone') }}" spellcheck="false" autocomplete="off" data-msg-required="Please enter your contact no.." required>
            <label class="md-control-label">Enter Contact No.</label>
        </div>

        <div class="md-form-group md-label-static{{ $errors->has('password') ? ' has-error' : '' }}">
            <input class="md-form-control" type="password" name="password" value="{{ old('password') }}" spellcheck="false" autocomplete="off" data-msg-required="Please enter pasword" required>
            <label class="md-control-label">Passwod</label>
        </div>

        <div class="md-form-group md-label-static">
            <input class="md-form-control" type="password" name="password_confirmation" id="password-confirm" required>
            <label class="md-control-label">Confirm Password</label>
        </div>

        <button class="btn btn-primary btn-block" type="submit">Register</button>
        <center><a href="{{route('login')}}">Already have an account</a></center>

    </form>

</div>

@endsection
