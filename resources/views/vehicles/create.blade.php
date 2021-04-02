@section('title')
New Vehicle
@endsection
@extends('layouts.main')
@section('style')
@section('header-btn')
  <a href="{{route('vehicle.index')}}" class="btn btn-info-rgba"><i class="feather icon-plus mr-2"></i>View List</a>
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

                    <h5 class="card-title">Fill in the Vehicle  details</h5>
                </div>
                <div class="card-body">
                  @if($errors->any())
                  <ul class="list-group">
                      @foreach ($errors->all() as $error)
                          <li class="list-group-item text-danger">{{ $error }}</li>
                      @endforeach
                  </ul>
                  @endif

                      <form method="POST" action="{{ route('vehicle.store') }}">
                      @csrf
                      <div class="form-row">

                        <div class="col form-group">
                            <input type="text" class="form-control" placeholder="Vehicle Registration" name="reg" >
                            @error('reg')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                        </div>
                        <div class="col form-group">
                          <input type="text" class="form-control" placeholder="Fleet Number" name="name" >
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col form-group">
                           <select class="form-control"  name="type">
                            <option disabled selected >Choose Your Vehicle Type</option>
                            <option value="ipv">IPV</option>
                            <option value="hgv">HGV</option>
                            <option value="van">Van</option>
                            <option value="truck">Truck</option>
                            <option value="car">Car</option>
                           </select>
                           @error('type')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                          @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Vehicle Make" name="make" >
                          @error('make')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <input type="text" name="colour" class="form-control" placeholder="Vehicle Colour"
                         >
                          @error('address2')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                            <select class="form-control"  name="condition" >
                                <option disabled selected>What is the Vehicle Condition</option>
                                <option value="excellent">Excellent</option>
                                <option value="good">Good</option>
                                <option value="average">Average</option>
                                <option value="Poor">Poor</option>
                               </select>
                               @error('conditiion')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                              @enderror
                        </div>
                        <div class="col-md-4 form-group">
                            <select class="form-control"  name="status" >
                                <option disabled  selected>Vehicle Staus</option>
                                <option value="on_road">On Road</option>
                                <option value="off_road">Off Road</option>
                                <option value="on_roadw">On Road In Workshop</option>
                               </select>
                               @error('status')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                              @enderror
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md form-group">
                            <label for="service_date">Service Date</label>
                            <input type="date" name="service_date" class="form-control" >
                          @error('service_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md form-group">
                            <label for="service_doc">Service Documents</label>
                            <input type="file" name="service_docc" class="form-control" >
                          @error('service_doc')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md form-group">
                            <label for="mot_date">Mot Date</label>
                            <input type="date" name="mot_date" class="form-control"  >
                          @error('mot_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md form-group">
                            <label for="mot_doc">Mot Documents</label>
                            <input type="file" name="mot_docc" class="form-control"  >
                          @error('mot_doc')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col form-group">
                            <input type="text" class="form-control" placeholder="Mileage" name="mileage" >
                            @error('mileage')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                        </div>
                        <div class="col form-group">
                          <input type="textarea" class="form-control" placeholder="Comment" name="comments" >
                            @error('comments')
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
