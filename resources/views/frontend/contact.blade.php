@inject('request', 'Illuminate\Http\Request')
@extends('frontend.layouts.app')

@section('frontendcontent')

<!-- Breadcrumbs Block -->
<div class="block breadcrumbs">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
</div>
<!-- //Breadcrumbs Block -->
<h1 class="text-center h-decor">ติดต่อเรา</h1>
<div class="block fullwidth no-pad">
    <div class="container">
        <div id="googleMap" class="google-map"></div>
    </div>
</div>
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>ข้อมูลสำนักงาน</h2>
                <div class="contact-info-sm">
                    <h5>ที่ตั้งสำนักงาน</h5>
                    <i class="icon icon-map-marker"></i>55/391 หมู่12 ซอย19 ถนนสุวินทวงศ์
                    <br>แขวงแสนแสบ เขตมีนบุรี 
                    <br>กรุงเทพมหานคร รหัสไปรษณีย์ 10510
                </div>
                <div class="contact-info-sm">
                    <h5>โทรศัพท์</h5>
                    <i class="icon icon-technology"></i>สายตรง: 02-989-4922<br>แฟกซ์: 02-989-4343
                </div>
                <div class="contact-info-sm">
                    <h5>เวลาเปิดทำการ</h5>
                    <i class="icon icon-clock"></i>เปิดทำการทุกวัน
                    <br>เวลา: 08:00 น. – 17:00 น.
                </div>
                <div class="divider"></div>
                <h5>Look for us on</h5>
                <ul class="social-list">
                    <li><a href="#"><i class="icon-google-plus-logo"></i></a></li>
                    <li><a href="#"><i class="icon-facebook-logo"></i></a></li>
                    <li><a href="#"><i class="icon-twitter-logo"></i></a></li>
                    <li><a href="#"><i class="icon-instagram-logo"></i></a></li>
                </ul>
            </div>
            <div class="divider visible-sm visible-xs"></div>
            <div class="col-md-8">
                <h2 class="text-center h-lg h-decor">สอบถามข้อมูลและติชมบริการ</h2>
                {!! Form::open(['method' => 'POST', 'route' => ['store_contactmessage']]) !!}
                {{-- <form class="contact-form" id="contactForm" method="post" novalidate="novalidate"> --}}
                    <div class="successform text-center">
                        <p>Your message was sent successfully!</p>
                    </div>
                    <div class="errorform text-center">
                        <p>Something went wrong, try refreshing and submitting the form again.</p>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" class="input-custom input-full" name="name" placeholder="กรุณากรอกชื่อของคุณ">
                    </div>
                    <div class="input-wrapper">
                        <input type="text" class="input-custom input-full" name="tel" placeholder="กรุณากรอกเบอร์โทรศัพท์ / อีเมล์ / ไอดีไลน์ ที่ต้องการให้ติดต่อกลับ">
                    </div>
                    <div class="input-wrapper">
                        <textarea class="textarea-custom input-full" name="message" placeholder="กรุณากรอกข้อความของคุณ"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn">ส่งข้อความ</button>
                    </div>
                {{-- </form> --}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop

@section('frontendjavascript') 

        
    <script>
       //--Map--// 
        var position={lat:{{$contact->lat_map}},lng:{{$contact->lng_map}} };
        function initMap(){
            var map = new google.maps.Map(document.getElementById('loc-mp'),{
                zoom: 13,
                center:position
            });
            var marker = new google.maps.Marker({
                position: position,
                map: map,
                title:"พอใจ ออโต้คาร์",
                draggable:true
            });

            var info = new google.maps.InfoWindow({
                content : '<p align="center" style="width:200px;color:#E949A1;"><b>พอใจ ออโต้คาร์</b></p>'
            });
            info.open(map,marker);
            var infoedit = new google.maps.InfoWindow({
                content : '<p align="center" style="width:200px; color:red; font-family:"Segoe UI Web";><b>>>ตำแหน่งใหม่<<</b></p>'
            });
        }//--End Map--//   

        $(document).ready(function () {
            $('#confirm').click(function(e){   

                let name = $('#name').val();
                let tel = $('#tel').val();
                let line = $('#line').val();
                let appoint = $('#appoint').val();
                let detail = $('#detail').val();

                if (name == "") {
                    swal("กรุณากรอกชื่อ","","warning");
                } else if (tel == "") {
                    swal("กรุณากรอกเบอร์ติดต่อ","","warning");
                } else if (line == "") {
                    swal("กรุณากรอกไอดีไลน์","","warning");
                } else if (appoint == "") {
                    swal("กรุณากรอกวันที่สะดวกเข้ามาชมรถ","","warning");
                } else if (detail == "") {
                    swal("กรุณากรอกรายละเอียด","","warning");
                } else {
                    $.ajax({ 
                        url: '{{url("inquiry")}}', 
                        type: "POST",
                        data: { "name" : name, "tel" : tel, "appoint" : appoint, "detail" : detail, "line" : line},
                        success: function(data, statusText, resObject) {
                            
                            if (data) {    

                                if(data === true){
                                    swal("นัดหมายสำเร็จ โปรดรอการติดต่อกลับ","","success");
                                    $('#name').val("");
                                    $('#tel').val("");
                                    $('#line').val("");
                                    $('#appoint').val("");
                                    $('#detail').val("");
                                }else{
                                    swal("เกิดข้อผิดพลาด กรุณาลองใหม่","","error");
                                }
                                                                
                            }
                            return false;
                        },
                        error: function (jqXHR, exception) {
                            getErrorMessage(jqXHR, exception);
                        },
                        complete: function() {      
                            // Do something when success or error.                                           
                        }
                    });
                }

            })
            
            
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBINVRX-GNF4z1l8CPFrJL5dhIGY96a9-k&callback=initMap"></script>
@endsection