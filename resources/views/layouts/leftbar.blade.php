<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="{{url('/')}}" class="logo logo-large"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
            <a href="{{url('/')}}" class="logo logo-small"><img src="assets/images/small_logo.svg" class="img-fluid" alt="logo"></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <h6 class="text-small ml-2 mt-3"><small>DASHBOARD</small></h6>
                <li><a href="{{url('/')}}">My Dashboard</a></li>
                <li><a href="{{url('/dashboard-ecommerce')}}">My Notifications</a></li>
                <li><a href="{{url('/dashboard-hospital')}}">My Credits</a></li>

                <h6 class="text-small ml-2 mt-3"><small>ORGANISATIONS</small></h6>
                <li><a href="{{url('/')}}">View All</a></li>
                <li><a href="{{url('/dashboard-ecommerce')}}">Add Organisation</a></li>

                <h6 class="text-small ml-2 mt-3"><small>VEHICLE MANAGEMENT</small></h6>
                <li>
                    <a href="javaScript:void();">
                      <img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>My Vehicles</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/')}}">All Vehicles</a></li>
                        <li><a href="{{url('/dashboard-hospital')}}">Add Vehicles</a></li>
                    </ul>
                </li>

                 <li>
                    <a href="javaScript:void();">
                      <img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>Workshop</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/')}}">All Workshops</a></li>
                        <li><a href="{{url('/dashboard-school')}}">Add workshop</a></li>
                    </ul>
                </li>
                 <li>
                    <a href="javaScript:void();">
                      <img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>DVLA Search</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/')}}">Vehicle search</a></li>
                    </ul>
                </li>
                <h6 class="ml-2 mt-3"><small>USER MANAGEMENT</small></h6>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/basic.svg" class="img-fluid" alt="basic"><span>My Drivers</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/basic-ui-kits-alerts')}}">View All</a></li>
                        <li><a href="{{url('/basic-ui-kits-badges')}}">Add Driver</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/advanced.svg" class="img-fluid" alt="advanced"><span>My Mechanics</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">                                
                        <li><a href="{{url('/advanced-ui-kits-image-crop')}}">View all</a></li>  
                        <li><a href="{{url('/advanced-ui-kits-jquery-confirm')}}">Add Mechanic</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/basic.svg" class="img-fluid" alt="basic"><span>Admin Team</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/basic-ui-kits-alerts')}}">View All</a></li>
                        <li><a href="{{url('/basic-ui-kits-badges')}}">Add Admin</a></li>
                    </ul>
                </li>
                <h6 class="text-small ml-2 mt-3"><small>CHECKS AND FORMS</small></h6>
                <li>
                    <a href="javaScript:void();">
                      <img src="assets/images/svg-icon/apps.svg" class="img-fluid" alt="apps"><span>Vehicle Inspection</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/apps-chat')}}">View All</a></li> 
                        <li><a href="{{url('/apps-calender')}}">Last 30 Days</a></li>
                        <li><a href="{{url('/apps-calender')}}">Last 60 Days</a></li>
                        <li><a href="{{url('/apps-calender')}}">Add Inspection</a></li>
                        <li><a href="{{url('/apps-calender')}}">My Forms</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                      <img src="assets/images/svg-icon/apps.svg" class="img-fluid" alt="apps"><span>Damage/Faults</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/apps-calender')}}">View All</a></li>
                        <li><a href="{{url('/apps-chat')}}">Add Fault</a></li> 
                        <li><a href="{{url('/apps-chat')}}">My Forms</a></li> 
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                      <img src="assets/images/svg-icon/apps.svg" class="img-fluid" alt="apps"><span>MOT/Service</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/apps-calender')}}">View Upcoming</a></li>
                        <li><a href="{{url('/apps-chat')}}">View all History</a></li> 
                        <li><a href="{{url('/apps-kanban-board')}}">Add MOT</a></li>
                        <li><a href="{{url('/apps-onboarding-screens')}}">Add Service</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                      <img src="assets/images/svg-icon/apps.svg" class="img-fluid" alt="apps"><span>Submit Form</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/apps-calender')}}">All Vehicles</a></li>
                        <li><a href="{{url('/apps-chat')}}">My History</a></li> 
                        <li><a href="{{url('/apps-kanban-board')}}">Downloads</a></li>
                    </ul>
                </li>

                <h6 class="text-small ml-2 mt-3"><small>REPORTING & REFERENCES</small></h6>         
                <li>
                    <a href="javaScript:void();">
                      <img src="assets/images/svg-icon/apps.svg" class="img-fluid" alt="apps"><span>Analysis</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/apps-calender')}}">All</a></li>
                        <li><a href="{{url('/apps-chat')}}">Timestamps</a></li> 
                    </ul>
                </li>

                <h6 class="text-small ml-2 mt-3"><small>SUPPORT</small></h6>   
                <li><a href="{{url('/apps-onboarding-screens')}}">Help Guides</a></li>
                <li><a href="{{url('/apps-onboarding-screens')}}">My Weather</a></li>
                <li><a href="{{url('/apps-onboarding-screens')}}">Videos</a></li>
                <li><a href="{{url('/apps-onboarding-screens')}}">Best Practice</a></li>
                <li>
                    <a href="javaScript:void();">
                      <img src="assets/images/svg-icon/apps.svg" class="img-fluid" alt="apps"><span>Flag Issue</span>
                    </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/form_elements.svg" class="img-fluid" alt="form_elements"><span>FAQ</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>