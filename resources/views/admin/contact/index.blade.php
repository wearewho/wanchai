@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    
   
@foreach($contact as $row)
<form action="updatecontact" method="POST">
        
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
                  <div class="col-md-2"></div>
                  {{-- ละติจูดและลองติจูด --}}
                  <div class="col-md-8 col-sm-12 col-lg-8">
                        <h4>@lang('global.website-management.fields.contact_map_lat')</h4>
                        <input id="lat_value" name="lat_map" type="text" class="form-control" placeholder="ละติจูด" 
                            value=" {{$row->lat_map}}">
                        <h4>@lang('global.website-management.fields.contact_map_lng')</h4>
                        <input id="lng_value" name="lng_map" type="text" class="form-control" placeholder="ลองติจูด" 
                            value=" {{$row->lng_map}}"><br>  
                  </div>        
                  <div class="col-md-2"></div>
            </div>
    {{-- ข้อมูลที่อยู่ --}}
            <div class="col-md-6 col-sm-12  col-lg-6" style="border:1px solid #80808014;">
                <h4>@lang('global.website-management.fields.contact_header_address')</h4>
                <input type="text" name="address1" class="form-control" placeholder="@lang('global.website-management.fields.contact_address1')"
                    value="{{$row->address1}}"><br>
                <input type="text" name="address2" class="form-control" placeholder="@lang('global.website-management.fields.contact_address2')"
                    value="{{$row->address2}}"><br>
                <input type="text" name="address3" class="form-control" placeholder="@lang('global.website-management.fields.contact_address3')"
                    value="{{$row->address3}}"><br>
                <input type="text" name="address4" class="form-control" placeholder="@lang('global.website-management.fields.contact_address4')"
                    value="{{$row->address4}}"><br>
                <input type="text" name="address5" class="form-control" placeholder="@lang('global.website-management.fields.contact_address5')"
                    value="{{$row->address5}}"><br>
                <input type="text" class="form-control" style="visibility: hidden;"
                    value="{{$row->id}}"><br>
            </div>
    {{-- ข้อมูล สื่อออนไลน์ --}}
            <div class="col-md-6 col-sm-12 col-lg-6" style="border:1px solid #80808014;">
                <h4>@lang('global.website-management.fields.contact_header_social')</h4>
                <input type="text" name="phone1" class="form-control" placeholder="@lang('global.website-management.fields.contact_social_phone') (1)"
                    value="{{$row->phone1}}"><br>
                <input type="text" name="phone2" class="form-control" placeholder="@lang('global.website-management.fields.contact_social_phone') (2)"
                    value="{{$row->phone2}}"><br>
                <input type="text" name="facebook" class="form-control" placeholder="@lang('global.website-management.fields.contact_social_facebook')"
                    value="{{$row->facebook}}"><br>
                <input type="text" name="instragram" class="form-control" placeholder="@lang('global.website-management.fields.contact_social_instragram')"
                    value="{{$row->instragram}}"><br>
                <input type="text" name="youtube" class="form-control" placeholder="@lang('global.website-management.fields.contact_social_youtube')"
                    value="{{$row->youtube}}"><br>
                <input type="text" name="line" class="form-control" placeholder="@lang('global.website-management.fields.contact_social_line')"
                    value="{{$row->line}}"><br>
            </div>
            <div class="col-md-12"><br>
                <button type="submit" id="btnsave" class="btn btn-danger">อัพเดท</button>
            </div>
        </div>
    </div>
</form>
@endforeach
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
//             //แสดงค่า ละติจูด และ ลองติจูด ตอนเริ่มโหลดครั้งแรก
//             var my_Point = marker.getPosition();  
//             map.panTo(my_Point);       
//             $("#lat_value").val(my_Point.lat());  
//             $("#lng_value").val(my_Point.lng());  


            var info = new google.maps.InfoWindow({
                content : '<p align="center" style="width:200px;"><i>ลากเพื่อกำหนดตำแหน่งใหม่</i></p>'
            });
            info.open(map,marker);
            var infoedit = new google.maps.InfoWindow({
                content : '<p align="center" style="width:200px; color:red; font-family:"Segoe UI Web";><b>>>ตำแหน่งใหม่<<</b></p>'
            });

            
            //Event ตอนเลื่อน marker
            google.maps.event.addListener(marker, 'dragend', function() {
                //alert(55);
                var my_Point = marker.getPosition();  // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
                map.panTo(my_Point); // ให้แผนที่แสดงไปที่ตัว marker        
                $("#lat_value").val(my_Point.lat());  // เอาค่า latitude ตัว marker แสดงใน textbox id=lat_value
                $("#lng_value").val(my_Point.lng());  // เอาค่า longtitude ตัว marker แสดงใน textbox id=lat_value
                info.close(map,marker);
                infoedit.open(map,marker);

                $("#lat_value").css('background','#ffff0014');
                $("#lng_value").css('background','#ffff0014');
            });
            
            // google.maps.event.addListener(marker,'click',function(){
            //     // info.close(map,marker);
            //     // infoedit.open(map,marker);
            // });
        }
        
      
            
        
    </script>


@endsection


