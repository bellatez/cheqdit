@section('title')
New Administrator
@endsection
@extends('layouts.main')
@section('style')
@section('header-btn')
  <a href="{{route('users.index')}}" class="btn btn-info-rgba"><i class="feather icon-plus mr-2"></i>View List</a>
@endsection

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
                    <h5 class="card-title">Edit administrator's details</h5>
                  @else
                    <h5 class="card-title">Fill in the administrator's details</h5>
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
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <select class="form-control" name="role_id">
                                    <option selected disabled>Select Role</option>
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
                    </div>
                      <button type="submit" class="btn btn-primary-rgba py-3 px-5 dash-btn">SUBMIT</button>
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
