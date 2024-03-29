@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">
            
            @if (Auth::user()->roles[0]->name == "administrator")
                <div class="user-panel">
                    <div class="pull-left image">
                    <img src="{{ url('backend/images/admin.png') }}" class="img-circle" alt="Admin Image">
                    </div>
                    <div class="pull-left info">
                    <p>Administrator</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> @lang('global.app_online')</a>
                    </div>
                </div>
            @else
                <div class="user-panel">
                    <div class="pull-left image">
                    <img src="{{ url('backend/images/manager.png') }}" class="img-circle" alt="Manager Image">
                    </div>
                    <div class="pull-left info">
                    <p>Manager</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> @lang('global.app_online')</a>
                    </div>
                </div>
            @endif

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/admin') }}">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>
            
            @can('website_manage')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-globe"></i>
                    <span class="title">@lang('global.website-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview {{ $request->segment(2) == 'imagehome'|| $request->segment(2) == 'client'|| $request->segment(2) == 'review' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-home"></i> 
                            @lang('global.website-management.fields.home')
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: block;">
                             <li class="{{ $request->segment(2) == 'imagehome' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.managehome.index_image') }}">
                                <i class="fa fa-circle-o"></i> 
                                    @lang('global.website-management.fields.home_image')
                                </a>
                            </li>
                            <li class="{{ $request->segment(2) == 'client' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.managehome.index_client') }}">
                                <i class="fa fa-circle-o"></i> 
                                    @lang('global.website-management.fields.home_client')
                                </a>
                            </li>
                            <li class="{{ $request->segment(2) == 'review' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.managehome.index_review') }}">
                                <i class="fa fa-circle-o"></i> 
                                    @lang('global.website-management.fields.home_review')
                                </a>
                            </li>
                             <!-- <li class="{{ $request->segment(2) == 'service' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.managehome.index_newcar') }}">
                                <i class="fa fa-circle-o"></i> 
                                    @lang('global.website-management.fields.home_newcar')
                                </a>
                            </li>                            
                            <li class="{{ $request->segment(2) == 'promotion' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.managehome.index_promotion') }}">
                                <i class="fa fa-circle-o"></i> 
                                    @lang('global.website-management.fields.home_promotion')
                                </a>
                            </li>  -->
                        </ul>
                    </li>
                    <li class="{{ $request->segment(2) == 'service' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.managehome.index_service') }}">
                        <i class="fa fa-circle-o"></i> 
                            @lang('global.website-management.fields.home_service')
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'package' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.managehome.index_package') }}">
                        <i class="fa fa-circle-o"></i> 
                            @lang('global.website-management.fields.home_package')
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'managecontact' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.managecontact.index') }}">
                            <i class="fa fa-phone-square"></i>
                            <span class="title">
                                @lang('global.website-management.fields.contact')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'manageblog' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.manageblog.index') }}">
                            <i class="fa fa-eye"></i>
                            <span class="title">
                                @lang('global.website-management.fields.blog')
                            </span>
                        </a>
                    </li>
                    {{-- <li class="{{ $request->segment(2) == 'managegallery' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.managegallery.index') }}">
                            <i class="fa fa-image"></i>
                            <span class="title">
                                @lang('global.website-management.fields.gallery')
                            </span>
                        </a>
                    </li> --}}
                </ul>
            </li>
            @endcan
            
            @can('users_manage')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.permissions.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.roles.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.users.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('global.users.fields.change_password')</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/') }}">
                    <i class="fa fa-home"></i>
                    <span class="title">@lang('global.app_website')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}
