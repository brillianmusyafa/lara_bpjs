<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Detail_pembentukan;
use Illuminate\Http\Request;
use Session;

class Detail_pembentukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $detail_pembentukan = Detail_pembentukan::paginate(25);

        return view('detail_pembentukan.index', compact('detail_pembentukan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('detail_pembentukan.create');
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
        
        Detail_pembentukan::create($requestData);

        Session::flash('flash_message', 'Detail_pembentukan added!');

        return redirect('detail_pembentukan');
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
        $detail_pembentukan = Detail_pembentukan::findOrFail($id);

        return view('detail_pembentukan.show', compact('detail_pembentukan'));
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
        $detail_pembentukan = Detail_pembentukan::findOrFail($id);

        return view('detail_pembentukan.edit', compact('detail_pembentukan'));
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
        
        $detail_pembentukan = Detail_pembentukan::findOrFail($id);
        $detail_pembentukan->update($requestData);

        Session::flash('flash_message', 'Detail_pembentukan updated!');

        return redirect('detail_pembentukan');
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
        Detail_pembentukan::destroy($id);

        Session::flash('flash_message', 'Detail_pembentukan deleted!');

        return redirect('detail_pembentukan');
    }
}
