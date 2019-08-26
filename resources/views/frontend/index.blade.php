

@inject('request', 'Illuminate\Http\Request')
@extends('frontend.layouts.app')

@section('frontendcontent')

    <!-- Slider -->
    <div class="block">
        <div id="mainSliderWrapper">
            <div class="loading-content">
                <div class="loading-dots dark-gray">
                    <i></i>
                    <i></i>
                    <i></i>
                    <i></i>
                </div>
            </div>
            <div id="mainSlider"> 
                @if (count($imagehome) > 0)          
                    @foreach ($imagehome as $item)
                        <div class="slide">
                            <div class="img--holder" style='background-image: url({{$item->image_url}});'></div>
                            @if ($item->shine == 'yes') 
                                <div id="starshine">
                                    <div class="shine shine-1"></div>
                                    <div class="shine shine-2"></div>
                                    <div class="shine shine-4"></div>
                                </div>
                            @endif    
                            <div class="slide-content center">
                                <div class="vert-wrap container">
                                    <div class="vert">
                                        <div class="container">
                                            <h2 data-animation="zoomIn" data-animation-delay="0.5s">{{$item->header}}</h2>
                                            <a href="services.html" class="btn" data-animation="fadeInUp" data-animation-delay="0.5s">บริการของเรา</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="slide">
                        <div class="img--holder" style="background-image: url(frontend/assets/images/slider/slide-1.jpg);"></div>
                        <div class="slide-content center">
                            <div class="vert-wrap container">
                                <div class="vert">
                                    <div class="container">
                                        <h2 data-animation="zoomIn" data-animation-delay="0.5s">วันชัย คลีนนิ่ง เซอร์วิส</h2>
                                        <a href="services.html" class="btn" data-animation="fadeInUp" data-animation-delay="0.5s">บริการของเรา</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="slide">
                        <div class="img--holder" style="background-image: url(frontend/assets/images/slider/slide-2.jpg);"></div>
                        <div id="starshine">
                            <div class="shine shine-1"></div>
                            <div class="shine shine-2"></div>
                            <div class="shine shine-4"></div>
                        </div>
                        <div class="slide-content center">
                            <div class="vert-wrap container">
                                <div class="vert">
                                    <div class="container">
                                        <h2 data-animation="zoomIn" data-animation-delay="0.5s">ผู้นำด้านธุรกิจงานบริการทำความสะอาด</h2>
                                        <a href="services.html" class="btn" data-animation="fadeInUp" data-animation-delay="0.5s">บริการของเรา</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img--holder" style="background-image: url(frontend/assets/images/slider/slide-1.jpg);"></div>
                        <div class="slide-content center">
                            <div class="vert-wrap container">
                                <div class="vert">
                                    <div class="container">
                                        <h2 data-animation="zoomIn" data-animation-delay="0.5s">เปิดทำการทุกวัน เวลา 08:00 น.-17:00 น. <br>
                                            ติดต่อสอบถาม โทร : 0-2989-4922</h2>
                                        <a href="services.html" class="btn" data-animation="fadeInUp" data-animation-delay="0.5s">บริการของเรา</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img--holder" style="background-image: url(frontend/assets/images/slider/slide-3.jpg);"></div>
                        <div class="slide-content center">
                            <div class="vert-wrap container">
                                <div class="vert">
                                    <div class="container">
                                        <h2 data-animation="zoomIn" data-animation-delay="0.5s">บริการดูแลสวนแบบครบวงจร</h2>
                                        <a href="services.html" class="btn" data-animation="fadeInUp" data-animation-delay="0.5s">บริการของเรา</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif                
            </div>
        </div>
    </div>
    <!-- Slider -->
    <!-- Conscience block -->
    <div class="block fullwidth-bg bg-bottom hide-bg-md" data-bg="{{asset('frontend/assets/images/block-bg-1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-lg-push-3">
                    <h2 class="text-center h-lg h-decor">รู้จัก วันชัย คลีนนิ่ง เซอร์วิส</h2>
                    <h3 class="text-center">ผู้เชี่ยวชาญเรื่องการทำความสะอาด และผู้ช่วยเรื่องงการดูแลสวนคู่คนไทยมามากกว่า 20 ปี</h3>
                    <p>ด้วยประสบการณ์กว่า 24 ปีในการดำเนินธุรกิจให้บริการทำความสะอาด และการดูแลสวนแบบครบวงจร เรายึดถือเรื่องประสิทธิภาพ และความต้องการของลูกค้าเป็นสำคัญ</p>
                    <p>นอกจากนี้เรายังใส่ใจเรื่องอุปกรณ์ที่มีประสิทธิภาพต่อการให้บริการแต่ละประเภทอย่างเหมาะสมไม่ว่าจะเป็นการบริการทำความสะอาด และดูแลสวนกับหน่วยงานต่างๆ เช่น อาคารสำนักงาน, คลังสินค้า, อพาร์ทเม้นท์, คอนโด, ห้องคลีนรูม  หรือ ตามบ้านเรือนที่อยู่อาศัยต่างๆ คุณจึงวางใจได้เมื่อต้องการเรียกหามืออาชีพในการให้บริการทำความสะอาดจากเรา</p>
                    <div class="row">
                        <div class="col-sm-6 col-lg-5 col-lg-push-1">
                            <ul class="marker-list">
                                <li>มีบริการหลากหลายทั้งแบบรายครั้ง และแบบประจำ</li>
                                <li>มีบริการดูแลสวน และสระว่ายน้ำแบบครบวงจร</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-5 col-lg-push-1">
                            <ul class="marker-list">
                                <li>มีบริการทำความสะอาดครบวงจรทั้งสำนักงาน และที่อยู่อาศัย</li>
                                <li>มีบริการการทำความสะอาดแบบพิเศษ และเครื่องเรือนที่ต้องการดูแลเป็นพิเศษ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Conscience block -->
    <!--about text block with icons -->
    <div class="block">
        <div class="container">
            <h2 class="text-center h-lg h-decor">บริการของเรา</h2>
            <p class="text-center">วันชัย คลีนนิ่ง เซอร์วิส เรามีทีมงาน และผู้ชำนาญการเฉพาะด้านเกี่ยวกับการทำความสะอาด และจัดสวนโดยเฉพาะ ลูกค้าของเราจึงสามารถวางใจได้ทุกครั้งที่เรียกใช้บริการจากเรามาตลอด 24 ปี</p>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-4 text-icon">
                    <div class="text-icon-icon">
                        <i class="icon icon-like-lined"></i>
                    </div>
                    <h5 class="text-icon-title">บริการทำความสะอาดรายครั้ง</h5>
                    <div class="text-icon-text">
                        เป็นการทำความสะอาดแบบครั้งเดียว หรือ Frist Clean เช่น การทำความสะอาดโครงการก่อนส่งมอบงาน การทำความสะอาดโรงงาน การทำความสะอาดบ้านก่อนเข้าอยู่ เป็นต้น 
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 text-icon">
                    <div class="text-icon-icon">
                        <i class="icon icon-user-lined"></i>
                    </div>
                    <h5 class="text-icon-title">บริการทำความสะอาดแบบประจำ</h5>
                    <div class="text-icon-text">
                        เป็นการบริการจัดส่งพนักงานทำความสะอาดประจำ บริการเป็นสัญญารายปี เช่น สัญญาการบริการทำความสะอาด สัญญาการบริการกวาดถนน
                    </div>
                </div>
                <div class="clearfix visible-xs visible-sm"></div>
                <div class="col-xs-6 col-sm-6 col-md-4 text-icon">
                    <div class="text-icon-icon">
                        <i class="icon icon-users-lined"></i>
                    </div>
                    <h5 class="text-icon-title">บริการทำความสะอาดครบวงจร</h5>
                    <div class="text-icon-text">
                        เป็นการบริการงานทำความสะอาดใหญ่ ตามคอนโดมิเนี่ยม อพาร์ทเม้นท์ โรงงาน โรงเรียน เช่น การขัดล้างพื้นประเภทต่างๆ การเช็ดกระจกสูง เป็นต้น
                    </div>
                </div>
                <div class="clearfix visible-md visible-lg"></div>
                <div class="col-xs-6 col-sm-6 col-md-4 text-icon">
                    <div class="text-icon-icon">
                        <i class="icon icon-map-lined"></i>
                    </div>
                    <h5 class="text-icon-title">บริการทำความสะอาดแบบพิเศษ</h5>
                    <div class="text-icon-text">
                        เป็นการบริการแบบเฉพาะทาง ที่ต้องมีการทำความสะอาดแบบพิเศษ เช่น การทำความสะอาดห้องผ่าตัด ห้องแปรรูปอาหาร เป็นต้น
                    </div>
                </div>
                <div class="clearfix visible-xs visible-sm"></div>
                <div class="col-xs-6 col-sm-6 col-md-4 text-icon">
                    <div class="text-icon-icon">
                        <i class="icon icon-reward-lined"></i>
                    </div>
                    <h5 class="text-icon-title">บริการทำความสะอาดพรม และเฟอร์นิเจอร์</h5>
                    <div class="text-icon-text">
                        เป็นการบริการซักพรม เก้าอี้ โซฟา ด้วยระบบ Extraction
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 text-icon">
                    <div class="text-icon-icon">
                        <i class="icon icon-like-lined"></i>
                    </div>
                    <h5 class="text-icon-title">บริการดูแลสวน และกวาดถนน</h5>
                    <div class="text-icon-text">
                        เป็นการบริการจัดส่งพนักงานดูแลสวนและกวาดถนนประจำ บริการเป็นสัญญาแบบรายเดือนและรายปี 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/about text block with icons -->
    <!-- Testimonials Single Block -->
    <div class="block fullwidth-bg inset-50 block-bg-grey block-testimonials">
        <div class="container">
            <div class="testimonials-carousel-1">
                @if (count($review) > 0)          
                    @foreach ($review as $item)                    
                    <div class="testimonial-item">
                        <div class="testimonial-item-author" data-animation="zoomIn" data-animation-delay="0.5s">
                            <img src="{{asset($item->image_url)}}" alt="Customer">
                        </div>
                        <div class="testimonial-item-inside">
                            <h3>{{$item->header}}</h3>
                            <p>{{$item->detail}}</p>
                            <div class="rating"><span class="rating rating-{{$item->star}}"><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="testimonial-item">
                        <div class="testimonial-item-author" data-animation="zoomIn" data-animation-delay="0.5s">
                            <img src="{{asset('frontend/assets/images/content/testimonial-author-1.jpg')}}" alt="Customer">
                        </div>
                        <div class="testimonial-item-inside">
                            <h3>Estela Thomas</h3>
                            <p>I would be glad to act as a phone reference for your company. Cleaning did a wonderful job and I certainly don’t mind confirming their outstanding service. If you’re thinking about hiring to clean your office building, ask them for my testimonial and call anytime.</p>
                            <div class="rating"><span class="rating rating-4"><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-item-author" data-animation="zoomIn" data-animation-delay="0.5s">
                            <img src="{{asset('frontend/assets/images/content/testimonial-author-2.jpg')}}" alt="Customer">
                        </div>
                        <div class="testimonial-item-inside">
                            <h3>Stephanie Mealy</h3>
                            <p>I would be glad to act as a phone reference for your company. Cleaning did a wonderful job and I certainly don’t mind confirming their outstanding service. If you’re thinking about hiring to clean your office building.</p>
                            <div class="rating"><span class="rating rating-4"><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-item-author" data-animation="zoomIn" data-animation-delay="0.5s">
                            <img src="{{asset('frontend/assets/images/content/testimonial-author-3.jpg')}}" alt="Customer">
                        </div>
                        <div class="testimonial-item-inside">
                            <h3>Victoria Barry</h3>
                            <p>My husband and I are very satisfied customers and have been for over 15 years. Clean Service always keeps our home just lovely and are willing to accommodate special requests. I am glad I have a company I can trust and will do the same quality work each cleaning.</p>
                            <div class="rating"><span class="rating rating-4"><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i></span>
                            </div>
                        </div>
                    </div>
                @endif 
            </div>
        </div>
    </div>
    <!-- //Testimonials Single Block -->
    <!-- Brands Carousel -->
    <div class="block">
        <div class="container">
            <h2 class="text-center h-lg h-decor">ลูกค้าของเรา</h2>
            <div class="brand-carousel">
                @foreach ($client as $clients)
                    <a href="#"><img src="{{asset($clients->image_url)}}" alt="{{$item->image_url}}"></a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /Brands Carousel -->
    <!-- News block -->
    <div class="block">
        <div class="container">
            <h2 class="text-center h-lg h-decor">ข่าวสาร</h2>
            <div class="news-carousel row">
                <div class="col-sm-4">
                    <div class="news-prw">
                        <div class="news-prw-image">
                            <img src="{{asset('frontend/assets/images/content/news-img-1.jpg')}}" alt="">
                            <a href="blog-post-page.html" class="news-prw-link"><i class="icon-right-arrow"></i></a>
                        </div>
                        <div class="news-prw-date">16 December, 2017</div>
                        <h4 class="news-prw-title">How to Clean White Items in your Home</h4>
                        <p>Traditionally, whites are to be saved for after Memorial Day, however some believe that they can be worn once spring arrives.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="news-prw">
                        <div class="news-prw-image">
                            <img src="{{asset('frontend/assets/images/content/news-img-2.jpg')}}" alt="">
                            <a href="blog-post-page.html" class="news-prw-link"><i class="icon-right-arrow"></i></a>
                        </div>
                        <div class="news-prw-date">16 December, 2017</div>
                        <h4 class="news-prw-title">Five Easy Ways to Give Back</h4>
                        <p>Do you want to make a difference but don’t know where to start? Or maybe you’re unsure if you have the time? Luckily, giving back does not always have to require...</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="news-prw">
                        <div class="news-prw-image">
                            <img src="{{asset('frontend/assets/images/content/news-img-3.jpg')}}" alt="">
                            <a href="blog-post-page.html" class="news-prw-link"><i class="icon-right-arrow"></i></a>
                        </div>
                        <div class="news-prw-date">16 December, 2017</div>
                        <h4 class="news-prw-title">Why is Spring Cleaning Important?</h4>
                        <p>Spring Cleaning started as a way to clean away Winter’s mess. In those days, homes were heated by fires, and doors were...</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="news-prw">
                        <div class="news-prw-image">
                            <img src="{{asset('frontend/assets/images/content/news-img-1.jpg')}}" alt="">
                            <a href="#" class="news-prw-link"><i class="icon-right-arrow"></i></a>
                        </div>
                        <div class="news-prw-date">16 December, 2017</div>
                        <h4 class="news-prw-title">How to Clean White Items in your Home</h4>
                        <p>Traditionally, whites are to be saved for after Memorial Day, however some believe that they can be worn once spring arrives.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="news-prw">
                        <div class="news-prw-image">
                            <img src="{{asset('frontend/assets/images/content/news-img-2.jpg')}}" alt="">
                            <a href="blog-post-page.html" class="news-prw-link"><i class="icon-right-arrow"></i></a>
                        </div>
                        <div class="news-prw-date">16 December, 2017</div>
                        <h4 class="news-prw-title">Five Easy Ways to Give Back</h4>
                        <p>Do you want to make a difference but don’t know where to start? Or maybe you’re unsure if you have the time? Luckily, giving back does not always have to require...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /News block -->


@stop

@section('frontendjavascript') 
    
@endsection