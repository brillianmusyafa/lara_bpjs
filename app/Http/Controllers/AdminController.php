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
            $data_pendaftar = Pendaftaran::orderBy('created_at','DESC')->get();    
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
        $tahun = [
            '2016'=>'2016',
            '2017'=>'2017',
            '2018'=>'2018',
        ];
        $proses = [
            'PROSES'=>'PROSES',
            'BERHASIL DAFTAR'=>'BERHASIL DAFTAR',
            'GAGAL DAFTAR'=>'GAGAL DAFTAR'
        ];
    	return view('admin.daftar',compact('data_pendaftar','bulan','tahun','proses'));
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

