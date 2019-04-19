@extends('layouts.app')

@section('content')
    {!! Form::open(['method' => 'POST', 'route' => ['admin.managegallery.store'], 'files' => true]) !!}
    
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><b>@lang('global.app_add')@lang('global.website-management.fields.gallery')</b></h3>
            <div class="box-tools">
                           
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-10 form-group">
                    {!! Form::label('detail', trans('global.website-management.fields.detail').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('detail', old('detail'), ['class' => 'form-control', 'placeholder' => '', 'required' => '', 'rows' => 4, 'cols' => 12, 'style' => 'resize:none']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('detail'))
                        <p class="help-block">
                            {{ $errors->first('detail') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-2 form-group">
                    {!! Form::label('status', trans('global.website-management.fields.home_promotion_status').'*', ['class' => 'control-label']) !!}
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
                    <div class="file-loading">
                        <input id="car_image" name="car_image[]" type="file" multiple accept="image/*" data-browse-on-zone-click="true" data-show-upload="false" required>
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
            $(document).on('ready', function() {
                $("#car_image").fileinput({
                    maxFileCount: 1,
                    validateInitialCount: true,
                    overwriteInitial: false,
                    allowedFileExtensions: ["jpg", "png", "gif"]
                });
            });
        </script>
    @endsection