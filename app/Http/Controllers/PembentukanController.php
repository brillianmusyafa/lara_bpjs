<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;

use App\Pembentukan;
use App\Detail_pembentukan;
use App\Master_dasar_penetapan;
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
        $api = new ApiController();

       
        $requestData = $request->all();
        $requestData['user_id'] = Auth::user()->id;
        $requestData['nominal_upah'] = Auth::user()->Pendaftaran->nominal;
        
        // get data dari iuran tabel
        $hitung = $api->hitung($requestData['nominal_upah']);
        // add to request array
        $requestData['jkk'] = $hitung['jkk'];
        $requestData['jkm'] = $hitung['jkm'];
        $requestData['jht'] = $hitung['jht'];
        $requestData['total'] = $hitung['total']*$requestData['jumlah_bulan_pembentukan'];
        $requestData['iuran_id'] = $hitung['id'];
        $requestData['pendaftaran_id'] = Auth::user()->Pendaftaran->id;

        // mulai transaksi untuk menyimpan dalam table
        DB::beginTransaction();
        $save = Pembentukan::create($requestData);

        // foreach ($requestData['program'] as $key => $value) {
        //     $data = [
        //     'pembentukan_id'=>$save->id,
        //     'program_id'=>$key,
        //     'jumlah_iuran'=>$value
        //     ];
        //     Detail_pembentukan::create($data);
        // }
        DB::commit();

        // save detail pembentukan


        Session::flash('flash_message', 'Pembentukan berhasil tersimpan!');

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
