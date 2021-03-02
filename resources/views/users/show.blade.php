@section('title')
Workshop Details
@endsection
@extends('layouts.main')
@section('header-btn')
  <a href="" class="btn btn-success-rgba"><i class="feather icon-edit mr-2"></i>Edit</a>
@endsection
@section('rightbar-content')
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-5 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    {{-- <h5 class="card-title mb-0">{{$users->fname}}'s Details</h5> --}}
                </div>
                <div class="card-body">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link mb-2 active" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true"><i class="feather icon-grid mr-2"></i>General Information</a>
                        <a class="nav-link mb-2" id="v-pills-order-tab" data-toggle="pill" href="#v-pills-order" role="tab" aria-controls="v-pills-order" aria-selected="false"><i class="feather icon-package mr-2"></i>Contact Information</a>
                        <a class="nav-link mb-2" id="v-pills-addresses-tab" data-toggle="pill" href="#v-pills-addresses" role="tab" aria-controls="v-pills-addresses" aria-selected="false"><i class="feather icon-map-pin mr-2"></i>Admins</a>
                        <a class="nav-link mb-2" id="v-pills-wishlist-tab" data-toggle="pill" href="#v-pills-wishlist" role="tab" aria-controls="v-pills-wishlist" aria-selected="false"><i class="feather icon-heart mr-2"></i>Users</a>
                        <a class="nav-link mb-2" id="v-pills-wallet-tab" data-toggle="pill" href="#v-pills-chat" role="tab" aria-controls="v-pills-wallet" aria-selected="true"><i class="feather icon-credit-card mr-2"></i>Vehicles</a>
                        <a class="nav-link mb-2" id="v-pills-chat-tab" data-toggle="pill" href="#v-pills-wallet" role="tab" aria-controls="v-pills-chat" aria-selected="false"><i class="feather icon-message-circle mr-2"></i>Transactions</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->


<div class="row">
    <div class="col-md-4">
        <div class="card card-user">
            <div class="image">
                <img src="{{ asset('images/profile.jpg') }}" alt="...">
            </div>
            <div class="card-body">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="{{ asset('images/profile.jpg') }}" alt="...">

                        {{-- <h5 class="title">{{ $user->fname.' '.$user->lname}}</h5> --}}
                    </a>
                </div>
                <p class="description text-center">
                    {{-- {{  $user->organisation_id }} --}}
                    {{-- <br>Lost loged in: {{  $user->last_login_at }} --}}
                </p>
            </div>
            <div class="card-footer">
                <hr>
                <div class="button-container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-6 ml-auto">
                            <h5>{{ __('12') }}
                                <br>
                                <small>{{ __('Files') }}</small>
                            </h5>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                            <h5>{{ __('2GB') }}
                                <br>
                                <small>{{ __('Used') }}</small>
                            </h5>
                        </div>
                        <div class="col-lg-3 mr-auto">
                            <h5>{{ __('24,6$') }}
                                <br>
                                <small>{{ __('Spent') }}</small>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __('Team Members') }}</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-md-2 col-2">
                                <div class="avatar">
                                    <img src="{{ asset('images/profile.jpg') }}" alt="Circle Image"
                                        class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-md-7 col-7">
                                {{ __('DJ Khaled') }}
                                <br />
                                <span class="text-muted">
                                    <small>{{ __('Offline') }}</small>
                                </span>
                            </div>
                            <div class="col-md-3 col-3 text-right">
                                <button class="btn btn-sm btn-outline-success btn-round btn-icon"><i
                                        class="fa fa-envelope"></i></button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-2 col-2">
                                <div class="avatar">
                                    <img src="{{ asset('images/profile.jpg') }}" alt="Circle Image"
                                        class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-md-7 col-7">
                                    {{ __('Creative Tim') }}
                                <br />
                                <span class="text-success">
                                    <small>{{ __('Available') }}</small>
                                </span>
                            </div>
                            <div class="col-md-3 col-3 text-right">
                                <button class="btn btn-sm btn-outline-success btn-round btn-icon"><i
                                        class="fa fa-envelope"></i></button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-2 col-2">
                                <div class="avatar">
                                    <img src="{{ asset('images/profile.jpg') }}" alt="Circle Image"
                                        class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-ms-7 col-7">
                                {{ __('Flume') }}
                                <br />
                                <span class="text-danger">
                                    <small>{{ __('Busy') }}</small>
                                </span>
                            </div>
                            <div class="col-md-3 col-3 text-right">
                                <button class="btn btn-sm btn-outline-success btn-round btn-icon"><i
                                        class="fa fa-envelope"></i></button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8 text-center">
        <form class="col-md-12" action="  " method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Edit Profile') }}</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Name') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ auth()->user()->name }}" required>
                            </div>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Email') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ auth()->user()->email }}" required>
                            </div>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-info btn-round">{{ __('Save Changes') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form class="col-md-12" action="  " method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Change Password') }}</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Old Password') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="password" name="old_password" class="form-control" placeholder="Old password" required>
                            </div>
                            @if ($errors->has('old_password'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('old_password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('New Password') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Password Confirmation') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-info btn-round">{{ __('Save Changes') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



@endsection
@section('script')
<!-- eCommerce My Account Page js -->
<script src="{{ asset('assets/js/custom/custom-ecommerce-myaccount.js') }}"></script>
@endsection
