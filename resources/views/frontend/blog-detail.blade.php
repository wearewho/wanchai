@inject('request', 'Illuminate\Http\Request')
@extends('frontend.layouts.app')

@section('frontendcontent')

    <section>
        <div class="gap">
            <div class="container">
                <div class="blg-dtl-inf-wrp">
                    <div class="blg-dtl-inf">
                        <h1 itemprop="headline">{{$blog->header}}</h1>
                        <ul class="pst-mta">
                            <li><img src="{{ url('backend/images/admin.png') }}" width="40" itemprop="image">By : <a href="#" title="" itemprop="url">พอใจออโต้ รถยนต์มือสอง</a></li>
                            <li><i class="fa fa-calendar-o"></i><a href="#" title="" itemprop="url">{{ date("d/m/Y H:i", strtotime($blog->created_at)) }}</a></li>
                            {{-- <li><i class="fa fa-comments-o"></i><a href="#" title="" itemprop="url">23 Comment</a></li> --}}
                        </ul>
                    </div>
                    <div class="blg-dtl-thmb">
                        {{-- <span class="pst-cat"><a href="#" title="" itemprop="url">Marketing</a></span> --}}
                        <img src="../{{$blog->imageblog[0]->image_url}}" alt="{{$blog->imageblog[0]->image_name}}" itemprop="image">
                    </div>
                </div>
            </div>
        </div>
    <section>
        <div class="gap remove-gap">
            <div class="container">
                <div class="blg-dtl-wrp">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="blg-dtl-inr">
                                <h2 itemprop="headline">{{$blog->header}}</h2>
                                <p itemprop="description">{{$blog->detail}}</p>
                                <div class="blg-dtl-glry">
                                    <div class="row">
                                        
                                    </div>
                                </div>
                            </div> 
                            <div class="gap no-gap">
                                    <div class="container">                    
                                        <div class="sec-title text-center">
                                            {{-- <span>Quickly unleash cross</span> --}}
                                            <h3 itemprop="headline">รูปเพิ่มเติม</h3>
                                        </div>
                                        <div class="tem-car5 owl-carousel text-center">
                                            @foreach ($blog->imageblog as $item)
                                            <div class="tem-box3 style2">
                                                <img src="../{{$item->image_url}}" alt="{{$item->image_name}}" itemprop="image">
                                                {{-- <div class="tem-scl">
                                                    <a class="facebook-hvr-clr" href="#" title="Facebook" itemprop="url" target="_self"><i class="fa fa-facebook"></i></a>
                                                    <a class="twitter-hvr-clr" href="#" title="Twitter" itemprop="url" target="_self"><i class="fa fa-twitter"></i></a>
                                                    <a class="google-hvr-clr" href="#" title="Google Plus" itemprop="url" target="_self"><i class="fa fa-google-plus"></i></a>
                                                    <a class="instagram-hvr-clr" href="#" title="Instagram" itemprop="url" target="_self"><i class="flaticon-instagram-social-network-logo-of-photo-camera"></i></a>
                                                </div>
                                                <div class="tem-inf3">
                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">Pham Zima</a></h4>
                                                    <span>Creative Director</span>
                                                </div> --}}
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            <div class="cnt-frm-dta"><br><br> 
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
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('frontendjavascript') 
    <script>
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
@endsection