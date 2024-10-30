<!-- jquery -->
<script src="{{ asset('backend/assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ asset('backend/assets/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script>
    var plugin_path = '{{ asset('backend/assets/js/') }}';
</script>

<!-- chart -->
{{-- <script src="{{ asset('backend/assets/js/chart-init.js') }}"></script> --}}
<!-- calendar -->
{{-- <script src="{{ asset('backend/assets/js/calendar.init.js') }}"></script> --}}
<!-- charts sparkline -->
{{-- <script src="{{ asset('backend/assets/js/sparkline.init.js') }}"></script> --}}
<!-- charts morris -->
{{-- <script src="{{ asset('backend/assets/js/morris.init.js') }}"></script> --}}
<!-- datepicker -->
{{-- <script src="{{ asset('backend/assets/js/datepicker.js') }}"></script> --}}
<!-- sweetalert2 -->
<script src="{{ asset('backend/assets/js/sweetalert2.js') }}"></script>
<!-- toastr -->


<script src="{{ asset('backend/assets/js/toastr.js') }}"></script>
<script>
    @if (session('toast_success'))
        toastr.success("{{ session('toast_success') }}", "", {
            "timeOut": 1000
        }); // Set timeOut to 1000 milliseconds (1 second)
    @endif
    @if (session('toast_error'))
        toastr.error("{{ session('toast_error') }}", "", {
            "timeOut": 1000
        }); // Set timeOut to 1000 milliseconds (1 second)
    @endif
</script>
<!-- validation -->
{{-- <script src="{{ asset('backend/assets/js/validation.js') }}"></script> --}}
<!-- lobilist -->
{{-- <script src="{{ asset('backend/assets/js/lobilist.js') }}"></script> --}}
<!-- custom -->
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>

{{-- Datatables --}}
{{-- <script src="{{ asset('backend/assets/datatables/datatables.min.js') }}"></script> --}}

<script src="{{ asset('backend/assets/js/summernote-lite.min.js') }}" defer></script>

<script src="{{ asset('backend/assets/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('backend/assets/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/assets/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('backend/assets/datatables/export-tables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/assets/datatables/export-tables/buttons.flash.min.js') }}" defer></script>
<script src="{{ asset('backend/assets/datatables/export-tables/jszip.min.js') }}"></script>
<script src="{{ asset('backend/assets/datatables/export-tables/pdfmake.min.js') }}" defer></script>
<script src="{{ asset('backend/assets/datatables/export-tables/vfs_fonts.js') }}" defer></script>
<script src="{{ asset('backend/assets/datatables/export-tables/buttons.print.min.js') }}" defer></script>
@stack('scripts')
