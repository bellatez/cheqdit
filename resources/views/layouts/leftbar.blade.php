<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="{{url('/')}}" class="logo logo-large"><img src="{{asset('assets/images/logo.svg')}}" class="img-fluid" alt="logo"></a>
            <a href="{{url('/')}}" class="logo logo-small"><img src="{{asset('assets/images/small-logo.svg')}}" class="img-fluid" alt="logo"></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <h6 class="text-small leftbar-subs mt-3"><small>DASHBOARD</small></h6>
                <li><a class="font-16" href="{{url('/')}}"><i class="fa fa-dashboard"></i><span>My Dashboard</span></a></li>
                @if(Auth::user()->hasRole('administrator|subadministrator'))
                    <li><a class="font-16" href="{{url('/dashboard-ecommerce')}}"><i class="fas fa-bell"></i><span>My Notifications</span></a></li>
                    <li><a class="font-16" href="{{url('/dashboard-hospital')}}"><i class="fas fa-cc"></i><span>My Credits</span></a></li>
                @endif
                @if(Auth::user()->hasRole('superadministrator'))
                    <li>
                        <a href="javaScript:void();" class="font-16"><i class="fas fa-institution"></i>
                          <span>Organisations</span><i class="feather icon-chevron-right pull-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a class="font-16" href="{{route('organisations.index')}}">View All</a></li>
                            <li><a class="font-16" href="{{route('organisations.create')}}">Add Organisation</a></li>
                        </ul>
                    </li>
                @endif
                @if(Auth::user()->hasRole('administrator|subadministrator'))
                    <h6 class="text-small leftbar-subs mt-3"><small>VEHICLE MANAGEMENT</small></h6>
                    <li>
                        <a href="javaScript:void();" class="font-16">
                          <i class="fas fa-car"></i><span>My Vehicles</span><i class="feather icon-chevron-right pull-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a class="font-16" href="{{url('/')}}">All Vehicles</a></li>
                            <li><a class="font-16" href="{{url('/dashboard-hospital')}}">Add Vehicles</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="javaScript:void();" class="font-16">
                          <i class="fa fa-simplybuilt"></i><span>Workshop</span><i class="feather icon-chevron-right pull-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a class="font-16" href="{{Route('workshops.request')}}">Pending Request</a></li>
                            <li><a class="font-16" href="{{Route('workshops.index')}}">All Workshops</a></li>
                            <li><a class="font-16" href="{{Route('workshops.create')}}">Add Workshop</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="javaScript:void();" class="font-16">
                          <i class="fas fa-bus"></i><span>DVLA Search</span><i class="feather icon-chevron-right pull-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a class="font-16" href="{{url('/')}}">Vehicle search</a></li>
                        </ul>
                    </li>
                @endif
                @if(Auth::user()->hasRole('administrator|superadministrator'))
                    <h6 class="ml-4 leftbar-subs mt-3"><small>USER MANAGEMENT</small></h6>
                    <li>
                        <a href="{{Route('users.request')}}"><i class="feather icon-user-plus"></i><span>Pending Request</span></a>
                    </li>
                    <li>
                        <a href="javaScript:void();" class="font-16">
                            <i class="fas fa-truck"></i><span>My Drivers</span><i class="feather icon-chevron-right pull-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a class="font-16" href="{{url('/basic-ui-kits-alerts')}}">View All</a></li>
                            <li><a class="font-16" href="{{url('/basic-ui-kits-badges')}}">Add Driver</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javaScript:void();" class="font-16">
                            <i class="fa fa-male"></i><span>My Mechanics</span><i class="feather icon-chevron-right pull-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a class="font-16" href="{{url('/advanced-ui-kits-image-crop')}}">View all</a></li>
                            <li><a class="font-16" href="{{url('/advanced-ui-kits-jquery-confirm')}}">Add Mechanic</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javaScript:void();" class="font-16">
                            <i class="fas fa-users"></i><span>Admin Team</span><i class="feather icon-chevron-right pull-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a class="font-16" href="{{Route('administrators.index')}}">View All</a></li>
                            <li><a class="font-16" href="{{Route('administrators.create')}}">Add Admin</a></li>
                        </ul>
                    </li>
                @endif
                @if(Auth::user()->hasRole('administrator|subadministrator'))
                    <h6 class="text-small leftbar-subs mt-3"><small>CHECKS AND FORMS</small></h6>
                    <li>
                        <a href="javaScript:void();" class="font-16">
                          <i class="fas fa-tasks"></i><span>Vehicle Inspection</span><i class="feather icon-chevron-right pull-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a class="font-16" href="{{url('/apps-chat')}}">View All</a></li>
                            <li><a class="font-16" href="{{url('/apps-calender')}}">Last 30 Days</a></li>
                            <li><a class="font-16" href="{{url('/apps-calender')}}">Last 60 Days</a></li>
                            <li><a class="font-16" href="{{url('/apps-calender')}}">Add Inspection</a></li>
                            <li><a class="font-16" href="{{url('/apps-calender')}}">My Forms</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javaScript:void();" class="font-16">
                          <i class="fas fa-qrcode"></i><span>MOT/Service</span><i class="feather icon-chevron-right pull-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a class="font-16" href="{{url('/apps-calender')}}">View Upcoming</a></li>
                            <li><a class="font-16" href="{{url('/apps-chat')}}">View all History</a></li>
                            <li><a class="font-16" href="{{url('/apps-kanban-board')}}">Add MOT</a></li>
                            <li><a class="font-16" href="{{url('/apps-onboarding-screens')}}">Add Service</a></li>
                        </ul>
                    </li>
                @endif
                @if(Auth::user()->hasRole('administrator|superadministrator'))
                    <h6 class="text-small leftbar-subs mt-3"><small>REPORTING & REFERENCES</small></h6>
                    <li>
                        <a href="javaScript:void();" class="font-16">
                          <i class="fas fa-hourglass-2"></i><span>Analysis</span><i class="feather icon-chevron-right pull-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a class="font-16" href="{{url('/apps-calender')}}">All</a></li>
                            <li><a class="font-16" href="{{url('/apps-chat')}}">Timestamps</a></li>
                        </ul>
                    </li>
                @endif
                @if(Auth::user()->hasRole('mechanic') || Auth::user()->type == 2)
                    <li>
                        <a href="javaScript:void();" class="font-16">
                          <i class="fas fa-legal"></i><span>Damage/Faults</span><i class="feather icon-chevron-right pull-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a class="font-16" href="{{url('/apps-calender')}}">View All</a></li>
                            <li><a class="font-16" href="{{url('/apps-chat')}}">My Forms</a></li>
                        </ul>
                    </li>
                @endif
                @if(Auth::user()->hasRole('driver'))
                    <h6 class="text-small leftbar-subs mt-3"><small>CHECKS AND FORMS</small></h6>
                    <li>
                        <a href="javaScript:void();" class="font-16">
                            <img src="assets/images/svg-icon/form_elements.svg" class="img-fluid" alt="form_elements">
                          <span>Submit Form</span><i class="feather icon-chevron-right pull-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a class="font-16" href="{{url('/apps-calender')}}">All Vehicles</a></li>
                            <li><a class="font-16" href="{{url('/apps-chat')}}">Add Fault</a></li>
                            <li><a class="font-16" href="{{url('/apps-chat')}}">My History</a></li>
                            <li><a class="font-16" href="{{url('/apps-kanban-board')}}">Downloads</a></li>
                        </ul>
                    </li>
                @endif
                <h6 class="text-small leftbar-subs mt-3"><small>SUPPORT</small></h6>
                @if(Auth::user()->hasRole('driver'))
                    <li><a class="font-16" href="{{url('/apps-onboarding-screens')}}"><span>Help Guides</span></a></li>
                    <li><a class="font-16" href="{{url('/apps-onboarding-screens')}}"><span>My Weather</span></a></li>
                    <li><a class="font-16" href="{{url('/apps-onboarding-screens')}}"><span>Videos</span></a></li>
                    <li><a class="font-16" href="{{url('/apps-onboarding-screens')}}"><span>Best Practice</span></a></li>
                @endif
                <li>
                    <a href="javaScript:void();" class="font-16">
                      <i class="fa fa-flag-o"></i><span>Flag Issue</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/page-faq')}}">
                        <i class="fas fa-question"></i><span>FAQ</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>
