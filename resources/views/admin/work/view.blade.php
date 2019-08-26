@extends('layouts.app')

@section('content')
    
    {!! Form::model($work, ['method' => 'PUT', 'route' => ['admin.managehome.update_client', $work->id]]) !!}
    
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><b>@lang('global.app_edit')@lang('global.website-management.fields.gallery')</b></h3>
            <div class="box-tools">
                            
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-xs-12 form-group">
                    {!! Form::label('name', trans('global.website-management.fields.work_name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
                <div class="col-md-6 col-xs-12 form-group">
                    {!! Form::label('tel', trans('global.website-management.fields.contact_social_phone').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('tel', old('tel'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tel'))
                        <p class="help-block">
                            {{ $errors->first('tel') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-12 form-group">
                    {!! Form::label('position', trans('global.website-management.fields.work_position').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('position', old('position'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('position'))
                        <p class="help-block">
                            {{ $errors->first('position') }}
                        </p>
                    @endif
                </div>
                <div class="col-md-6 col-xs-12 form-group">
                    {!! Form::label('salary', trans('global.website-management.fields.work_salary').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('salary', old('salary'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('salary'))
                        <p class="help-block">
                            {{ $errors->first('salary') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12 form-group">
                    {!! Form::label('message', trans('global.website-management.fields.home_promotion_detail').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('message', old('message'), ['class' => 'form-control', 'required' => '', 'placeholder' => '', 'rows' => 4, 'cols' => 12, 'style' => 'resize:none']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('message'))
                        <p class="help-block">
                            {{ $errors->first('message') }}
                        </p>
                    @endif
                </div>
            </div>
        </div>
        <div class="box-footer">            
            {{-- {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!} --}}
        </div>
    </div>

    {!! Form::close() !!}
@stop
    

