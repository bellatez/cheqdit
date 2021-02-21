@section('title') 
Organisation Details
@endsection 
@extends('layouts.main')
@section('header-btn')
  <a href="{{route('organisation.create')}}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>New</a>
@endsection
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">                
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-5 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <h5 class="card-title mb-0">{{$organisation->name}}'s Details</h5>
                </div>
                <div class="card-body">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link mb-2 active" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true"><i class="feather icon-grid mr-2"></i>General Information</a>
                        <a class="nav-link mb-2" id="v-pills-order-tab" data-toggle="pill" href="#v-pills-order" role="tab" aria-controls="v-pills-order" aria-selected="false"><i class="feather icon-package mr-2"></i>Contact Information</a>
                        <a class="nav-link mb-2" id="v-pills-addresses-tab" data-toggle="pill" href="#v-pills-addresses" role="tab" aria-controls="v-pills-addresses" aria-selected="false"><i class="feather icon-map-pin mr-2"></i>Admins</a>
                        <a class="nav-link mb-2" id="v-pills-wishlist-tab" data-toggle="pill" href="#v-pills-wishlist" role="tab" aria-controls="v-pills-wishlist" aria-selected="false"><i class="feather icon-heart mr-2"></i>Users</a>
                        <a class="nav-link mb-2" id="v-pills-wallet-tab" data-toggle="pill" href="#v-pills-chat" role="tab" aria-controls="v-pills-wallet" aria-selected="true"><i class="feather icon-credit-card mr-2"></i>Vehicles</a>
                        <a class="nav-link mb-2" id="v-pills-chat-tab" data-toggle="pill" href="#v-pills-wallet" role="tab" aria-controls="v-pills-chat" aria-selected="false"><i class="feather icon-message-circle mr-2"></i>Transactions</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-7 col-xl-9">
            <div class="tab-content" id="v-pills-tabContent">
                <!-- Dashboard Start -->
                <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">General Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="profilebox py-4 text-center">
                                <div class="profilename">
                                    <h3>{{$organisation->name}}</h3>
                                </div>
                                <p>Industry Type : <b>{{$organisation->industryType->name}}</b></p>
                                <p>Company Size : <b>{{$organisation->companySize->size}}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard End -->
                <!-- My Orders Start -->
                <div class="tab-pane fade" id="v-pills-order" role="tabpanel" aria-labelledby="v-pills-order-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Contact Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="order-box">
                                <div class="card border m-b-30">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Telephone</th>
                                                        <td>{{$organisation->telephone}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Website</th>
                                                        <td>{{$organisation->website}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Postal Code</th>
                                                        <td>{{$organisation->postcode}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Address Line 1</th>
                                                        <td class="text-right">{{$organisation->address1}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Address Line 2</th>
                                                        <td class="text-right">{{$organisation->address2}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Address Line 3</th>
                                                        <td class="text-right">{{$organisation->address3}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- My Orders End -->
                <!-- My Addresses Start -->
                <div class="tab-pane fade" id="v-pills-addresses" role="tabpanel" aria-labelledby="v-pills-addresses-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Administrators</h5>
                        </div>
                        <div class="card-body">
                            <div class="wallet-transaction-box">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>     
                                                <th scope="col">Email</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Active since</th>
                                                <th scope="col"></th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($admins as $admin)
                                            <tr>
                                                <th scope="row">{{$admin->first_name}} {{$admin->last_name}}</th>              
                                                <td>{{$admin->email}}</td>
                                                <td><span class="badge badge-success-inverse">{{$admin->is_active?'Active': 'Inactive'}}</span></td>
                                                <td>{{date('d-M-Y', strtotime($admin->created_at))}}</td>
                                                <td class="text-right">
                                                  <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                      <a class="dropdown-item" href="{{Route('user.show', $admin)
                                                      }}">View</a>
                                                      <a class="dropdown-item" href="{{Route('user.edit', $admin)}}">Edit</a>
                                                    </div>
                                                  </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>                                        
                        </div>
                    </div>
                </div>
                <!-- My Addresses End -->
                <!-- My Wishlist Start -->
                <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel" aria-labelledby="v-pills-wishlist-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Users</h5>
                        </div>
                        <div class="card-body">
                            <div class="wishlist-box">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Active</th>
                                                <th scope="col">Pending</th>
                                                <th scope="col">Workshops</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>30</td>
                                                <td>0</td>
                                                <td>0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- My Wishlist End -->
                <!-- My Wallet Start -->
                <div class="tab-pane fade" id="v-pills-wallet" role="tabpanel" aria-labelledby="v-pills-wallet-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Vehicles</h5>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <img src="assets/images/ecommerce/wallet.svg" class="img-fluid" alt="wallet">
                                </div>
                            </div>
                            <div class="wallet-box">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <h4 class="text-primary"><i class="feather icon-credit-card mr-2"></i>$45 <span class="font-14">Balance</span></h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-0"><button class="btn btn-success-rgba font-16"><i class="feather icon-plus mr-2"></i>Add Money</button></p>
                                    </div>
                                </div>
                            </div>                                        
                        </div>
                    </div>
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h5 class="card-title mb-0">Transactions</h5>
                                </div>
                                <div class="col-4">
                                    <ul class="list-inline-group text-right mb-0 pl-0">
                                        <li class="list-inline-item mr-0 font-12"><button type="button" class="btn btn-sm btn-primary-rgba px-2">Export</button></li>
                                    </ul>                                        
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="wallet-transaction-box">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>     
                                                <th scope="col">Name</th>
                                                <th scope="col">Withdraw</th>
                                                <th scope="col">Deposit</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Comment</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>              
                                                <td>Apple Inc.</td>
                                                <td>$1,85,000</td>
                                                <td>-</td>
                                                <td><span class="badge badge-success-inverse">Success</span></td>
                                                <td>Transaction ID : 9875648951</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>                
                                                <td>Dell</td>
                                                <td>-</td>
                                                <td>$2,05,000</td>
                                                <td><span class="badge badge-danger-inverse">Reject</span></td>
                                                <td>Bank Transaction ID : 2458615478</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>                
                                                <td>HP Care</td>
                                                <td>$5,000</td>
                                                <td>-</td>
                                                <td><span class="badge badge-success-inverse">Success</span></td>
                                                <td>Battery Replacement</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>                                        
                        </div>
                    </div>
                </div>
                <!-- My Wallet End -->
            </div>                        
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->                  
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- eCommerce My Account Page js -->
<script src="{{ asset('assets/js/custom/custom-ecommerce-myaccount.js') }}"></script>
@endsection 