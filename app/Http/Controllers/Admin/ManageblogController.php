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
                //$filenametostore = 'blog/'.time();

                //get file size
                $filesize = filesize($key);

                //Upload File
                $key->storeAs('public/tempImage', $filenametostore);
                $thumbnailpath = public_path('storage/tempImage/'.$filenametostore);
                $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save($thumbnailpath);
        
                //Upload File to s3
                Storage::disk('s3')->put($filenametostore, file_get_contents($key), 'public');
                //Storage::disk('s3')->put($filenametostore, fopen($request->file('car_image'), 'r+'));
        
                $url = Storage::disk('s3')->url($filenametostore);
                
                $imageblog = new ImageBlog;
                $imageblog->blog_id = $newblog->id;
                $imageblog->image_name = $filenametostore;
                $imageblog->image_size = $filesize;
                $imageblog->image_url = $url;
                $imageblog->save();

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
        
                //Upload File to s3
                Storage::disk('s3')->put($filenametostore, file_get_contents($key), 'public');
                //Storage::disk('s3')->put($filenametostore, fopen($request->file('car_image'), 'r+'));
        
                $url = Storage::disk('s3')->url($filenametostore);
                
                $imageblog = new ImageBlog;
                $imageblog->blog_id = $editblog->id;
                $imageblog->image_name = $filenametostore;
                $imageblog->image_size = $filesize;
                $imageblog->image_url = $url;
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
            Storage::disk('s3')->delete($imageBlog->image_name);
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
        Storage::disk('s3')->delete($imageBlog->image_name);
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
                Storage::disk('s3')->delete($imageblogentry->image_name);
                $imageblogentry->delete();
            }
        }

    }
    
}
