@extends('layouts.app')

@section('content')
    
    {!! Form::model($permission, ['method' => 'PUT', 'route' => ['admin.permissions.update', $permission->id]]) !!}

    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><b>@lang('global.app_edit') @lang('global.permissions.title')</b></h3>
            <div class="box-tools">
                            
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
        </div>
        <div class="box-footer">            
            {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
        </div>
    </div> 
    
    {!! Form::close() !!}
@stop

