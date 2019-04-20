

@inject('request', 'Illuminate\Http\Request')
@extends('frontend.layouts.index')

@section('frontendcontent')

    <section>
        <div class="gap">
            <div class="container">
                <div class="busns-slut-wrp">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-lg-6 slideInLeft wow" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="hir-box text-center">
                                <img src="{{ url('frontend/assets/images/newcar.png') }}" alt="aply-mckp.png" style="margin-left: 0px;margin-right:-90px;" itemprop="image">
                                <a class="thm-btn" href="contact.html" title="" itemprop="url">กดชมรถ</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="busns-slut-tbs">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#busns-slut-tb1">รถเข้าใหม่</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#busns-slut-tb2">คุณสมบัติ</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#busns-slut-tb3">รีวิว</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="busns-slut-tb1">
                                        <h2 itemprop="headline">We provide the solutions to grow your business</h2>
                                        <p itemprop="description">Suspendisse facilisis commodo lobortis. Nullam mollis lobortis ex vel faucibus. Proin nec viverra turpis. Nulla eget justo scelerisque, pretium purus vel, congue libero. Suspendisse potenti. Sed risus nisi, auctor nec auctor id, luctus sed dui. In ex tellus, malesuada cursus erat sed, fermentum hendrerit turpis.</p>
                                        <div class="skl-prg-wrp">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="skl-prg">
                                                        <span class="pull-left">ความนิยม</span>
                                                        <span class="pull-right">70%</span>
                                                        <div class="progress">
                                                            <div class="progress-bar thm-bg wdth70 slideInLeft wow" data-wow-duration=".2s" data-wow-delay=".1s"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="skl-prg">
                                                        <span class="pull-left">ยอดขาย</span>
                                                        <span class="pull-right">90%</span>
                                                        <div class="progress">
                                                            <div class="progress-bar thm-bg wdth90 slideInLeft wow" data-wow-duration=".2s" data-wow-delay=".2s"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="busns-slut-tb2">
                                        <h2 itemprop="headline">We provide the solutions to grow your business</h2>
                                        <p itemprop="description">Suspendisse facilisis commodo lobortis. Nullam mollis lobortis ex vel faucibus. Proin nec
                                            viverra turpis. Nulla eget justo scelerisque, pretium purus vel, congue libero. Suspendisse potenti. Sed risus
                                            nisi, auctor nec auctor id, luctus sed dui. In ex tellus, malesuada cursus erat sed, fermentum hendrerit
                                            turpis.</p>
                                        <div class="skl-prg-wrp">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="skl-prg">
                                                        <span class="pull-left">ความนิยม</span>
                                                        <span class="pull-right">40%</span>
                                                        <div class="progress">
                                                            <div class="progress-bar thm-bg wdth40 slideInLeft wow" data-wow-duration=".1s" data-wow-delay=".1s"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="skl-prg">
                                                        <span class="pull-left">ยอดขาย</span>
                                                        <span class="pull-right">60%</span>
                                                        <div class="progress">
                                                            <div class="progress-bar thm-bg wdth60 slideInLeft wow" data-wow-duration=".1s" data-wow-delay=".2s"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="busns-slut-tb3">
                                        <h2 itemprop="headline">We provide the solutions to grow your business</h2>
                                        <p itemprop="description">Suspendisse facilisis commodo lobortis. Nullam mollis lobortis ex vel faucibus. Proin nec
                                            viverra turpis. Nulla eget justo scelerisque, pretium purus vel, congue libero. Suspendisse potenti. Sed risus
                                            nisi, auctor nec auctor id, luctus sed dui. In ex tellus, malesuada cursus erat sed, fermentum hendrerit
                                            turpis.</p>
                                        <div class="skl-prg-wrp">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="skl-prg">
                                                        <span class="pull-left">ความนิยม</span>
                                                        <span class="pull-right">50%</span>
                                                        <div class="progress">
                                                            <div class="progress-bar thm-bg wdth50 slideInLeft wow" data-wow-duration=".1s" data-wow-delay=".1s"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="skl-prg">
                                                        <span class="pull-left">ยอดขาย</span>
                                                        <span class="pull-right">100%</span>
                                                        <div class="progress">
                                                            <div class="progress-bar thm-bg wdth100 slideInLeft wow" data-wow-duration=".1s" data-wow-delay=".2s"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Business Solutions Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap gray-bg top-spac70 bottom-spac50" style="background-color:#000;">
            <div class="container">
                <div class="remove-ext4 text-center">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="srv-box">
                                <!-- <i class="fa fa-facebook-square fa-5" style="color: #fff;"></i> -->
                                <img src="{{ url('frontend/assets/images/facebook.png') }}" width="80" height="105" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="srv-box">
                                <!-- <i class="fa fa-youtube-square fa-5" style="color: #fff;"></i> -->
                                <img src="{{ url('frontend/assets/images/youtube.png') }}" width="80" height="105" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="srv-box">
                                <!-- <i class="fa fa-instagram fa-5" style="color: #fff;"></i> -->
                                <img src="{{ url('frontend/assets/images/ig.png') }}" width="80" height="105" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="srv-box">
                                <!-- <i class="fab fa-line fa-5" style="color: #fff;"></i> -->
                                <img src="{{ url('frontend/assets/images/line.png') }}" width="80" height="105" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="gap remove-gap">
            <br><br>
            <div class="container">
                <div class="sec-title text-center">
                    <h2 itemprop="headline">โปรโมชั่นประจำเดือน</h2>
                    <span>New stunning projects for our amazing clients.</span>
                </div>
                <div class="remove-ext3">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-lg-4 slideInUp wow" data-wow-duration=".8s" data-wow-delay=".1s">
                            <div class="pln-box">
                                <div class="pln-hdr">
                                    <h4 itemprop="headline">ฟรีเงินดาวน์</h4>
                                    <span>$10<i>/month</i></span>
                                </div>
                                <div class="pln-bdy">
                                    <ul class="pln-feat-lst">
                                        <li>5GB Storage Space</li>
                                        <li>20GB Monthly Bandwidth</li>
                                        <li>My SQL Databases</li>
                                        <li>100 Email Account</li>
                                        <li>10 Free Domain Names</li>
                                    </ul>
                                </div>
                                <a class="thm-btn" href="#" title="" itemprop="url">Select Plan</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4 slideInUp wow" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="pln-box active">
                                <div class="pln-hdr">
                                    <h4 itemprop="headline">ผ่อนเบา</h4>
                                    <span>$10<i>/month</i></span>
                                </div>
                                <div class="pln-bdy">
                                    <ul class="pln-feat-lst">
                                        <li>5GB Storage Space</li>
                                        <li>20GB Monthly Bandwidth</li>
                                        <li>My SQL Databases</li>
                                        <li>100 Email Account</li>
                                        <li>10 Free Domain Names</li>
                                    </ul>
                                </div>
                                <a class="thm-btn" href="#" title="" itemprop="url">Select Plan</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4 slideInUp wow" data-wow-duration=".8s" data-wow-delay=".3s">
                            <div class="pln-box">
                                <div class="pln-hdr">
                                    <h4 itemprop="headline">ฟรีทุกค่าใช้จ่ายรับรถ</h4>
                                    <span>$10<i>/month</i></span>
                                </div>
                                <div class="pln-bdy">
                                    <ul class="pln-feat-lst">
                                        <li>5GB Storage Space</li>
                                        <li>20GB Monthly Bandwidth</li>
                                        <li>My SQL Databases</li>
                                        <li>100 Email Account</li>
                                        <li>10 Free Domain Names</li>
                                    </ul>
                                </div>
                                <a class="thm-btn" href="#" title="" itemprop="url">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="gap black-layer opc1">
            <div id="prtcl1" class="particle-bx"></div>
            <div class="fixed-bg2" style="background-image:url(frontend/assets/images/gravity.png);"></div>
            <div class="container">
                <div class="cmp-cre-wrp">
                    <div class="row flex-row-reverse">
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="cmp-cre">
                                <div class="cmp-cre-tl">
                                    <i class="flaticon-play-button"></i>
                                    <span>Our Company Start</span>
                                    <h2 itemprop="headline">เรื่องราวของ "พอใจ ออโต้" <br> จุดเริ่มต้นของคนซื้อรถที่อยากขายรถ จนถึงวันที่ช่วยคนอื่นหารถที่ทุกคนต้องการ</h2>
                                </div>
                                <p itemprop="description">Suspendisse facilisis commodo lobortis. Nullam mollis lobortis ex vel faucibus. Proin nec viverra turpis. Nulla eget justo scelerisque, pretium purus vel, congue libero. Suspendisse potenti. Sed risus nisi, auctor nec auctor id, luctus sed dui. In ex tellus,</p>
                                <div class="facts-wrp remove-ext3">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <div class="fact-box">
                                                <h4 itemprop="headline"><span class="counter">2300</span></h4>
                                                <span>Powerful options</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <div class="fact-box">
                                                <h4 itemprop="headline"><span class="counter">1270</span></h4>
                                                <span>Satisfied Clients</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <div class="fact-box">
                                                <h4 itemprop="headline"><span class="counter">360</span></h4>
                                                <span>Best projects</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Facts Wrap -->
                            </div>
                        </div>
                    </div>
                </div><!-- Company Care Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap black-layer opc75">
            <div id="prtcl2" class="particle-bx"></div>
            <div class="fixed-bg" style="background-image:url(frontend/assets/images/bgtwohand.png);"></div>
            <div class="container">
                <div class="sec-title text-center">
                    <h2 itemprop="headline">เลือกชมรถมือสอง</h2>
                    <span>New stunning projects for our amazing clients.</span>
                </div>
                <div class="remove-ext5">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-lg-4 slideInUp wow" data-wow-duration=".8s" data-wow-delay=".1s">
                            <div class="pst-box-styl1">
                                <div class="pst-thmb-styl1">
                                    <span class="pst-dat">April 6, 2019</span>
                                    <a href="blog-detail-right-sidebar.html" title="" itemprop="url"><img src="{{ url('frontend/assets/images/twohand.jpg') }}" alt="pst-img1-1.jpg" itemprop="image"></a>
                                </div>
                                <div class="pst-inf-styl1">
                                    <h4 itemprop="headline"><a href="blog-detail-right-sidebar.html" title="" itemprop="url">2017 Mazda 2  Top...!! <br>ราคา 445,000 บาท</a></h4>
                                    <p itemprop="description">เครื่องยนต์เบนซิน 1.3 การรันตรีศูนย์ อยู่ในเชคระยะฟรี ออกห้างมือเดียว กดปุ่มสตาทร์ กุญแจรีโมทแท้ไมล์ดิจิตอลแท้พวงมาลัย Multifunction เบาะหนังเครื่อ เสียงเชื่อมต่อโทรศัพท์ พร้อมสปิกเกอร์ เบาะหลังพับได้ เชื่อมต่อท้ายกระโปรง
                                            ฟรีประกันภัยรถยนต์ปีแรก ดอกเบี้ยต่ำสุด 0% 12เดือน</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4 slideInUp wow" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="pst-box-styl1">
                                <div class="pst-thmb-styl1">
                                    <span class="pst-dat">April 1, 2019</span>
                                    <a href="blog-detail-right-sidebar.html" title="" itemprop="url"><img src="{{ url('frontend/assets/images/twohand2.jpg') }}" alt="pst-img1-2.jpg" itemprop="image"></a>
                                </div>
                                <div class="pst-inf-styl1">
                                    <h4 itemprop="headline"><a href="blog-detail-right-sidebar.html" title="" itemprop="url">2013 Toyota Hilux Vigo 2.5G <br> ราคา 459,000 บาท</a></h4>
                                    <p itemprop="description">เครื่องยนต์ดีเซล 2.5 กุญแจรีโมทแท้ AIR bag +ABS  พวงมาลัย Multifunction  ล้อแม๊ค เครื่องเดิม ของเหลวใหม่ ท่อลั่น พร้อมบวก</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4 slideInUp wow" data-wow-duration=".8s" data-wow-delay=".3s">
                            <div class="pst-box-styl1">
                                <div class="pst-thmb-styl1">
                                    <span class="pst-dat">March 20, 2019</span>
                                    <a href="blog-detail-right-sidebar.html" title="" itemprop="url"><img src="{{ url('frontend/assets/images/twohand3.jpg') }}" alt="pst-img1-3.jpg" itemprop="image"></a>
                                </div>
                                <div class="pst-inf-styl1">
                                    <h4 itemprop="headline"><a href="blog-detail-right-sidebar.html" title="" itemprop="url">2009 Honda Accord 2.4 <br> ราคา 499,000 บาท</a></h4>
                                    <p itemprop="description">พวงมาลัยmultifunction  AIRBAG +ABS  เบาะหนังแท้ ปรับไฟฟ้า เครื่องเดิม2.4 น้ำมันล้วน เครื่องฟิต สตาร์ทติดง่าย กระจกไฟฟ้า กุญแจรีโมท พร้อมหล่อ ทุกสถานการณ์</p>
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
                <div class="testi-wrp text-center">
                    <div class="testi-innr">
                        <div class="testi-car owl-carousel">
                            <div class="testi-itm">
                                <div class="testi-inf">
                                    <img src="http://templates.seekviral.com/excitor/assets/images/resources/testi-img1-1.jpg" alt="testi-img1-1.jpg" itemprop="image">
                                    <div class="testi-inf-innr">
                                        <h6 itemprop="headline">Malujt Looeo</h6>
                                        <span>Peerio Technologies</span>
                                    </div>
                                </div>
                                <p itemprop="description">ประทับใจมาก ที่ร้านเป็นกันเอง รถคุณภาพสูง โปรโมชั่นดีมาก           รู้สึกประทับใจ ถ้าอยากได้รถยนต์มือสองอีกก็จะซื้อที่นี่ ถ้าเพื่อน หรือญาติอยากได้ก็จะพามาซื้อที่นี่ บริการดีจริงๆค่ะ</p>                                    
                            </div>
                            <div class="testi-itm">
                                <div class="testi-inf">
                                    <img src="http://templates.seekviral.com/excitor/assets/images/resources/testi-img1-2.jpg" alt="testi-img1-2.jpg" itemprop="image">
                                    <div class="testi-inf-innr">
                                        <h6 itemprop="headline">Looeo Malujt</h6>
                                        <span>Peerio Technologies</span>
                                    </div>
                                </div>
                                <p itemprop="description">ประทับใจมาก           ที่ร้านเป็นกันเอง รถคุณภาพสูง โปรโมชั่นดีมาก รู้สึกประทับใจ           ถ้าอยากได้รถยนต์มือสอง อีกก็จะซื้อ ที่นี่ถ้าเพื่อน หรือญาติอยากได้ก็จะพามาซื้อที่นี่ บริการดีจริงๆค่ะ</p>
                            </div>
                            <div class="testi-itm">
                                <div class="testi-inf">
                                    <img src="http://templates.seekviral.com/excitor/assets/images/resources/testi-img1-3.jpg" alt="testi-img1-3.jpg" itemprop="image">
                                    <div class="testi-inf-innr">
                                        <h6 itemprop="headline">John Doe</h6>
                                        <span>Peerio Technologies</span>
                                    </div>
                                </div>
                                <p itemprop="description">ประทับใจมาก ที่ร้านเป็นกันเอง รถคุณภาพสูง โปรโมชั่นดีมาก รู้สึกประทับใจ           ถ้าอยากได้รถยนต์มือสองอีกก็จะซื้อ ที่นี่           ถ้เพื่อนหรือญาติอยากได้ก็จะพามาซื้อที่นี่           บริการดีจริงๆค่ะ</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Testimonials Wrap -->
            </div>
        </div>
    </section>

@stop

@section('frontendjavascript') 
    
@endsection