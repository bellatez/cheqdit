@section('title') 
New Organisation Admin
@endsection 
@extends('layouts.main')
@section('style')
@section('header-btn')
  <a href="{{route('organisations.index')}}" class="btn btn-info-rgba"><i class="feather icon-plus mr-2"></i>View List</a>
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
                    <h5 class="card-title">Fill in the organisation's Admin details</h5>
                </div>
                <div class="card-body">
                  @if($errors->any())
                  <ul class="list-group">
                      @foreach ($errors->all() as $error)
                          <li class="list-group-item text-danger">{{ $error }}</li>
                      @endforeach
                  </ul>
                  @endif
                  <form method="POST" action="{{ route('organisations.user_store', $org) }}">
                      @csrf
                      <div class="form-row">
                        <div class="col-6 form-group">
                          <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ old('first_name') }}">
                        </div>
                        <div class="col-6 form-group">
                          <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-6 form-group">
                          <input type="text" class="form-control" id="validationServer02" placeholder="Enter phone number" name="telephone" value="{{ old('telephone') }}">
                        </div>
                        <div class="col-6 form-group">
                          <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ old('email') }}">
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