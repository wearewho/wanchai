@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    
     
    {!! Form::model($contact, ['id' => 'f1','method' => 'PUT', 'route' => ['admin.managecontact.update', $contact->id]]) !!}
        
    <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">@lang('global.website-management.fields.contact_header')</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @if($message = Session::get('success'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h5><i class="icon fa fa-check"></i>{{$message}}</h5>
                            </div>
                        </div>
                    </div>
                @endif
    <!--- Map--->
            <div class="col-md-12" style="margin-bottom:25px;">
              <div id="mapX" style="height:400px;"></div> 
            </div>         
    <!-- End map -->
                <!-- text input -->
                <div class="form-group">
                  <div class="col-md-6">
                        <label>@lang('global.website-management.fields.contact_map_lat')</label>
                        <input id="lat_value" name="lat_map" type="text" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"; class="form-control" placeholder="ละติจูด" 
                            value=" {{$contact->lat_map}}">
                  </div>
                  <div class="col-md-6">
                        <label>@lang('global.website-management.fields.contact_map_lng')</label>
                        <input id="lng_value" name="lng_map" type="text" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"; class="form-control" placeholder="ลองติจูด" 
                            value=" {{$contact->lng_map}}">
                  </div>
                </div>
            <div class="col-md-12"><hr>
                <div class="form-group">
                    <label>@lang('global.website-management.fields.contact_header_phone')</label>
                    <input id="phone1" type="text" name="phone1" class="form-control" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"; placeholder="@lang('global.website-management.fields.contact_social_phone') (1)"
                            value="{{$contact->phone1}}">
                </div>
                    <div class="form-group">
                        <input id="phone2" type="text" name="phone2" class="form-control" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"; placeholder="@lang('global.website-management.fields.contact_social_phone') (2)"
                            value="{{$contact->phone2}}">
                    </div>
                <div class="form-group">
                  <label>@lang('global.website-management.fields.contact_header_address')</label>
                  <textarea id="address1" name="address1" class="form-control" rows="3" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"; placeholder="@lang('global.website-management.fields.contact_address1')" >{{$contact->address1}}</textarea>
                </div>
                <div class="form-group">
                    <input id="address2" type="text" name="address2" class="form-control" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"; placeholder="@lang('global.website-management.fields.contact_address2')"
                            value="{{$contact->address2}}">
                </div>
                <div class="form-group">
                    <input id="address3" type="text" name="address3" class="form-control" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"; placeholder="@lang('global.website-management.fields.contact_address3')"
                            value="{{$contact->address3}}">
                </div>
                <div class="form-group">
                    <input id="address4" type="text" name="address4" class="form-control" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"; placeholder="@lang('global.website-management.fields.contact_address4')"
                        value="{{$contact->address4}}">
                </div>
                <div class="form-group">                   
                    <input id="address5" type="text" name="address5" class="form-control" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"; placeholder="@lang('global.website-management.fields.contact_address5')"
                        value="{{$contact->address5}}">
                </div>
                <div class="form-group">
                        <label>@lang('global.website-management.fields.contact_header_social')</label>
                        <input id="facebook" type="text" name="facebook" class="form-control" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"; placeholder="@lang('global.website-management.fields.contact_social_facebook')"
                            value="{{$contact->facebook}}">
                </div>
                <div class="form-group">
                    <input id="instragram" type="text" name="instragram" class="form-control" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"; placeholder="@lang('global.website-management.fields.contact_social_instragram')"
                        value="{{$contact->instragram}}">
                </div>
                <div class="form-group">
                    <input id="youtube" type="text" name="youtube" class="form-control" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"; placeholder="@lang('global.website-management.fields.contact_social_youtube')"
                        value="{{$contact->youtube}}">
                </div>
                <div class="form-group">
                    <input id="line" type="text" name="line" class="form-control" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"; placeholder="@lang('global.website-management.fields.contact_social_line')"
                        value="{{$contact->line}}">
                </div>
                <!-- /button submit -->
                <button type="submit" id="btnsave" class="btn btn-danger">@lang('global.app_update')</button>    
            </div>
            </div>
            <!-- /.box-body -->
          </div>

    {!! Form::close() !!}
