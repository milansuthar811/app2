<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Fixed top navbar example · Bootstrap v5.1</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <!-- <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet"> -->

    <!-- Milan -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Milan -->
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!--  Milan for sidebar  -->
        @auth
        @include('layouts.navbar')
        @include('layouts.sidebar')
        @include('layouts.content')
        @include('layouts.footer')
        @endauth
        <!--  Milan for sidebar  -->

        <main class="container">
            @yield('content')
        </main>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>


    <!-- DataTables  & Plugins -->
    <!-- jQuery -->
    <script src="{{  URL::asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{{  URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{  URL::asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{  URL::asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{  URL::asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{  URL::asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{  URL::asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{  URL::asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{  URL::asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{  URL::asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{  URL::asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{  URL::asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{  URL::asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{  URL::asset('dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{  URL::asset('dist/js/demo.js') }}"></script>

    
    jQuery UI 1.11.4
    <script src="{{  URL::asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <!-- ChartJS -->
    <script src="{{  URL::asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{  URL::asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{  URL::asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{  URL::asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{  URL::asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{  URL::asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{  URL::asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{  URL::asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{  URL::asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{  URL::asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{  URL::asset('dist/js/adminlte.js') }}"></script>
    <script src="{{  URL::asset('dist/js/pages/dashboard.js') }}"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>


</body>

</html>
