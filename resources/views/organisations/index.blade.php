@section('title') 
Organisations
@endsection 
@extends('layouts.main')

@section('header-btn')
  <a href="#" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>New</a>
  @endsection

@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">                
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Organisations List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Postcode</th>
                                <th>Contact</th>
                                <th>Type</th>
                                <th>Size</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td class="text-right">
                                  <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                                <td class="text-right">
                                  <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                  </div>
                                </td>
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
<!-- Tabledit js -->
<script src="{{ asset('assets/plugins/tabledit/jquery.tabledit.js') }}"></script>     
<script src="{{ asset('assets/js/custom/custom-table-editable.js') }}"></script>
@endsection 