@extends('admin.layouts.auth-base')
@section('title', 'Register Account')
@section('content')
    <div class="container">
        <div class="row">
          <section class="login_content">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <h1>Create Account</h1>
                @if ($errors->has('email'))
                    <span class="help-block alert alert-danger">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                @if ($errors->has('password'))
                    <span class="help-block alert alert-danger">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="Your Email Address" id="email" name="email" value="{{ old('email') }}" required="" />
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required="" />
                </div>
                <div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required="" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-md btn btn-custom btn-bordred btn-block waves-effect waves-light">
                        Register
                    </button>
                </div>
                <div class="clearfix"></div>
                <div class="separator">
                    <p class="change_link">Already a member ?
                        <a href="{{ route('login') }}" class="to_register"> Log in </a>
                    </p>
                    <div class="clearfix"></div>
                    <br />
                    <div>
                        <h1><i class="fa fa-paw"></i> Remais Masjid!</h1>
                        <p>©2019 All Rights Reserved. Masjid Pangeran Mangkubumi</p>
                    </div>
                </div>
            </form>
          </section>
        </div>
    </div>
@endsection
