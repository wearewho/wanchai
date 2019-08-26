@extends('layouts.app')

@section('content')
    
    {!! Form::model($blog, ['method' => 'PUT', 'route' => ['admin.manageblog.update', $blog->id], 'files' => true]) !!}
    
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><b>@lang('global.app_edit')@lang('global.website-management.fields.twohandcar')</b></h3>
            <div class="box-tools">
                            
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-10 col-xs-12 form-group">
                    {!! Form::label('header', trans('global.website-management.fields.header').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('header', old('header'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('header'))
                        <p class="help-block">
                            {{ $errors->first('header') }}
                        </p>
                    @endif
                </div>
                <div class="col-md-2 col-xs-12 form-group">
                    {!! Form::label('status', trans('global.website-management.fields.home_promotion_status').'*', ['class' => 'control-label']) !!}
                    <select id="status" class="form-control" name="status">
                        @if ($blog->status == 'publish')
                            <option value="publish" selected>@lang('global.website-management.fields.home_promotion_publish')</option>
                            <option value="unpublish">@lang('global.website-management.fields.home_promotion_unpublish')</option>
                        @else
                            <option value="publish">@lang('global.website-management.fields.home_promotion_publish')</option>
                            <option value="unpublish" selected>@lang('global.website-management.fields.home_promotion_unpublish')</option>
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
                    {!! Form::label('detail', trans('global.website-management.fields.detail').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('detail', old('detail'), ['class' => 'form-control', 'required' => '', 'placeholder' => '', 'rows' => 4, 'cols' => 12, 'style' => 'resize:none']) !!}
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
                        <input id="blog_image" name="blog_image" type="file" accept="image/*" data-browse-on-zone-click="true" data-show-upload="false">
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

            var images = $.parseJSON('<?php echo json_encode($imageblog);?>');
            var id = '<?php echo $blog->id;?>';
            
            var imgArray = [];
            var imgArray2 = [];
            var type = '';
     
            if (images.length == 0) {
                $('#blog_image').prop('required', true);
            } else {
                $('#blog_image').removeProp('required');
            }

            $.each(images, function (key, val) {

                let imgUrl = "<img class='kv-preview-data file-preview-image' src='../../../"+this.image_url+"'>";
                imgArray.push(imgUrl);

                let imgDetail = {};
                imgDetail.caption = this.image_name;
                imgDetail.size = this.image_size;
                imgDetail.width = "120px";
                imgDetail.key = this.id;
                imgArray2.push(imgDetail);

            });
            
            $("#blog_image").fileinput({
                maxFileCount: 1,
                maxFileSize: 2048,
                validateInitialCount: true,
                overwriteInitial: false,
                initialPreview: imgArray,
                initialPreviewConfig: imgArray2,
                ///deleteUrl: '',
                showRemove: false,
                showClose: false,
                layoutTemplates: {actionDelete: ''}, // disable thumbnail deletion
                allowedFileExtensions: ["jpeg", "jpg", "png", "gif"]
            });
        });
    </script>
@endsection


