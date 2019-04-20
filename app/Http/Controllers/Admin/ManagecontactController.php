<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Contact;
use Response;

class ManagecontactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = contact::all();
        return view('admin.contact.index',compact('contact'));
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editcontact = contact::findOrFail($id);
        $editcontact =  $request->input('lat_map');
        $editcontact =  $request->input('lng_map');
        $editcontact =  $request->input('address1');
        $editcontact =  $request->input('address2');
        $editcontact =  $request->input('address3');
        $editcontact =  $request->input('address4');
        $editcontact =  $request->input('address5');
        $editcontact =  $request->input('phone1');
        $editcontact =  $request->input('phone2');
        $editcontact =  $request->input('facebook');
        $editcontact =  $request->input('instragram');
        $editcontact =  $request->input('youtube');
        $editcontact =  $request->input('line');
        $editcontact->save();


        return view('admin.contact.index');
        
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
}
