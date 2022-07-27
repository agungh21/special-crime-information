<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('vendors/fontawesome/all.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendors/adminlte/adminlte.css') }}">

    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/all.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/ladda/ladda-themeless.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/pace/blue/pace-theme-loading-bar.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/jquery-confirm/jquery-confirm.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/clockpicker/dist/bootstrap-clockpicker.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/custom/select2-atlantis.css') }}">

    <link rel="stylesheet" href="{{ url('vendors/datatables/datatables.min.css') }}">

</head>

<body class="hold-transition sidebar-mini">
    <header class="text-center">
        <div class="card bg-success">
            <div class="card-body">
                <img width="200" height="200" src="{{ url('assets/img/logo.png') }}" alt="logo">
                <h1>SISTEM INFORMASI PENANGANAN PERKARA PIDANA KHUSUS</h1>
                <h2>KEJAKSAAN NEGERI</h2>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg">
                    @yield('content-front')
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <?php
    $umum = $settings['umum'];
?>

<!-- Main Footer -->
<footer>
    <div class="card bg-dark mb-0">
        <div class="card-body">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Copyright &copy; {{ date('Y') }}
            </div>
            <!-- Default to the left -->
            <i class="fas fa-tools text-primary"></i>
            Created By <a class="text-primary"><strong>{{ $umum['creator_app'] }}.</strong></a>
        </div>
    </div>
</footer>
</div>


    <!-- ./wrapper -->

    @yield('modal')

    <!-- REQUIRED SCRIPTS -->

    <!-- AdminLTE App -->
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendors/adminlte/adminlte.js') }}"></script>

    <script src="{{ asset('vendors/fontawesome/all.js') }}"></script>

    <!--   Core JS Files   -->
    {{-- <script src="{{ url('assets/js/core/jquery.3.2.1.min.js') }}"></script> --}}
    <script src="{{ url('assets/js/core/popper.min.js') }}"></script>
    {{-- <script src="{{ url('assets/js/core/bootstrap.min.js') }}"></script> --}}

    <!-- jQuery UI -->
    <script src="{{ url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ url('assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ url('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ url('assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ url('assets/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ url('assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ url('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>


    <!-- Atlantis JS -->
    <script src="{{ url('assets/js/atlantis.min.js') }}"></script>

    <script src="{{ url('vendors/ladda/spin.min.js') }}"></script>
    <script src="{{ url('vendors/ladda/ladda.min.js') }}"></script>
    <script src="{{ url('vendors/ladda/ladda.jquery.min.js') }}"></script>
    <script src="{{ url('vendors/jquery-confirm/jquery-confirm.js') }}"></script>
    <script src="{{ url('vendors/select2/select2.min.js') }}"></script>
    <script src="{{ url('vendors/clockpicker/dist/bootstrap-clockpicker.min.js') }}"></script>
    <script src="{{ url('assets/js/myJs.js') }}"></script>
    @yield('scripts')
</body>

</html>
