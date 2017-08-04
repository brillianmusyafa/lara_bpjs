<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Kantor_cabang;
use Illuminate\Http\Request;
use Session;

class Kantor_cabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $kantor_cabang = Kantor_cabang::paginate(25);

        return view('kantor_cabang.index', compact('kantor_cabang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('kantor_cabang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Kantor_cabang::create($requestData);

        Session::flash('flash_message', 'Kantor_cabang added!');

        return redirect('kantor_cabang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $kantor_cabang = Kantor_cabang::findOrFail($id);

        return view('kantor_cabang.show', compact('kantor_cabang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $kantor_cabang = Kantor_cabang::findOrFail($id);

        return view('kantor_cabang.edit', compact('kantor_cabang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $kantor_cabang = Kantor_cabang::findOrFail($id);
        $kantor_cabang->update($requestData);

        Session::flash('flash_message', 'Kantor_cabang updated!');

        return redirect('kantor_cabang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Kantor_cabang::destroy($id);

        Session::flash('flash_message', 'Kantor_cabang deleted!');

        return redirect('kantor_cabang');
    }
}
