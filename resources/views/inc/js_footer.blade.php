<script src="{{ asset('template/js/jquery.min.js') }}"></script>
<script src="{{ asset('template/js/popper.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="{{ asset('template/plugins/tether/tether.min.js') }}"></script>
<script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
<!-- Custom js -->
<script src="{{ asset('template/js/custom.js') }}"></script>
<!-- Select2 -->
<link href="{{ asset('template/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
<script src="{{ asset('template/plugins/select2/js/select2.min.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset('template/plugins/owl-carousel/owl.carousel.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>
@if(Session::has('sm'))
<script>
 
    toastr.options.timeOut = 1800;
    toastr.options.closeButton = true;
    toastr.options.progressBar = true;

    @if (Session::has('tosterPos'))

    toastr.options.positionClass = "{{ Session::get('tosterPos') }}";
    @else
    toastr.options.positionClass = 'toast-bottom-full-width';
    @endif
    toastr.success("{{Session::get('sm')}}");
    

</script>

@endif
