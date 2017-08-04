<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Jenis_pekerjaan;
use Illuminate\Http\Request;
use Session;

class Jenis_pekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $jenis_pekerjaan = Jenis_pekerjaan::paginate(25);

        return view('jenis_pekerjaan.index', compact('jenis_pekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('jenis_pekerjaan.create');
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
        
        Jenis_pekerjaan::create($requestData);

        Session::flash('flash_message', 'Jenis_pekerjaan added!');

        return redirect('jenis_pekerjaan');
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
        $jenis_pekerjaan = Jenis_pekerjaan::findOrFail($id);

        return view('jenis_pekerjaan.show', compact('jenis_pekerjaan'));
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
        $jenis_pekerjaan = Jenis_pekerjaan::findOrFail($id);

        return view('jenis_pekerjaan.edit', compact('jenis_pekerjaan'));
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
        
        $jenis_pekerjaan = Jenis_pekerjaan::findOrFail($id);
        $jenis_pekerjaan->update($requestData);

        Session::flash('flash_message', 'Jenis_pekerjaan updated!');

        return redirect('jenis_pekerjaan');
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
        Jenis_pekerjaan::destroy($id);

        Session::flash('flash_message', 'Jenis_pekerjaan deleted!');

        return redirect('jenis_pekerjaan');
    }
}
