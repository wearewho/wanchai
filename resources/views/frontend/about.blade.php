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
<div class="block fullwidth no-pad">
    <div class="container">
        <h1 class="text-center h-decor">รู้จัก วันชัย คลีนนิ่ง เซอร์วิส</h1>
        <div class="row-flex-text">
            <div class="col-50">
                <img src="{{asset('frontend/assets/images/content/about-page-img-1.jpg')}}" class="img-fullwidth" alt="About Us">
            </div>
            <div class="col-50 bg-text">
                <div class="bg-text-inside">
                    <h3>ผู้เชี่ยวชาญเรื่องการทำความสะอาด และผู้ช่วยเรื่องงการดูแลสวนคู่คนไทยมามากกว่า 20 ปี </h3>
                    <p>ด้วยประสบการณ์กว่า 24 ปีในการดำเนินธุรกิจให้บริการทำความสะอาด และการดูแลสวนแบบครบวงจร เรายึดถือเรื่องประสิทธิภาพ และความต้องการของลูกค้าเป็นสำคัญมาโดยตลอด ลูกค้าของเราทุกท่านจึงให้ความเชื่อใจ ไว้วางใจ และใช้บริการจากทางเรามาอย่างยาวนาน เคล็ดลับสำคัญในการให้บริการของเรา คือ การอบรม และพัฒนาพนักงานให้มีความเชี่ยวชาญในเรื่องการทำความสะอาด และจัดสวนโดยเฉพาะ เพื่อประโยชน์สูงสุดในการให้บริการที่ประทับใจแก่ลูกค้าเป็นสำคัญ</p>
                    <p>นอกจากนี้เรายังใส่ใจเรื่องอุปกรณ์ที่มีประสิทธิภาพต่อการให้บริการแต่ละประเภทอย่างเหมาะสมไม่ว่าจะเป็นการบริการทำความสะอาด และดูแลสวนกับหน่วยงานต่างๆ เช่น อาคารสำนักงาน, คลังสินค้า, อพาร์ทเม้นท์, คอนโดมิเนี่ยม, ห้องคลีนรูม  หรือ ตามบ้านเรือนที่อยู่อาศัยต่างๆ คุณจึงวางใจได้เมื่อต้องการเรียกหามืออาชีพในการให้บริการทำความสะอาดจากเรา</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/about text block-->
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
<!--about text block-->
<div class="block">
    <div class="container">
        <h1 class="text-center h-decor">เกี่ยวกับเรา</h1>
        <p class="text-center">ความพึงพอใจของลูกค้าตลอด 24 ปี เกิดจากความใส่ใจในการทำงานของเรา</p>
        <div class="divider-sm"></div>
        <div class="row">
            <div class="col-md-6">
                <div class="text-center">
                    <img src="{{asset('frontend/assets/images/content/about-page-img-2.jpg')}}" class="img-responsive" alt="About Us">
                </div>
            </div>
            <div class="divider-md visible-sm visible-xs"></div>
            <div class="col-md-6">
                <ul class="marker-list">
                    <li><b>บริษัท วันชัย คลีนนิ่ง เซอร์วิส จำกัด ก่อตั้งขึ้นเมื่อ วันที่ 28 เมษายน พ.ศ. 2538 </b></li>
                    <li><b>ดำเนินธุรกิจเกี่ยวกับการให้บริการทำความสะอาด และบริการดูแลสวนแบบครบวงจรจากผู้บริหารที่มีประสบการณ์ มีความชำนาญการ และมีความพร้อมที่จะให้บริการงานทำความสะอาดแก่ลูกค้าอย่างมีประสิทธิภาพด้วย</b></li>
                    <li><b>ดำเนินกิจการด้วยปณิธานในการคัดเลือก สร้างสรรค์ และพัฒนาทีมงานที่มีประสิทธิภาพ เพื่อวัตถุประสงค์ในการมุ่งเน้นการตอบสนองของลูกค้าที่ต้องการใช้บริการการทำความสะอาดในทุกรูปแบบไม่ว่าจะเป็นการให้บริการทั้งในส่วนของการทำความสะอาดแบบต่างๆ และการดูแลสวนครบวงจร</b></li>
                    <li><b>นอกจากนี้บริษัทฯ ยังไม่เคยหยุดนิ่งเราพัฒนาในเรื่องของอุปกรณ์ในการทำความสะอาดที่ทันสมัย และพร้อมตอบสนองต่อการให้บริการอย่างมีประสิทธิภาพเสมอ</b></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/about text block-->
