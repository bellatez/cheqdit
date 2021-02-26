@section('title')
New Workshop
@endsection
@extends('layouts.main')
@section('style')
@section('header-btn')
  <a href="{{route('workshop.index')}}" class="btn btn-info-rgba"><i class="feather icon-plus mr-2"></i>View List</a>
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
                  @if($work->exists)
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
                    @if($work->exists)
                        <form method="post" action="{{ route('workshop.update', $work) }}" autocomplete="off"  files="true" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                      <form method="POST" action="{{ route('workshop.store') }}">
                    @endif
                      @csrf
                      <div class="form-row">
                        <div class="col-md-12 form-group">
                          <input type="text" class="form-control" placeholder="Workshop's Name" name="name" value="{{ old('name', $work->name) }}">
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="col-md-4 form-group">
                              <input type="text" class="form-control" placeholder="Owner First Name" name="fname" value="{{ old('fname', $work->website) }}">
                              @error('fname')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                             @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control" placeholder="Owner Last Name" name="lname" value="{{ old('lname', $work->website) }}">
                                @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                               @enderror
                            </div>
                            <div class="col-md-4 form-group">
                              <input type="text" class="form-control" placeholder="Workshop's Website" name="website" value="{{ old('website', $work->website) }}">
                              @error('website')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                             @enderror
                            </div>
                      </div><div class="form-row">
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Workshop Address line 1" v-model="address1" name="address1" value="{{ old('address1', $work->address1) }}">
                          @error('address1')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" name="address2" class="form-control" placeholder="Workshop Address line 2"
                          value="{{ old('address2', $work->address2) }}">
                          @error('address2')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" name="address3" class="form-control" placeholder="Workshop Address line 3" value="{{ old('address3', $work->address3) }}">
                          @error('address3')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Workshop Postal code" name="postcode" value="{{ old('postcode', $work->postcode) }}">
                          @error('postcode')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Workshop Phone Number" name="tel" value="{{ old('tel', $work->tel) }}">
                          @error('tel')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="email" class="form-control" placeholder="Workshop Email" name="email" value="{{ old('email', $work->email) }}">
                          @error('email')
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
