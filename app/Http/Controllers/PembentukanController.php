<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pembentukan;
use App\Detail_pembentukan;
use Illuminate\Http\Request;
use Session;
use Auth;
use DB;

class PembentukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pembentukan = Pembentukan::paginate(25);

        return view('pembentukan.index', compact('pembentukan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pembentukan.create');
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
        $requestData['user_id'] = Auth::user()->id;
        DB::beginTransaction();
        $save = Pembentukan::create($requestData);

        foreach ($requestData['program'] as $key => $value) {
            $data = [
            'pembentukan_id'=>$save->id,
            'program_id'=>$key,
            'jumlah_iuran'=>$value
            ];
            Detail_pembentukan::create($data);
        }
        DB::commit();

        // save detail pembentukan


        Session::flash('flash_message', 'Pembentukan tersimpan!');

        return redirect('p/pendaftaran');
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
        $pembentukan = Pembentukan::findOrFail($id);

        return view('pembentukan.show', compact('pembentukan'));
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
        $pembentukan = Pembentukan::findOrFail($id);

        return view('pembentukan.edit', compact('pembentukan'));
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
        
        $pembentukan = Pembentukan::findOrFail($id);
        $pembentukan->update($requestData);

        Session::flash('flash_message', 'Pembentukan updated!');

        return redirect('pembentukan');
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
        Pembentukan::destroy($id);

        Session::flash('flash_message', 'Pembentukan deleted!');

        return redirect('pembentukan');
    }
}
