@section('title') 
User Requests
@endsection 
@extends('layouts.main')

@section('header-btn')
  <a href="{{route('user.create')}}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>New</a>
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
                                @foreach($user->roles as $role)
                                  <td>{{$role->display_name}}</td>
                                @endforeach
                                <td>
                                  <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                      @csrf
                                      @method('delete')
                                      <a href="{{ route('user.edit', $user) }}" class="btn btn-xs btn-primary"><span class="fa fa-edit"></span></a> &nbsp;
                                      @if($user->is_active == false)
                                          <a href="{{ route('user.status', ['user'=>$user, 'value'=>'1']) }}" title="activate" class="btn btn-xs btn-success"><span class="fa fa-key"></span></a> &nbsp;
                                      @else
                                          <a href="{{ route('user.status', ['user'=>$user, 'value'=>'0']) }}" title="deactivate" class="btn btn-xs btn-warning"><span class="fa fa-ban"></span></a> &nbsp;
                                      @endif
                                      <button type="submit" class="btn btn-xs btn-danger confirm_delete">
                                          <span class="fa fa-trash"></span>
                                      </button>
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