@extends('layouts.app')

@section('content')
    
    {!! Form::model($gallery, ['method' => 'PUT', 'route' => ['admin.managegallery.update', $gallery->id], 'files' => true]) !!}
    
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><b>@lang('global.app_edit')@lang('global.website-management.fields.gallery')</b></h3>
            <div class="box-tools">
                            
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-10 col-xs-12 form-group">
                    {!! Form::label('detail', trans('global.website-management.fields.detail').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('detail', old('detail'), ['class' => 'form-control', 'required' => '', 'placeholder' => '', 'rows' => 4, 'cols' => 12, 'style' => 'resize:none']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('detail'))
                        <p class="help-block">
                            {{ $errors->first('detail') }}
                        </p>
                    @endif
                </div>
                <div class="col-md-2 col-xs-12 form-group">
                    {!! Form::label('status', trans('global.website-management.fields.home_promotion_status').'*', ['class' => 'control-label']) !!}
                    <select id="status" class="form-control" name="status">
                        @if ($gallery->status == "publish")
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
                    <div class="file-loading">
                        <input id="car_image" name="car_image[]" type="file" accept="image/*" data-browse-on-zone-click="true" data-show-upload="false" required>
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

            var images = $.parseJSON('<?php echo json_encode($imagegallery);?>');
            var id = '<?php echo $gallery->id;?>';
            
            var imgArray = [];
            var imgArray2 = [];
            var type = '';
     
            if (images.length == 0) {
                $('#car_image').prop('required', true);
            } else {
                $('#car_image').removeProp('required');
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
            
            $("#car_image").fileinput({
                maxFileCount: 1,
                validateInitialCount: true,
                overwriteInitial: false,
                initialPreview: imgArray,
                initialPreviewConfig: imgArray2,
                deleteUrl: '{{url("admin/destroyImageGallery")}}',
                allowedFileExtensions: ["jpeg", "jpg", "png", "gif"]
            }).on('fileselect', function() {
                type = 'add';
                checkRequired(id,type);
            }).on('filebeforedelete', function() {
                var aborted = !window.confirm('Are you sure you want to delete this file?');
                if (aborted) {
                    
                }
                type = 'delete';
                checkRequired(id,type);
                return aborted;
            });
        });

        function checkRequired(id,type){
            $.ajax({ 
                url: '{{url("admin/countImgGallery")}}', 
                type: "POST",
                data: { "id" : id },
                success: function(data, statusText, resObject) {
                    
                    if (data) {    

                        var countImg = data[0];
                        if(type == 'delete'){
                            countImg = countImg - 1;
                        }else{
                            countImg = countImg + 1;
                        }
                        
                        if (countImg == 0) {
                            $('#car_image').prop('required', true);
                        } else {
                            $('#car_image').removeProp('required');
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
    </script>
@endsection


