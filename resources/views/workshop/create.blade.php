@section('title')
New Workshop
@endsection
@extends('layouts.main')
@section('style')
@section('header-btn')
  <a href="{{route('workshops.index')}}" class="btn btn-info-rgba"><i class="feather icon-plus mr-2"></i>View List</a>
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
                  @if($workshop->exists)
                    <h5 class="card-title">Edit Workshop's details</h5>
                  @else
                    <h5 class="card-title">Fill in the Workshop's details</h5>
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
                    @if($workshop->exists)
                        <form method="post" action="{{ route('workshops.update', $workshop) }}" autocomplete="off"  files="true" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                      <form method="POST" action="{{ route('workshops.store') }}">
                    @endif
                      @csrf
                      <div class="form-row">
                        <div class="col form-group">
                          <input type="text" class="form-control" placeholder="Owner First Name" name="first_name" value="{{ old('first_name', $workshop->user->first_name ?? '') }}">
                          @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                        </div>
                        <div class="col form-group">
                            <input type="text" class="form-control" placeholder="Owner Last Name" name="last_name" value="{{ old('last_name', $workshop->user->last_name ?? '') }}">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col form-group">
                          <input type="text" class="form-control" placeholder="Workshop's Name" name="name" value="{{ old('name', $workshop->name) }}">
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                           <input type="email" class="form-control" placeholder="Workshop Email" name="email" value="{{ old('email', $workshop->user->email ?? '') }}">
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Workshop Address line 1" v-model="address1" name="address1" value="{{ old('address1', $workshop->address1) }}">
                          @error('address1')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" name="address2" class="form-control" placeholder="Workshop Address line 2"
                          value="{{ old('address2', $workshop->address2) }}">
                          @error('address2')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" name="address3" class="form-control" placeholder="Workshop Address line 3" value="{{ old('address3', $workshop->address3) }}">
                          @error('address3')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Workshop Postal code" name="postcode" value="{{ old('postcode', $workshop->postcode) }}">
                          @error('postcode')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Workshop Phone Number" name="telephone" value="{{ old('tel', $workshop->user->telephone ?? '') }}">
                          @error('telephone')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                           <input type="text" class="form-control" placeholder="Workshop's Website" name="website" value="{{ old('website', $workshop->website) }}">
                           @error('website')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                          @enderror
                        </div>
                      </div>
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
