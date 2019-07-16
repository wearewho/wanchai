
	<!-- Header -->
	<header class="page-header header-sticky">
		<div class="page-header-mobile-info">
			<div class="page-header-mobile-info-content">
				<div class="page-header-info">
					<i class="icon icon-map-marker"></i>3261 Anmoore Road, Brooklyn, NY 11230
				</div>
				<div class="page-header-info">
					<i class="icon icon-technology"></i>800-123-4567, Fax: 718-724-3312
				</div>
				<div class="page-header-info">
					<i class="icon icon-clock"></i>Mon-Fri: 9:00 am – 5:00 pm
				</div>
				<div class="page-header-info">
					<i class="icon icon-speech-bubble"></i><a href="mailto:officeone@youremail.com">officeone@youremail.com</a>
				</div>
				<ul class="social-list">
					<li><a href="#"><i class="icon-google-plus-logo"></i></a></li>
					<li><a href="#"><i class="icon-facebook-logo"></i></a></li>
					<li><a href="#"><i class="icon-twitter-logo"></i></a></li>
					<li><a href="#"><i class="icon-instagram-logo"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="page-header-top">
			<div class="container">
				<div class="page-header-mobile-info-toggle"></div>
				<div class="logo">
					<a href="{{url('/index')}}"><img src="{{asset('frontend/assets/images/logo.png')}}" alt=""></a>
					<div class="shine"></div>
				</div>
				<div class="page-header-top-middle hidden-xs">
					<div class="page-header-slogan visible-lg">We are Cleaning Experts!</div>
					<div class="page-header-shedule"><i class="icon icon-clock"></i>8:00am - 10:00pm
						<br>Mon - Sun</div>
					<div class="page-header-phone text-right"><span>Call us on:</span> <span class="phone-number">800-123-4567</span></div>
				</div>
				<div class="quote-button-wrap"><a href="order-form.html" class="btn"><i class="icon icon-bell"></i>GET A QUOTE</a></div>
				<a href="#" class="menu-toggle"><i class="icon-line-menu"></i><i class="icon-cancel"></i></a>
			</div>
		</div>
		<div class="page-header-menu">
			<div class="container">
				<ul class="menu" style="text-align:center;">
					<li class="{{ $request->segment(1) == 'index' ? 'active' : '' }}"><a href="{{url('/index')}}">HOME</a></li>
					<li class="{{ $request->segment(1) == 'service' ? 'active' : '' }}"><a href="{{url('/service')}}">Our Services</a></li>
					<li class="{{ $request->segment(1) == 'blog' ? 'active' : '' }}"><a href="{{url('/blog')}}">Blog</a></li>
					<li class="{{ $request->segment(1) == 'about' ? 'active' : '' }}"><a href="{{url('/about')}}">About Us</a></li>
					<li class="{{ $request->segment(1) == 'work' ? 'active' : '' }}"><a href="{{url('/work')}}">Work with Us</a></li>
					<li class="{{ $request->segment(1) == 'contact' ? 'active' : '' }}"><a href="{{url('/contact')}}">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- /Header -->