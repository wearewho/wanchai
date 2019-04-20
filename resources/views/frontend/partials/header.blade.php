
    <header class="stick style11">
        <div class="menu-wrp3">
            <div class="container">
                <div class="logo"><a href="{{ url('index') }}" title="Logo" itemprop="url"><img src="{{ url('frontend/assets/images/porjailogo.png') }}" width="200" alt="logo.png" itemprop="image"></a></div>
                <nav>
                    <div>
                        <a class="srch-btn" href="#" title="" itemprop="url"><i class="fa fa-search"></i></a>
                        <ul>
                            <li style="color:#000;"><a href="{{ url('index') }}" title="" itemprop="url">หน้าแรก</a></li>
                            <li style="color:#000;"><a href="{{ url('blog') }}" title="" itemprop="url">เลือกชมรถ</a></li>
                            <li style="color:#000;"><a href="{{ url('contact') }}" title="" itemprop="url">ติดต่อสอบถาม</a></li>
                            <li style="color:#000;"><a href="{{ url('gallery') }}" title="" itemprop="url">รีวิวจากลูกค้า</a></li>
                            <li style="color:#000;"><a href="{{ url('admin') }}" title="" itemprop="url">จัดการหลังบ้าน</a></li>
                            
                    {{-- @php
                    $userId = Auth::id();
                    dd($userId);
                @endphp --}}
                        </ul>
                    </div>
                </nav>
            </div>
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
                        <li style="color:#000;"><a href="{{ url('admin') }}" title="" itemprop="url">จัดการหลังบ้าน</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div><!-- Menu Wrap -->
    <div class="hdr-srch-bx">
        <span class="srch-cls-btn"><i class="fa fa-close"></i></span>
        <form>
            <input type="text" placeholder="Search your keywords...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div><!-- Header Search -->
    <div class="rspn-hdr">
        <div class="rspn-mdbr">
            <ul class="rspn-scil">
                <li><a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fa fa-linkedin"></i></a></li>
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
                        <li style="color:#000;"><a href="{{ url('admin') }}" title="" itemprop="url">จัดการหลังบ้าน</a></li>
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
                </ul>
            </div>
        </div> 
    </section>