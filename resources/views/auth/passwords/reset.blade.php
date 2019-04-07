@extends('admin.layouts.auth-base')
@section('title', 'Reset Password')
@section('content')
    <div class="container">
        <div class="row">
            <section class="login_content">
                @if (session('msg'))
                    <div class="alert alert-danger">
                        <strong>{{ session('msg') }}</strong>
                    </div>
                @endif
                @if (session('status'))
                    <div class="help-block alert alert-success">
                        {{ session('status') }}
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
                @if ($errors->has('password_confirmation'))
                    <span class="help-block alert alert-danger">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}
                    <h1>Reset Password</h1>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="hidden" name="email" value="{{ $email or old('email') }}" readonly="">
                    </div>
                    <div class="form-group">
                        {{-- <label for="password">New Password</label> --}}
                        <input id="password" type="password" class="form-control border-input" name="password" required placeholder="New Password">
                    </div>
                    <div class="form-group">
                        {{-- <label for="password">Confirm New Password</label> --}}
                        <input id="password_confirmation" type="password" class="form-control border-input" name="password_confirmation" required placeholder="New Password Confirmation">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md btn btn-custom btn-bordred btn-block waves-effect waves-light">
                            Reset Password
                        </button>
                    </div>
                    <div class="separator">
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
