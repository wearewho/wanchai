@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')

    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><b>@lang('global.app_list') @lang('global.roles.title')</b></h3>
            <div class="box-tools">
                <a href="{{ route('admin.roles.create') }}" class="btn btn-sm btn-success">@lang('global.app_add_new')</a>          
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
            <table class="table table-bordered table-striped {{ count($roles) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>@lang('global.roles.fields.name')</th>
                        <th>@lang('global.roles.fields.permission')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($roles) > 0)
                        @foreach ($roles as $role)
                            <tr data-entry-id="{{ $role->id }}">
                                <td></td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    @foreach ($role->permissions()->pluck('name') as $permission)
                                        <span class="label label-info label-many">{{ $permission }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('admin.roles.edit',[$role->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.roles.destroy', $role->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@stop

@section('javascript') 
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('admin.roles.mass_destroy') }}';
        $(document).ready(function(){
            $('.alert-dismissible').fadeOut(2500);
        });
    </script>
@endsection