@extends('layouts.app')

@section('content')
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-mobile"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">การใช้งานมือถือ <small>(1 เดือนที่ผ่านมา)</small></span>
                <span class="info-box-number">{{$mobileView->rows[0][1]}}</span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-desktop"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">การใช้งานคอมพิวเตอร์ <small>(1 เดือนที่ผ่านมา)</small></span>
                <span class="info-box-number">{{$desktopView->rows[0][1]}}</span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-person-outline"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">ผู้ใช้ใหม่ <small>(1 เดือนที่ผ่านมา)</small></span>
                <span class="info-box-number">{{$newUsers->rows[0][0]}}</span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">ช่วงอายุผู้ใช้งานที่เข้าชมมากที่สุด <small>(1 เดือนที่ผ่านมา)</small></span>
                <span class="info-box-number">{{$ageUsers->rows[0][0]}} ปี</span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-7 col-sm-12" id="displayZero" style="{{ $activeusers == 0 ? '' : 'display:none;' }}">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">คนใช้งานอยู่ในไซต์ของคุณ</h3>

                    <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h4 style="text-align:center;">ผู้ใช้ที่ใช้งานอยู่ขณะนี้</h4>
                            <h1 style="text-align:center;">0</h1>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-7 col-sm-12" id="displayNonZero" style="{{ $activeusers > 0 ? '' : 'display:none;' }}">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">คนใช้งานอยู่ในไซต์ของคุณ</h3>

                    <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <h4 style="text-align:center;">ผู้ใช้ที่ใช้งานอยู่ขณะนี้</h4>
                            <h1 style="text-align:center;" id="activeusers">{{ $activeusers }}</h1>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="chart-responsive" style="text-align:center;" >
                                <canvas id="pieChart" height="150"></canvas>
                            </div>
                            <!-- ./chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-12">
                            <ul style="text-align:center;" class="chart-legend clearfix" id="pieLegendChart">

                            </ul>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-padding">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <h4 style="text-align: center;">
                                สถานที่ที่ใช้งานอยู่ขณะนี้
                            </h4>
                            <ul class="nav nav-pills nav-stacked" id="regionChart">

                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h4 style="text-align: center;">
                                หน้าเว็บที่ใช้งานอยู่ขณะนี้
                            </h4>
                            <ul class="nav nav-pills nav-stacked" id="pageChart">

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.footer -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-5 col-sm-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                    <li><a href="#tab_1-1" data-toggle="tab">1 ปี</a></li>
                    <li><a href="#tab_2-1" data-toggle="tab">1 เดือน</a></li>
                    <li><a href="#tab_3-1" data-toggle="tab">7 วัน</a></li>
                    <li class="active"><a href="#tab_4-1" data-toggle="tab">วันนี้</a></li>
                    <li class="pull-left header">ผู้ใช้งาน</li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="tab_1-1">
                        <h4 style="text-align:center;">ผู้ใช้ที่ใช้งานใน 1 ปีที่ผ่านมา</h4>
                        <h1 style="text-align:center;">{{$view1year}}</h1>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2-1">
                        <h4 style="text-align:center;">ผู้ใช้ที่ใช้งานใน 1 เดือนที่ผ่านมา</h4>
                        <h1 style="text-align:center;">{{$view1month}}</h1>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3-1">
                        <h4 style="text-align:center;">ผู้ใช้ที่ใช้งานใน 7 วันที่ผ่านมา</h4>
                        <h1 style="text-align:center;">{{$view1week}}</h1>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane active" id="tab_4-1">
                        <h4 style="text-align:center;">ผู้ใช้ที่ใช้งานในวันนี้</h4>
                        <h1 style="text-align:center;" id="userToday">{{ is_null($view1day) ? '0' : $view1day }}</h1>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                    <li><a href="#tab_1-2" data-toggle="tab">1 ปี</a></li>
                    <li><a href="#tab_2-2" data-toggle="tab">1 เดือน</a></li>
                    <li><a href="#tab_3-2" data-toggle="tab">7 วัน</a></li>
                    <li class="active"><a href="#tab_4-2" data-toggle="tab">วันนี้</a></li>
                    <li class="pull-left header">Top 5 ที่มาของผู้ใช้งาน</li>
                    @php
                        $linechart = [];
                        array_push($linechart,$search1day,$search1week,$search1month,$search1year);
                    @endphp
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="tab_1-2">
                        <h4 style="text-align:center;">ที่มาของผู้ใช้งานใน 1 ปีที่ผ่านมา</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Source</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($search1year) > 0)
                                @foreach ($search1year as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2-2">
                        <h4 style="text-align:center;">ที่มาของผู้ใช้งานใน 1 เดือนที่ผ่านมา</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Source</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($search1month) > 0)
                                @foreach ($search1month as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3-2">
                        <h4 style="text-align:center;">ที่มาของผู้ใช้งานใน 7 วันที่ผ่านมา</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Source</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($search1week) > 0)
                                @foreach ($search1week as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane active" id="tab_4-2">
                        <h4 style="text-align:center;">ผู้ที่มาของผู้ใช้งานในวันนี้</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Source</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($search1day) > 0)
                                @foreach ($search1day as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">ช่วงเวลาการใช้งานของผู้ใช้ 7 วันย้อนหลัง</h3>

                    <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="chart">
                        <canvas id="lineChart" style="height:280px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                    <li><a href="#tab_1-3" data-toggle="tab">1 ปี</a></li>
                    <li><a href="#tab_2-3" data-toggle="tab">1 เดือน</a></li>
                    <li><a href="#tab_3-3" data-toggle="tab">7 วัน</a></li>
                    <li class="active"><a href="#tab_4-3" data-toggle="tab">วันนี้</a></li>
                    <li class="pull-left header">Top 5 ผู้ใช้เข้าชมหน้าใด</li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="tab_1-3">
                        <h4 style="text-align:center;">ผู้ใช้เข้าชมหน้าใดใน 1 ปีที่ผ่านมา</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Page</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($page1year) > 0)
                                @foreach ($page1year as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2-3">
                        <h4 style="text-align:center;">ผู้ใช้เข้าชมหน้าใดใน 1 เดือนที่ผ่านมา</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Page</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($page1month) > 0)
                                @foreach ($page1month as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3-3">
                        <h4 style="text-align:center;">ผู้ใช้เข้าชมหน้าใดใน 7 วันที่ผ่านมา</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Page</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($page1week) > 0)
                                @foreach ($page1week as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane active" id="tab_4-3">
                        <h4 style="text-align:center;">ผู้ใช้เข้าชมหน้าใดในวันนี้</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Page</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($page1day) > 0)
                                @foreach ($page1day as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                    <li><a href="#tab_1-4" data-toggle="tab">1 ปี</a></li>
                    <li><a href="#tab_2-4" data-toggle="tab">1 เดือน</a></li>
                    <li><a href="#tab_3-4" data-toggle="tab">7 วัน</a></li>
                    <li class="active"><a href="#tab_4-4" data-toggle="tab">วันนี้</a></li>
                    <li class="pull-left header">Top 5 พื้นที่ผู้ใช้งาน</li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="tab_1-4">
                        <h4 style="text-align:center;">พื้นที่ผู้ใช้งานใน 1 ปีที่ผ่านมา</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Region</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($region1year) > 0)
                                @foreach ($region1year as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2-4">
                        <h4 style="text-align:center;">พื้นที่ผู้ใช้งานใน 1 เดือนที่ผ่านมา</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Region</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($region1month) > 0)
                                @foreach ($region1month as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3-4">
                        <h4 style="text-align:center;">พื้นที่ผู้ใช้งานใน 7 วันที่ผ่านมา</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Region</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($region1week) > 0)
                                @foreach ($region1week as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane active" id="tab_4-4">
                        <h4 style="text-align:center;">พื้นที่ผู้ใช้งานในวันนี้</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Region</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($region1day) > 0)
                                @foreach ($region1day as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                    <li><a href="#tab_1-5" data-toggle="tab">1 ปี</a></li>
                    <li><a href="#tab_2-5" data-toggle="tab">1 เดือน</a></li>
                    <li><a href="#tab_3-5" data-toggle="tab">7 วัน</a></li>
                    <li class="active"><a href="#tab_4-5" data-toggle="tab">วันนี้</a></li>
                    <li class="pull-left header">ช่วงอายุผู้ใช้งานที่เข้าชมมากที่สุด</li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="tab_1-5">
                        <h4 style="text-align:center;">ช่วงอายุผู้ใช้งานที่เข้าชมมากที่สุดใน 1 ปีที่ผ่านมา</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Age</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($age1year) > 0)
                                @foreach ($age1year as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2-5">
                        <h4 style="text-align:center;">ช่วงอายุผู้ใช้งานที่เข้าชมมากที่สุดใน 1 เดือนที่ผ่านมา</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Age</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($age1month) > 0)
                                @foreach ($age1month as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3-5">
                        <h4 style="text-align:center;">ช่วงอายุผู้ใช้งานที่เข้าชมมากที่สุดใน 7 วันที่ผ่านมา</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Age</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($age1week) > 0)
                                @foreach ($age1week as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane active" id="tab_4-5">
                        <h4 style="text-align:center;">ช่วงอายุผู้ใช้งานที่เข้าชมมากที่สุดในวันนี้</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Age</th>
                                <th style="width: 40px">User</th>
                            </tr>
                            @php
                                $x = 1;
                            @endphp
                            @if (count($age1day) > 0)
                                @foreach ($age1day as $item)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align:center;">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
    </div>
@endsection

@section('javascript')

<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"></script>
<script>

    var oldDataUsers = $.parseJSON('<?php echo $activeusers;?>');
    var oldDataDevices = $.parseJSON('<?php echo json_encode($devices->rows);?>');
    var oldDataRegions = $.parseJSON('<?php echo json_encode($regions->rows);?>');
    var oldDataPages = $.parseJSON('<?php echo json_encode($pages->rows);?>');
    var oldDataTodayUsers = $.parseJSON('<?php echo $view1day;?>');
    var oldDataTime = $.parseJSON('<?php echo json_encode($time1week);?>');
    piechart(oldDataUsers,oldDataDevices);
    regionchart(oldDataUsers,oldDataRegions);
    pagechart(oldDataUsers,oldDataPages);
    timechart(oldDataTime);

  $(function () {

    setInterval(function(){

        $.ajax({
            url: '{{url("admin/getAnalyticRealtime")}}',
            type: "GET",
            success: function(data, statusText, resObject) {

                if (data) {

                    var activeUser = data[0];
                    var deviceUser = data[1].rows;
                    var regions = data[2].rows;
                    var pages = data[3].rows;
                    var userToday = data[4];

                    if (oldDataTodayUsers != userToday) {
                        $('#userToday').text(userToday);
                    }

                    if (activeUser == 0) {

                        $('#displayZero').css('display','');
                        $('#displayNonZero').css('display','none');

                    } else {

                        $('#activeusers').text(activeUser);
                        $('#displayZero').css('display','none');
                        $('#displayNonZero').css('display','');

                        //Device
                        let convertOldDataDevices = {};
                        $.each(oldDataDevices, function (key, val) {
                            var thisName = this[0];
                            convertOldDataDevices[thisName] = this[1];
                        });

                        let convertNewDataDevices = {};
                        $.each(deviceUser, function (key, val) {
                            var thisName = this[0];
                            convertNewDataDevices[thisName] = this[1];
                        });

                        var resultDevices = _.isEqual(convertOldDataDevices, convertNewDataDevices);
                        if(resultDevices == false){
                            piechart(activeUser,deviceUser);
                            resultDevices == true;
                        }

                        //Region
                        let convertOldDataRegions = {};
                        $.each(oldDataRegions, function (key, val) {
                            var thisName = this[0];
                            convertOldDataRegions[thisName] = this[1];
                        });

                        let convertNewDataRegions = {};
                        $.each(regions, function (key, val) {
                            var thisName = this[0];
                            convertNewDataRegions[thisName] = this[1];
                        });

                        var resultRegions = _.isEqual(convertOldDataRegions, convertNewDataRegions);
                        if(resultRegions == false){
                            regionchart(activeUser,regions);
                            resultRegions == true;
                        }

                        //Page
                        let convertOldDataPages = {};
                        $.each(oldDataPages, function (key, val) {
                            var thisName = this[0];
                            convertOldDataPages[thisName] = this[1];
                        });

                        let convertNewDataPages = {};
                        $.each(pages, function (key, val) {
                            var thisName = this[0];
                            convertNewDataPages[thisName] = this[1];
                        });

                        var resultPages = _.isEqual(convertOldDataPages, convertNewDataPages);
                        if(resultPages == false){
                            pagechart(activeUser,pages);
                            resultPages == true;
                        }

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

    //}, 5000);
    }, 10000);

});

function piechart(activeUser,deviceUser){

    oldDataDevices = deviceUser;
    
    if (activeUser != 0) {
    
        $("#pieLegendChart li").remove();
        $(".chart-responsive #pieChart").remove();
        $(".chart-responsive").html('<canvas id="pieChart" height="150"></canvas>');

        var x = 0;
        var PieData = [];
        $.each(deviceUser, function (key, val) {
            x++;
            let thisColor = getColor(x);
            let thisDataArray = {};
            thisDataArray.value = this[1];
            thisDataArray.color = thisColor;
            thisDataArray.highlight = thisColor;
            thisDataArray.label = this[0];
            $("#pieLegendChart").append('<li><i class="fa fa-circle-o" style="color:'+thisColor+';"></i> '+this[0]+'</li>');
            PieData.push(thisDataArray);
        });

        // -------------
        // - PIE CHART -
        // -------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
        var pieChart       = new Chart(pieChartCanvas);
        var pieOptions     = {
        // Boolean - Whether we should show a stroke on each segment
        segmentShowStroke    : true,
        // String - The colour of each segment stroke
        segmentStrokeColor   : '#fff',
        // Number - The width of each segment stroke
        segmentStrokeWidth   : 1,
        // Number - The percentage of the chart that we cut out of the middle
        percentageInnerCutout: 50, // This is 0 for Pie charts
        // Number - Amount of animation steps
        animationSteps       : 100,
        // String - Animation easing effect
        animationEasing      : 'easeOutBounce',
        // Boolean - Whether we animate the rotation of the Doughnut
        animateRotate        : true,
        // Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale         : false,
        // Boolean - whether to make the chart responsive to window resizing
        responsive           : true,
        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio  : false,
        // String - A legend template
        legendTemplate       : '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<segments.length; i++){%><li><span style=\'background-color:<%=segments[i].fillColor%>\'></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
        // String - A tooltip template
        tooltipTemplate      : '<%=value %> <%=label%> users'
        };
        // Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);
        // -----------------
        // - END PIE CHART -
        // -----------------
    }
}

function regionchart(activeUser,regions){
        
    oldDataRegions = regions;

    if (activeUser != 0) {
        $("#regionChart li").remove();
        $.each(regions, function (key, val) {
            let thisColor = getRandomColor();
            let thisRegion = this[0];
            let thisUsers = this[1];
            let percent = (thisUsers/activeUser)*100;
            if (thisUsers == 1) {
                $("#regionChart").append('<li><a href="#">'+thisRegion+' ('+thisUsers+'User)<span class="pull-right" style="color:'+thisColor+'"> '+Math.ceil(percent)+'%</span></a></li>');
            } else {
                $("#regionChart").append('<li><a href="#">'+thisRegion+' ('+thisUsers+'Users)<span class="pull-right" style="color:'+thisColor+'"> '+Math.ceil(percent)+'%</span></a></li>');
            }
        });
    }

}

function pagechart(activeUser,pages){

    oldDataPages = pages;
    
    if (activeUser != 0) {
        $("#pageChart li").remove();
        $.each(pages, function (key, val) {
            let thisColor = getRandomColor();
            let thisPage = this[0];
            let thisUsers = this[1];
            let percent = (thisUsers/activeUser)*100;
            if (thisUsers == 1) {
                $("#pageChart").append('<li><a href="#">'+thisPage+' ('+thisUsers+'User)<span class="pull-right" style="color:'+thisColor+'"> '+Math.ceil(percent)+'%</span></a></li>');
            } else {
                $("#pageChart").append('<li><a href="#">'+thisPage+' ('+thisUsers+'Users)<span class="pull-right" style="color:'+thisColor+'"> '+Math.ceil(percent)+'%</span></a></li>');
            }
        });
    }
}

function n(n){
    return n > 9 ? "" + n: "0" + n;
}

function hexToRgbA(hex){
    var c;
    if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
        c= hex.substring(1).split('');
        if(c.length== 3){
            c= [c[0], c[0], c[1], c[1], c[2], c[2]];
        }
        c= '0x'+c.join('');
        return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',1)';
    }
    throw new Error('Bad Hex');
}

function timechart(oldDataTime){

    var x = -1;
    $.each(oldDataTime, function (key, val) {
        x++;

        var front = this[0].slice(0, -2);
        var lasttwo = this[0].slice(-2);

        if (lasttwo != n(x)) {

            for (let index = x; index < lasttwo; index++) {
                let objectTemp = [];
                let newX = 0;
                let tostring = n(index).toString();
                objectTemp[0] = front+tostring;
                objectTemp[1] = "0";
                oldDataTime.push(objectTemp);
                x = x+1;
                newX = n(x);

            }

        }

        if (n(x) == 23) {
            x = -1;
        }
    });

    var realData = _.chunk(_.orderBy(oldDataTime, [0],['asc']), 24);

    var arrayConvertData = [];
    var z = 0;
    $.each(realData, function (key, val) {
        z++;

        var inArrayConvertData = [];
        $.each(this, function (key, val) {
            inArrayConvertData.push(this[1]);
        });
        
        let front = this[0][0].slice(0, -2);
        let color = getColor(z);
        let rgbaColor = hexToRgbA(color);
        var doubleInArrayConvertData = {};
        doubleInArrayConvertData.label = moment(front).format('DD/MM/YYYY');
        doubleInArrayConvertData.fillColor = rgbaColor;
        doubleInArrayConvertData.strokeColor = rgbaColor;
        doubleInArrayConvertData.pointColor = color;
        doubleInArrayConvertData.pointStrokeColor = rgbaColor;
        doubleInArrayConvertData.pointHighlightFill = '#fff';
        doubleInArrayConvertData.pointHighlightStroke = rgbaColor;
        doubleInArrayConvertData.data = inArrayConvertData;
        arrayConvertData.push(doubleInArrayConvertData);

    });

    var areaChartData = {
      labels  : ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00',
                '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00'],
      datasets: arrayConvertData
    }

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
    var lineChart                = new Chart(lineChartCanvas)
    var lineChartOptions         = areaChartOptions
    lineChartOptions.datasetFill = false
    lineChart.Line(areaChartData, lineChartOptions)
}

function getColor(x) {

    var color;
    
    if(x === 1){
        color = '#f56954';
    }else if(x === 2){
        color = '#00a65a';
    }else if(x === 3){
        color = '#f39c12';
    }else if(x === 4){
        color = '#00c0ef';
    }else if(x === 5){
        color = '#3c8dbc';
    }else if(x === 6){
        color = '#d2d6de';
    }else if(x === 6){
        color = '#d2d6de';
    }else if(x === 7){
        color = '#8762c9';
    }

    return color;
}

function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

</script>

@endsection