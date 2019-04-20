<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Response;
use App\Inquiry;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function blog()
    {
        return view('frontend.blog');
    }
    
    public function gallery()
    {
        return view('frontend.gallery');
    }
    
    public function contact()
    {
        return view('frontend.contact');
    }
    
    public function blogDetail()
    {
        return view('frontend.blog-detail');
    }
    
    public function inquiry(Request $request)
    {
        $inquiry = new Inquiry;
        $inquiry->name = $request->name;
        $inquiry->tel = $request->tel;
        $inquiry->line = $request->line;
        $inquiry->appoint = $request->appoint;
        $inquiry->detail = $request->detail;
        $result = $inquiry->save();

        
        $message = "แจ้งเตือนการนัดหมาย \r\n";
        $message .= "ชื่อ : ".$request->name." \r\n";
        $message .= "เบอร์ติดต่อ : ".$request->tel." \r\n";
        $message .= "ไอดีไลน์ : ".$request->line." \r\n";
        $message .= "วันที่นัดหมาย : ".$request->appoint." \r\n";
        $message .= "รายละเอียด : ".$request->detail." \r\n";
        $this->sendNotify($message);

        return Response::json($result); 
    }
    
    public function sendNotify($message)
    {
        //Line notyfy token = '8NFmqH3oFdk3CFb0nHY5ma4XTOWqPKbnBliN2O83Fi0'
        $Token = '8NFmqH3oFdk3CFb0nHY5ma4XTOWqPKbnBliN2O83Fi0';

        $line_api = 'https://notify-api.line.me/api/notify';
        $access_token = $Token;

        $str = $message;    //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
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
