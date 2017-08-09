<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Master_dasar_penetapan;
use Illuminate\Http\Request;
use Session;

class Master_dasar_penetapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $master_dasar_penetapan = Master_dasar_penetapan::paginate(25);

        return view('master_dasar_penetapan.index', compact('master_dasar_penetapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('master_dasar_penetapan.create');
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
        
        Master_dasar_penetapan::create($requestData);

        Session::flash('flash_message', 'Master_dasar_penetapan added!');

        return redirect('master_dasar_penetapan');
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
        $master_dasar_penetapan = Master_dasar_penetapan::findOrFail($id);

        return view('master_dasar_penetapan.show', compact('master_dasar_penetapan'));
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
        $master_dasar_penetapan = Master_dasar_penetapan::findOrFail($id);

        return view('master_dasar_penetapan.edit', compact('master_dasar_penetapan'));
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
        
        $master_dasar_penetapan = Master_dasar_penetapan::findOrFail($id);
        $master_dasar_penetapan->update($requestData);

        Session::flash('flash_message', 'Master_dasar_penetapan updated!');

        return redirect('master_dasar_penetapan');
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
        Master_dasar_penetapan::destroy($id);

        Session::flash('flash_message', 'Master_dasar_penetapan deleted!');

        return redirect('master_dasar_penetapan');
    }
}
