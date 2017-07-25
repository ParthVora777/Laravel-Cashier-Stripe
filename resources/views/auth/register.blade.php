@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Register</div>
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            @if($stripe_errors = $errors->get('stripe_errors'))
            <div class="alert alert-success alert-danger">
              @foreach($stripe_errors as $error)
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              {{ $error }}
              @endforeach
            </div>
            @endif
            {{ csrf_field() }}

            <input type="hidden" name="subscription-plan" value="{{ $subscriptionPlan->id }}">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Password</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="form-group{{ $errors->has('coupon') ? ' has-error' : '' }}">
              <label for="coupon" class="col-md-4 control-label">Coupon</label>

              <div class="col-md-6">
                <input id="coupon" type="text" class="form-control" name="coupon" value="{{ old('coupon') }}" required autofocus>

                @if ($errors->has('coupon'))
                <span class="help-block">
                  <strong>{{ $errors->first('coupon') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <script id="stripe-js"
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="{{ config('services.stripe.key') }}"
                data-name="{{ $subscriptionPlan->name }}"
                data-description="{{ $subscriptionPlan->description }}"
                data-amount="{{ $subscriptionPlan->amount }}"
                data-label="Sign Me Up!">
              </script>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
