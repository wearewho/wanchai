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
        <h1 class="text-center h-decor">About Our Company</h1>
        <div class="row-flex-text">
            <div class="col-50">
                <img src="{{asset('frontend/assets/images/content/about-page-img-1.jpg')}}" class="img-fullwidth" alt="About Us">
            </div>
            <div class="col-50 bg-text">
                <div class="bg-text-inside">
                    <h3>More than 10 years of cleaning experience</h3>
                    <p>Cleaning Company service is a fully integrated janitorial cleaning services company that provides comprehensive, high quality, reliable cleaning solutions to commercial, corporate, industrial and residential clients.</p>
                    <p>Our diligent management and work ethic are central to Cleaning Company service business philosophy and critical to delivering consistent, quality cleaning services. We pride ourselves on making our management accountable to the client through direct access and interaction with our managing director.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/about text block-->
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
<!--about text block-->
<div class="block">
    <div class="container">
        <h1 class="text-center h-decor">Our Values</h1>
        <p class="text-center">Our goal is Your satisfaction (of course after our cleaning work). Office Phone works around the clock (24/7).</p>
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
                    <li><b>Client oriented:</b> We serve our clients as if we were serving ourselves. We value their feedback and we use it to improve our work.</li>
                    <li><b>Eco-Friendly Oriented:</b> We carefully choose the best and most natural cleaning products that give amazing results.</li>
                    <li><b>Excellence and Innovation:</b> We provide training to our personnel in order to ensure the high standard of service. We stay up-to-date on the latest innovations in eco-friendly products and technologies, allowing us to bring the best in to our clients’ homes.</li>
                    <li>E<b>xpansion / Growth:</b> we make ourselves known in the community; we create long term relations, while constantly expanding. Therefore, we are always bringing in more people to work for us.</li>
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
                <h2>Our Mission</h2>
                <div class="text-icon-hor">
                    <div class="text-icon-hor-icon">
                        <i class="icon icon-target-lined"></i>
                    </div>
                    <div class="text-icon-hor-text">
                        Aims to be a national market leader in the provision of cleaning services delivering reliable, quality, cost effective cleaning solutions to our customers
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h2>Our Vision</h2>
                <div class="text-icon-hor">
                    <div class="text-icon-hor-icon">
                        <i class="icon icon-brush-lined"></i>
                    </div>
                    <div class="text-icon-hor-text">
                        We have more than 215 franchise locations across the United States and Canada. All of them are committed to the same common values and principles.
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