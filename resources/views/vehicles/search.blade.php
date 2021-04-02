@section('title')
Vehicle Search
@endsection
@extends('layouts.main')

@section('rightbar-content')
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row d-flex justify-content-center">
        <form method="GET" action="{{ route('vehicle.search') }}" class="has-search  ">
            @csrf
            <div class="form-inline col-lg-12 ">
                <input type="search" class="form-control " placeholder="For Example, CUA3457" name="reg" >
                <button class="btn btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </form>
    </div>
    <br>
    <div class="row form-inline">
        <!-- Start col -->
        <div class="col-md">
            <div class="card ">
                <div class="card-header">
                    <h5 class="card-title text-success">Taxed</h5>
                </div>
                <div class="card-body">
                    Tax Due: 1 August 2021
                </div>
           </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md">
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title text-success">MOT</h5>
                </div>
                <div class="card-body">
                    Expires: 22 September 2021
                </div>
        </div>
        </div>
        <!-- End col -->

    </div>
    <!-- End row -->



</div>
<!-- End Contentbar -->

<div class="row contentbar">
    <!-- Start col -->
    <div class="col-md">
        <div class="card ">
            <div class="card-header">
                <h5 class="card-title">Vehicle Details</h5>
            </div>
            <div class="card-body">
                <table class="table ">
                   
                    <tbody>
                        <tr>
                            <td scope="row"  class="pull-left"></td>
                            <td>Vehicle Make</td>
                            <td>Renault</td>
                        </tr>
                        <tr>
                            <td scope="row"  class="pull-left"></td>
                            <td>Date of first Registration</td>
                            <td>February 2021</td>
                        </tr>
                        <tr>
                            <td scope="row"  class="pull-left"></td>
                            <td>Year Of Manufacture</td>
                            <td>2021</td>
                        </tr>
                        <tr>
                            <td scope="row"  class="pull-left"></td>
                            <td>Cylinder capacity</td>
                            <td>1860c</td>
                        </tr>
                        <tr>
                            <td scope="row"  class="pull-left"></td>
                            <td>CO2</td>
                            <td>95 g/km</td>
                        </tr>
                        <tr>
                            <td scope="row"  class="pull-left"></td>
                            <td>Fuel Type</td>
                            <td>DIESEL</td>
                        </tr>
                        <tr>
                            <td scope="row"  class="pull-left"></td>
                            <td>Euro Status</td>
                            <td>Not Available</td>
                        </tr>
                    </tbody>
                </table>
            </div>
       </div>
    </div>
    <!-- End col -->




</div>
<!-- End row -->

 <!-- Start row -->
 <div class="row  contentbar">
    <!-- Start col -->
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-header">

                <h5 class="card-title text-success">Add a Vehicle</h5>
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
                  <center>
                      <button type="submit" class="btn btn-success dash-btn">Submit</button>
                  </center>
                </form>
            </div>
        </div>
    </div>
    <!-- End col -->

</div>
<!-- End row -->
@endsection
