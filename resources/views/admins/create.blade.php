@section('title') 
New Organisation Admin
@endsection 
@extends('layouts.main')
@section('style')
@section('header-btn')
  <a href="{{route('organisation.index')}}" class="btn btn-info-rgba"><i class="feather icon-plus mr-2"></i>View List</a>
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
                    <h5 class="card-title">Modify Admin's details</h5>
                  @else
                    <h5 class="card-title">Fill in the organisation's Admin details</h5>
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
                        <form method="post" action="{{ route('user.update', $user) }}" autocomplete="off"  files="true" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                      <form method="POST" action="{{ route('user.store') }}">
                    @endif
                      @csrf
                      <div class="form-row">
                        <div class="col-6 form-group">
                          <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ old('name', $user->first_name) }}">
                        </div>
                        <div class="col-6 form-group">
                          <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ old('name', $user->last_name) }}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-6 form-group">
                          <input type="text" class="form-control" id="validationServer02" placeholder="Enter phone number" name="telephone" value="{{ old('telephone', $user->telephone) }}">
                        </div>
                        <div class="col-6 form-group">
                          <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ old('email', $user->email) }}">
                        </div>
                      </div>
                      <input type="hidden" name="type" value="1">
                      <input type="hidden" name="organisation_id" value="{{$org->id}}">
                      <input type="hidden" name="is_active" value="1">
                      <input type="hidden" name="role_id" value="2">
                                        
                      <button type="submit" class="btn btn-primary text-white">Submit</button>
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