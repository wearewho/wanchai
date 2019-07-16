@inject('request', 'Illuminate\Http\Request')
@extends('frontend.layouts.app')

@section('frontendcontent')

    <!-- Breadcrumbs Block -->
    <div class="block breadcrumbs">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
    <!-- //Breadcrumbs Block -->
    <!-- services grid -->
    <div class="block">
        <div class="container">
            <h2 class="text-center h-lg h-decor">Why Hire Us?</h2>
            <p class="text-center">Choose us because of our reputation for excellence. For more than 10 years, we've earned a name for quality and customer service. The homeowners we serve rely on us for detail-oriented, consistent cleaning services, every single time we clean their homes.</p>
            <div class="row services-grid services-mobile-carousel">
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-1.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-1.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">Apartment Cleaning</h3>
                    <div class="service-box-text">
                        Cleaning Company offers a program designed to service residents of apartments and condominiums.
                    </div>
                    <a href="service-page-1.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-2.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-2.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">House Cleaning</h3>
                    <div class="service-box-text">
                        For over 10 years we’ve performed housekeeping services according to the wishes of our clients.
                    </div>
                    <a href="service-page-2.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-3.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-3.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">Move In / Move Out</h3>
                    <div class="service-box-text">
                        In fact, many people say that moving is one of the most stressful and exhausting life experiences.
                    </div>
                    <a href="service-page-3.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-4.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-4.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">Сarpet Сleaning</h3>
                    <div class="service-box-text">
                        When you choose us, you get a deeper clean, faster-drying carpets and a healthier home.
                    </div>
                    <a href="service-page-4.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-5.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-5.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">After Renovation</h3>
                    <div class="service-box-text">
                        Anyone who has done a renovation project knows the mess that comes with it.
                    </div>
                    <a href="service-page-5.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-6.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-6.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">Curtain Cleaning</h3>
                    <div class="service-box-text">
                        We will take down uninstall your curtains and dry-clean right on the spot!
                    </div>
                    <a href="service-page-6.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-7.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-7.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">Window Cleaning</h3>
                    <div class="service-box-text">
                        Indulge in high-quality window cleaning from bonded professionals.
                    </div>
                    <a href="service-page-7.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-8.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-8.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">Commercial Cleaning</h3>
                    <div class="service-box-text">
                        Anyone who has done a renovation project knows the mess that comes with it.
                    </div>
                    <a href="service-page-8.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-9.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-9.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">Residential Cleaning</h3>
                    <div class="service-box-text">
                        We will take down uninstall your curtains and dry-clean right on the spot!
                    </div>
                    <a href="service-page-9.html" class="service-box-link">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /services grid -->
    <!-- banner -->
    <div class="block fullwidth-sm no-pad">
        <div class="container">
            <div class="banner-text">
                <div>Schedule a Free Cleaning Estimate Today</div>
                <div><i class="icon icon-technology"></i><b>800-123-4567</b></div>
            </div>
        </div>
    </div>
    <!-- / banner -->
@stop

@section('frontendjavascript') 
    
@endsection