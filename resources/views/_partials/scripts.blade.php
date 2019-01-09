<script src="{{ asset('js/vendor.min.js') }}"></script>
<script src="{{ asset('js/elevator.min.js') }}"></script>
<script src="{{ asset('js/application.min.js') }}"></script>
<script src="{{ asset('js/myscripts.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

