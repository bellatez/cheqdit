@extends('layouts.app')

@section('content')
<div class="auth-box login-box">
        <!-- Start row -->
        <div class="row no-gutters align-items-center justify-content-center">
            <!-- Start col -->
            <div class="col-md-6 col-lg-7">
                <!-- Start Auth Box -->
                <div class="auth-box-right">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <div class="form-head">
                                    <a href="{{url('/')}}" class="logo"><img src="{{asset('assets/images/logo.svg')}}" class="img-fluid" alt="logo"></a>
                                </div>                                        
                                <h4 class="text-primary my-4">Reset your Password</h4>
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="Enter email address" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-enter your password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary-rgba py-3 px-5 dash-btn">
                                        RESET PASSWORD
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
