@inject('request', 'Illuminate\Http\Request')
@extends('frontend.layouts.app')

@section('frontendcontent')

<div style="padding: 55px; ">
        <div class="cnt-frm-dta" style="margin-top: 45px;">
                <h2 itemprop="headline">นัดหมายเข้าชมรถ</h2>
                <div class="cnt-frm">
                    <form>
                        <div class="row mrg20">
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <input type="text" id="name" placeholder="ชื่อ">
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <input type="text" id="tel" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="เบอร์โทรติดต่อ">
                            </div>
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <input type="text" id="line" placeholder="ไลน์ไอดี">
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <input type="text" id="appoint" placeholder="วันที่สะดวกเข้ามาชมรถ">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <textarea placeholder="รายละเอียด" id="detail"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="thm-btn" id="confirm" type="button">ยืนยันนัดหมาย</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div><!-- Contact From Data -->
    </div>    
    <section>                
        <div class="gap">
            <div class="container">
                <div class="cnt-mp-inf-wrp">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="loc-mp" id="loc-mp" style="border:1px solid gray;"><h2 align="center">Map</h2></div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <div class="cnt-inf-wrp style2 remove-ext">
                                <div class="cnt-inf-bx brd-rd10">
                                    <i class="fa fa-map-marker"></i>
                                    <strong>Address</strong>
                                    <span>{{$contact->address1." ".$contact->address2." ".$contact->address3." ".$contact->address4." ".$contact->address5}}</span>
                                </div>
                                <div class="cnt-inf-bx brd-rd10">
                                    <i class="fa fa-phone"></i>
                                    <strong>Phone</strong>
                                    <span>Phone 01: {{$contact->phone1}}</span>
                                    <span>Phone 02: {{$contact->phone2}}</span>
                                </div>
                                <div class="cnt-inf-bx brd-rd10">
                                    <i class="fa fa-globe"></i>
                                    <strong>Social</strong>
                                    <a href="#" title="" itemprop="url"><i class="fa fa-facebook"></i> &nbsp; facebook.{{$contact->facebook}}</a>
                                    <a href="#" title="" itemprop="url"><i class="fa fa-instagram"></i> &nbsp;{{$contact->instragram}}</a>
                                    <a href="#" title="" itemprop="url"><i class="fa fa-youtube"></i> &nbsp;{{$contact->youtube}}</a>
                                    <a href="#" title="" itemprop="url">Line ID </i> :&nbsp;{{$contact->line}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Contact Map & Info Wrap -->
            </div>
        </div>
    </section>

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