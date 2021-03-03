@section('title') 
User Requests
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
                    <h5 class="card-title">Workshops request List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Workshop name</th>
                                <th>Contact</th>
                                <th>Post Code</th>
                                <th>Address</th>
                                <th>Website</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($workshops as $workshop)
                              <tr>
                                <td>{{$workshop->name}}</td>
                                <td>{{$workshop->user->telephone ?? ''}}</td>
                                <td>{{$workshop->postcode}}</td>
                                <td>{{$workshop->address1}}</td>
                                <td><a target="_blank" href="{{$workshop->website}}">Visit</a></td>
                                <td>
                                  <a title="Modify" href="{{ route('workshops.edit', $workshop) }}" class="btn btn-xs btn-primary"><span class="fa fa-edit"></span></a>
                                  <a href="#" class="btn btn-xs btn-success"><i class="fa fa-check"></i></a>
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