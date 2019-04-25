<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Response;
use App\Gallery;
use App\ImageGallery;
use Image;

class ManagegalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $gallery = Gallery::all();
        return view('admin.gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $newgallery = new Gallery;
        $newgallery->detail = $request->detail;
        $newgallery->status = $request->status;
        $newgallery->save();

        if($request->hasFile('car_image')) {
 
            foreach ($request->car_image as $key) {

                //get filename with extension
                $filenamewithextension = $key->getClientOriginalName();
        
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        
                //get file extension
                $extension = $key->getClientOriginalExtension();
        
                //filename to store
                $filenametostore = 'gallery/'.$filename.'_'.time().'.'.$extension;
                //$filenametostore = 'gallery/'.time();

                //get file size
                $filesize = filesize($key);

                //Upload File
                $imgwidth = 1170;
                $path = 'image_car/'.$filenametostore;
                $img = Image::make($key->getRealPath());
                if($img->width()>$imgwidth){ 
                    // See the docs - http://image.intervention.io/api/resize
                    // resize the image to a width of 300 and constrain aspect ratio (auto height)
                    $img->resize($imgwidth, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    
                }

                $img->save($path);
        
                //Upload File to s3
                //Storage::disk('s3')->put($filenametostore, file_get_contents($key), 'public');
                //Storage::disk('s3')->put($filenametostore, fopen($request->file('car_image'), 'r+'));        
                //$url = Storage::disk('s3')->url($filenametostore);
                
                $imagegallery = new ImageGallery;
                $imagegallery->gallery_id = $newgallery->id;
                $imagegallery->image_name = $filenametostore;
                $imagegallery->image_size = $filesize;
                $imagegallery->image_url = $path;
                $imagegallery->save();

            }
        }

        $gallery = Gallery::all();
        return redirect()->route('admin.managegallery.index', compact('gallery'))->with('success','บันทึกข้อมูลสำเร็จ');
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
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $gallery = Gallery::findOrFail($id);
        $imagegallery = ImageGallery::where('gallery_id',$id)->get();
        return view('admin.gallery.edit', compact('gallery','imagegallery'));
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
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $editgallery = Gallery::findOrFail($id);
        $editgallery->detail = $request->detail;
        $editgallery->status = $request->status;
        $editgallery->save();

        if($request->hasFile('car_image')) {
 
            foreach ($request->car_image as $key) {

                //get filename with extension
                $filenamewithextension = $key->getClientOriginalName();
        
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        
                //get file extension
                $extension = $key->getClientOriginalExtension();
        
                //filename to store
                $filenametostore = 'gallery/'.$filename.'_'.time().'.'.$extension;
                //$filenametostore = 'gallery/'.time();

                //get file size
                $filesize = filesize($key);

                //Upload File
                $imgwidth = 1170;
                $path = 'image_car/'.$filenametostore;
                $img = Image::make($key->getRealPath());
                if($img->width()>$imgwidth){ 
                    // See the docs - http://image.intervention.io/api/resize
                    // resize the image to a width of 300 and constrain aspect ratio (auto height)
                    $img->resize($imgwidth, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    
                }

                $img->save($path);
                
                $imagegallery = new ImageGallery;
                $imagegallery->gallery_id = $editgallery->id;
                $imagegallery->image_name = $filenametostore;
                $imagegallery->image_size = $filesize;
                $imagegallery->image_url = $path;
                $imagegallery->save();

            }
        }

        $gallery = Gallery::all();
        return redirect()->route('admin.managegallery.index', compact('gallery'))->with('success','บันทึกข้อมูลสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        $oldgallery = Gallery::findOrFail($id);
        $groupImageGallery = ImageGallery::where('gallery_id',$id)->get();
        $oldgallery->delete();

        foreach ($groupImageGallery as $key) {
            $imageGallery = ImageGallery::findOrFail($key->id);
            unlink($imageGallery->image_url);
            $imageGallery->delete();
        }

        $gallery = Gallery::all();
        return redirect()->route('admin.managegallery.index', compact('gallery'))->with('del-success','ลบข้อมูลสำเร็จ');
    }

    public function countImgGallery(Request $request)
    {
        $countImageGallery = ImageGallery::where('gallery_id',$request->id)->count();
        return Response::json(array($countImageGallery)); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyImage(Request $request)
    {
        $ImageGallery = ImageGallery::findOrFail($request->key);
        unlink($ImageGallery->image_url);
        $ImageGallery->delete();
        return "{}";
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('website_manage')) {
            return abort(401);
        }

        if ($request->input('ids')) {
            $entriesGallery = Gallery::whereIn('id', $request->input('ids'))->get();
            $entriesImageGallery = ImageGallery::whereIn('gallery_id', $request->input('ids'))->get();

            foreach ($entriesGallery as $galleryentry) {
                $galleryentry->delete();
            }

            foreach ($entriesImageGallery as $imagegalleryentry) {
                unlink($imagegalleryentry->image_url);
                $imagegalleryentry->delete();
            }

        }

    }
}
