@extends('layouts.app')

@section('content')
    
    {!! Form::model($user, ['method' => 'PUT', 'route' => ['admin.users.update', $user->id]]) !!}

    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><b>@lang('global.app_edit') @lang('global.users.title')</b></h3>
            <div class="box-tools">
                            
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-6 form-group">
                    {!! Form::label('email', 'Email*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('roles', 'Roles*', ['class' => 'control-label']) !!}
                    {!! Form::select('roles[]', $roles, old('roles') ? old('roles') : $user->roles()->pluck('name', 'name'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('roles'))
                        <p class="help-block">
                            {{ $errors->first('roles') }}
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

