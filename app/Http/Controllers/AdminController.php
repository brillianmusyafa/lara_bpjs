<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pendaftaran;
use App\Pembentukan;


class AdminController extends Controller
{
    public function index($value='')
    {
    	return view('admin.index');
    }
    public function daftar(Request $request)
    {
        if($request['bulan']){
            $data_pendaftar = Pendaftaran::whereMonth('created_at',$request['bulan'])->get();
        }
        else{
            $data_pendaftar = Pendaftaran::all();    
        }
        
        $bulan =[
            '01'=>'Januari',
            '02'=>'Februari',
            '03'=>'Maret',
            '04'=>'April',
            '05'=>'Mei',
            '06'=>'Juni',
            '07'=>'Juli',
            '08'=>'Agustus',
            '09'=>'September',
            '10'=>'Oktober',
            '11'=>'November',
            '12'=>'Desember',
        ];
    	return view('admin.daftar',compact('data_pendaftar','bulan'));
    }
    public function laporan(Request $request)
    {
        if($request['bulan']){
            $data = Pembentukan::where('bulan',$request['bulan'])->get();
        }
        else{
            $data = Pembentukan::all();    
        }
        $bulan =[
            '01'=>'Januari',
            '02'=>'Februari',
            '03'=>'Maret',
            '04'=>'April',
            '05'=>'Mei',
            '06'=>'Juni',
            '07'=>'Juli',
            '08'=>'Agustus',
            '09'=>'September',
            '10'=>'Oktober',
            '11'=>'November',
            '12'=>'Desember',
        ];
    	return view('admin.laporan',compact('data','bulan'));
    }
}

