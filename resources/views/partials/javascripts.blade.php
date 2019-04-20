<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
{{-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> --}}
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="{{ url('backend/adminlte/js') }}/bootstrap.min.js"></script>
<script src="{{ url('backend/adminlte/js') }}/select2.full.min.js"></script>
<script src="{{ url('backend/adminlte/js') }}/main.js"></script>
<script src="{{ url('backend/js/fileinput.js') }}"></script>
<script src="{{ url('backend/js/piexif.js') }}"></script>
<script src="{{ url('backend/js/sortable.js') }}"></script>

<script src="{{ url('backend/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ url('backend/adminlte/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ url('backend/adminlte/js/app.min.js') }}"></script>
{{-- <script src="assets/js/google-map-int.js"></script> --}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBINVRX-GNF4z1l8CPFrJL5dhIGY96a9-k&callback=initMap" async defer></script>

<script>
    window._token = '{{ csrf_token() }}';
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
</script>

@yield('javascript')