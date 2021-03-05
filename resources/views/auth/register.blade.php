@extends('layouts.app')

@section('content')
<div class="auth-box register-box">
    <!-- Start row -->
    <div class="row no-gutters align-items-center justify-content-center">
        <!-- Start col -->
        <div class="col-md-9 col-lg-10">
            <!-- Start Auth Box -->
            <div class="auth-box-right">
                <div class="card">
                    <div class="card-title align-items-center">
                        <div class="form-head">
                            <a href="{{url('/')}}" class="logo"><img src="assets/images/logo.svg" class="img-fluid"
                                    alt="logo"></a>
                        </div>
                        <h4 class="text-primary">Sign Up As:</h4>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="nav nav-pills nav-justified bg-light-gradient mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="user-tab" data-toggle="pill" href="#user" role="tab"
                                    aria-controls="user" aria-selected="true"><strong>User</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="workshop-tab" data-toggle="pill" href="#workshop" role="tab"
                                    aria-controls="workshop" aria-selected="false"><strong>Workshop</strong></a>
                            </li>
                        </ul>
                        @if($errors->any())
                        <ul class="list-group">
                            @foreach ($errors->all() as $error)
                            <li class="list-group-item text-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user">
                                <form method="POST" action="{{ route('register') }}" class="needs-validation"
                                    novalidate>
                                    @csrf
                                    <h5 class="text-dark">New User</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="first_name"
                                                    value="{{old('first_name')}}" placeholder="Enter First Name"
                                                    required>
                                                @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('first_name') }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    value="{{old('email')}}" placeholder="Enter Email" required>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="organisation_id">
                                                    <option selected disabled>Select your Organisation</option>
                                                    @foreach($organisations as $org)
                                                    <option value="{{$org->id}}" {{old('organisation_id')==$org->id ?
                                                        'selected': ''}}>
                                                        {{$org->name}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('organisation_id'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('organisation_id') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Enter Password here" required>
                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="last_name"
                                                    value="{{old('last_name')}}" placeholder="Enter Last Name" required>
                                                @if ($errors->has('last_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control" name="telephone"
                                                    value="{{old('telephone')}}" placeholder="Enter Phone Number"
                                                    required>
                                                @if ($errors->has('telephone'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('telephone') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="role_id">
                                                    <option selected disabled>Select your Role</option>
                                                    @foreach($roles as $role)
                                                    <option value="{{$role->id}}" {{old('role_id')==$role->id ?
                                                        'selected': ''}}>
                                                        {{$role->display_name}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('role_id'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('role_id') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password_confirmation"
                                                    placeholder="Re-Type Password" required>
                                                @if ($errors->has('password_confirmation'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="type" value="1">
                                    <div class="form-row mb-3">
                                        <div class="col-sm-12">
                                            <div class="form-check text-left">
                                                <input type="checkbox" name="terms" id="terms" value="agreed"
                                                    class="form-check-input">
                                                <label class="font-14 f-w-1" for="terms">I Agree to Terms & Conditions of
                                                    {{config('app.name')}}</label>
                                            </div>
                                            @if ($errors->has('terms'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('terms') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary-rgba py-3 px-5 dash-btn">Register</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="workshop" role="tabpanel" aria-labelledby="workshop">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <h5 class="text-dark">New Workshop</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="first_name"
                                                    value="{{old('first_name')}}" placeholder="Enter First Name"
                                                    required>
                                                @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    value="{{old('email')}}" placeholder="Enter Email" required>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="website"
                                                    value="{{old('website')}}" placeholder="Enter Website" required>
                                                @if ($errors->has('website'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('website') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="address1"
                                                    value="{{old('address1')}}" name="address1"
                                                    placeholder="Enter Address Line 1" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="address3"
                                                    value="{{old('address3')}}" name="address3"
                                                    placeholder="Enter Address Line 3" required>
                                                @if ($errors->has('address3'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('address3') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Enter Password" required>
                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="last_name"
                                                    value="{{old('last_name')}}" placeholder="Enter Last Name" required>
                                                @if ($errors->has('last_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control" name="telephone"
                                                    value="{{old('telephone')}}" placeholder="Enter Phone Number"
                                                    required>
                                                @if ($errors->has('telephone'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('telephone') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{old('name')}}" placeholder="Enter Workshop name" required>
                                                @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="address2" name="address2"
                                                    value="{{old('address2')}}" placeholder="Enter Address Line 2"
                                                    required>
                                                @if ($errors->has('address2'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('address2') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="postcode" name="postcode"
                                                    value="{{old('postcode')}}" placeholder="Enter Post Code" required>
                                                @if ($errors->has('postcode'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('postcode') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password_confirmation"
                                                    placeholder="Enter Re-Type Password" required>
                                                @if ($errors->has('password_confirmation'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="type" value="2">
                                    <div class="form-row mb-3">
                                        <div class="col-md-6">
                                            <select class="form-control" name="organisation_id">
                                                <option selected disabled>Select your Organisation</option>
                                                @foreach($organisations as $org)
                                                <option value="{{$org->id}}" {{old('organisation_id')==$org->id ?
                                                    'selected': ''}}>
                                                    {{$org->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('organisation_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('organisation_id') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check text-left">
                                                <input type="checkbox" name="terms" id="terms" value="agreed"
                                                    class="form-check-input">
                                                <label class="font-14 f-w-1" for="terms">I Agree to Terms & Conditions of
                                                    {{config('app.name')}}</label>
                                            </div>
                                            @if ($errors->has('terms'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('terms') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary-rgba py-3 px-5 dash-btn">Register</button>
                                </form>
                            </div>
                        </div>

                        <p class="mb-0 mt-3">Already have an account? <a href="{{Route('login')}}">Log in</a></p>
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
