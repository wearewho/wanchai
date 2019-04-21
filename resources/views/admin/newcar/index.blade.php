@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
{!! Form::model($newcar, ['id'=>'f1', 'method' => 'PUT', 'route' => ['admin.managenewcar.update', $newcar->id]]) !!}
    <div class="box box-danger"> 
        <div class="box-header with-border">
            <h3 class="box-title">@lang('global.website-management.fields.newcar_header')</h3>
        </div>
        <div class="box-body">
            @if($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{$message}}</h4>
            </div>
            @endif
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                <li id="t1" class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">@lang('global.website-management.fields.newcar_tap')</a></li>
                <li id="t2" class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">@lang('global.website-management.fields.property_tap')</a></li>
                <li id="t3" class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">@lang('global.website-management.fields.review_tap')</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <p><input type="text" id="newcar_header" name="newcar_header" class="form-control" 
                            onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"
                            placeholder="@lang('global.website-management.fields.blog_header')" 
                            value="{{$newcar->newcar_header}}" >
                        </p>
                        <p><textarea  name="newcar_detail" id="newcar_detail" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)" class="form-control" rows="8" placeholder="@lang('global.website-management.fields.detail')">{{$newcar->newcar_detail}}</textarea></p>  
                    </div>
                    <div class="tab-pane" id="tab_2">
                        <p><input type="text" id="property_header" name="property_header" class="form-control"
                            onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)" 
                            placeholder="@lang('global.website-management.fields.blog_header')" 
                            value="{{$newcar->property_header}}" >
                        </p>
                        <p><textarea  name="property_detail" id="property_detail" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)" class="form-control" rows="8" placeholder="@lang('global.website-management.fields.detail')">{{$newcar->property_detail}}</textarea></p>
                    </div>
                    <div class="tab-pane" id="tab_3">
                        <p><input type="text" id="review_header" name="review_header" class="form-control" 
                            onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"
                            placeholder="@lang('global.website-management.fields.blog_header')" 
                            value="{{$newcar->review_header}}" >
                        </p>
                        <p><textarea  name="review_detail" id="review_detail" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)" class="form-control" rows="8" placeholder="@lang('global.website-management.fields.detail')" >{{$newcar->review_detail}}</textarea></p>
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

        $('#f1').submit(function(event){
           
            var newcar_header = $("#newcar_header").val();
            var newcar_detail = $("#newcar_detail").val();
            var property_header = $("#property_header").val();
            var property_detail = $("#property_detail").val();
            var review_header = $("#review_header").val();
            var review_detail = $("#review_detail").val();

            if(newcar_header==""){
                $("#tab_1").addClass('active');
                $("#tab_2").removeClass('active');
                $("#tab_3").removeClass('active');
                $("#t1").addClass('active');
                $("#t2").removeClass('active');
                $("#t3").removeClass('active');
                $("#newcar_header").focus();
                alert("โปรดกรอกข้อมูลให้ครบ");
                event.preventDefault();
            }else if(newcar_detail==""){
                $("#t1").addClass('active');
                $("#t2").removeClass('active');
                $("#t3").removeClass('active');
                $("#tab_1").addClass('active');
                $("#tab_2").removeClass('active');
                $("#tab_3").removeClass('active');
                $("#newcar_detail").focus();
                alert("โปรดกรอกข้อมูลให้ครบ");
                event.preventDefault();
            }else if(property_header==""){
                $("#t2").addClass('active');
                $("#t1").removeClass('active');
                $("#t3").removeClass('active');
                $("#tab_2").addClass('active');
                $("#tab_1").removeClass('active');
                $("#tab_3").removeClass('active');
                $("#property_header").focus();
                alert("โปรดกรอกข้อมูลให้ครบ"); 
                event.preventDefault();
            }else if(property_detail==""){
                
                $("#t2").addClass('active');
                $("#t1").removeClass('active');
                $("#t3").removeClass('active');
                $("#tab_2").addClass('active');
                $("#tab_1").removeClass('active');
                $("#tab_3").removeClass('active');
                $("#property_detail").focus();
                alert("โปรดกรอกข้อมูลให้ครบ");
                event.preventDefault();              
            }else if(review_header==""){
                
               $("#t3").addClass('active');
               $("#t2").removeClass('active');
               $("#t1").removeClass('active');
               $("#tab_3").addClass('active');
               $("#tab_2").removeClass('active');
               $("#tab_1").removeClass('active');
               $("#review_header").focus();
               alert("โปรดกรอกข้อมูลให้ครบ");
               event.preventDefault();               
            }else if(review_detail==""){
                
                $("#t3").addClass('active');
                $("#t2").removeClass('active');
                $("#t1").removeClass('active');
                $("#tab_3").addClass('active');
                $("#tab_2").removeClass('active');
                $("#tab_1").removeClass('active');
                $("#review_detail").focus();
                alert("โปรดกรอกข้อมูลให้ครบ");  
                event.preventDefault();             
            }
        });
    </script>    
@endsection
