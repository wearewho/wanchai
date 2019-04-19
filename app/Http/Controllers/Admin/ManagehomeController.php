<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Newcar;
use App\Promotion;
use LogActivity;

class ManagehomeController extends Controller
{
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
        $newcar = Newcar::all();
        return view('admin.home.newcar.index');
    }

    public function index_promotion()
    {
        $promotion = Promotion::all();
        return view('admin.home.promotion.index',compact('promotion'));
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
        return view('admin.home.newcar.create');
    }

    public function create_promotion()
    {
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
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        
        //$newcar = Newcar::create($request->all());

        return redirect()->route('admin.managehome.index_newcar');
    }

    public function store_promotion(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $promotion = new Promotion;
        $promotion->header = $request->header;
        $promotion->detail = $request->detail;
        $promotion->status = $request->status;
        $promotion->save();

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
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $newcar = Newcar::findOrFail($id);
        $countNewcar = Newcar::where('status', '=', 'publish')->count();

        return view('admin.home.newcar.edit', compact('newcar', 'countNewcar'));
    }

    public function edit_promotion($id)
    {
        if (! Gate::allows('users_manage')) {
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
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $newcar = Newcar::findOrFail($id);
        $newcar->update($request->all());
        LogActivity::addToLog('Update New Car Successfully.');

        return redirect()->route('admin.managehome.inde');
    }

    public function update_promotion(Request $request, $id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $promotion = Promotion::findOrFail($id);
        $promotion->header = $request->header;
        $promotion->detail = $request->detail;
        $promotion->status = $request->status;
        $promotion->save();
        LogActivity::addToLog('Update Promotion Successfully.');

        return redirect()->route('admin.managehome.index_promotion');
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
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $newcar = Newcar::findOrFail($id);
        $newcar->delete();
        LogActivity::addToLog('Delete New Car Successfully.');

        return redirect()->route('admin.managehome.index_newcar');
    }

    public function destroy_promotion($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $promotion = Promotion::findOrFail($id);
        $promotion->delete();
        LogActivity::addToLog('Delete Promotion Successfully.');

        return redirect()->route('admin.managehome.index_promotion');
    }
    
    public function massDestroy_newcar(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Newcar::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
        
        LogActivity::addToLog('Delete New Car Successfully.');
    }
    
    public function massDestroy_promotion(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Promotion::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
        
        LogActivity::addToLog('Delete Promotion Successfully.');
    }
}
