<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Work;
use App\Contactmessage;
use Spatie\Permission\Models\Role;
use Session;
use LogActivity;
use Analytics;
use Spatie\Analytics\Period;
use Response;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$message = "Just media";
        //$this->sendNotify($message);
        //return view('home');

        $role = Auth::user()->roles[0]->name;

        if($role == "administrator")
        {
            $logs = LogActivity::logActivityLists();
            return view('admin.log.index',compact('logs'));
            
        }else if($role == "owner")
        {
            $work = Work::all();
            $contactmessage = contactmessage::all();
            return view('owner',compact('work','contactmessage'));
            
        }else{

            $activeusers = Analytics::getAnalyticsService()->data_realtime->get('ga:'.env('ANALYTICS_VIEW_ID'), 'rt:activeUsers')->totalsForAllResults['rt:activeUsers'];
            
            $devices = Analytics::getAnalyticsService()->data_realtime->get(
                'ga:'.env('ANALYTICS_VIEW_ID'),
                'rt:activeUsers',
                [
                    'dimensions' => 'rt:deviceCategory'
                ]);

            $regions = Analytics::getAnalyticsService()->data_realtime->get(
                'ga:'.env('ANALYTICS_VIEW_ID'),
                'rt:activeUsers',
                [
                    'dimensions' => 'rt:region'
                ]);

            $pages = Analytics::getAnalyticsService()->data_realtime->get(
                'ga:'.env('ANALYTICS_VIEW_ID'),
                'rt:activeUsers',
                [
                    'dimensions' => 'rt:pagePath'
                ]);

            $mobileView = Analytics::performQuery(
                Period::create(Carbon::today()->addMonths(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:deviceCategory'],
                    'filters' => 'ga:deviceCategory==mobile'
                ]
            ); 

            $desktopView = Analytics::performQuery(
                Period::create(Carbon::today()->addMonths(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:deviceCategory'],
                    'filters' => 'ga:deviceCategory==desktop'
                ]
            ); 

            $newUsers = Analytics::performQuery(
                Period::create(Carbon::today()->addMonths(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:newUsers'
                ]
            ); 

            $ageUsers = Analytics::performQuery(
                Period::create(Carbon::today()->addMonths(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:userAgeBracket'],
                    'max-results' => '1',
                    'sort' => '-ga:users'
                ]
            ); 
                
            $view1dayArray = Analytics::performQuery(
                Period::create(Carbon::today(), Carbon::now()),
                'ga:users'
            );

            $view1weekArray = Analytics::performQuery(
                Period::create(Carbon::today()->addWeek(-1), Carbon::today()->addDay(-1)),
                'ga:users'
            );

            $view1monthArray = Analytics::performQuery(
                Period::create(Carbon::today()->addMonths(-1), Carbon::today()->addDay(-1)),
                'ga:users'
            );

            $view1yearArray = Analytics::performQuery(
                Period::create(Carbon::today()->addYear(-1), Carbon::today()->addDay(-1)),
                'ga:users'
            );

            $view1day = $view1dayArray->rows[0][0];
            $view1week = $view1weekArray->rows[0][0];
            $view1month = $view1monthArray->rows[0][0];
            $view1year = $view1yearArray->rows[0][0];

            $search1dayArray = Analytics::performQuery(
                Period::create(Carbon::today(), Carbon::now()),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:sourceMedium'],
                    'sort' => '-ga:users',
                    'max-results' => '5'
                ]
            ); 

            $search1weekArray = Analytics::performQuery(
                Period::create(Carbon::today()->addWeek(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:sourceMedium'],
                    'sort' => '-ga:users',
                    'max-results' => '5'
                ]
            ); 

            $search1monthArray = Analytics::performQuery(
                Period::create(Carbon::today()->addMonths(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:sourceMedium'],
                    'sort' => '-ga:users',
                    'max-results' => '5'
                ]
            ); 

            $search1yearArray = Analytics::performQuery(
                Period::create(Carbon::today()->addYear(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:sourceMedium'],
                    'sort' => '-ga:users',
                    'max-results' => '5'
                ]
            ); 
            
            $search1day = $search1dayArray->rows;
            $search1week = $search1weekArray->rows;
            $search1month = $search1monthArray->rows;
            $search1year = $search1yearArray->rows;


            $time1weekArray = Analytics::performQuery(
                Period::create(Carbon::today()->addWeek(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:dateHour'],
                    'sort' => 'ga:dateHour',
                    "include-empty-rows" => "true"
                ]
            ); 

            $time1week = $time1weekArray->rows;

            $page1dayArray = Analytics::performQuery(
                Period::create(Carbon::today(), Carbon::now()),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:pagePath'],
                    'sort' => '-ga:users',
                    'max-results' => '5'
                ]
            ); 

            $page1weekArray = Analytics::performQuery(
                Period::create(Carbon::today()->addWeek(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:pagePath'],
                    'sort' => '-ga:users',
                    'max-results' => '5'
                ]
            ); 

            $page1monthArray = Analytics::performQuery(
                Period::create(Carbon::today()->addMonths(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:pagePath'],
                    'sort' => '-ga:users',
                    'max-results' => '5'
                ]
            ); 

            $page1yearArray = Analytics::performQuery(
                Period::create(Carbon::today()->addYear(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:pagePath'],
                    'sort' => '-ga:users',
                    'max-results' => '5'
                ]
            ); 
            
            $page1day = $page1dayArray->rows;
            $page1week = $page1weekArray->rows;
            $page1month = $page1monthArray->rows;
            $page1year = $page1yearArray->rows;

            $region1dayArray = Analytics::performQuery(
                Period::create(Carbon::today(), Carbon::now()),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:region'],
                    'sort' => '-ga:users',
                    'max-results' => '5'
                ]
            ); 

            $region1weekArray = Analytics::performQuery(
                Period::create(Carbon::today()->addWeek(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:region'],
                    'sort' => '-ga:users',
                    'max-results' => '5'
                ]
            ); 

            $region1monthArray = Analytics::performQuery(
                Period::create(Carbon::today()->addMonths(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:region'],
                    'sort' => '-ga:users',
                    'max-results' => '5'
                ]
            ); 

            $region1yearArray = Analytics::performQuery(
                Period::create(Carbon::today()->addYear(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:region'],
                    'sort' => '-ga:users',
                    'max-results' => '5'
                ]
            ); 
            
            $region1day = $region1dayArray->rows;
            $region1week = $region1weekArray->rows;
            $region1month = $region1monthArray->rows;
            $region1year = $region1yearArray->rows;

            $age1dayArray = Analytics::performQuery(
                Period::create(Carbon::today(), Carbon::now()),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:userAgeBracket'],
                    'sort' => 'ga:userAgeBracket'
                ]
            ); 

            $age1weekArray = Analytics::performQuery(
                Period::create(Carbon::today()->addWeek(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:userAgeBracket'],
                    'sort' => 'ga:userAgeBracket'
                ]
            ); 

            $age1monthArray = Analytics::performQuery(
                Period::create(Carbon::today()->addMonths(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:userAgeBracket'],
                    'sort' => 'ga:userAgeBracket'
                ]
            ); 

            $age1yearArray = Analytics::performQuery(
                Period::create(Carbon::today()->addYear(-1), Carbon::today()->addDay(-1)),
                'ga:users',
                [
                    'metrics' => 'ga:users',
                    'dimensions' => ['ga:userAgeBracket'],
                    'sort' => 'ga:userAgeBracket'
                ]
            ); 
            
            $age1day = $age1dayArray->rows;
            $age1week = $age1weekArray->rows;
            $age1month = $age1monthArray->rows;
            $age1year = $age1yearArray->rows; 

            return view('home',compact('mobileView','desktopView','newUsers','ageUsers','activeusers','devices','regions','pages','view1day','view1week','view1month','view1year','search1day','search1week','search1month','search1year','time1week','page1day','page1week','page1month','page1year','region1day','region1week','region1month','region1year','age1day','age1week','age1month','age1year'));
        }

    }

    public function getAnalyticRealtime()
    {
        $activeusers = Analytics::getAnalyticsService()->data_realtime->get('ga:'.env('ANALYTICS_VIEW_ID'), 'rt:activeUsers')->totalsForAllResults['rt:activeUsers'];
        
        $devices = Analytics::getAnalyticsService()->data_realtime->get(
            'ga:'.env('ANALYTICS_VIEW_ID'),
            'rt:activeUsers',
            [
                'dimensions' => 'rt:deviceCategory'
            ]);

        $regions = Analytics::getAnalyticsService()->data_realtime->get(
            'ga:'.env('ANALYTICS_VIEW_ID'),
            'rt:activeUsers',
            [
                'dimensions' => 'rt:region'
            ]);

        $pages = Analytics::getAnalyticsService()->data_realtime->get(
            'ga:'.env('ANALYTICS_VIEW_ID'),
            'rt:activeUsers',
            [
                'dimensions' => 'rt:pagePath'
            ]);
                 
        $view1dayArray = Analytics::performQuery(
            Period::create(Carbon::today(), Carbon::now()),
            'ga:users'
        );
        $view1day = $view1dayArray->rows[0][0];

        return Response::json(array($activeusers,$devices,$regions,$pages,$view1day)); 
    }

    public function sendNotify($message)
    {
        //Line notyfy token = '8NFmqH3oFdk3CFb0nHY5ma4XTOWqPKbnBliN2O83Fi0'
        $Token = '8NFmqH3oFdk3CFb0nHY5ma4XTOWqPKbnBliN2O83Fi0';

        $line_api = 'https://notify-api.line.me/api/notify';
        $access_token = $Token;

        $str = 'Just Media ทดสอบข้อความ';    //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
        $image_thumbnail_url = '';  // ขนาดสูงสุด 240×240px JPEG        
        $image_fullsize_url = '';   // ขนาดสูงสุด 1024×1024px JPEG
        $sticker_package_id = 1;  // Package ID ของสติกเกอร์
        $sticker_id = 410;    // ID ของสติกเกอร์

        $message_data = array(
        'message' => $str,
        'imageThumbnail' => $image_thumbnail_url,
        'imageFullsize' => $image_fullsize_url,
        'stickerPackageId' => $sticker_package_id,
        'stickerId' => $sticker_id
        );

        $result = $this->send_notify_message($line_api, $access_token, $message_data);

    }

    public function send_notify_message($line_api, $access_token, $message_data)
    {
        $headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer '.$access_token );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $line_api);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $message_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        // Check Error
        if(curl_error($ch))
        {
        $return_array = array( 'status' => '000: send fail', 'message' => curl_error($ch) ); 
        }
        else
        {
        $return_array = json_decode($result, true);
        }
        curl_close($ch);
        return $return_array;
    }


}
