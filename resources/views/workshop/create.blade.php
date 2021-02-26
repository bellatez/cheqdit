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
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="col-md-4 form-group">
                              <input type="text" class="form-control" placeholder="Owner First Name" name="fname" value="{{ old('fname', $work->website) }}">
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control" placeholder="Owner Last Name" name="lname" value="{{ old('lname', $work->website) }}">
                            </div>
                            <div class="col-md-4 form-group">
                              <input type="text" class="form-control" placeholder="Workshop's Website" name="website" value="{{ old('website', $work->website) }}">
                            </div>
                      </div><div class="form-row">
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Workshop Address line 1" v-model="address1" name="address1" value="{{ old('address1', $work->address1) }}">
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" name="address2" class="form-control" placeholder="Workshop Address line 2"
                          value="{{ old('address2', $work->address2) }}">
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" name="address3" class="form-control" placeholder="Workshop Address line 3" value="{{ old('address3', $work->address3) }}">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Workshop Postal code" name="postcode" value="{{ old('postcode', $work->postcode) }}">
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Workshop Phone Number" name="tel" value="{{ old('tel', $work->tel) }}">
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="email" class="form-control" placeholder="Workshop Email" name="email" value="{{ old('email', $work->email) }}">
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
