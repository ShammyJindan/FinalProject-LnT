<!-- JQUERY JS -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- SIDE-MENU JS -->
<script src="{{asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>

<!-- TypeHead js -->
<script src="{{asset('assets/plugins/bootstrap5-typehead/autocomplete.js')}}"></script>
<script src="{{asset('assets/js/typehead.js')}}"></script>

<!-- SIDEBAR JS -->
<script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/plugins/p-scroll/pscroll.js')}}"></script>
<script src="{{asset('assets/plugins/p-scroll/pscroll-1.js')}}"></script>

<!-- DATA TABLE JS -->
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/js/table-data.js')}}"></script>

<!-- INPUT MASK JS-->
<script src="{{asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

<!-- Color Theme js -->
<script src="{{asset('assets/js/themeColors.js')}}"></script>

<!-- Sticky js -->
<script src="{{asset('assets/js/sticky.js')}}"></script>

<!-- Switcher js -->
<script src="{{asset('assets/switcher/js/switcher.js')}}"></script>

<!-- Internal Notifications JS -->
<script src="{{asset('assets/plugins/notify/js/jquery.growl.js')}}"></script>
<script src="{{asset('assets/plugins/notify/js/sample.js')}}"></script>
<script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>

<!-- INTERNAL File-Uploads Js-->
<script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

<!-- FILE UPLOADES JS -->
<script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

<!-- SELECT2 JS -->
<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2.js')}}"></script>

<!-- CUSTOM JS -->
<script src="{{asset('assets/js/custom.js')}}"></script>

<!-- Charts JS  -->
{{-- <script src="{{asset('https://cdn.jsdelivr.net/npm/chart.js')}}"></script> --}}
<script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/chart/rounded-barchart.js')}}"></script>
<script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

<!-- PIE CHART JS -->
<script src="{{ asset('assets/plugins/chart/Chart.bundle.js') }}"></script>

{{-- <script src="{{ asset('assets/js/chart.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
<script src="{{ asset('assets/plugins/charts-c3/c3-chart.js')}}"></script> --}}
{{-- <script src="{{asset('assets/js/charts.js')}}"></script> --}}
<script src="{{asset('https://cdn.jsdelivr.net/npm/chartjs-plugin-labels@1.1.0/src/chartjs-plugin-labels.min.js')}}"></script>

<!-- DATEPICKER JS -->
<script src="{{asset('assets/plugins/date-picker/date-picker.js')}}"></script>
<script src="{{asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
<script src="{{asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>

{{-- Sweet alert --}}
<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/js/sweet-alert.js')}}"></script>
{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}

<script>
    $(document).ready(function() {
        $('.fc-datepicker').datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
    // $('.fc-datepicker') -> class = "fc-datepicker"
    // $('#fc-datepicker') -> id = "fc-datepicker"
</script>
@stack('script')
@yield('chartKantor')
{{-- <script>
     document.getElementById('change').onclick = changeColor;

function changeColor() {
    document.body.style.color = "#6C5FFC";
    return false;
}
</script> --}}
{{-- <script>
     $(document).on("click", "#click", function(e) {
        swal('Congratulations!', 'Your message has been succesfully sent', 'success');
    });
</script> --}}
@if (session('message')) {{-- <- Buat nama session disini utk dipake di controller --}}
<script>
    $(document).ready(function () {
        swal({
                title: "Success",
                text: "{{session('message')}}",
                type: 'success',
                }
            );
    });
</script>
@endif

@if (session('notif'))
<script>
    $(document).ready(function () {
        notif({
            msg: " {{session('notif')}}",
            type: "success",
            // color: '#22f',
            width: "all",
            position: "center"
        });
    });
</script>
@endif
@if (session('notifError'))
<script>
    $(document).ready(function () {
        notifError({
            msg: " {{session('notifError')}}",
            type: "error"

        });
    });
</script>
@endif
@php
    Session::forget('notif');
    Session::forget('notifError')
@endphp
</body>

</html>
