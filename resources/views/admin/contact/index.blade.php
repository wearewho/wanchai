@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')

    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><b> @lang('global.website-management.fields.contact_header')</b></h3>
            <div class="box-tools">
                {{-- <a href="{{ route('admin.managehome.create_promotion') }}" class="btn btn-sm btn-success">@lang('global.app_add_new')</a>             --}}
            </div>
        </div>
        <div class="box-body table-responsive">
            <div class="col-md-12 col-sm-12 col-lg-12" style="border:1px solid #80808014;">
                  <div id="mapX" style="height:400px;"></div><br>
                  <div class="col-md-6 col-sm-12 col-lg-6">
                        <h4>@lang('global.website-management.fields.contact_map_lat')<input id="lat_value" type="text" class="form-control" placeholder="ละติจูด"></h4>
                        <h4>@lang('global.website-management.fields.contact_map_lng')<input id="lng_value" type="text" class="form-control" placeholder="ลองติจูด"></h4><br>  
                  </div>        
            </div>
            <div class="col-md-6 col-sm-12  col-lg-6" style="border:1px solid #80808014;">
                <h4>@lang('global.website-management.fields.contact_header_address')</h4>
                <input type="text" class="form-control" placeholder="@lang('global.website-management.fields.contact_address1')"><br>
                <input type="text" class="form-control" placeholder="@lang('global.website-management.fields.contact_address2')"><br>
                <input type="text" class="form-control" placeholder="@lang('global.website-management.fields.contact_address3')"><br>
                <input type="text" class="form-control" placeholder="@lang('global.website-management.fields.contact_address4')"><br>
                <input type="text" class="form-control" placeholder="@lang('global.website-management.fields.contact_address5')"><br>
                <input type="text" class="form-control" style="visibility: hidden;"><br>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6" style="border:1px solid #80808014;">
                <h4>@lang('global.website-management.fields.contact_header_social')</h4>
                <input type="text" class="form-control" placeholder="@lang('global.website-management.fields.contact_social_phone') (1)"><br>
                <input type="text" class="form-control" placeholder="@lang('global.website-management.fields.contact_social_phone') (2)"><br>
                <input type="text" class="form-control" placeholder="@lang('global.website-management.fields.contact_social_facebook')"><br>
                <input type="text" class="form-control" placeholder="@lang('global.website-management.fields.contact_social_instragram')"><br>
                <input type="text" class="form-control" placeholder="@lang('global.website-management.fields.contact_social_youtube')"><br>
                <input type="text" class="form-control" placeholder="@lang('global.website-management.fields.contact_social_line')"><br>
            </div>
            <div class="col-md-12" align="right"><br>
                <button id="btnsave" class="btn btn-danger" onclick="Get_LatitudeAndLongtitude();">อัพเดท</button>
            </div>
        </div>
    </div>

@stop

@section('javascript') 

    <script>
        function Get_LatitudeAndLongtitude(){
            var lati = $('#lat_value').val();
            var longti = $('#lng_value').val();
            alert(lati+'\n'+longti);
        }

         var position={lat:13.847860,lng:100.604274};
        function initMap(){
            var map = new google.maps.Map(document.getElementById('mapX'),{
                zoom: 13,
                center:position
            });
            var marker = new google.maps.Marker({
                position: position,
                map: map,
                title:"5555",
                draggable:true
            });
            //แสดงค่า ละติจูด และ ลองติจูด ตอนเริ่มโหลดครั้งแรก
            var my_Point = marker.getPosition();  
            map.panTo(my_Point);       
            $("#lat_value").val(my_Point.lat());  
            $("#lng_value").val(my_Point.lng());  

            //Event ตอนเลื่อน marker
            google.maps.event.addListener(marker, 'dragend', function() {
                //alert(55);
                var my_Point = marker.getPosition();  // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
                map.panTo(my_Point); // ให้แผนที่แสดงไปที่ตัว marker        
                $("#lat_value").val(my_Point.lat());  // เอาค่า latitude ตัว marker แสดงใน textbox id=lat_value
                $("#lng_value").val(my_Point.lng());  // เอาค่า longtitude ตัว marker แสดงใน textbox id=lat_value
            });
        }
        
      
            
        
    </script>


@endsection


