@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')

        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title"><b>@lang('global.app_list') @lang('global.permissions.title')</b></h3>
                <div class="box-tools">
                    <a href="{{ route('admin.permissions.create') }}" class="btn btn-sm btn-success">@lang('global.app_add_new')</a>            
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
                <table class="table table-striped table-bordered {{ count($permissions) > 0 ? 'datatable' : '' }} dt-select"  style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                            <th>@lang('global.permissions.fields.name')</th>
                            <th>&nbsp;</th>
    
                        </tr>
                    </thead>
                    
                    <tbody>
                        @if (count($permissions) > 0)
                            @foreach ($permissions as $permission)
                                <tr data-entry-id="{{ $permission->id }}">
                                    <td></td>
                                    <td>{{ $permission->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.permissions.edit',[$permission->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                        {!! Form::open(array(
                                            'style' => 'display: inline-block;',
                                            'method' => 'DELETE',
                                            'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                            'route' => ['admin.permissions.destroy', $permission->id])) !!}
                                        {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                        {!! Form::close() !!}
                                    </td>
    
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">@lang('global.app_no_entries_in_table')</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        
@stop

@section('javascript') 
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('admin.permissions.mass_destroy') }}';
        $(document).ready(function(){
            $('.alert-dismissible').fadeOut(2500);
        });
    </script>
@endsection