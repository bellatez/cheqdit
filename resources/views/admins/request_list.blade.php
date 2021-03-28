@section('title') 
User Requests
@endsection 
@extends('layouts.main')

@section('header-btn')
  <a href="{{route('users.create')}}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>New</a>
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
                    <h5 class="card-title">User Accounts request List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-hover">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Contact</th>
                                <th>Role</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($users as $user)
                              <tr>
                                <td>{{$user->first_name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->telephone}}</td>
                                @forelse($user->roles as $role)
                                  <td>{{$role->display_name}}</td>
                                @empty
                                <td>No role assigned</td>
                                @endforelse
                                <td>
                                  <form action="{{Route('users.approve', $user)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <a title="Modify" href="{{ route('users.edit', $user) }}" class="btn btn-xs btn-info"><span class="fa fa-edit"></span></a>
                                    <span class="sweet-alert">
                                      <button type="submit" title="approve" class="btn btn-xs btn-success sa-warning"><i class="fa fa-check"></i></button>
                                    </span>
                                    <a title="Reject" href="#" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#reject"><i class="fa fa-close"></i></a>
                                  </form> 
                                </td>
                              </tr>
                              <!-- rejection modal -->
                              @include('partials.reject-modal', [
                                  'route' => Route('users.reject', $user)
                              ])
                              <!-- end rejection modal -->
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