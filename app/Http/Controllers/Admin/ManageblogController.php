<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Blog;
use App\ImageBlog;
use Response;
use Image;

class ManageblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('admin.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $newblog = new Blog;
        $newblog->header = $request->header;
        $newblog->detail = $request->detail;
        $newblog->status = $request->status;
        $newblog->save();

        if($request->hasFile('car_image')) {
            
            foreach ($request->car_image as $key) {

                //get filename with extension
                $filenamewithextension = $key->getClientOriginalName();
                
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        
                //get file extension
                $extension = $key->getClientOriginalExtension();
        
                //filename to store
                $filenametostore = 'blog/'.$filename.'_'.time().'.'.$extension;

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
                
                $imageblog = new ImageBlog;
                $imageblog->blog_id = $newblog->id;
                $imageblog->image_name = $filenametostore;
                $imageblog->image_size = $filesize;
                $imageblog->image_url = $path;
                $imageblog->save();
                
	                // $images = "mygirl.jpg";
                    // $new_images = "MyResize/mygirl.jpg";
                    // $width=200; //*** Fix Width & Heigh (Autu caculate) ***//
                    // $size=GetimageSize($images);
                    // $height=round($width*$size[1]/$size[0]);
                    // $images_orig = ImageCreateFromJPEG($images);
                    // $photoX = ImagesX($images_orig);
                    // $photoY = ImagesY($images_orig);
                    // $images_fin = ImageCreateTrueColor($width, $height);
                    // ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
                    // ImageJPEG($images_fin,$new_images);
                    // ImageDestroy($images_orig);
                    // ImageDestroy($images_fin);

            }
        }

        $blog = Blog::all();
        return redirect()->route('admin.manageblog.index', compact('blog'));
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
        $blog = Blog::findOrFail($id);
        $imageblog = ImageBlog::where('blog_id',$id)->get();
        return view('admin.blog.edit', compact('blog','imageblog'));
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
        $editblog = Blog::findOrFail($id);
        $editblog->header = $request->header;
        $editblog->detail = $request->detail;
        $editblog->status = $request->status;
        $editblog->save();

        if($request->hasFile('car_image')) {
 
            foreach ($request->car_image as $key) {

                //get filename with extension
                $filenamewithextension = $key->getClientOriginalName();
        
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        
                //get file extension
                $extension = $key->getClientOriginalExtension();
        
                //filename to store
                $filenametostore = 'blog/'.$filename.'_'.time().'.'.$extension;
                //$filenametostore = 'blog/'.time();

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
                
                $imageblog = new ImageBlog;
                $imageblog->blog_id = $editblog->id;
                $imageblog->image_name = $filenametostore;
                $imageblog->image_size = $filesize;
                $imageblog->image_url = $path;
                $imageblog->save();

            }
        }

        $blog = Blog::all();
        return redirect()->route('admin.manageblog.index', compact('blog'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oldblog = Blog::findOrFail($id);
        $groupImageBlog = ImageBlog::where('blog_id',$id)->get();
        $oldblog->delete();

        foreach ($groupImageBlog as $key) {
            $imageBlog = ImageBlog::findOrFail($key->id);
            unlink($imageBlog->image_url);
            $imageBlog->delete();
        }

        $blog = Blog::all();
        return redirect()->route('admin.manageblog.index', compact('blog'));
    }

    public function countImgBlog(Request $request)
    {
        $countImageBlog = ImageBlog::where('blog_id',$request->id)->count();
        return Response::json(array($countImageBlog)); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyImage(Request $request)
    {
        $imageBlog = ImageBlog::findOrFail($request->key);
        unlink($imageBlog->image_url);
        $imageBlog->delete();
        return "{}";
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        if ($request->input('ids')) {
            $entriesBlog = Blog::whereIn('id', $request->input('ids'))->get();
            $entriesImageBlog = ImageBlog::whereIn('blog_id', $request->input('ids'))->get();

            foreach ($entriesBlog as $blogentry) {
                $blogentry->delete();
            }

            foreach ($entriesImageBlog as $imageblogentry) {
                unlink($imageblogentry->image_url);
                $imageblogentry->delete();
            }
        }

    }
    
}
