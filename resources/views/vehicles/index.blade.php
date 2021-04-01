@section('title')
Vehicles
@endsection
@extends('layouts.main')

@section('header-btn')
  <a href="{{route('vehicles.create')}}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>New</a>
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
                    <h5 class="card-title">Vehicles</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Registration Number</th>
                                <th>Fleet Number</th>
                                <th>Type</th>
                                <th>Make</th>
                                <th>Colour</th>
                                <th>Condition</th>
                                <th>Mileage</th>
                                <th>Service Date</th>
                                <th>Motdate Date</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($vehicles as $workshop)
                              <tr>
                                <td>{{$workshop->reg}}</td>
                                <td>{{$workshop->fleet_num}}</td>
                                <td>{{$workshop->type}}</td>
                                <td>{{$workshop->make}}</td>
                                <td>{{$workshop->colour}}</td>
                                <td>{{$workshop->condition}}</td>
                                <td>{{$workshop->mileage}}</td>
                                <td>{{$workshop->service_date}}</td>
                                <td>{{$workshop->mot_date}}</td>
                                <td>{{$workshop->status}}</td>
                                <td class="text-right">
                                  <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                      <a class="dropdown-item" href="{{Route('inspections.show', $workshop)
                                      }}">View</a>
                                      <a class="dropdown-item" href="{{Route('inspections.edit', $workshop)}}">Edit</a>
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
