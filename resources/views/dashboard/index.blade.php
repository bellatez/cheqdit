@section('title') 
Dashboard
@endsection 
@extends('layouts.main')
@section('style')
<!-- Apex css -->
<link href="{{ asset('assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet" type="text/css" />
<!-- Slick css -->
<link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar"> 
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Inspection & Faults</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetStudent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetStudent">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0 pl-0 pr-2">
                    <div id="apex-area-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <div class="row justify-content-center">
        <!-- Start col -->
        <div class="col-lg-3 col-xl-3">
            <div class="card m-b-30 py-4">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <h5 class="card-title font-26">Inspection</h5>
                            <h1 class="dashboard-nums">27</h1>
                            <h5 class="card-title font-24">New Today</h5>
                            <button class="btn btn-primary-rgba p-3">VIEW ALL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-3 col-xl-3">
            <div class="card m-b-30 py-4">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <h5 class="card-title font-26">Faults</h5>
                            <h1 class="dashboard-nums">27</h1>
                            <h5 class="card-title font-24">New Today</h5>
                            <button class="btn btn-primary-rgba p-3">VIEW ALL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-3 col-xl-3">
            <div class="card m-b-30 py-4">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <h5 class="card-title font-26">Faults Outstanding</h5>
                            <h1 class="dashboard-nums">27</h1>
                            <h5 class="card-title font-24">New Today</h5>
                            <button class="btn btn-primary-rgba p-3">VIEW ALL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <div class="row justify-content-center">
        <!-- Start col -->
         <div class="col-lg-3 col-xl-3">
            <div class="card m-b-30 py-4">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <h5 class="card-title font-26">My Vehicles</h5>
                            <h1 class="dashboard-nums">45</h1>
                            <h5 class="card-title font-24">New Today</h5>
                            <button class="btn btn-primary-rgba p-3">VIEW ALL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
         <div class="col-lg-3 col-xl-3">
            <div class="card m-b-30 py-4">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <h5 class="card-title font-26">My Users</h5>
                            <h1 class="dashboard-nums">09</h1>
                            <h5 class="card-title font-24">New Today</h5>
                            <button class="btn btn-primary-rgba p-3">VIEW ALL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
         <div class="col-lg-3 col-xl-3">
            <div class="card m-b-30 py-4">
                <div class="card-body py-4">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <h5 class="card-title font-26">Repair Costs</h5>
                            <h3 class="dashboard-nums">35</h3>
                            <select class="form-control mb-1" id="formControlSelect">
                            <option selected>since start</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                            <button class="btn btn-primary-rgba p-3">VIEW ALL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    
    <!-- Start row -->
    <div class="row">                  
        <!-- Start col -->
        <div class="col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-6 col-lg-9">
                            <h5 class="card-title mb-0">Latest Inspections</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Std</th>
                                    <th>Maths</th>
                                    <th>Science</th>
                                    <th>English</th>
                                    <th>%</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>5</td>
                                    <td>99</td>
                                    <td>99</td>
                                    <td>99</td>
                                    <td>99%</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jimmy Simpson</td>
                                    <td>5</td>
                                    <td>98</td>
                                    <td>98</td>
                                    <td>98</td>
                                    <td>98%</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Lorea Johnson</td>
                                    <td>5</td>
                                    <td>97</td>
                                    <td>97</td>
                                    <td>97</td>
                                    <td>97%</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Merry Aniston</td>
                                    <td>5</td>
                                    <td>96</td>
                                    <td>96</td>
                                    <td>96</td>
                                    <td>96%</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Jessica Perry</td>
                                    <td>5</td>
                                    <td>95</td>
                                    <td>95</td>
                                    <td>95</td>
                                    <td>95%</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Maria Salkova</td>
                                    <td>5</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94%</td>
                                </tr>                                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Latest Faults</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetHod" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetHod">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Pic</th>
                                    <th>Name</th>
                                    <th>Degree</th>
                                    <th>Experience</th>
                                    <th>Department</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="assets/images/users/men.svg" class="img-fluid" width="40" alt="hod"></td>
                                    <td>Mr. Rony Samson</td>
                                    <td>B.Com (Maths)</td>
                                    <td>10+ Years</td>
                                    <td><span class="badge badge-primary-inverse py-2 px-3 font-12">MATHEMATICS</span></td>
                                </tr> 
                                <tr>
                                    <td><img src="assets/images/users/women.svg" class="img-fluid" width="40" alt="hod"></td>
                                    <td>Mr. Andrew Garfield</td>
                                    <td>B.Sc (Chemistry)</td>
                                    <td>8+ Years</td>
                                    <td><span class="badge badge-success-inverse py-2 px-3 font-12">SCIENCE</span></td>
                                </tr> 
                                <tr>
                                    <td><img src="assets/images/users/boy.svg" class="img-fluid" width="40" alt="hod"></td>
                                    <td>Mr. Naomi Wattson</td>
                                    <td>B.Ed (English)</td>
                                    <td>5+ Years</td>
                                    <td><span class="badge badge-warning-inverse py-2 px-3 font-12">ENGLISH</span></td>
                                </tr> 
                                <tr>
                                    <td><img src="assets/images/users/girl.svg" class="img-fluid" width="40" alt="hod"></td>
                                    <td>Mr. Mark Wahlberg</td>
                                    <td>B.A (Sports)</td>
                                    <td>3+ Years</td>
                                    <td><span class="badge badge-secondary-inverse py-2 px-3 font-12">SPORTS</span></td>
                                </tr>                                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Apex js -->
<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/irregular-data-series.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<!-- Custom Dashboard js -->  
<script src="{{ asset('assets/js/custom/custom-dashboard-school.js') }}"></script>
@endsection 