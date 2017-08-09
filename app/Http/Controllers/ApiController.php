<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Master_dasar_penetapan;
use App\Pendaftaran;
use DB;

class ApiController extends Controller
{
	public function hitung($nilai_upah)
	{
		$cari = Master_dasar_penetapan::select('id','dasar_penghasilan','jkk','jkm','jht',DB::raw('(jkk+jkm+jht) as total'))->where('iuran_low','<=',$nilai_upah)->where('iuran_high','>=',$nilai_upah)->first();

		return $cari;
	}


    // untuk admin
	public function update_proses($id,Request $request)
	{
		$data = Pendaftaran::findOrFail($id);
		$data->update(['proses'=>$request['proses']]);

		return ['msg'=>'Data Berhasil diperbaharui'];
	}
}
