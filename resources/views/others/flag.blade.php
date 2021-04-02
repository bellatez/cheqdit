@section('title')
    Flag Issue
@endsection
@extends('layouts.main')
@section('style')
@section('header-btn')
    <a href="{{ route('vehicle.index') }}" class="btn btn-info-rgba"><i class="feather icon-plus mr-2"></i>View List</a>
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

                    <h5 class="card-title">Fill in the Details</h5>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <ul class="list-group">
                            @foreach ($errors->all() as $error)
                                <li class="list-group-item text-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="{{ route('vehicle.store') }}">
                        @csrf
                        <div class="form-row">

                            <div class="col-md form-group">
                                <input type="text" class="form-control" placeholder="Title Of Issue" name="title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                                @error('make')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md form-group">
                                <label for=""></label>
                                <textarea class="form-control" name="comment" id="comment" rows="5"
                                    placeholder="Detail Your Issue"></textarea>
                            </div>
                            @error('service_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary-rgba py-3 px-5 dash-btn">Submit</button>
                        </center>
                </div>
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
