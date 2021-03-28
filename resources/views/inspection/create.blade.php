@section('title')
New Vehicle Inspection
@endsection
@extends('layouts.main')
@section('style')
@section('header-btn')
  <a href="{{route('inspections.index')}}" class="btn btn-info-rgba"><i class="feather icon-plus mr-2"></i>View List</a>
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
                  @if($inspection->exists)
                    <h5 class="card-title">Edit Vehicle Inspection's details</h5>
                  @else
                    <h5 class="card-title">Fill in the Vehicle Inspection's details</h5>
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
                    @if($inspection->exists)
                        <form method="post" action="{{ route('inspections.update', $inspection) }}" autocomplete="off"  files="true" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                      <form method="POST" action="{{ route('inspections.store') }}">
                    @endif
                      @csrf
                      <div class="form-row">
                        <div class="col form-group">
                            <select class="form-control" name="form_id">
                                <option selected disabled>Select your Form</option>
                                @foreach($organisations as $org)
                                <option value="{{inspect$form->id}}" {{old('form_id')==$org->id ?
                                    'selected': ''}}>
                                    {{$for->name}}
                                </option>
                                @endforeach
                            </select>
                          @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                        </div>
                        <div class="col form-group">
                            <input type="text" class="form-control" placeholder="Owner Last Name" name="last_name" value="{{ old('last_name', $inspection->user->last_name ?? '') }}">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col form-group">
                          <input type="text" class="form-control" placeholder="Vehicle Inspection's Name" name="name" value="{{ old('name', $inspection->name) }}">
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                           <input type="email" class="form-control" placeholder="Vehicle Inspection Email" name="email" value="{{ old('email', $inspection->user->email ?? '') }}">
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Vehicle Inspection Address line 1" v-model="address1" name="address1" value="{{ old('address1', $inspection->address1) }}">
                          @error('address1')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" name="address2" class="form-control" placeholder="Workshop Address line 2"
                          value="{{ old('address2', $inspection->address2) }}">
                          @error('address2')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" name="address3" class="form-control" placeholder="Workshop Address line 3" value="{{ old('address3', $inspection->address3) }}">
                          @error('address3')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Workshop Postal code" name="postcode" value="{{ old('postcode', $inspection->postcode) }}">
                          @error('postcode')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Workshop Phone Number" name="telephone" value="{{ old('tel', $inspection->user->telephone ?? '') }}">
                          @error('telephone')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                           <input type="text" class="form-control" placeholder="Workshop's Website" name="website" value="{{ old('website', $inspection->website) }}">
                           @error('website')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                          @enderror
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary-rgba py-3 px-5 dash-btn">Submit</button>
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
