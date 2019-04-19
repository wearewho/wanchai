@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><b>@lang('global.app_list')@lang('global.website-management.fields.twohandcar')</b></h3>
            <div class="box-tools">
                <a href="{{ route('admin.manageblog.create') }}" class="btn btn-sm btn-success">@lang('global.app_add_new')</a>            
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped {{ count($blog) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>@lang('global.website-management.fields.blog_header')</th>
                        <th>@lang('global.website-management.fields.blog_status')</th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($blog) > 0)
                        @foreach ($blog as $item)
                            <tr data-entry-id="{{ $item->id }}">
                                <td></td>

                                <td>{{ $item->header }}</td>
                                <td>@lang('global.website-management.fields.home_promotion_'.$item->status)</td>
                                <td>
                                    <a href="{{ route('admin.manageblog.edit',[$item->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.manageblog.destroy', $item->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('admin.manageblog.mass_destroy') }}';
    </script>
@endsection