@stop

@section('javascript') 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBINVRX-GNF4z1l8CPFrJL5dhIGY96a9-k&callback=initMap" async defer></script>

    <script>
        function Get_LatitudeAndLongtitude(){
            var lati = $('#lat_value').val();
            var longti = $('#lng_value').val();
            alert(lati+'\n'+longti);
        }

         var position={lat:{{$contact->lat_map}},lng:{{$contact->lng_map}} };
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

            var info = new google.maps.InfoWindow({
                content : '<p align="center"><i>ลากเพื่อกำหนด<br>ตำแหน่งใหม่</i></p>'
            });
            info.open(map,marker);
            var infoedit = new google.maps.InfoWindow({
                content : '<p align="center" style="color:red; font-family:"Segoe UI Web";><b>ตำแหน่งใหม่</b></p>'
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
                $("#lat_value").css("border-color","#f39c12");
                $("#lng_value").css("border-color","#f39c12");
            });
            
            // google.maps.event.addListener(marker,'click',function(){
            //     // info.close(map,marker);
            //     // infoedit.open(map,marker);
            // });
        }
        
        function ClickTextboxWarning(x)
        {
            $(x).css("border-color","#f39c12");
        }
        function BlurTextbox(x)
        {
            $(x).removeAttr("style");
        }
        $(document).ready(function(){
            $("#f1").submit(function(event){
                var lat_value = $("#lat_value").val();
                var lng_value = $("#lng_value").val();
                var phone1 = $("#phone1").val();
                var phone2 = $("#phone3").val();
                var address1 = $("#address1").val();
                var address2 = $("#address2").val();
                var address3 = $("#address3").val();
                var address4 = $("#address4").val();
                var address5 = $("#address5").val();
                var facebook = $("#facebook").val();
                var instragram = $("#instragram").val();
                var youtube = $("#youtube").val();
                var line = $("#line").val();
                if(lat_value==""){
                    alert("โปรดกรอกข้อมูลให้ครบ");
                    $("#lat_value").focus();
                    event.preventDefault();
                }else if(lng_value==""){
                    alert("โปรดกรอกข้อมูลให้ครบ");
                    $("#lng_value").focus();
                    event.preventDefault();
                }else if(phone1==""){
                    alert("โปรดกรอกข้อมูลให้ครบ"); 
                    $("#phone1").focus();
                    event.preventDefault();
                }else if(phone2==""){
                    alert("โปรดกรอกข้อมูลให้ครบ");
                    $("#phone2").focus();
                    event.preventDefault();
                }else if(address2==""){
                    alert("โปรดกรอกข้อมูลให้ครบ");
                    $("#address2").focus(); 
                    event.preventDefault();
                }else if(address3==""){
                    alert("โปรดกรอกข้อมูลให้ครบ");
                    $("#address3").focus();
                    event.preventDefault();
                }else if(address4==""){
                    alert("โปรดกรอกข้อมูลให้ครบ");
                    $("#address4").focus();
                    event.preventDefault();
                }else if(address5==""){
                    alert("โปรดกรอกข้อมูลให้ครบ");
                    $("#address5").focus();
                    event.preventDefault();
                }else if(facebook==""){
                    alert("โปรดกรอกข้อมูลให้ครบ");
                    $("#facebook").focus();
                    event.preventDefault();
                }else if(instragram==""){
                    alert("โปรดกรอกข้อมูลให้ครบ");
                    $("#instragram").focus();
                    event.preventDefault();
                }else if(youtube==""){
                    alert("โปรดกรอกข้อมูลให้ครบ");
                    $("#youtube").focus();
                    event.preventDefault();
                }else if(line==""){
                    alert("โปรดกรอกข้อมูลให้ครบ");
                    $("#line").focus();
                    event.preventDefault();
                }
            });
        });   
        $(document).ready(function(){
            $('.alert-dismissible').fadeOut(2500);
        });
    </script>


@endsection


