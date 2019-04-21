@inject('request', 'Illuminate\Http\Request')
@extends('frontend.layouts.app')

@section('frontendcontent')

    <section>
        <div class="gap">
            <div class="container">
                <div class="ext-wd200 fltr-wrp">
                    <div class="fltr-inr">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="fltr-dta text-center">
                                    <div class="row masonry mrg25">
                                        @foreach ($gallery as $item)
                                            <div class="col-md-4 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                                <div class="prtfl-box">
                                                    <img src="{{$item->imagegallery[0]->image_url}}" style="width:354px;height:336;" alt="{{$item->imagegallery[0]->image_name}}" itemprop="image">
                                                    <div class="prtfl-inf">
                                                        <a href="{{$item->imagegallery[0]->image_url}}" data-fancybox="gallery" title="" itemprop="url"><i class="flaticon-add"></i></a>
                                                        <h5 itemprop="headline"><a href="portfolio-detail4.html" title="" itemprop="url">{{$item->detail}}</a></h5>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('frontendjavascript') 
    
@endsection