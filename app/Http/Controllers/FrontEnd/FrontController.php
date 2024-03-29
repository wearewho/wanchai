<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use View;
use Response;
use App\ImageHome;
use App\Review;
use App\Promotion;
use App\Blog;
use App\ImageBlog;
use App\Gallery;
use App\Contact;
use App\Inquiry;
use App\Work;
use App\Contactmessage;
use App\Newcar;
use App\Service;
use App\Client;
use App\Package;

class FrontController extends Controller
{
    protected $footer;

    public function __construct() 
    {
        $footer = [];
        $contact = Contact::where('id',1)->first();
        $blog = Blog::with('imageblog')->where('status','publish')->orderBy('updated_at', 'DESC')->limit(6)->get();
        $gallery = Gallery::with('imagegallery')->where('status','publish')->orderBy('updated_at', 'DESC')->limit(8)->get();
        array_push($footer,$contact,$blog,$gallery);
        View::share('footer', $footer);
    }

    public function index()
    {
        $imagehome = ImageHome::all();
        $review = Review::all();
        $client = Client::all();

        $blog = Blog::with('imageblog')->where('status','publish')->orderBy('updated_at', 'DESC')->limit(3)->get();
        return view('frontend.index',compact('imagehome','review','client','blog','footer'));
    }

    public function blog()
    {
        $blog = Blog::with('imageblog')->where('status','publish')->orderBy('updated_at', 'DESC')->get();
        return view('frontend.blog', compact('blog','footer'));
    }
    
    public function service()
    {
        $service = Service::all();
        $package = Package::all();
        return view('frontend.service', compact('service','package','footer'));
    }
    
    public function about()
    {
        $contact = Contact::where('id',1)->first();
        return view('frontend.about', compact('contact','footer'));
    }
    
    public function work()
    {
        $work = Work::all();
        return view('frontend.work', compact('work','footer'));
    }
    
    public function contact()
    {
        $contact = Contact::where('id',1)->first();
        return view('frontend.contact', compact('contact','footer'));
    }
    
    public function blogDetail($id)
    {
        $blog = Blog::findOrFail($id);
        $imageblog = ImageBlog::where('blog_id',$id)->get();
        return view('frontend.blog-detail', compact('blog','imageblog','footer'));
    }    
    
    public function store_work(Request $request)
    {
        $work = new Work;
        $work->name = $request->name;
        $work->tel = $request->tel;
        $work->position = $request->position;
        $work->salary = $request->salary;
        $work->message = $request->message;
        $result = $work->save();

        //return Response::json($result); 

        return redirect()->route('work')->with('createcomplete','บันทึกข้อมูลสำเร็จแล้ว!');
    }
    
    public function store_contactmessage(Request $request)
    {
        $contactmessage = new Contactmessage;
        $contactmessage->name = $request->name;
        $contactmessage->tel = $request->tel;
        $contactmessage->message = $request->message;
        $result = $contactmessage->save();

        //return Response::json($result); 
        
        return redirect()->route('contact')->with('createcomplete','บันทึกข้อมูลสำเร็จแล้ว!');
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

        //return Response::json($result); 

        return redirect()->route('instantsell')->with('createcomplete','บันทึกข้อมูลสำเร็จแล้ว!');
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
