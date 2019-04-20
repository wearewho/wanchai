<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Response;

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

    }
}
