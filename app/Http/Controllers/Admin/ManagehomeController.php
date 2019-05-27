<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Newcar;
use App\Promotion;
use App\Service;
use LogActivity;
use Response;
use Image;
use Auth;

class ManagehomeController extends Controller
{
    public function user()
    {
        $user = Auth::user();
        return $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function index_newcar()
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $newcar = Newcar::where('id',1)->first();
        return view('admin.home.newcar.index',compact('newcar'));
    }

    public function index_promotion()
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $promotion = Promotion::all();
        return view('admin.home.promotion.index',compact('promotion'));
    }

    public function index_service()
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $service = Service::where('id',1)->first();
        return view('admin.home.service.index',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function create_newcar()
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        return view('admin.home.newcar.create');
    }

    public function create_promotion()
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $countPromotion = Promotion::where('status', '=', 'publish')->count();
        return view('admin.home.promotion.create',compact('countPromotion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function store_newcar(Request $request)
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        
        //$newcar = Newcar::create($request->all());

        return redirect()->route('admin.managehome.index_newcar');
    }

    public function getImgNewcar()
    {
        $haveImage = true;
        $ImageNewcar = Newcar::findOrFail(1);

        if ($ImageNewcar->image_url == null) {
            $haveImage = false;
        } 
        
        return Response::json($haveImage); 
    }

    public function destroyImage(Request $request)
    {
        $ImageNewcar = Newcar::findOrFail(1);
        //unlink($ImageNewcar->image_url);
        $ImageNewcar->image_url = null;
        $ImageNewcar->image_name = null;
        $ImageNewcar->image_size = null;
        $ImageNewcar->save();
        return "{}";
    }

    public function store_promotion(Request $request)
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $promotion = new Promotion;
        $promotion->header = $request->header;
        $promotion->detail = $request->detail;
        $promotion->status = $request->status;
        $promotion->save();

        LogActivity::addToLog('Create Promotion By '.$this->user()->name);

        return redirect()->route('admin.managehome.index_promotion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function edit_newcar($id)
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $newcar = Newcar::findOrFail($id);
        $countNewcar = Newcar::where('status', '=', 'publish')->count();

        return view('admin.home.newcar.edit', compact('newcar', 'countNewcar'));
    }

    public function edit_promotion($id)
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $promotion = Promotion::findOrFail($id);
        $countPromotion = Promotion::where('status', '=', 'publish')->count();

        return view('admin.home.promotion.edit', compact('promotion', 'countPromotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function update_newcar(Request $request, $id)
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $update_newcar = Newcar::findOrFail($id);
        $update_newcar->newcar_header = $request->newcar_header;
        $update_newcar->newcar_detail = $request->newcar_detail;
        $update_newcar->property_header = $request->property_header;
        $update_newcar->property_detail = $request->property_detail;
        $update_newcar->review_header = $request->review_header;
        $update_newcar->review_detail = $request->review_detail;   
        
        if($request->hasFile('car_image')) {

            //get filename with extension
            $filenamewithextension = $request->car_image->getClientOriginalName();
    
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    
            //get file extension
            $extension = $request->car_image->getClientOriginalExtension();
    
            //filename to store
            $filenametostore = 'newcar/'.$filename.'_'.time().'.'.$extension;
            //$filenametostore = 'newcar/'.time();

            //get file size
            $filesize = filesize($request->car_image);

            //Upload File
            $imgwidth = 1170;
            $path = 'image_car/'.$filenametostore;
            $img = Image::make($request->car_image->getRealPath());
            if($img->width()>$imgwidth){ 
                // See the docs - http://image.intervention.io/api/resize
                // resize the image to a width of 300 and constrain aspect ratio (auto height)
                $img->resize($imgwidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                
            }

            $img->save($path);
    
            //Upload File to s3
            //Storage::disk('s3')->put($filenametostore, file_get_contents($request->car_image), 'public');
            //Storage::disk('s3')->put($filenametostore, fopen($request->file('car_image'), 'r+'));
    
            //$url = Storage::disk('s3')->url($filenametostore);
            
            $update_newcar->image_name = $filenametostore;
            $update_newcar->image_size = $filesize;
            $update_newcar->image_url = $path;

        }
        
        $update_newcar->save();
        LogActivity::addToLog('Update New Car ID:'.$id.' By '.$this->user()->name);
        
        return redirect()->route('admin.managehome.index_newcar')->with('success','บันทึกข้อมูลสำเร็จ');
    }

    public function update_service(Request $request, $id)
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $update_service = Service::findOrFail($id);
        $update_service->document_header = $request->document_header;
        $update_service->document_detail = $request->document_detail;
        $update_service->promotion_header = $request->promotion_header;
        $update_service->promotion_detail = $request->promotion_detail;
        $update_service->service_header = $request->service_header;
        $update_service->service_detail = $request->service_detail;   
        $update_service->save();
        LogActivity::addToLog('Update Service By '.$this->user()->name);
        
        return redirect()->route('admin.managehome.index_service')->with('success','บันทึกข้อมูลสำเร็จ');
    }

    public function update_promotion(Request $request, $id)
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $promotion = Promotion::findOrFail($id);
        $promotion->header = $request->header;
        $promotion->detail = $request->detail;
        $promotion->status = $request->status;
        $promotion->save();
        LogActivity::addToLog('Update Promotion ID:'.$id.' By '.$this->user()->name);

        return redirect()->route('admin.managehome.index_promotion')->with('success','บันทึกข้อมูลสำเร็จ');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function destroy_newcar($id)
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $newcar = Newcar::findOrFail($id);
        $newcar->delete();
        LogActivity::addToLog('Delete New Car By '.$this->user()->name);

        return redirect()->route('admin.managehome.index_newcar');
    }

    public function destroy_promotion($id)
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $promotion = Promotion::findOrFail($id);
        $promotion->delete();
        LogActivity::addToLog('Delete Promotion By '.$this->user()->name);

        return redirect()->route('admin.managehome.index_promotion')->with('del-success','ลบข้อมูลสำเร็จ');
    }
    
    public function massDestroy_newcar(Request $request)
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        if ($request->input('ids')) {
            $entries = Newcar::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
        
        LogActivity::addToLog('Mass Delete New Car By '.$this->user()->name);
    }
    
    public function massDestroy_promotion(Request $request)
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        if ($request->input('ids')) {
            $entries = Promotion::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
        
        LogActivity::addToLog('Mass Delete Promotion By '.$this->user()->name);
    }
}
