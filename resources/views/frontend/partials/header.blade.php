
	<!-- Header -->
	<header class="page-header header-sticky">
		<div class="page-header-mobile-info">
			<div class="page-header-mobile-info-content">
				<div class="page-header-info">
					<i class="icon icon-map-marker"></i>3261 Anmoore Road, Brooklyn, NY 11230
				</div>
				<div class="page-header-info">
					<i class="icon icon-technology"></i>02-989-4922
				</div>
				<div class="page-header-info">
					<i class="icon icon-clock"></i>เปิดบริการทุกวัน: 08:00 น. - 17:00 น.
				</div>
				<div class="page-header-info">
					<i class="icon icon-speech-bubble"></i><a href="mailto:admin@wanchai-cleaning.com">admin@wanchai-cleaning.com</a>
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
					{{-- <a href="{{url('/index')}}"><img src="{{asset('frontend/assets/images/logo.png')}}" alt=""></a> --}}
					<a href="{{url('/index')}}"><img src="{{asset('wcs.png')}}" width="268" alt=""></a>
					<div class="shine"></div>
				</div>
				<div class="page-header-top-middle hidden-xs">
					<div class="page-header-slogan visible-lg" style="text-align:center">วันชัย คลีนนิ่ง เซอร์วิส <br> ตัวจริงเรื่องความสะอาดครบวงจร</div>
					<div class="page-header-shedule" style="text-align:center"><i class="icon icon-clock"></i> เปิดบริการทุกวัน
						<br>08:00 น. - 17:00 น.</div>
					<div class="page-header-phone text-right"><span>ติดต่อเรา:</span> <span class="phone-number">02-989-4922</span></div>
				</div>
				<div class="quote-button-wrap"><a href="order-form.html" class="btn"><i class="icon icon-bell"></i>ส่งข้อความหาเรา</a></div>
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