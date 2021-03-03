@section('title') 
New Organisation
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
                  @if($org->exists)
                    <h5 class="card-title">Edit organisation's details</h5>
                  @else
                    <h5 class="card-title">Fill in the organisation's details</h5>
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
                    @if($org->exists)
                        <form method="post" action="{{ route('organisations.update', $org) }}" autocomplete="off"  files="true" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                      <form method="POST" action="{{ route('organisations.store') }}">
                    @endif
                      @csrf
                      <div class="form-row">
                        <div class="col-md-12 form-group">
                          <input type="text" class="form-control" placeholder="Organisation's Name" name="name" value="{{ old('name', $org->name) }}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Organisation's Website" name="website" value="{{ old('website', $org->website) }}">
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" id="validationServer02" placeholder="Enter phone number" name="telephone" value="{{ old('telephone', $org->telephone) }}">
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ old('email', $org->email) }}">
                        </div>
                      </div><div class="form-row">
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Organisation Address line 1" v-model="address1" name="address1" value="{{ old('address1', $org->address1) }}">
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" name="address2" class="form-control" placeholder="Organisation Address line 2"
                          value="{{ old('address2', $org->address2) }}">
                        </div>
                        <div class="col-md-4 form-group">
                          <input type="text" name="address3" class="form-control" placeholder="Organisation Address line 3" value="{{ old('address3', $org->address3) }}">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-4 form-group">
                          <input type="text" class="form-control" placeholder="Organisation Postal code" name="postcode" value="{{ old('postcode', $org->postcode) }}">
                        </div>
                        <div class="col-md-4 form-group">
                          <select class="form-control" name="industry_type">
                              <option selected disabled>Select your Company Type</option>
                              @foreach($types as $type)
                                  <option value="{{$type->id}}" {{$type->id == $org->industry_type ? 'selected':''}}>
                                      {{$type->name}}
                                  </option>
                              @endforeach
                          </select>
                        </div>
                        <div class="col-md-4 form-group">
                          <select class="form-control" name="company_size">
                              <option selected disabled>Select your Organisation Size</option>
                              @foreach($sizes as $size)
                                  <option value="{{$size->id}}" {{$size->id == $org->company_size ? 'selected':''}}>
                                      {{$size->size}}
                                  </option>
                              @endforeach
                          </select>
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