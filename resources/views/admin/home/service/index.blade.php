@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
{!! Form::model($service, ['id'=>'f1', 'method' => 'PUT', 'route' => ['admin.managehome.update_service', $service->id], 'files' => true]) !!}
    <div class="box box-danger"> 
        <div class="box-header with-border">
            <h3 class="box-title">@lang('global.website-management.fields.service_header')</h3>
        </div>
        <div class="box-body">
                @if($message = Session::get('success'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fa fa-check"></i>{{$message}}</h5>
                        </div>
                    </div>
                </div>
                @endif
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                <li id="t1" class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">@lang('global.website-management.fields.tap1')</a></li>
                <li id="t2" class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">@lang('global.website-management.fields.tap2')</a></li>
                <li id="t3" class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">@lang('global.website-management.fields.tap3')</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <p><input type="text" id="document_header" name="document_header" class="form-control" 
                            onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"
                            placeholder="@lang('global.website-management.fields.blog_header')" 
                            value="{{$service->document_header}}" >
                        </p>
                        <p><textarea  name="document_detail" id="document_detail" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)" class="form-control" rows="8" placeholder="@lang('global.website-management.fields.detail')">{{$service->document_detail}}</textarea></p>  
                    </div>
                    <div class="tab-pane" id="tab_2">
                        <p><input type="text" id="promotion_header" name="promotion_header" class="form-control"
                            onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)" 
                            placeholder="@lang('global.website-management.fields.blog_header')" 
                            value="{{$service->promotion_header}}" >
                        </p>
                        <p><textarea  name="promotion_detail" id="promotion_detail" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)" class="form-control" rows="8" placeholder="@lang('global.website-management.fields.detail')">{{$service->promotion_detail}}</textarea></p>
                    </div>
                    <div class="tab-pane" id="tab_3">
                        <p><input type="text" id="service_header" name="service_header" class="form-control" 
                            onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)"
                            placeholder="@lang('global.website-management.fields.blog_header')" 
                            value="{{$service->service_header}}" >
                        </p>
                        <p><textarea  name="service_detail" id="service_detail" onclick="ClickTextboxWarning(this);" onblur="BlurTextbox(this)" class="form-control" rows="8" placeholder="@lang('global.website-management.fields.detail')" >{{$service->service_detail}}</textarea></p>
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

        $(document).on('ready', function() {

        });


        $('#f1').submit(function(event){
           
            var document_header = $("#document_header").val();
            var document_detail = $("#document_detail").val();
            var promotion_header = $("#promotion_header").val();
            var promotion_detail = $("#promotion_detail").val();
            var service_header = $("#service_header").val();
            var service_detail = $("#service_detail").val();

            if(document_header==""){
                $("#tab_1").addClass('active');
                $("#tab_2").removeClass('active');
                $("#tab_3").removeClass('active');
                $("#t1").addClass('active');
                $("#t2").removeClass('active');
                $("#t3").removeClass('active');
                $("#document_header").focus();
                alert("โปรดกรอกข้อมูลให้ครบ");
                event.preventDefault();
            }else if(document_detail==""){
                $("#t1").addClass('active');
                $("#t2").removeClass('active');
                $("#t3").removeClass('active');
                $("#tab_1").addClass('active');
                $("#tab_2").removeClass('active');
                $("#tab_3").removeClass('active');
                $("#document_detail").focus();
                alert("โปรดกรอกข้อมูลให้ครบ");
                event.preventDefault();
            }else if(promotion_header==""){
                $("#t2").addClass('active');
                $("#t1").removeClass('active');
                $("#t3").removeClass('active');
                $("#tab_2").addClass('active');
                $("#tab_1").removeClass('active');
                $("#tab_3").removeClass('active');
                $("#promotion_header").focus();
                alert("โปรดกรอกข้อมูลให้ครบ"); 
                event.preventDefault();
            }else if(promotion_detail==""){
                
                $("#t2").addClass('active');
                $("#t1").removeClass('active');
                $("#t3").removeClass('active');
                $("#tab_2").addClass('active');
                $("#tab_1").removeClass('active');
                $("#tab_3").removeClass('active');
                $("#promotion_detail").focus();
                alert("โปรดกรอกข้อมูลให้ครบ");
                event.preventDefault();              
            }else if(service_header==""){
                
               $("#t3").addClass('active');
               $("#t2").removeClass('active');
               $("#t1").removeClass('active');
               $("#tab_3").addClass('active');
               $("#tab_2").removeClass('active');
               $("#tab_1").removeClass('active');
               $("#service_header").focus();
               alert("โปรดกรอกข้อมูลให้ครบ");
               event.preventDefault();               
            }else if(service_detail==""){
                
                $("#t3").addClass('active');
                $("#t2").removeClass('active');
                $("#t1").removeClass('active');
                $("#tab_3").addClass('active');
                $("#tab_2").removeClass('active');
                $("#tab_1").removeClass('active');
                $("#service_detail").focus();
                alert("โปรดกรอกข้อมูลให้ครบ");  
                event.preventDefault();             
            }
        });
        $(document).ready(function(){
            $('.alert-dismissible').fadeOut(2500);
        });
    </script>    
@endsection
