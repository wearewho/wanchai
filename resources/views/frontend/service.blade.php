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
            <h2 class="text-center h-lg h-decor">บริการของเรา</h2>
            <p class="text-center">วันชัย คลีนนิ่ง เซอร์วิส เรามีทีมงาน และผู้ชำนาญการเฉพาะด้านเกี่ยวกับการทำความสะอาด และจัดสวนโดยเฉพาะ ลูกค้าของเราจึงสามารถวางใจได้ทุกครั้งที่เรียกใช้บริการจากเรามาตลอด 24 ปี
            </p>
            <div class="row services-grid services-mobile-carousel">
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-1.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-1.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">บริการทำความสะอาดอาคาร สำนักงาน ที่อยู่อาศัย</h3>
                    <div class="service-box-text">
                        <ul align="left">
                            <li>บริการจัดส่งพนักงานทำความสะอาดประจำ</li>
                            <li>พนักงานได้รับการฝึกอบรบทั้งด้านการทำความสะอาด และงานบริการลูกค้า </li>
                            <li>บริการจัดส่งน้ำยา-อุปกรณ์เครื่องมือ ประจำหน่วยงานของลูกค้า</li>
                            <li>จัดโปรแกรมทำความสะอาดตามระยะเวลาที่กำหนด</li> 
                          </ul>
                    </div>
                    <a href="service-page-1.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-2.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-2.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">บริการทำความสะอาดพิเศษเฉพาะทาง</h3>
                    <div class="service-box-text">
                        <ul align="left">
                            <li>บริการงานทำความสะอาดที่ต้องการดูแลเป็นพิเศษ เช่น ห้องคลีนรูม, โรงงานอาหารแปรรูป </li>
                            <li>บริการงานทำความสะอาดกระจกภายในและภายนอกอาคาร</li>
                            <li>งานทำความสะอาดกำแพง เพดานสูง และพื้นอีพ็อกซี่</li>
                        </ul>
                    </div>
                    <a href="service-page-2.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-3.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-3.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">บริการทำความสะอาดบริเวณลานจอดรถ และสระว่ายน้ำ</h3>
                    <div class="service-box-text">
                        <ul align="left">
                            <li>บริการงานทำความสะอาดโดยเครื่องขัดล้าง หรือเครื่องฉีดน้ำแรงดันสูง</li>
                            <li>บริการงานทำความสะอาดทั้งแบบสัญญาประจำ และแบบรายครั้ง </li>
                        </ul>
                    </div>
                    <a href="service-page-3.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-4.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-4.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">บริการซักพรม เก้าอี้ โซฟา ผ้าม่าน</h3>
                    <div class="service-box-text">
                        <ul align="left">
                            <li>งานทำความสะอาดพรม เก้าอี้โซฟา ผ้าม่าน ด้วยเครื่องซักพรมที่มีคุณภาพ</li>
                            <li>จัดบริการทำความสะอาดทั้งแบบประจำ และแบบรายครั้ง</li>
                        </ul>
                    </div>
                    <a href="service-page-4.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-5.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-5.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">บริการทำความสะอาดถนนภายในโครงการคลังสินค้าต่างๆ</h3>
                    <div class="service-box-text">
                        <ul align="left">
                            <li>บริการดูแลทำความสะอาดถนน ภายในโครงการคลังสินค้าต่าง ทั้งแบบสัญญาประจำ และแบบรายครั้ง</li>
                        </ul>
                    </div>
                    <a href="service-page-5.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-6.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-6.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">บริการทำความสะอาดภายในโรงเรียน </h3>
                    <div class="service-box-text">
                        <ul align="left">
                            <li>บริการงานทำความสะอาดภายในโรงเรียน อาทิ โรงอาหาร อาคารเรียน</li>
                            <li>บริการงานทำความสะอาดทั้งแบบสัญญาประจำ และแบบรายครั้ง</li>
                        </ul>
                    </div>
                    <a href="service-page-6.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-9.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-9.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">บริการบำรุงสวน ตัดแต่งทรงพุ่ม ตัดหญ้า</h3>
                    <div class="service-box-text">
                        <ul align="left">
                            <li>บริการจัดส่งพนักงานทำความสะอาดประจำ </li>
                            <li>พนักงานได้รับการฝึกอบรบทั้งด้านการดูแลสวน และงานบริการลูกค้า </li>
                            <li>บริการจัดส่งอุปกรณ์เครื่องมือ-น้ำยา ประจำหน่วยงานของลูกค้า </li>
                            <li>จัดโปรแกรมดูแลสวนตามระยะเวลาที่กำหนด</li>
                            <li>จัดบริการดูแลสวนทั้งแบบสัญญาประจำ และแบบรายครั้ง</li>
                        </ul>
                    </div>
                    <a href="service-page-9.html" class="service-box-link">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /services grid -->
    <div class="block">
        <div class="container">
            <h2 class="text-center h-lg h-decor">แพ๊คเกจของเรา</h2>
            <p class="text-center">เรามีทีมงานมืออาชีพที่พร้อมให้บริการ คุณจึงสามารถเลือกใช้บริการได้ตามที่คุณสะดวก เพื่อประสิทธิภาพในการทำงาน และการเข้าถึงความต้องการของลูกค้าเป็นสำคัญ
            </p>
            <div class="row services-grid services-mobile-carousel">
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-7.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-7.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">บริการรายครั้ง</h3>
                    <div class="service-box-text">
                        เหมาะสำหรับผู้ที่ต้องการว่าจ้างเพียงครั้งเดียว หรือไม่ประจำในแต่ละบริการทำความสะอาดของเรา
                    </div>
                    <a href="service-page-7.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-8.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-8.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">บริการรายสัปดาห์ รายเดือน หรือรายปี</h3>
                    <div class="service-box-text">
                        เหมาะสำหรับผู้ที่ต้องการใช้บริการประจำ และกำหนดบริการที่แน่นอนในการทำความสะอาดแต่ละประเภท
                    </div>
                    <a href="service-page-8.html" class="service-box-link">READ MORE</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                    <a href="service-page-9.html" class="service-box-img">
                        <img src="{{asset('frontend/assets/images/content/service-img-9.jpg')}}" alt="Service">
                    </a>
                    <h3 class="service-box-title">บริการแบบพิเศษ</h3>
                    <div class="service-box-text">
                        เหมาะสำหรับผู้ที่ต้องการบริการแบบเฉพาะเจาะจง เช่น การทำความสะอาดแบบ Big Cleaning Day หรือ การทำความสะอาดแบบพิเศษเฉพาะทางเป็นพิเศษ
                    </div>
                    <a href="service-page-9.html" class="service-box-link">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- banner -->
    <div class="block fullwidth-sm no-pad">
        <div class="container">
            <div class="banner-text">
                <div>ติดต่อสอบถามบริการของเราได้ตลอดในเวลาทำการ</div>
                <div><i class="icon icon-technology"></i><b>02-989-4922</b></div>
            </div>
        </div>
    </div>
    <!-- / banner -->
@stop

@section('frontendjavascript') 
    
@endsection