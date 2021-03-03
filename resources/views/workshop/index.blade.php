@section('title')
Workshops
@endsection
@extends('layouts.main')

@section('header-btn')
  <a href="{{route('workshops.create')}}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>New</a>
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
                    <h5 class="card-title">Workshop List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>email</th>
                                <th>Address</th>
                                <th>Postcode</th>
                                <th>Contact</th>
                                <th>Organisation</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($workshops as $workshop)
                              <tr>
                                <td>{{$workshop->name}}</td>
                                <td>{{$workshop->user->email}}</td>
                                <td>{{$workshop->address1}}</td>
                                <td>{{$workshop->postcode}}</td>
                                <td>{{$workshop->user->telephone}}</td>
                                <td>{{$workshop->user->organisation->name}}</td>
                                <td class="text-right">
                                  <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                      <a class="dropdown-item" href="{{Route('workshops.show', $workshop)
                                      }}">View</a>
                                      <a class="dropdown-item" href="{{Route('workshops.edit', $workshop)}}">Edit</a>
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
