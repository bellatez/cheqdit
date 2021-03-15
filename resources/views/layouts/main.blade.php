<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
        <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
        <meta name="author" content="Themesbox">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title') </title>
        <!-- Fevicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}">
        <!-- Start CSS -->
        @yield('style')
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css">
        <!-- DataTables css -->
        <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- End CSS -->
    </head>
    <body class="vertical-layout">
        @include('sweetalert::alert')
        <div id="app">
            <div class="infobar-settings-sidebar-overlay"></div>
            <!-- End Infobar Setting Sidebar -->
            <!-- Start Containerbar -->
            <div id="containerbar">
                <!-- Start Leftbar -->
                @include('layouts.leftbar')
                <!-- End Leftbar -->
                <!-- Start Rightbar -->
                @include('layouts.rightbar')
                @yield('content')
                <!-- End Rightbar -->
            </div>
        </div>
        <!-- End Containerbar -->
        <!-- Start JS -->

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/vertical-menu.js') }}"></script>
        <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
        <!-- Datatable js -->
        <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom/custom-table-datatable.js') }}"></script>
        @yield('script')
        <!-- Core JS -->
        <script src="{{ asset('assets/js/core.js') }}"></script>

        <script src="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom/custom-sweet-alert.js') }}"></script>
        <!-- End JS -->
    </body>
</html>
