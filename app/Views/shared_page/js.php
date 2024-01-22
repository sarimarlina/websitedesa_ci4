<!-- jQuery UI 1.11.4 -->
<script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.js"></script>
<!-- bs-custom-file-input -->
<script src="/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- jquery-validation -->
<script src="/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="/assets/plugins/jquery-validation/additional-methods.min.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/assets/dist/js/demo.js"></script>

<!-- SweetAlert2 -->
<script src="/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="/assets/plugins/toastr/toastr.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="/assets/dist/js/demo.js"></script>
<script type="text/javascript">
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
    });
</script>