 <!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
</footer>
<!-- jQuery -->
<script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- <script src="{{ URL::asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script> -->

<script src="{{ URL::asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- 
<script src="{{ URL::asset('plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ URL::asset('plugins/sparklines/sparkline.js') }}"></script>
<script src="{{ URL::asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ URL::asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<script src="{{ URL::asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ URL::asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{
    URL::asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')
    }}"></script>
<script src="{{ URL::asset('plugins/summernote/summernote-bs4.min.js') }}"></script> -->
<script src="{{
    URL::asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')
    }}"></script>
<script src="{{ URL::asset('dist/js/adminlte.js') }}"></script>
<script src="{{ URL::asset('dist/js/demo.js') }}"></script>
<script src="{{ URL::asset('dist/js/pages/dashboard.js') }}"></script>

<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{
    URL::asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{
    URL::asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')
    }}"></script>
<script src="{{
    URL::asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')
    }}"></script>
<script src="{{
    URL::asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{
    URL::asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables-buttons/js/buttons.html5.min.js')
    }}"></script>
<script src="{{ URL::asset('plugins/datatables-buttons/js/buttons.print.min.js')
    }}"></script>
<script src="{{
    URL::asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ URL::asset('dist/js/adminlte.min.js') }}"></script>
<script>
            $.widget.bridge("uibutton", $.ui.button);
</script>
<script type="text/javascript">
    $(document).ready(function() {
            /* make link active*/
        
        var current = location.pathname;
                $('ul.nav li a').each(function(){
                    var $this = $(this);
                    // if the current path is like this link, make it active
                    if($this.attr('href').indexOf(current) !== -1){
                        $('ul.nav li a').removeClass('active');
                        $this.addClass('active');
                    }
                });


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

});
</script>