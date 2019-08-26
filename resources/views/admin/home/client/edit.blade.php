@extends('layouts.app')

@section('content')
    
    {!! Form::model($client, ['method' => 'PUT', 'route' => ['admin.managehome.update_client', $client->id], 'files' => true]) !!}
    
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><b>@lang('global.app_edit') @lang('global.website-management.fields.home_client')</b></h3>
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
                        @if ($client->status == "publish")
                            <option value="publish" selected>@lang('global.website-management.fields.home_promotion_publish')</option>
                            <option value="unpublish">@lang('global.website-management.fields.home_promotion_unpublish')</option>
                        @else
                            <option value="unpublish" selected>@lang('global.website-management.fields.home_promotion_unpublish')</option>
                            <option value="publish">@lang('global.website-management.fields.home_promotion_publish')</option>
                        @endif
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
                    <div class="file-loading">
                        <input id="home_client" name="home_client" type="file" accept="image/*" data-browse-on-zone-click="true" data-show-upload="false">
                    </div> 
                </div>
            </div>
        </div>
        <div class="box-footer">            
            {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
        </div>
    </div>

    {!! Form::close() !!}
@stop

@section('javascript')
    <script>

        $(document).on('ready', function() {

            var images = $.parseJSON('<?php echo json_encode($client);?>');
            var type = '';
            let imgUrl = "";
            let imgDetail = "";

            if (images.image_url != null) {
                imgUrl = "<img class='kv-preview-data file-preview-image' src='../../../"+images.image_url+"'>";
                imgDetail = {};
                imgDetail.caption = images.image_name;
                imgDetail.size = images.image_size;
                imgDetail.width = "1920px";
                imgDetail.key = 1;
            }            
        
            if (images.image_url == null) {
                $('#home_client').prop('required', true);
            } else {
                $('#home_client').removeProp('required');
            }
            
            $("#home_client").fileinput({
                maxFileCount: 1,
                validateInitialCount: true,
                overwriteInitial: true,
                initialPreview: imgUrl,
                initialPreviewConfig: imgDetail,
                ///deleteUrl: '',
                showRemove: false,
                showClose: false,
                layoutTemplates: {actionDelete: ''}, // disable thumbnail deletion
                allowedFileExtensions: ["jpeg", "jpg", "png", "gif"]
            });
        });
        
    </script>    
@endsection

