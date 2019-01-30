<style type="text/css">
    .toast-info {
        background-color: #2b2d2b;
    }

    #toast-container>div {
        opacity: 1 !important;
    }
    #toast-container>.toast-info {
        background-image: none !important;
    }
</style>

<script type="text/javascript">
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-left",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "4000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"

    }


    // "showDuration": "300",
    // "hideDuration": "0",
    // "timeOut": "0",
    // "extendedTimeOut": "0",
    // "showEasing": "swing",
    // "hideEasing": "linear",
    // "showMethod": "fadeIn",
    // "hideMethod": "fadeOut"


    @if(Session::has('success'))
    // toastr.success("{{ Session::get('success') }}","Info");
    toastr.success("{{ Session::get('success') }}").attr('style','width: 111%; !important;font-size: 15px;');
    @endif

    @if(Session::has('info'))
    toastr.info("{{ Session::get('info') }}").attr('style', 'width: 111%; !important;font-size: 15px;');
    @endif

    @if(Session::has('warning'))
    toastr.warning("{{ Session::get('warning') }}").attr('width: 111%; !important;font-size: 15px;');
    @endif

    @if(Session::has('error'))
    // alert();
    toastr.error("{{ Session::get('error') }}").attr('style', 'width: 111%; !important;font-size: 15px;');
    @endif
    @if(Session::has('session'))
    // alert();
    toastr.error("{{ Session::get('session') }}").attr('style', 'margin-left: 227% !important;font-size: 16px;width: 261%;');
    @endif

</script>
