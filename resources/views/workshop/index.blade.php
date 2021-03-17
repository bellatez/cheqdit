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
                                <th>Status</th>
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
                                <td>
                                  <input type="checkbox" class="status-switch" data-id="{{ $workshop->user->id }}" {{ $workshop->user->is_active == 1 ? 'checked' : '' }} data-toggle="toggle"  data-size="mini" data-width="50" data-onstyle="success" data-offstyle="light">
                                </td>
                                <td class="text-right">
                                    <form action="{{Route('workshops.destroy', $workshop)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <a title="Modify" href="{{Route('workshops.edit', $workshop)}}" class="btn btn-xs btn-info"><span class="fa fa-edit"></span></a>
                                      <span class="sweet-alert">
                                        <button type="submit" title="delete" class="btn btn-xs btn-danger sa-warning"><i class="fa fa-trash"></i></button>
                                      </span>
                                    </form> 
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
