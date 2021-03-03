@section('title')
New User
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('header-btn')
  <a href="{{route('users.index')}}" class="btn btn-info-rgba"><i class="feather icon-plus mr-2"></i>View List</a>
@endsection
@section('rightbar-content')
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row no-gutters">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                  @if($user->exists)
                    <h5 class="card-title">Edit User's details</h5>
                  @else
                    <h5 class="card-title">Fill in the User's details</h5>
                  @endif
                </div>
                <div class="card-body">
                  @if($errors->any())
                  <ul class="list-group">
                      @foreach ($errors->all() as $error)
                          <li class="list-group-item text-danger">{{ $error }}</li>
                      @endforeach
                  </ul>
                  @endif
                    @if($user->exists)
                        <form method="post" action="{{ route('users.update', $user) }}" autocomplete="off"  files="true" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                      <form method="POST" action="{{ route('users.store') }}">
                    @endif
                      @csrf


                      <div class="row">
                        <div class="col">
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
                                <input type="text" class="form-control" name="last_name"
                                    value="{{old('last_name')}}" placeholder="Enter Last Name" required>
                                    @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                                @endif
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
                                <input type="tel" class="form-control" name="telephone"
                                value="{{old('telephone')}}" placeholder="Enter Phone Number"
                                required>
                                @if ($errors->has('telephone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('telephone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
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
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter Password here" required>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
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
                                <label class="font-14" for="terms">I Agree to Terms & Conditions of
                                    {{config('app.name')}}</label>
                                </div>
                            @if ($errors->has('terms'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('terms') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                      <button type="submit" class="btn btn-primary-rgba btn-lg btn-block font-18">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End col -->

    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
