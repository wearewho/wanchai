@inject('request', 'Illuminate\Http\Request')
@extends('frontend.layouts.app')

@section('frontendcontent')

    <!-- Breadcrumbs Block -->
    <div class="block breadcrumbs">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <!-- //Breadcrumbs Block -->
    <!--about text block-->
    <div class="block">
        <div class="container">
            <h1 class="text-center h-decor">History of Cleaning Company</h1>
            <h3 class="text-center">Providing house and offices cleaning services for more nhan 10 years</h3>
            <p class="text-center">The Cleaning Company is widely recognized for our commitment to serving our customers while staying friendly to the environment. We have a history of excellence and dedication to our clients, providing professional and high-quality house cleaning services across America.</p>
            <p class="info">Franchising began in 1996 and has grown to include more than 215 locations across North America.</p>
            <div class="row">
                <div class="col-sm-4">
                    Our company was founded in the Baltimore- Washington metro area in 1987 as one of the first whole house cleaning services in the region. In 1989, Martin Greg and John Rambo purchased the company and broadened its scope to serve even more clients.
                </div>
                <div class="col-sm-4">
                    This quality commitment and reputation for excellent service attracted outside investors. In 2014, the company announced a majority acquisition by PNC Riverarch Capital. This exciting change didn't mean a complete overhaul:
                </div>
                <div class="col-sm-4">
                    The management team did not change and Steve continued on in his leadership position with the Board of Directors. We are excited to announce a new era of growth for both new and existing units under the guidance of PNC.
                </div>
            </div>
        </div>
    </div>
    <!--/about text block-->
    <!-- banner Guaranteed -->
    <div class="block">
        <div class="container">
            <div class="banner-guarantee">
                <div class="banner-guarantee-img banner-guarantee-img--topnegative">
                    <img src="{{asset('frontend/assets/images/content/banner-guaranteed-img.png')}}" alt="Guaranteed">
                </div>
                <div class="banner-guarantee-text">
                    <h2>Satisfaction Guaranteed!</h2>
                    <p>Your satisfaction is 100% guaranteed at Cleaning Company. If you are not happy with any area we’ve cleaned, simply call within 24 hours and we will come back out and reclean it free of charge. This makes hiring Cleaning Company virtually risk free. Our maids are thoroughly screened through our rigorous recruitment process, and every one of them goes through our Maid University training process. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- / banner Guaranteed -->
    <!--about text block-->
    <div class="block">
        <div class="container">
            <h1 class="text-center h-decor">Get in Touch</h1>
            <form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
                <div class="successform text-center">
                    <p>Your message was sent successfully!</p>
                </div>
                <div class="errorform text-center">
                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                </div>
                <div class="input-wrapper">
                    <input type="text" class="input-custom input-full" name="name" placeholder="Your name*">
                </div>
                <div class="input-wrapper">
                    <input type="text" class="input-custom input-full" name="email" placeholder="Email*">
                </div>
                <div class="input-wrapper">
                    <textarea class="textarea-custom input-full" name="message" placeholder="Message"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn">Send Message</button>
                </div>
            </form>
        </div>
    </div>
    <!--/about text block-->

@stop

@section('frontendjavascript') 
    
@endsection