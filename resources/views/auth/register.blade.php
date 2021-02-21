@extends('layouts.app')

@section('content')
    <div class="auth-box register-box">
        <!-- Start row -->
        <div class="row no-gutters align-items-center justify-content-center">
            <!-- Start col -->
            <div class="col-md-9 col-lg-9">
                <!-- Start Auth Box -->
                <div class="auth-box-right">
                    <div class="card">
                        <div class="card-title align-items-center">
                            <div class="form-head">
                                <a href="{{url('/')}}" class="logo"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                            </div>
                            <h4 class="text-primary">Sign Up As:</h4>
                        </div>
                        <div class="card-body pt-0">
                            <ul class="nav nav-pills nav-justified bg-light-gradient mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="user-tab" data-toggle="pill" href="#user" role="tab" aria-controls="user" aria-selected="true"><strong>User</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="workshop-tab" data-toggle="pill" href="#workshop" role="tab" aria-controls="workshop" aria-selected="false"><strong>Workshop</strong></a>
                                </li>
                            </ul>
                            @if($errors->any())
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                    <li class="list-group-item text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                            @endif
                            <div class="tab-content mt-4" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user">
                                        <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                                            @csrf
                                        <h5 class="text-dark">New User</h5>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="organisation_id">
                                                    <option selected disabled>Select your Organisation</option>
                                                    @foreach($organisations as $org)
                                                        <option value="{{$org->id}}">
                                                            {{$org->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password" placeholder="Enter Password here" required>
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control" name="telephone" placeholder="Enter Phone Number" required>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="role_id">
                                                  <option selected disabled>Select your Role</option>
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->id}}">
                                                            {{$role->display_name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password_confirmation" placeholder="Re-Type Password" required>
                                            </div>
                                          </div>
                                        </div>
                                        <input type="hidden" name="type" value="1">
                                        <div class="form-row mb-3">
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox text-left">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <label class="custom-control-label font-14" for="terms">I Agree to Terms & Conditions of {{config('app.name')}}</label>
                                                </div>                                
                                            </div>
                                        </div>                          
                                      <button type="submit" class="btn btn-success btn-lg btn-block font-18">Register</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="workshop" role="tabpanel" aria-labelledby="workshop">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <h5 class="text-dark">New Workshop</h5>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="website" placeholder="Enter Website" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="address1" name="address1" placeholder="Enter Address Line 1" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="address3" name="address3" placeholder="Enter Address Line 3" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password"placeholder="Enter Password" required>
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control" name="telephone" placeholder="Enter Phone Number" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Workshop name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="address2" name="address2" placeholder="Enter Address Line 2" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Enter Post Code" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Re-Type Password" required>
                                            </div>
                                          </div>
                                        </div>
                                       
                                       <input type="hidden" name="type" value="2">
                                       <div class="form-row mb-3">
                                           <div class="col-sm-12">
                                               <div class="custom-control custom-checkbox text-left">
                                                   <input type="checkbox" class="custom-control-input">
                                                   <label class="custom-control-label font-14" for="terms">I Agree to Terms & Conditions of {{config('app.name')}}</label>
                                               </div>                                
                                           </div>
                                       </div>                          
                                     <button type="submit" class="btn btn-info btn-lg btn-block font-18">Register</button>
                                   </form>
                                </div>
                            </div>
                           
                            <p class="mb-0 mt-3">Already have an account? <a href="{{Route('login')}}">Log in</a></p>
                        </div>
                    </div>
                </div>
                <!-- End Auth Box -->
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
@endsection