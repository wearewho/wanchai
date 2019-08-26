@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><b>@lang('global.app_list')@lang('global.website-management.fields.work')</b></h3>
            <div class="box-tools">
                
            </div>
        </div>
        <div class="box-body table-responsive">
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
            @if($message = Session::get('del-success'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fa fa-check"></i>{{$message}}</h5>
                        </div>
                    </div>
                </div>
                @endif
                {{-- <table class="table table-bordered table-striped {{ count($gallery) > 0 ? 'datatable' : '' }} dt-select"> --}}
                <table class="table table-bordered table-striped {{ count($work) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        {{-- <th style="text-align:center;"><input type="checkbox" id="select-all" /></th> --}}
                        <th>@lang('global.website-management.fields.work_name')</th>
                        <th>@lang('global.website-management.fields.work_position')</th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($work) > 0)
                        @foreach ($work as $item)
                            <tr data-entry-id="{{ $item->id }}">
                                {{-- <td></td> --}}
                                <td>
                                    @php
                                        $resultStr = mb_substr($item->name, 0, 20);
                                    @endphp
                                    {{ $resultStr }} 
                                </td>
                                <td>{{ $item->position }}</td>
                                <td  style="text-align:center;">
                                    <a href="{{ route('admin.managehome.view_work',[$item->id]) }}" class="btn btn-xs btn-info">@lang('global.app_view')</a>
                                    {{-- {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.managegallery.destroy', $item->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!} --}}
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><b>@lang('global.app_list')@lang('global.website-management.fields.contact')</b></h3>
            <div class="box-tools">
                
            </div>
        </div>
        <div class="box-body table-responsive">
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
            @if($message = Session::get('del-success'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fa fa-check"></i>{{$message}}</h5>
                        </div>
                    </div>
                </div>
                @endif
                {{-- <table class="table table-bordered table-striped {{ count($gallery) > 0 ? 'datatable' : '' }} dt-select"> --}}
                <table class="table table-bordered table-striped {{ count($contactmessage) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        {{-- <th style="text-align:center;"><input type="checkbox" id="select-all" /></th> --}}
                        <th>@lang('global.website-management.fields.work_name')</th>
                        <th>@lang('global.website-management.fields.home_promotion_detail')</th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($contactmessage) > 0)
                        @foreach ($contactmessage as $item)
                            <tr data-entry-id="{{ $item->id }}">
                                {{-- <td></td> --}}
                                <td>{{ $item->name }}</td>
                                <td>
                                    @php
                                        $resultStr = mb_substr($item->message, 0, 20);
                                    @endphp
                                    {{ $resultStr }} 
                                </td>
                                <td  style="text-align:center;">
                                    <a href="{{ route('admin.managehome.view_contactmessage',[$item->id]) }}" class="btn btn-xs btn-info">@lang('global.app_view')</a>
                                    {{-- {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.managegallery.destroy', $item->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!} --}}
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@stop

@section('javascript') 
    <script>
        //window.route_mass_crud_entries_destroy = '{{ route('admin.managegallery.mass_destroy') }}';
        $(document).ready(function(){
            $('.alert-dismissible').fadeOut(2500);
        });
    </script>
@endsection