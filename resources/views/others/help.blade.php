@section('title')
Help
@endsection
@extends('layouts.main')

@section('rightbar-content')
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <center>
        <h2>Hello, How can we help</h2> <br>
    </center>
    <div class="row d-flex justify-content-center">
        <form method="GET" action="{{ route('vehicle.search') }}" class="has-search  ">
            @csrf
            <div class="form-inline col-lg-12 ">
                <input type="search" class="form-control " placeholder="Type Here...." name="reg" >
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
                    <h5 class="card-title text-success">Transport Guide</h5>
                </div>
                <div class="card-body">
                    <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                    <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                    <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                    <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                    <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                    <a href="http://" target="_blank" rel="noopener noreferrer">Fuel Save Driver Training </a><br>
                </div>
           </div>
        </div>
        <!-- End col -->
<br>
        <!-- Start col -->
        <div class="col-md">
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title text-success">Saving Fuel</h5>
                </div>
                <div class="card-body">
                    <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                    <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                    <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                    <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                    <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                    <a href="http://" target="_blank" rel="noopener noreferrer">Fuel Save Driver Training </a><br>
                </div>
             </div>
        </div>

        <!-- End col -->

    </div>
<br>
    <!-- End row -->
    <div class="row form-inline">
        <!-- Start col -->
        <div class="col-md">
            <div class="card ">
                <div class="card-header">
                    <h5 class="card-title text-success">Handbooks</h5>
                </div>
                <div class="card-body">
                    <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                    <a href="http://" target="_blank" rel="noopener noreferrer">Fuel Save Driver Training </a><br>
                    <a href="http://" target="_blank" rel="noopener noreferrer">Fuel Save Driver Training </a><br>
                    <a href="http://" target="_blank" rel="noopener noreferrer">Fuel Save Driver Training </a><br>
                </div>
           </div>
        </div>


        <!-- End col -->

        <!-- Start col -->
        <div class="col-md">
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title text-success">Training</h5>
                </div>
                <div class="card-body">
                   <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                   <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                   <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                   <a href="http://" target="_blank" rel="noopener noreferrer">On Road Training</a><br>
                </div>
        </div>
        </div>
        <!-- End col -->

    </div>
    <br>



</div>
<!-- End Contentbar -->
</div>
@endsection
