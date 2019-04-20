<script src="{{ url('frontend/assets/js/jquery.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/fakeLoader.js') }}"></script>
<script src="{{ url('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/plugins.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/part-int.js') }}"></script>
<script src="{{ url('frontend/assets/js/part-int2.js') }}"></script>
<script src="{{ url('frontend/assets/js/custom-scripts.js') }}"></script>
<script src="{{ url('frontend/assets/js/floating-totop-button.js') }}"></script>

<script src="{{ url('frontend/assets/js/revolution/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/revolution/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
<script src="{{ url('frontend/assets/js/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/revolution/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/revolution/revolution-init.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBINVRX-GNF4z1l8CPFrJL5dhIGY96a9-k&callback=initMap"></script>
<script src="frontend/assets/js/google-map-int.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{-- <script src="{{ url('frontend/assets/js/google-map-int.js') }}"></script> --}}
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBINVRX-GNF4z1l8CPFrJL5dhIGY96a9-k&callback=initMap" async defer></script> --}}

<script>
    window._token = '{{ csrf_token() }}';

    $.fakeLoader({
        timeToHide:1200,
        bgColor:"#ec376c",
        spinner:"spinner7"
    });

    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    $("body").toTopButton();

</script>

@yield('frontendjavascript')


  