<footer class="footer text-center text-muted">
    All Rights Reserved <b>{{ env('APP_NAME') }}</b>.
</footer>

<script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/app-style-switcher.js') }}"></script>
<script src="{{ asset('assets/backend/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('assets/backend/js/custom.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/d3.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/c3.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/chartist.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/backend/js/dashboard1.min.js') }}"></script>

<script src="{{ asset('assets/backend/js/prism.js') }}"></script>
<script src="{{ asset('assets/backend/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/sparkline.js') }}"></script>
<script src="{{ asset('assets/backend/js/datatable-basic.init.js') }}"></script>

<script src="{{ asset('assets/backend/js/toastr.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@stack('js')
