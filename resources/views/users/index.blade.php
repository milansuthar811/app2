<!DOCTYPE html>
<html lang="en">
    @include('layouts.partials.header')
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @auth
            @include('layouts.navbar')
            @include('layouts.sidebar')
            @include('layouts.content')
            <main class="container">
                @yield('content')
            </main>
            @include('layouts.partials.footer')

            @endauth
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

        <script src="{{  URL::asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge("uibutton", $.ui.button);
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
            $(function () {
                $("#example1")
                    .DataTable({
                        responsive: true,
                        lengthChange: false,
                        autoWidth: false,
                        buttons: [
                            "copy",
                            "csv",
                            "excel",
                            "pdf",
                            "print",
                            "colvis",
                        ],
                    })
                    .buttons()
                    .container()
                    .appendTo("#example1_wrapper .col-md-6:eq(0)");
                $("#example2").DataTable({
                    paging: true,
                    lengthChange: false,
                    searching: false,
                    ordering: true,
                    info: true,
                    autoWidth: false,
                    responsive: true,
                });
            });
        </script>
    </body>
</html>
