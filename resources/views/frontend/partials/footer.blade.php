
    <footer>
        <div class="gap drk-bg top-spac80 bottom-spac80">
            <div class="container">
                <div class="ftr-wrp remove-ext5">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="wdgt">
                                <div class="logo"><a href="index.html" title="" itemprop="url"><img src="{{ url('frontend/assets/images/porjaiwhitelogo.png') }}" alt="logo-lgt.png" itemprop="image"></a></div>
                                {{-- <p itemprop="description"> </p> --}}
                                <br><br>
                                <ul class="abt-cnt-lst">
                                    <li><i class="fa fa-map-marker"></i> {{$footer[0]->address1." ".$footer[0]->address2." ".$footer[0]->address3." ".$footer[0]->address4." ".$footer[0]->address5}}</li>
                                    <li><i class="fa fa-phone"></i> Phone: {{$footer[0]->phone1}}</li>
                                    <li><i class="fa fa-phone"></i> Phone: {{$footer[0]->phone2}}</li>
                                    {{-- <li><i class="fa fa-envelope"></i> Email: <a href="#" title="" itemprop="url">info@example.com</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="wdgt">
                                
                                <h4 itemprop="headline">เลือกชมรถ</h4>
                                <div class="wdgt-pst-wrp">
                                    @if (!empty($footer[1][0]))
                                        <div class="wdgt-pst">
                                            <a href="{{ route('blog-detail',[$footer[1][0]->id]) }}" title="" itemprop="url"><img src="{{ url($footer[1][0]->imageblog[0]->image_url) }}" width="60" height="60" alt="{{ $footer[1][0]->imageblog[0]->image_name }}" itemprop="image"></a>
                                            <div class="wdgt-inf">
                                                <h4 itemprop="headline"><a href="{{ route('blog-detail',[$footer[1][0]->id]) }}" title="" itemprop="url">{{  mb_substr($footer[1][0]->header, 0, 35) }}...</a></h4>
                                                <span><i class="fa fa-clock-o"></i>{{ date("d/m/Y", strtotime($footer[1][0]->created_at)) }}</span>
                                            </div>
                                        </div>
                                    @endif
                                    
                                    @if (!empty($footer[1][1]))
                                        <div class="wdgt-pst">
                                            <a href="{{ route('blog-detail',[$footer[1][1]->id]) }}" title="" itemprop="url"><img src="{{ url($footer[1][1]->imageblog[0]->image_url) }}" width="60" height="60" alt="{{ $footer[1][1]->imageblog[0]->image_name }}" itemprop="image"></a>
                                            <div class="wdgt-inf">
                                                <h4 itemprop="headline"><a href="{{ route('blog-detail',[$footer[1][1]->id]) }}" title="" itemprop="url">{{  mb_substr($footer[1][1]->header, 0, 35) }}...</a></h4>
                                                <span><i class="fa fa-clock-o"></i>{{ date("d/m/Y", strtotime($footer[1][1]->created_at)) }}</span>
                                            </div>
                                        </div>
                                    @endif
                                    
                                    @if (!empty($footer[1][2]))
                                        <div class="wdgt-pst">
                                            <a href="{{ route('blog-detail',[$footer[1][2]->id]) }}" title="" itemprop="url"><img src="{{ url($footer[1][2]->imageblog[0]->image_url) }}" width="60" height="60" alt="{{ $footer[1][2]->imageblog[0]->image_name }}" itemprop="image"></a>
                                            <div class="wdgt-inf">
                                                <h4 itemprop="headline"><a href="{{ route('blog-detail',[$footer[1][2]->id]) }}" title="" itemprop="url">{{  mb_substr($footer[1][2]->header, 0, 35) }}...</a></h4>
                                                <span><i class="fa fa-clock-o"></i>{{ date("d/m/Y", strtotime($footer[1][2]->created_at)) }}</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="wdgt">
                                <br>
                                <br>
                                @if (!empty($footer[1][3]))
                                    <div class="wdgt-pst">
                                        <a href="{{ route('blog-detail',[$footer[1][3]->id]) }}" title="" itemprop="url"><img src="{{ url($footer[1][3]->imageblog[0]->image_url) }}" width="60" height="60" alt="{{ $footer[1][3]->imageblog[0]->image_name }}" itemprop="image"></a>
                                        <div class="wdgt-inf">
                                            <h4 itemprop="headline"><a href="{{ route('blog-detail',[$footer[1][3]->id]) }}" title="" itemprop="url">{{  mb_substr($footer[1][3]->header, 0, 35) }}...</a></h4>
                                            <span><i class="fa fa-clock-o"></i>{{ date("d/m/Y", strtotime($footer[1][3]->created_at)) }}</span>
                                        </div>
                                    </div>
                                @endif
                                
                                @if (!empty($footer[1][4]))
                                    <div class="wdgt-pst">
                                        <a href="{{ route('blog-detail',[$footer[1][4]->id]) }}" title="" itemprop="url"><img src="{{ url($footer[1][4]->imageblog[0]->image_url) }}" width="60" height="60" alt="{{ $footer[1][4]->imageblog[0]->image_name }}" itemprop="image"></a>
                                        <div class="wdgt-inf">
                                            <h4 itemprop="headline"><a href="{{ route('blog-detail',[$footer[1][4]->id]) }}" title="" itemprop="url">{{  mb_substr($footer[1][4]->header, 0, 35) }}...</a></h4>
                                            <span><i class="fa fa-clock-o"></i>{{ date("d/m/Y", strtotime($footer[1][4]->created_at)) }}</span>
                                        </div>
                                    </div>
                                @endif
                                
                                @if (!empty($footer[1][5]))
                                    <div class="wdgt-pst">
                                        <a href="{{ route('blog-detail',[$footer[1][5]->id]) }}" title="" itemprop="url"><img src="{{ url($footer[1][5]->imageblog[0]->image_url) }}" width="60" height="60" alt="{{ $footer[1][5]->imageblog[0]->image_name }}" itemprop="image"></a>
                                        <div class="wdgt-inf">
                                            <h4 itemprop="headline"><a href="{{ route('blog-detail',[$footer[1][5]->id]) }}" title="" itemprop="url">{{  mb_substr($footer[1][5]->header, 0, 35) }}...</a></h4>
                                            <span><i class="fa fa-clock-o"></i>{{ date("d/m/Y", strtotime($footer[1][5]->created_at)) }}</span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="wdgt">
                                <h4 itemprop="headline">รีวิวจากลูกค้า</h4>
                                <div class="wdgt-gal-car owl-carousel">
                                    <div class="wdgt-gal-itm">
                                        <div class="row mrg">
                                            @if (!empty($footer[2][0]))
                                                <div class="col-md-6 col-sm-6 col-lg-6"><img src="{{ url($footer[2][0]->imagegallery[0]->image_url) }}" width="135" height="104" alt="{{ $footer[2][0]->imagegallery[0]->image_name }}" itemprop="image"></div>
                                            @endif
                                            @if (!empty($footer[2][1]))
                                                <div class="col-md-6 col-sm-6 col-lg-6"><img src="{{ url($footer[2][1]->imagegallery[0]->image_url) }}" width="135" height="104" alt="{{ $footer[2][1]->imagegallery[0]->image_name }}" itemprop="image"></div>
                                            @endif
                                            @if (!empty($footer[2][2]))
                                                <div class="col-md-6 col-sm-6 col-lg-6"><img src="{{ url($footer[2][2]->imagegallery[0]->image_url) }}" width="135" height="104" alt="{{ $footer[2][2]->imagegallery[0]->image_name }}" itemprop="image"></div>
                                            @endif
                                            @if (!empty($footer[2][3]))
                                                <div class="col-md-6 col-sm-6 col-lg-6"><img src="{{ url($footer[2][3]->imagegallery[0]->image_url) }}" width="135" height="104" alt="{{ $footer[2][3]->imagegallery[0]->image_name }}" itemprop="image"></div>
                                            @endif
                                        </div>
                                    </div>
                                    @if (!empty($footer[2][4]) || !empty($footer[2][5]) || !empty($footer[2][6]) || !empty($footer[2][7]))
                                        <div class="wdgt-gal-itm">
                                            <div class="row mrg">
                                                @if (!empty($footer[2][4]))
                                                    <div class="col-md-6 col-sm-6 col-lg-6"><img src="{{ url($footer[2][4]->imagegallery[0]->image_url) }}" width="135" height="104" alt="{{ $footer[2][4]->imagegallery[0]->image_name }}" itemprop="image"></div>
                                                @endif
                                                @if (!empty($footer[2][5]))
                                                    <div class="col-md-6 col-sm-6 col-lg-6"><img src="{{ url($footer[2][5]->imagegallery[0]->image_url) }}" width="135" height="104" alt="{{ $footer[2][5]->imagegallery[0]->image_name }}" itemprop="image"></div>
                                                @endif
                                                @if (!empty($footer[2][6]))
                                                    <div class="col-md-6 col-sm-6 col-lg-6"><img src="{{ url($footer[2][6]->imagegallery[0]->image_url) }}" width="135" height="104" alt="{{ $footer[2][6]->imagegallery[0]->image_name }}" itemprop="image"></div>
                                                @endif
                                                @if (!empty($footer[2][7]))
                                                    <div class="col-md-6 col-sm-6 col-lg-6"><img src="{{ url($footer[2][7]->imagegallery[0]->image_url) }}" width="135" height="104" alt="{{ $footer[2][7]->imagegallery[0]->image_name }}" itemprop="image"></div>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Footer Wrap -->
            </div>
        </div>
    </footer><!-- Footer -->
    <div class="btm-br text-center">
        <div class="container">
            <p itemprop="description">&copy; 2019 Porjai Auto.Co.,Ltd. Designed & Powered By <a href="https://justmedia.co.th/" title="justmedia" itemprop="url" target="_blank">Just Media</a></p>
        </div>
    </div><!-- Bottom Bar -->