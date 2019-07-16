<!-- External JavaScripts -->
<script src="{{ url('frontend/assets/js/vendor/jquery.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/slick.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/lightbox.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/jquery.scroll-with-ease.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/jquery.form.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/jquery.validate.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/moment.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/jquery.waypoints.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/jquery.countTo.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/jquery.print.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/jquery.dotdotdot.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/jquery.doubletaptogo.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/nouislider.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/jquery.elevateZoom-3.0.8.min.js') }}"></script>
<!-- Custom JavaScripts -->
<script src="{{ url('frontend/assets/js/custom.js') }}"></script>
<script src="{{ url('frontend/assets/js/forms.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


{{-- <script src="{{ url('frontend/assets/js/google-map-int.js') }}"></script> --}}
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBINVRX-GNF4z1l8CPFrJL5dhIGY96a9-k&callback=initMap" async defer></script> --}}

<script>
    window._token = '{{ csrf_token() }}';
    
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    //$("body").toTopButton();

</script>

@yield('frontendjavascript')


  