@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
{!! Form::model($newcar, ['id'=>'f1', 'method' => 'PUT', 'route' => ['admin.managenewcar.update', $newcar->id]]) !!}
    <div class="box box-danger"> 
        <div class="box-header with-border">
            <h3 class="box-title">@lang('global.website-management.fields.newcar_header')</h3>
        </div>
        <div class="box-body">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $errors)
                    <li>{{$errors}}</li>
                @endforeach
                </ul>
            </div>    
            @endif
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">@lang('global.website-management.fields.newcar_tap')</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">@lang('global.website-management.fields.property_tap')</a></li>
                <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">@lang('global.website-management.fields.review_tap')</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <p><input type="text" name="newcar_header" class="form-control" 
                            onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"
                            placeholder="@lang('global.website-management.fields.blog_header')" 
                            value="{{$newcar->newcar_header}}" >
                        </p>
                        <p><textarea name="newcar_detail" id="" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)" class="form-control" rows="8" placeholder="@lang('global.website-management.fields.detail')">{{$newcar->newcar_detail}}</textarea></p>  
                    </div>
                    <div class="tab-pane" id="tab_2">
                        <p><input type="text" name="property_header" class="form-control"
                            onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)" 
                            placeholder="@lang('global.website-management.fields.blog_header')"
                            value="{{$newcar->property_header}}" >
                        </p>
                        <p><textarea name="property_detail" id="" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)" class="form-control" rows="8" placeholder="@lang('global.website-management.fields.detail')">{{$newcar->property_detail}}</textarea></p>
                    </div>
                    <div class="tab-pane" id="tab_3">
                        <p><input type="text" name="review_header" class="form-control" 
                            onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"
                            placeholder="@lang('global.website-management.fields.blog_header')"
                            value="{{$newcar->review_header}}" >
                        </p>
                        <p><textarea name="review_detail" id="" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)" class="form-control" rows="8" placeholder="@lang('global.website-management.fields.detail')" >{{$newcar->review_detail}}</textarea></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box box-footer">
            <p><button type="submit" class="btn btn-danger">@lang('global.app_update')</button></p> 
        </div>
    </div>
{!! Form::close() !!}
@stop

@section('javascript')
    <script>
        function ClickTextboxWarning(x)
        {
            $(x).css("border-color","#f39c12");
        }
        function BlurTextbox(x)
        {
            $(x).removeAttr("style");
        }
       
    </script>    
@endsection
