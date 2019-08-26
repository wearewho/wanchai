@extends('layouts.app')

@section('content')
    {!! Form::open(['method' => 'POST', 'route' => ['admin.managehome.store_service'], 'files' => true]) !!}
    
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><b>@lang('global.app_create') @lang('global.website-management.fields.home_service')</b></h3>
            <div class="box-tools">
                           
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-10 form-group">
                    {!! Form::label('header', 'Header*', ['class' => 'control-label']) !!}
                    {!! Form::text('header', old('header'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('header'))
                        <p class="help-block">
                            {{ $errors->first('header') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-2 form-group">
                    {!! Form::label('status', 'Status*', ['class' => 'control-label']) !!}
                    <select id="status" class="form-control" name="status">
                        <option value="publish" selected>@lang('global.website-management.fields.home_promotion_publish')</option>
                        <option value="unpublish">@lang('global.website-management.fields.home_promotion_unpublish')</option>
                    </select>
                    <p class="help-block"></p>
                    @if($errors->has('status'))
                        <p class="help-block">
                            {{ $errors->first('status') }}
                        </p>
                    @endif
                </div>
            </div>       
            <div class="row">                
                <div class="col-xs-12 form-group">
                    {!! Form::label('detail', 'Details*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('detail', old('detail'), ['class' => 'form-control', 'placeholder' => '', 'required' => '', 'rows' => 4, 'cols' => 12, 'style' => 'resize:none']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('detail'))
                        <p class="help-block">
                            {{ $errors->first('detail') }}
                        </p>
                    @endif
                </div>
            </div>     
            <div class="row">
                <div class="col-xs-12 form-group">
                    <div class="file-loading">
                        <input id="home_service" name="home_service" type="file" accept="image/*" data-browse-on-zone-click="true" data-show-upload="false">
                    </div> 
                </div>
            </div>        
        </div>
        <div class="box-footer">            
            {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
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

            var images = $.parseJSON('<?php echo json_encode('');?>');
            var type = '';
            let imgUrl = "";
            let imgDetail = "";

            if (images.image_url != null) {
                imgUrl = "<img class='kv-preview-data file-preview-image' src='../../../"+images.image_url+"'>";
                imgDetail = {};
                imgDetail.caption = images.image_name;
                imgDetail.size = images.image_size;
                imgDetail.width = "120px";
                imgDetail.key = 1;
            }
        
            if (images.image_url == null) {
                $('#home_service').prop('required', true);
            } else {
                $('#home_service').removeProp('required');
            }
            
            $("#home_service").fileinput({
                maxFileCount: 1,
                validateInitialCount: true,
                overwriteInitial: false,
                initialPreview: imgUrl,
                initialPreviewConfig: imgDetail,
                deleteUrl: '{{url("admin/destroyImageNewcar")}}',
                allowedFileExtensions: ["jpeg", "jpg", "png", "gif"]
            }).on('fileselect', function() {
                type = 'add';
                checkRequired(type);
            }).on('filebeforedelete', function() {
                var aborted = !window.confirm('Are you sure you want to delete this file?');
                if (aborted) {
                    
                }
                type = 'delete';
                checkRequired(type);
                return aborted;
            });
        });

        function checkRequired(type){
            $.ajax({ 
                url: '{{url("admin/getImgNewcar")}}', 
                type: "GET",
                success: function(data, statusText, resObject) {
                    
                    if (data) {    

                        var countImg = 0;

                        if (data == true) {
                            countImg = 1;
                        } 

                        if(type == 'delete'){
                            countImg = countImg - 1;
                        }else{
                            countImg = countImg + 1;
                        }
                        
                        if (countImg == 0) {
                            $('#home_service').prop('required', true);
                        } else {
                            $('#home_service').removeProp('required');
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
        
        $(document).ready(function(){
            $('.alert-dismissible').fadeOut(2500);
        });
    </script>    
@endsection