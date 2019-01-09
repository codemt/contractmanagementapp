@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
        <div class="btn-group dropdown">
            <button class="btn btn-outline-primary btn-sm btn-block dropdown-toggle" data-toggle="dropdown" type="button">
                <span class="icon icon-lock icon-lg icon-fw"></span>
                Sign in as
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{route('technician.login')}}">
                        <div class="media">
                            <div class="media-left">
                                <span class="icon icon-user-plus icon-lg icon-fw"></span>
                            </div>
                            <div class="media-body">
                                <span class="d-b">Technician</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('stock.login')}}">
                        <div class="media">
                            <div class="media-left">
                                <span class="icon icon-user-plus icon-lg icon-fw"></span>
                            </div>
                            <div class="media-body">
                                <span class="d-b">Stock</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<h3 class="login-heading">Supervisor</h3>
<div class="login-form">

    <form data-toggle="md-validator"  method="POST" action="{{ route('supervisor.login') }}">
        {{ csrf_field() }}
        

        @if ($errors->has('email'))
        <span class="text-primary">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif

        @if ($errors->has('password'))
        <span class="text-primary">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif

        <div class="md-form-group md-label-static{{ $errors->has('email') ? ' has-error' : '' }}">
            <input class="md-form-control" type="email" name="email" value="{{ old('email') }}" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required>
            <label class="md-control-label">Enter Email Address</label>
        </div>


        <div class="md-form-group md-label-static{{ $errors->has('password') ? ' has-error' : '' }}">
            <input class="md-form-control" type="password" name="password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
            <label class="md-control-label">Enter Password</label>
        </div>


        <div class="md-form-group md-custom-controls">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">Keep me signed in</span>
            </label>
            <span aria-hidden="true"> · </span>
            <a href="{{ route('supervisor.password.reset') }}">Forgot password?</a>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
    </form>
</div>
@endsection
