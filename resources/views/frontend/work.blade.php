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
            <h1 class="text-center h-decor">รับสมัครงาน</h1>
            <h3 class="text-center">ร่วมทีมกับเรา และกลายเป็นส่วนหนึ่งของมืออาชีพทาด้านความสะอาดที่คุณภาคภูมิใจ</h3>
            <p class="text-center">Tการทำความสะอาดไม่ใช่เรื่องง่าย ร่วมงานกับเราเพื่อกลายเป็นมืออาชีพทางด้านความสะอาด พร้อมสวัสดิการที่เพียบพร้อมสำหรับคนทำงานคุณภาพ และกลายเป็นมืออาชีพทางด้านความสะอาดของทีมงานคุณภาพของเราที่ลูกค้าทุกคนต่างประทับใจ และอยากใช้บริการตลอดไป</p>
            <p class="info">ตำแหน่งที่เปิดรับสมัครงาน</p>
            <div class="row">
                <div class="col-sm-4">
                    พนักงานทำความสะอาด<br>
                    คุณสมบัติ : 
                </div>
                <div class="col-sm-4">
                    ตำแหน่งอื่นๆ<br>
                    คุณสมบัติ : 
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
                    <h2>การันตีความประทับใจ</h2>
                    <p>ประสบการณ์กว่า 24 ปีในการดำเนินธุรกิจให้บริการทำความสะอาด และการดูแลสวนแบบครบวงจร เรายึดถือเรื่องประสิทธิภาพ และความต้องการของลูกค้าเป็นสำคัญมาโดยตลอด เคล็ดลับสำคัญในการให้บริการของเรา คือ การอบรม และพัฒนาพนักงานให้มีความเชี่ยวชาญในเรื่องการทำความสะอาด และจัดสวยโดยเฉพาะ เพื่อประโยชน์สูงสุดในการให้บริการที่ประทับใจแก่ลูกค้าเป็นสำคัญ </p>
                </div>
            </div>
        </div>
    </div>
    <!-- / banner Guaranteed -->
    <!--about text block-->
    <div class="block">
        <div class="container">
            <h1 class="text-center h-decor">สมัครงานกับเรา</h1>
            {{-- <form class="contact-form" id="contactForm" method="post" novalidate="novalidate"> --}}
            {!! Form::open(['method' => 'POST', 'route' => ['store_work']]) !!}
                <div class="successform text-center">
                    <p>Your message was sent successfully!</p>
                </div>
                <div class="errorform text-center">
                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                </div>                
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="input-wrapper">
                            <input type="text" class="input-custom input-full" name="name" placeholder="ชื่อ - นามสกุล">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="input-wrapper">
                            <input type="text" class="input-custom input-full" name="tel" placeholder="เบอร์โทรศัพท์ติดต่อ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="input-wrapper">
                            <input type="text" class="input-custom input-full" name="position" placeholder="ตำแหน่งที่ต้องการสมัคร">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="input-wrapper">
                            <input type="text" class="input-custom input-full" name="salary" placeholder="เงินเดือนที่ต้องการ">
                        </div>
                    </div>
                </div>
                <div class="input-wrapper">
                    <textarea class="textarea-custom input-full" name="message" placeholder="รายละเอียดประสบการณ์การทำงาน"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn">ส่งข้อความ</button>
                </div>
            {!! Form::close() !!}
            {{-- </form> --}}
        </div>
    </div>
    <!--/about text block-->

@stop

@section('frontendjavascript') 
    
@endsection