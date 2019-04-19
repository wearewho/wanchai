@extends('layouts.app')

@section('content')

    @if(session('success'))
        <!-- If password successfully show message -->
        <div class="row">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @else
        {!! Form::open(['method' => 'PATCH', 'route' => ['auth.change_password']]) !!}
        <!-- If no success message in flash session show change password form  -->

        <div class="box box-danger">
            <div class="box-header with-border"> 
                <h3 class="box-title"><b>@lang('global.users.fields.change_password')</b></h3> 
                <div class="box-tools">
                                
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-12 form-group"> 
                        {!! Form::label('current_password', trans("global.users.fields.current_password"), ['class' => 'control-label']) !!}
                        {!! Form::password('current_password', ['class' => 'form-control', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('current_password'))
                            <p class="help-block">
                                {{ $errors->first('current_password') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('new_password', trans("global.users.fields.new_password"), ['class' => 'control-label']) !!}
                        {!! Form::password('new_password', ['class' => 'form-control', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('new_password'))
                            <p class="help-block">
                                {{ $errors->first('new_password') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('new_password_confirmation', trans("global.users.fields.confirm_password"), ['class' => 'control-label']) !!}
                        {!! Form::password('new_password_confirmation', ['class' => 'form-control', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('new_password_confirmation'))
                            <p class="help-block">
                                {{ $errors->first('new_password_confirmation') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="box-footer">            
                {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
            </div>
        </div>

        {!! Form::close() !!}
    @endif
@stop

