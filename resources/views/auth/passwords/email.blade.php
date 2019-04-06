@extends('admin.layouts.auth-base')
@section('title', 'Forgot Password')
@section('content')
    <div class="container">
        <div class="row">
            <section class="login_content">
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
                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <h1>Reset Password</h1>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="Your Email Address" id="email" name="email" value="{{ old('email') }}" required="" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-md btn btn-custom btn-bordred btn-block waves-effect waves-light">
                        Send Password Reset Link
                    </button>
                </div>
                {{-- <div class="clearfix"></div> --}}
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
