@inject('request', 'Illuminate\Http\Request')
@extends('frontend.layouts.app')

@section('frontendcontent')

<div style="padding: 55px; ">
        <div class="cnt-frm-dta" style="margin-top: 45px;">
                <h2 itemprop="headline">นัดหมายเข้าชมรถ</h2>
                <div class="cnt-frm">
                    <form>
                        <div class="row mrg20">
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <input type="text" placeholder="ชื่อ">
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <input type="email" placeholder="เบอร์โทรติดต่อ">
                            </div>
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <input type="text" placeholder="ไลน์ไอดี">
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <input type="text" placeholder="วันที่สะดวกเข้ามาชมรถ">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <textarea placeholder="รายละเอียด"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="thm-btn" type="submit">ยืนยันนัดหมาย</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div><!-- Contact From Data -->
    </div>    
    <section>                
        <div class="gap">
            <div class="container">
                <div class="cnt-mp-inf-wrp">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="loc-mp" id="loc-mp" style="border:1px solid gray;"><h2 align="center">Map</h2></div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <div class="cnt-inf-wrp style2 remove-ext">
                                <div class="cnt-inf-bx brd-rd10">
                                    <i class="fa fa-map-marker"></i>
                                    <strong>Address</strong>
                                    <span>Spring Store London Oxford Street, 012 United Kingdom</span>
                                </div>
                                <div class="cnt-inf-bx brd-rd10">
                                    <i class="fa fa-phone"></i>
                                    <strong>Phone</strong>
                                    <span>Phone 01: (+032) 3456 7890</span>
                                    <span>Phone 02: (+032) 3427 7670</span>
                                </div>
                                <div class="cnt-inf-bx brd-rd10">
                                    <i class="fa fa-globe"></i>
                                    <strong>Social</strong>
                                    <a href="#" title="" itemprop="url"><i class="fa fa-facebook"></i> &nbsp; facebook.pncohm</a>
                                    <a href="#" title="" itemprop="url"><i class="fa fa-instagram"></i> &nbsp;instragram</a>
                                    <a href="#" title="" itemprop="url"><i class="fa fa-youtube"></i> &nbsp;youtube</a>
                                    <a href="#" title="" itemprop="url"><i class="fa fa-line"></i> &nbsp;line</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Contact Map & Info Wrap -->
            </div>
        </div>
    </section>

@stop

@section('frontendjavascript') 
    
@endsection