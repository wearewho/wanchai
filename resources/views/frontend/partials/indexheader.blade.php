    
    <header class="stick style1">
        <div class="topbar">
            <div class="logo"><a href="{{ url('index') }}" title="Logo" itemprop="url"><img src="{{ url('frontend/assets/images/porjailogo.png') }}" width="200" alt="logo.png" itemprop="image"></a></div>
            <div class="hdr-srch">
                <form>
                    <button type="submit"><i class="fa fa-search"></i></button>
                    <input type="text" placeholder="SEARCH">
                </form>
            </div>
        </div><!-- Topbar -->
        <div class="menu-wrp">
            <nav>
                <div>
                    <ul>
                        <li style="color:#000;"><a href="{{ url('index') }}" title="" itemprop="url">หน้าแรก</a></li>
                        <li style="color:#000;"><a href="{{ url('blog') }}" title="" itemprop="url">เลือกชมรถ</a></li>
                        <li style="color:#000;"><a href="{{ url('contact') }}" title="" itemprop="url">ติดต่อสอบถาม</a></li>
                        <li style="color:#000;"><a href="{{ url('gallery') }}" title="" itemprop="url">รีวิวจากลูกค้า</a></li>
                        @if(Auth::check())
                            <li style="color:#000;"><a href="{{ url('admin') }}" title="" itemprop="url">จัดการหลังบ้าน</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div><!-- Menu Wrap -->
    </header><!-- Header -->
    <div class="menu-wrp3 sticky-header">
        <div class="container">
            <div class="logo"><a href="{{ url('index') }}" title="Logo" itemprop="url"><img src="{{ url('frontend/assets/images/porjailogo.png') }}" width="200" alt="logo.png" itemprop="image"></a></div>
            <nav>
                <div>
                    <ul>
                        <li style="color:#000;"><a href="{{ url('index') }}" title="" itemprop="url">หน้าแรก</a></li>
                        <li style="color:#000;"><a href="{{ url('blog') }}" title="" itemprop="url">เลือกชมรถ</a></li>
                        <li style="color:#000;"><a href="{{ url('contact') }}" title="" itemprop="url">ติดต่อสอบถาม</a></li>
                        <li style="color:#000;"><a href="{{ url('gallery') }}" title="" itemprop="url">รีวิวจากลูกค้า</a></li>
                        @if(Auth::check())
                            <li style="color:#000;"><a href="{{ url('admin') }}" title="" itemprop="url">จัดการหลังบ้าน</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div><!-- Menu Wrap -->
    <div class="rspn-hdr">
        <div class="rspn-mdbr">
            <ul class="rspn-scil">
                <li><a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" title="Instagram" itemprop="url" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" title="Youtube" itemprop="url" target="_blank"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#" title="Line" itemprop="url" target="_blank"><i class="fab fa-line"></i></a></li>
            </ul>
            <form class="rspn-srch">
                <input type="text" placeholder="Enter Your Keyword" />
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="lg-mn">
            <div class="logo"><a href="{{ url('index') }}" title="Logo" itemprop="url"><img src="{{ url('frontend/assets/images/porjailogo.png') }}" alt="logo.png" itemprop="image"></a></div>
            <span class="rspn-mnu-btn"><i class="fa fa-align-center"></i></span>
        </div>
        <div class="rsnp-mnu">
            <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
            <ul>
                    <li style="color:#fff;"><a href="{{ url('index') }}" title="" itemprop="url">หน้าแรก</a></li>
                    <li style="color:#fff;"><a href="{{ url('blog') }}" title="" itemprop="url">เลือกชมรถ</a></li>
                    <li style="color:#fff;"><a href="{{ url('contact') }}" title="" itemprop="url">ติดต่อสอบถาม</a></li>
                    <li style="color:#fff;"><a href="{{ url('gallery') }}" title="" itemprop="url">รีวิวจากลูกค้า</a></li>
                    @if(Auth::check())
                        <li style="color:#fff;"><a href="{{ url('admin') }}" title="" itemprop="url">จัดการหลังบ้าน</a></li>
                    @endif
                </ul>
        </div><!-- Responsive Menu -->
    </div><!-- Responsive Header -->
    <section class="sldr-rqst-qt">
        <div id="rev_slider_4_1_wrapper" class="ovrlp75 rev_slider_wrapper fullscreen-container" data-alias="notgeneric125" data-source="gallery" style="background-color:transparent;padding:0px;">
            <div id="rev_slider_4_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <li data-index="rs-1" data-transition="boxfade" data-title="Slide Title">
                        <img src="{{ url('frontend/assets/images/resources/porjaitemplate3.jpg') }}" 
                                class="rev-slidebg" 
                                data-bgposition="center center" 
                                data-bgfit="cover" 
                                data-bgrepeat="no-repeat"
                                data-bgparallax="10" 
                                data-no-retina>
                    </li>
                    <li data-index="rs-2" data-transition="fade" data-title="Slide Title">
                        <img src="{{ url('frontend/assets/images/resources/porjaitemplate2.jpg') }}" 
                                class="rev-slidebg" 
                                data-bgposition="center center" 
                                data-bgfit="cover" 
                                data-bgrepeat="no-repeat"
                                data-bgparallax="10" 
                                data-no-retina>
                    </li>
                    <!-- <li data-index="rs-3" data-transition="fade" data-title="Slide Title">
                        <img src="assets/images/resources/porjaitemplate1.jpg" 
                                class="rev-slidebg" 
                                data-bgposition="center center" 
                                data-bgfit="cover" 
                                data-bgrepeat="no-repeat"
                                data-bgparallax="10" 
                                data-no-retina>
                    </li> -->
                </ul>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </section>