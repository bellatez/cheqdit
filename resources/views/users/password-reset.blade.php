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
                            <form method="POST" action="{{ route('users.reset_password') }}">
                                @csrf
                                @method('PUT')
                                <div class="form-head">
                                    <a href="{{url('/')}}" class="logo"><img src="{{asset('assets/images/logo.svg')}}" class="img-fluid" alt="logo"></a>
                                </div>                                        
                                <h4 class="text-primary my-4">Reset your Password</h4>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" required placeholder="Enter your current password">

                                    @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your New password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Re-Type Password" required>
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                              <button type="submit" class="btn btn-primary-rgba py-3 px-5 dash-btn">RESET PASSWORD</button>
                            </form>
                            <label class="mb-0 mt-3 f-w-1">Wish to logout? <a href="{{Route('logout')}}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Yes</a>
                            </label>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </div>
                </div>
                <!-- End Auth Box -->
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
@endsection
