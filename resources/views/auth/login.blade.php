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
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-head">
                                    <a href="{{url('/')}}" class="logo"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                                </div>                                        
                                <h4 class="text-primary my-4">Log in !</h4>
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email address">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox text-left">
                                          <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                          <label class="custom-control-label font-14" for="rememberme">Remember Me</label>
                                        </div>                                
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="forgot-psw"> 
                                        @if (Route::has('password.request'))
                                            <a id="forgot-psw" class="font-14" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                      </div>
                                    </div>
                                </div>                          
                              <button type="submit" class="btn btn-primary-rgba btn-lg btn-block font-18">Log in</button>
                            </form>
                            <p class="mb-0 mt-3">Don't have a account? <a href="{{Route('register')}}">Sign up</a></p>
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
