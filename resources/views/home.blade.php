@extends('layouts.app')

@section('content')
<div class="auth-box login-box">
        <!-- Start row -->
        <div class="row no-gutters align-items-center justify-content-center">
            <!-- Start col -->
            <div class="col-md-6 col-lg-5">
                <!-- Start Auth Box -->
                <div class="auth-box-right">
                    <div class="card">
                        <div class="card-header">{{ __('Account Under Review') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You have successfully registered into the system.
                            <p>Your account is under review and will be <b>active</b> once an administrator approves it.</p>
                        </div>
                    </div>
                </div>    
           </div>    
        </div>
    </div>
</div>
@endsection