<!--about text block with icons -->
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>วิสัยทัศน์</h2>
                <div class="text-icon-hor">
                    <div class="text-icon-hor-icon">
                        <i class="icon icon-target-lined"></i>
                    </div>
                    <div class="text-icon-hor-text">
                        ผู้นำด้านธุรกิจงานบริการทำความสะอาดและบริการดูแลสวนแบบครบวงจร โดยคำนึงถึงประสิทธิภาพ และความต้องการของลูกค้าสูงสุด
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h2>พันธกิจ</h2>
                <div class="text-icon-hor">
                    <div class="text-icon-hor-icon">
                        <i class="icon icon-brush-lined"></i>
                    </div>
                    <div class="text-icon-hor-text">
                        มุ่งสู่การเป็นมืออาชีพที่ได้รับการยอมรับ และครองใจลูกค้าอย่างยาวนานต่อไป โดยที่ไม่หยุดพัฒนาตนเองเพื่อประโยชน์สูงสุดของลูกค้าที่เข้ามาใช้บริการของเรา
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/about text block with icons -->

@stop

@section('frontendjavascript') 

        
    <script>
       //--Map--// 
        var position={lat:{{$contact->lat_map}},lng:{{$contact->lng_map}} };
        function initMap(){
            var map = new google.maps.Map(document.getElementById('loc-mp'),{
                zoom: 13,
                center:position
            });
            var marker = new google.maps.Marker({
                position: position,
                map: map,
                title:"พอใจ ออโต้คาร์",
                draggable:true
            });

            var info = new google.maps.InfoWindow({
                content : '<p align="center" style="width:200px;color:#E949A1;"><b>พอใจ ออโต้คาร์</b></p>'
            });
            info.open(map,marker);
            var infoedit = new google.maps.InfoWindow({
                content : '<p align="center" style="width:200px; color:red; font-family:"Segoe UI Web";><b>>>ตำแหน่งใหม่<<</b></p>'
            });
        }//--End Map--//   

        $(document).ready(function () {
            $('#confirm').click(function(e){   

                let name = $('#name').val();
                let tel = $('#tel').val();
                let line = $('#line').val();
                let appoint = $('#appoint').val();
                let detail = $('#detail').val();

                if (name == "") {
                    swal("กรุณากรอกชื่อ","","warning");
                } else if (tel == "") {
                    swal("กรุณากรอกเบอร์ติดต่อ","","warning");
                } else if (line == "") {
                    swal("กรุณากรอกไอดีไลน์","","warning");
                } else if (appoint == "") {
                    swal("กรุณากรอกวันที่สะดวกเข้ามาชมรถ","","warning");
                } else if (detail == "") {
                    swal("กรุณากรอกรายละเอียด","","warning");
                } else {
                    $.ajax({ 
                        url: '{{url("inquiry")}}', 
                        type: "POST",
                        data: { "name" : name, "tel" : tel, "appoint" : appoint, "detail" : detail, "line" : line},
                        success: function(data, statusText, resObject) {
                            
                            if (data) {    

                                if(data === true){
                                    swal("นัดหมายสำเร็จ โปรดรอการติดต่อกลับ","","success");
                                    $('#name').val("");
                                    $('#tel').val("");
                                    $('#line').val("");
                                    $('#appoint').val("");
                                    $('#detail').val("");
                                }else{
                                    swal("เกิดข้อผิดพลาด กรุณาลองใหม่","","error");
                                }
                                                                
                            }
                            return false;
                        },
                        error: function (jqXHR, exception) {
                            getErrorMessage(jqXHR, exception);
                        },
                        complete: function() {      
                            // Do something when success or error.                                           
                        }
                    });
                }

            })
            
            
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBINVRX-GNF4z1l8CPFrJL5dhIGY96a9-k&callback=initMap"></script>
@endsection