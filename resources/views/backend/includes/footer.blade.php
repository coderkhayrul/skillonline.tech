<!-- JAVASCRIPT -->
<script src="{{ asset('backend') }}/assets/libs/jquery/jquery.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/node-waves/waves.min.js"></script>

@if (Route::currentRouteName() == 'admin.category.index')
    <!-- Required datatable js -->
    <script src="{{ asset('backend') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/jszip/jszip.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
    </script>

    <!-- Datatable init js -->
    <script src="{{ asset('backend') }}/assets/js/pages/datatables.init.js"></script>
@endif

<!-- toastr plugin -->
<script src="{{ asset('backend') }}/assets/libs/toastr/build/toastr.min.js"></script>
<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                };
                toastr.info("{{ Session::get('message') }}")
                break;
            case 'success':
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                };
                toastr.success("{{ Session::get('message') }}")
                break;
            case 'warning':
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                };
                toastr.warning("{{ Session::get('message') }}")
                break;
            case 'error':
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                };
                toastr.error("{{ Session::get('message') }}")
                break;
        }
    @endif
</script>

<!-- toastr init -->
<script src="{{ asset('backend') }}/assets/js/app.js"></script>

<!-- Custom Script -->
<script src="{{ asset('backend') }}/assets/js/backend_custom.js"></script>

@stack('custom-script')
</body>

</html>
