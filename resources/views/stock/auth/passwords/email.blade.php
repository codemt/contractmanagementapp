@extends('layouts.app')

@section('content')
<h3 class="login-heading">Reset Password</h3>
<div class="login-form">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <form data-toggle="md-validator" method="POST" action="{{ route('stock.password.email') }}">
        {{ csrf_field() }}

        <div class="md-form-group md-label-static{{ $errors->has('email') ? ' has-error' : '' }}">
          <input class="md-form-control" type="email" name="email"   spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required>
          <label class="md-control-label">Email address</label>
          <span class="md-help-block">We'll send you an reset link.</span>
      </div>
      <button class="btn btn-primary btn-block" type="submit">Send password reset link</button>
  </form>
</div>
@endsection


