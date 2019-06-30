

@inject('request', 'Illuminate\Http\Request')
@extends('frontend.layouts.app')

@section('frontendcontent')

    <!-- CONTENT -->	
    <section>
        <div class="gap remove-gap bottom-spac220" style="padding-bottom: 125px; margin-top:50px;">
            <div class="container">
                <div class="busns-slut-wrp2 rv">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-lg-6 slideInRight wow" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="busns-slut-mckp top-spac90">
                                <img src="{{ url('frontend/assets/images/22.png') }}" alt="solt-mckp2.png" itemprop="image">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="busns-slut-inf2">
                                <p><span>ประสบการณ์กว่า</span></p>
                            <span> 
                                <i>20</i> ปี
                                <p></p>
                                <p style="font-size: 18px;font-family: poppins;">ในการคัดสรรรถยนต์เพื่อคุณ</p> 
                                </span>
                                <h2 itemprop="headline">ดีเอสยนต์ โชว์รูมรถมือสองคุณภาพสูง</h2>
                                <p itemprop="description">ดีเอสยนต์ เปิดทำการเป็นนิติบุคคลตั้งแต่วันที่ 29 เมษายน 2552 ปัจจุบันเปิดดำเนินการมามากกว่าสิบปีด้วยความเชื่อมั่นจากลูกค้าในจังหวัดสกลนคร และทั่วประเทศ โดยก่อนหน้านี้ทางดีเอสยนต์ได้เปิดขายรถยนต์ในนามบุคคลชื่อ “ดีเอส รถบ้านสวย” มาก่อนแล้ว ตั้งแต่ปี2539 รวมระยะเวลาเกิน2ทศวรรษ จึงขอให้ท่านมั่นใจในสินค้าและการบริการของเราได้.</p>
                                <a class="thm-btn" href="#" title="" itemprop="url" style="background-color: rgb(254 , 243, 39);">เลือกซื้อรถมือสอง</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section>
        <div class="gap remove-bottom" style="padding-top:0px; ">
            <div class="container">
                <div class="remove-ext15 srv-wrp">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="srv-box2">
                                <i class="flaticon-alarm-clock"></i>
                                <div class="srv-inf2">
                                    <h5 itemprop="headline"><a href="service-detail.html" title="" itemprop="url">{{$service->document_header}}</a></h5>
                                    <p itemprop="description">{!!$service->document_detail!!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="srv-box2">
                                <i class="fas fa-tags "></i>
                                 <!-- <i class="fas fa-screwdriver"></i> 
                                 <i class="fas fa-wrench"></i>      -->
                                <div class="srv-inf2">
                                    <h5 itemprop="headline"><a href="service-detail.html" title="" itemprop="url">{{$service->promotion_header}}</a></h5>
                                    <p itemprop="description">{!!$service->promotion_detail!!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="srv-box2">
                                <i class="flaticon-settings"></i>
                                <div class="srv-inf2">
                                    <h5 itemprop="headline"><a href="service-detail.html" title="" itemprop="url">{{$service->service_header}}</a></h5>
                                    <p itemprop="description">{!!$service->service_detail!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="gap">
            <div class="container">
                <div class="tem-wrp3">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-lg-3">
                            <div class="tem-inf-wrp3">
                                <span>ค้นหาประเภทรถที่คุณต้องการ</span>
                                <h2 itemprop="headline">เลือกชมรถ</h2>
                                <!-- <p itemprop="description">Our Team Of strategists designers <a href="#" title="" itemprop="url">managers,</a> <a href="#" title="" itemprop="url">developer,</a> make custom products for statups.</p> -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tem-tb1">รถเก๋ง</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tem-tb2">รถกระบะ</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tem-tb3">รถเอกประสงค์</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-12 col-lg-9">
                                <div class="tem-car-wrp3">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tem-tb1">
                                            <div class="tem-car3 owl-carousel">
                                                <div class="tem-box3">
                                                    <img src="{{ url('frontend/assets/images/CAR1.png') }}" alt="team-img3-1.jpg" itemprop="image">
                                                    <div class="tem-scl">
                                                        <a class="facebook-hvr-clr" href="#" title="Facebook" itemprop="url" target="_self"><i class="fab fa-facebook"></i></a>
                                                        <a class="twitter-hvr-clr" href="#" title="Twitter" itemprop="url" target="_self"><i class="fab fa-twitter"></i></a>
                                                        <a class="google-hvr-clr" href="#" title="Google Plus" itemprop="url" target="_self"><i class="fab fa-google-plus"></i></a>
                                                        <a class="instagram-hvr-clr" href="#" title="Instagram" itemprop="url" target="_self"><i class="flaticon-instagram-social-network-logo-of-photo-camera"></i></a>
                                                    </div>
                                                    <div class="tem-inf3">
                                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">Pham Zima</a></h4>
                                                        <span>Creative Director</span>
                                                    </div>
                                                </div>
                                                <div class="tem-box3">
                                                    <img src="{{ url('frontend/assets/images/CAR2.png') }}" alt="team-img3-2.jpg" itemprop="image">
                                                    <div class="tem-scl">
                                                        <a class="facebook-hvr-clr" href="#" title="Facebook" itemprop="url" target="_self"><i class="fab fa-facebook"></i></a>
                                                        <a class="twitter-hvr-clr" href="#" title="Twitter" itemprop="url" target="_self"><i class="fab fa-twitter"></i></a>
                                                        <a class="google-hvr-clr" href="#" title="Google Plus" itemprop="url" target="_self"><i class="fab fa-google-plus"></i></a>
                                                        <a class="instagram-hvr-clr" href="#" title="Instagram" itemprop="url" target="_self"><i class="flaticon-instagram-social-network-logo-of-photo-camera"></i></a>
                                                    </div>
                                                    <div class="tem-inf3">
                                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">Zima Pham</a></h4>
                                                        <span>Creative Director</span>
                                                    </div>
                                                </div>
                                                <div class="tem-box3">
                                                    <img src="{{ url('frontend/assets/images/CAR3.png') }}" alt="team-img3-3.jpg" itemprop="image">
                                                    <div class="tem-scl">
                                                        <a class="facebook-hvr-clr" href="#" title="Facebook" itemprop="url" target="_self"><i class="fab fa-facebook"></i></a>
                                                        <a class="twitter-hvr-clr" href="#" title="Twitter" itemprop="url" target="_self"><i class="fab fa-twitter"></i></a>
                                                        <a class="google-hvr-clr" href="#" title="Google Plus" itemprop="url" target="_self"><i class="fab fa-google-plus"></i></a>
                                                        <a class="instagram-hvr-clr" href="#" title="Instagram" itemprop="url" target="_self"><i class="flaticon-instagram-social-network-logo-of-photo-camera"></i></a>
                                                    </div>
                                                    <div class="tem-inf3">
                                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">John Doe</a></h4>
                                                        <span>Creative Director</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tem-tb2">
                                            <div class="tem-car3 owl-carousel">
                                                <div class="tem-box3">
                                                    <img src="{{ url('frontend/assets/images/resources/team-img3-4.jpg') }}" alt="team-img3-4.jpg" itemprop="image">
                                                    <div class="tem-scl">
                                                        <a class="facebook-hvr-clr" href="#" title="Facebook" itemprop="url" target="_self"><i class="fab fa-facebook"></i></a>
                                                        <a class="twitter-hvr-clr" href="#" title="Twitter" itemprop="url" target="_self"><i class="fab fa-twitter"></i></a>
                                                        <a class="google-hvr-clr" href="#" title="Google Plus" itemprop="url" target="_self"><i class="fab fa-google-plus"></i></a>
                                                        <a class="instagram-hvr-clr" href="#" title="Instagram" itemprop="url" target="_self"><i class="flaticon-instagram-social-network-logo-of-photo-camera"></i></a>
                                                    </div>
                                                    <div class="tem-inf3">
                                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">Pham Zima</a></h4>
                                                        <span>Creative Director</span>
                                                    </div>
                                                </div>
                                                <div class="tem-box3">
                                                    <img src="{{ url('frontend/assets/images/resources/team-img3-5.jpg') }}" alt="team-img3-5.jpg" itemprop="image">
                                                    <div class="tem-scl">
                                                        <a class="facebook-hvr-clr" href="#" title="Facebook" itemprop="url" target="_self"><i class="fab fa-facebook"></i></a>
                                                        <a class="twitter-hvr-clr" href="#" title="Twitter" itemprop="url" target="_self"><i class="fab fa-twitter"></i></a>
                                                        <a class="google-hvr-clr" href="#" title="Google Plus" itemprop="url" target="_self"><i class="fab fa-google-plus"></i></a>
                                                        <a class="instagram-hvr-clr" href="#" title="Instagram" itemprop="url" target="_self"><i class="flaticon-instagram-social-network-logo-of-photo-camera"></i></a>
                                                    </div>
                                                    <div class="tem-inf3">
                                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">Zima Pham</a></h4>
                                                        <span>Creative Director</span>
                                                    </div>
                                                </div>
                                                <div class="tem-box3">
                                                    <img src="{{ url('frontend/assets/images/resources/team-img3-6.jpg') }}" alt="team-img3-6.jpg" itemprop="image">
                                                    <div class="tem-scl">
                                                        <a class="facebook-hvr-clr" href="#" title="Facebook" itemprop="url" target="_self"><i class="fab fa-facebook"></i></a>
                                                        <a class="twitter-hvr-clr" href="#" title="Twitter" itemprop="url" target="_self"><i class="fab fa-twitter"></i></a>
                                                        <a class="google-hvr-clr" href="#" title="Google Plus" itemprop="url" target="_self"><i class="fab fa-google-plus"></i></a>
                                                        <a class="instagram-hvr-clr" href="#" title="Instagram" itemprop="url" target="_self"><i class="flaticon-instagram-social-network-logo-of-photo-camera"></i></a>
                                                    </div>
                                                    <div class="tem-inf3">
                                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">John Doe</a></h4>
                                                        <span>Creative Director</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tem-tb3">
                                            <div class="tem-car3 owl-carousel">
                                                <div class="tem-box3">
                                                    <img src="{{ url('frontend/assets/images/resources/team-img3-7.jpg') }}" alt="team-img3-7.jpg" itemprop="image">
                                                    <div class="tem-scl">
                                                        <a class="facebook-hvr-clr" href="#" title="Facebook" itemprop="url" target="_self"><i class="fab fa-facebook"></i></a>
                                                        <a class="twitter-hvr-clr" href="#" title="Twitter" itemprop="url" target="_self"><i class="fab fa-twitter"></i></a>
                                                        <a class="google-hvr-clr" href="#" title="Google Plus" itemprop="url" target="_self"><i class="fab fa-google-plus"></i></a>
                                                        <a class="instagram-hvr-clr" href="#" title="Instagram" itemprop="url" target="_self"><i class="flaticon-instagram-social-network-logo-of-photo-camera"></i></a>
                                                    </div>
                                                    <div class="tem-inf3">
                                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">Pham Zima</a></h4>
                                                        <span>Creative Director</span>
                                                    </div>
                                                </div>
                                                <div class="tem-box3">
                                                    <img src="{{ url('frontend/assets/images/resources/team-img3-8.jpg') }}" alt="team-img3-8.jpg" itemprop="image">
                                                    <div class="tem-scl">
                                                        <a class="facebook-hvr-clr" href="#" title="Facebook" itemprop="url" target="_self"><i class="fab fa-facebook"></i></a>
                                                        <a class="twitter-hvr-clr" href="#" title="Twitter" itemprop="url" target="_self"><i class="fab fa-twitter"></i></a>
                                                        <a class="google-hvr-clr" href="#" title="Google Plus" itemprop="url" target="_self"><i class="fab fa-google-plus"></i></a>
                                                        <a class="instagram-hvr-clr" href="#" title="Instagram" itemprop="url" target="_self"><i class="flaticon-instagram-social-network-logo-of-photo-camera"></i></a>
                                                    </div>
                                                    <div class="tem-inf3">
                                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">Zima Pham</a></h4>
                                                        <span>Creative Director</span>
                                                    </div>
                                                </div>
                                                <div class="tem-box3">
                                                    <img src="{{ url('frontend/assets/images/resources/team-img3-9.jpg') }}" alt="team-img3-9.jpg" itemprop="image">
                                                    <div class="tem-scl">
                                                        <a class="facebook-hvr-clr" href="#" title="Facebook" itemprop="url" target="_self"><i class="fab fa-facebook"></i></a>
                                                        <a class="twitter-hvr-clr" href="#" title="Twitter" itemprop="url" target="_self"><i class="fab fa-twitter"></i></a>
                                                        <a class="google-hvr-clr" href="#" title="Google Plus" itemprop="url" target="_self"><i class="fab fa-google-plus"></i></a>
                                                        <a class="instagram-hvr-clr" href="#" title="Instagram" itemprop="url" target="_self"><i class="flaticon-instagram-social-network-logo-of-photo-camera"></i></a>
                                                    </div>
                                                    <div class="tem-inf3">
                                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">John Doe</a></h4>
                                                        <span>Creative Director</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Team Carousel Wrap -->
                            </div>
                    </div>
                </div><!-- Team Wrap -->
            </div>
        </div>
    </section>

    <section>
        <div class="gap top-spac70">
            <div class="container">
                <div class="spnsr-wrp spnsr-car text-center owl-carousel">
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/BMW.png') }}" alt="spnsr-img1-1.png" itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/CHEVROLET.png') }}" alt="spnsr-img1-2.png" itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/BENZ.png') }}" alt="spnsr-img1-3.png" itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/FORD.png') }}" alt="spnsr-img1-4.png" itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/HONDA.png') }}" alt="spnsr-img1-5.png" itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/HYUNDAI.png') }}" alt="spnsr-img1-5.png" itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/LEXUS.png') }}" alt="spnsr-img1-5.png" itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/MAZDA.png') }}" alt="spnsr-img1-5.png" itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/MG.png') }}" alt="spnsr-img1-5.png" itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/HYUNDAI.png') }}" alt="spnsr-img1-5.png" itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/MINI.png') }}" alt="spnsr-img1-5.png" itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/NISSAN.png') }}" alt="spnsr-img1-5.png" itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/SUBARU.png') }}" alt="spnsr-img1-5.png" itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/TOYOTA.png') }}" alt="spnsr-img1-5.png itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                    <div class="spnsr-itm">
                        <a href="#" title="" itemprop="url"><img src="{{ url('frontend/assets/images/W.png') }}" alt="spnsr-img1-5.png" itemprop="image" style="object-fit:cover; width:250px;"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop

@section('frontendjavascript') 
    
@endsection