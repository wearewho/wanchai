

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
                <div class="slide">
                    <div class="img--holder" style="background-image: url(frontend/assets/images/slider/slide-1.jpg);"></div>
                    <div class="slide-content center">
                        <div class="vert-wrap container">
                            <div class="vert">
                                <div class="container">
                                    <h2 data-animation="zoomIn" data-animation-delay="0.5s">Eco-Friendly<br>Cleaning Services</h2>
                                    <a href="services.html" class="btn" data-animation="fadeInUp" data-animation-delay="0.5s">Want to know more?</a>
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
                                    <h2 data-animation="zoomIn" data-animation-delay="0.5s">A Caring<br>Cleaning Team</h2>
                                    <a href="services.html" class="btn" data-animation="fadeInUp" data-animation-delay="0.5s">Want to know more?</a>
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
                                    <h2 data-animation="zoomIn" data-animation-delay="0.5s">Giving You<br>More Time to Spend on<br>What Really Matter</h2>
                                    <a href="services.html" class="btn" data-animation="fadeInUp" data-animation-delay="0.5s">Want to know more?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider -->
    <!-- Conscience block -->
    <div class="block fullwidth-bg bg-bottom hide-bg-md" data-bg="{{asset('frontend/assets/images/block-bg-1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-lg-push-3">
                    <h2 class="text-center h-lg h-decor">About Our Company</h2>
                    <h3 class="text-center">More than 10 years of cleaning experience</h3>
                    <p>Cleaning Company service is a fully integrated janitorial cleaning services company that provides comprehensive, high quality, reliable cleaning solutions to commercial, corporate, industrial and residential clients.</p>
                    <p>Our diligent management and work ethic are central to Cleaning Company service business philosophy and critical to delivering consistent, quality cleaning services. We pride ourselves on making our management accountable to the client through direct access and interaction with our managing director.</p>
                    <div class="row">
                        <div class="col-sm-6 col-lg-5 col-lg-push-1">
                            <ul class="marker-list">
                                <li>One-off, weekly or fortnightly visits</li>
                                <li>Vetted & background-checked cleaners</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-5 col-lg-push-1">
                            <ul class="marker-list">
                                <li>Keep the same cleaner for every visit</li>
                                <li>Book, manage & pay online</li>
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
            <h2 class="text-center h-lg h-decor">Why Hire Us?</h2>
            <p class="text-center">Choose us because of our reputation for excellence. For more than 10 years, we've earned a name for quality and customer service. The homeowners we serve rely on us for detail-oriented, consistent cleaning services, every single time we clean their homes.</p>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-4 text-icon">
                    <div class="text-icon-icon">
                        <i class="icon icon-like-lined"></i>
                    </div>
                    <h5 class="text-icon-title">With Us, Your Satisfaction Is Guaranteed</h5>
                    <div class="text-icon-text">
                        The experts at The Cleaning Company are committed to providing thorough house cleaning services for our valued customers nationwide. In order to accomplish this goal, we adhere to strict standards that remain consistent across the board.
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 text-icon">
                    <div class="text-icon-icon">
                        <i class="icon icon-user-lined"></i>
                    </div>
                    <h5 class="text-icon-title">Our Bonded & Insured<br>Cleaning Team</h5>
                    <div class="text-icon-text">
                        Our company is fully bonded and insured, which means you can have peace of mind when you hire us as your residential cleaning company. Helping our customers feel confident in our services is very important to us.
                    </div>
                </div>
                <div class="clearfix visible-xs visible-sm"></div>
                <div class="col-xs-6 col-sm-6 col-md-4 text-icon">
                    <div class="text-icon-icon">
                        <i class="icon icon-users-lined"></i>
                    </div>
                    <h5 class="text-icon-title">Our Teams Consist<br>of Fully Trained Employees</h5>
                    <div class="text-icon-text">
                        It means every individual hired at a franchise location of Cleaning Company goes through a thorough screening process, and then is trained in every aspect of our home cleaning services. This ensures high-quality service every time.
                    </div>
                </div>
                <div class="clearfix visible-md visible-lg"></div>
                <div class="col-xs-6 col-sm-6 col-md-4 text-icon">
                    <div class="text-icon-icon">
                        <i class="icon icon-map-lined"></i>
                    </div>
                    <h5 class="text-icon-title">Locally Owned Home<br>Cleaning Services</h5>
                    <div class="text-icon-text">
                        Life is just too short to clean your own home. You should be able to enjoy peace of mind knowing that your home is in good hands, while focusing on things that matter more to you, such as your family and loved ones.
                    </div>
                </div>
                <div class="clearfix visible-xs visible-sm"></div>
                <div class="col-xs-6 col-sm-6 col-md-4 text-icon">
                    <div class="text-icon-icon">
                        <i class="icon icon-reward-lined"></i>
                    </div>
                    <h5 class="text-icon-title">Free Over the Phone<br>Estimates</h5>
                    <div class="text-icon-text">
                        Cleaning Company service is the key to keeping a beautiful home while making more time for yourself and the things you love most. Contact us for a FREE estimate.
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 text-icon">
                    <div class="text-icon-icon">
                        <i class="icon icon-like-lined"></i>
                    </div>
                    <h5 class="text-icon-title">We Guarantee Our Work</h5>
                    <div class="text-icon-text">
                        Cleaning Company strives to provide the highest level of quality, service and value to each and every customer. If you are not completely satisfied with our service, please inform us within 24 hours of your clean so we may resolve the situation.
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
            </div>
        </div>
    </div>
    <!-- //Testimonials Single Block -->
    <!-- Brands Carousel -->
    <div class="block">
        <div class="container">
            <h2 class="text-center h-lg h-decor">Our Regular Customers</h2>
            <div class="brand-carousel">
                <a href="#"><img src="{{asset('frontend/assets/images/content/brand-img-1.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('frontend/assets/images/content/brand-img-2.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('frontend/assets/images/content/brand-img-3.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('frontend/assets/images/content/brand-img-4.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('frontend/assets/images/content/brand-img-5.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('frontend/assets/images/content/brand-img-6.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('frontend/assets/images/content/brand-img-7.png')}}" alt=""></a>
            </div>
        </div>
    </div>
    <!-- /Brands Carousel -->
    <!-- News block -->
    <div class="block">
        <div class="container">
            <h2 class="text-center h-lg h-decor">What's News</h2>
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