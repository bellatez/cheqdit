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
                            <input type="text" class="form-control" placeholder="Vehicle Registration" name="vehicle_reg" value="{{ old('last_name', $inspection->vehicle_reg ?? '') }}">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col form-group">
                          <input type="text" class="form-control" placeholder="Fleet Number" name="fleet_num" value="{{ old('fleet_num', $inspection->fleet_num) }}">
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                           <input type="search" class="form-control" placeholder="Vehicle" name="vevhicle" value="{{ old('vehicle', $inspection->vehicle ?? '') }}">
                           @error('vehicle')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Reading Start"  name="reading_start" value="{{ old('reading_start', $inspection->reading_start) }}">
                          @error('reading_start')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" placeholder="Reading End"  name="reading_end" value="{{ old('reading_end', $inspection->reading_end) }}">
                            @error('reading_end')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                          </div>
                       
                      </div>

                      <div class="form-row">
                        <label>List of Details</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                          <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                          <label class="form-check-label" for="inlineCheckbox2">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="n/a">
                          <label class="form-check-label" for="inlineCheckbox3">N/A</label>
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
