<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Spatie\Permission\Models\Role;
use Session;
use LogActivity;

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
            
        }else{
            return view('home');
        }

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
