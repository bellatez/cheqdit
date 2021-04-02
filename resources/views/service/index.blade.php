@section('title')
    {{ $type }}
@endsection
@extends('layouts.main')

@section('header-btn')
    <a href="{{ route('vehicle.create') }}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>New</a>
@endsection

@section('rightbar-content')
    <!-- Start Contentbar -->
    <div class="contentbar">
        {{-- data bar start  --}}
    <div class="card">
        <div class="card-body">
          <div class="row">
              <div class="col-md">
              <h5>Upcoming Service</h5>
              <h1> 12 </h1>
              <h6>More than Last Month</h6>
              </div>
              <div class="col-md">
                  <h5>Upcoming MOT</h5>
                  <h1> 1 </h1>
                  <h6>Less than Last Month</h6>
              </div>
              <div class="col-md">
                  <h5>In Workshop</h5>
                  <h1> 10 </h1>
                  <h6>Less than Last Month</h6>
              </div>
              <div class="col-md">
                  <h5>Total Vehicles</h5>
                  <h1> 10 </h1>
              </div>
              <div class="col-md">
                  <form action="" method="get" >
                      <div class="form-inline">
                          <div class="form-group">
                              <select class="form-control" name="time">
                              <option value="last_month" selected disabled>Select Time</option>
                              <option value="last_month">Last Week</option>
                              <option value="last_month">Last Month</option>
                              <option value="last_month">Last Year</option>
                          </select>
                          </div>
                          <button class="btn btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                      </div>
                  </form>
              </div>

          </div>
          <br>
        </div>
      </div>
    {{-- databar end --}}
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">{{ $type }}
                            @if ($type == 'Service')
                                s
                            @endif
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-hover">
                                <thead>
                                    <tr>

                                        <th>Vehicle Number</th>
                                        <th>Status</th>
                                        <th>Vehicle Type</th>
                                        <th>MOT Due</th>
                                        <th>Last Service</th>
                                        <th>Next Service</th>
                                        <th>Next Inspection</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehicles as $workshop)
                                        <tr>
                                            <td>{{ $workshop->reg }}</td>
                                            <td>{{ $workshop->fleet_num }}</td>
                                            <td>{{ $workshop->type }}</td>
                                            <td>{{ $workshop->make }}</td>
                                            <td>{{ $workshop->colour }}</td>
                                            <td>{{ $workshop->condition }}</td>
                                            <td>{{ $workshop->mileage }}</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only" href="#" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <a class="dropdown-item"
                                                            href="{{ Route('vehicle.show', $workshop) }}">View</a>
                                                        <a class="dropdown-item"
                                                            href="{{ Route('vehicle.edit', $workshop) }}">Edit</a>
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
