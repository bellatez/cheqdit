@section('title')
{{ ucwords(request()->type ?? 'administrators') }} 
@endsection
@extends('layouts.main')

@section('header-btn')
  @if(request()->type == 'drivers')
    <a href="{{route('users.create', ['type'=>'driver'])}}" class="btn btn-info-rgba"><i class="feather icon-plus mr-2"></i>New driver</a>
  @elseif(request()->type == 'mechanics')
    <a href="{{route('users.create', ['type'=>'mechanic']) }}" class="btn btn-info-rgba"><i class="feather icon-plus mr-2"></i>New mechanic</a>
  @else
    <a href="{{route('users.create') }}" class="btn btn-info-rgba"><i class="feather icon-plus mr-2"></i>New admin</a>
  @endif
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
                    <h5 class="card-title">{{ ucwords(request()->type ?? 'administrators') }}  List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Organisation</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($admins as $admin)
                              <tr>
                                <td><a href="{{Route('users.edit', $admin)}}">{{$admin->full_name ?? ''}}</a></td>
                                <td>{{$admin->email ?? ''}}</td>
                                <td>{{$admin->getTelephone() ?? ''}}</td>
                                <td>{{$admin->organisation->name ?? ''}}</td>
                                <td>
                                  <input type="checkbox" class="status-switch" data-id="{{ $admin->id }}" {{ $admin->is_active == 1 ? 'checked' : '' }} data-toggle="toggle"  data-size="mini" data-width="50" data-onstyle="success" data-offstyle="light">
                                </td>
                                <td class="text-right">
                                  <form action="{{Route('users.destroy', $admin)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a title="Modify" href="{{ route('users.edit', ['user' =>$admin, 'type'=>$admin->roles[0]->name]) }}" class="btn btn-xs btn-info"><span class="fa fa-edit"></span></a>
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

