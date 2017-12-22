@extends('layouts.master')

@section('content')

<div class="row justify-content-md-center">
    <div class="col col-lg-6">
        <div class="card">

            <h4 class="card-header">Login</h4>

            <form class="form-horizontal" method="POST" action="{{ route('login') }}">

                <div class="card-body">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label for="email" class="form-control-label">Email Address</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <label for="password" class="form-control-label">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <div class="form-control-feedback">{{ $errors->first('password') }}</div>
                        @endif
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>

                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
