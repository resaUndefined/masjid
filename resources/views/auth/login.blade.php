@extends('admin.layouts.auth-base')

@section('content')
    <div class="container">
        <div class="row">
        <section class="login_content">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <h1>Login</h1>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-danger">
                        {{ session('warning') }}
                    </div>
                @endif
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
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="email address">
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" required placeholder="password">
                </div>
                <div class="form-group ">
                    <div class="col-xs-6">
                        <div class="checkbox checkbox-custom">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-6  text-right" style="padding-top: 6px;">
                        <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot Password?</a>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-md btn btn-custom btn-bordred btn-block waves-effect waves-light">
                        Login
                    </button>
                </div>
                <div class="clearfix"></div>
                <div class="separator">
                    <p class="change_link">Don't have an account?
                        <a href="{{ route('register') }}"> Create Account </a>
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
