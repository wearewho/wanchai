@inject('request', 'Illuminate\Http\Request')
@extends('frontend.layouts.app')

@section('frontendcontent')

    <section>
        <div class="gap">
            <div class="container">
                <div class="remove-ext5">
                    <div class="row">
                        @foreach ($blog as $item)
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="pst-box-styl1">
                                    <div class="pst-thmb-styl1">
                                        <span class="pst-dat">{{ date("d/m/Y", strtotime($item->created_at)) }}</span>
                                        <a href="{{ route('blog-detail',[$item->id]) }}" title="" itemprop="url"><img src="{{$item->imageblog[0]->image_url}}" alt="{{$item->imageblog[0]->image_name}}" itemprop="image"></a>
                                    </div>
                                    <div class="pst-inf-styl1">
                                        <h4 itemprop="headline"><a href="{{ route('blog-detail',[$item->id]) }}" title="" itemprop="url">{{ mb_substr($item->header, 0, 30) }}...</a></h4>
                                        <p itemprop="description">{{mb_substr($item->detail, 0, 100)}}...</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="pagi-wrp text-center">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#" title="" itemprop="url"><i class="fa fa-angle-left"></i> PREVIOUS</a></li>
                        <li class="page-item"><a class="page-link" href="#" title="" itemprop="url">1</a></li>
                        <li class="page-item active"><span>2</span></li>
                        <li class="page-item"><a class="page-link" href="#" title="" itemprop="url">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" title="" itemprop="url">4</a></li>
                        <li class="page-item"><a class="page-link" href="#" title="" itemprop="url">5</a></li>
                        <li class="page-item"><a class="page-link" href="#" title="" itemprop="url">6</a></li>
                        <li class="page-item"><a class="page-link" href="#" title="" itemprop="url">7</a></li>
                        <li class="page-item"><a class="page-link" href="#" title="" itemprop="url">NEXT <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div><!-- Pagination Wrap --> --}}
            </div>
        </div>
    </section>

@stop

@section('frontendjavascript') 
    
@endsection