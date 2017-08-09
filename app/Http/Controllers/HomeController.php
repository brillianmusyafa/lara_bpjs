<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

use App\Kantor_cabang;
use App\Jenis_pekerjaan;
use App\Pendaftaran;
use App\Pembentukan;
use App\Program;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['program','iuran','persyaratan','postPendaftaran']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function program($value='')
    {
        return view('public.program');   
    }

    public function iuran($value='')
    {
        return view('public.iuran');   
    }

    public function persyaratan($value='')
    {
        return view('public.persyaratan');
    }

    public function pendaftaran($value='')
    {
        $id = Auth::user()->id;
        $cari_pendaftar = Pendaftaran::where('user_id',$id)->first();

        $option=[];
        if($cari_pendaftar == null){

            // datanya ada. tampilkan dan disable
            $option['msg'] = "Silahkan melakukan pendaftaran terlebih dahulu";
            $option['show_form'] = true;
        }
        else{
            $option['msg'] = "Anda telah terdaftar disistem kami. Anda tidak diperbolehkan merubah data yang sudah ada. Jika ada perubahan data mohon hubungi Admin. Terima Kasih!";
            $option['show_form'] = false;
            $option['data'] = $cari_pendaftar;
            $option['data_pembentukan'] = $this->getPembentukan($cari_pendaftar->id);
        }
        
        $list_kantor_cabang = Kantor_cabang::pluck('cabang','id');
        $list_jenis_pekerjaan = Jenis_pekerjaan::pluck('nama_pekerjaan','id');
        return view('public.pendaftaran',compact('list_kantor_cabang','list_jenis_pekerjaan','option'));
    }

    protected function getPembentukan($pendaftaran_id){
        $data = Pembentukan::where('pendaftaran_id',$pendaftaran_id)->get();
        return $data;
    }

    public function postPendaftaran(Request $request)
    {
        return view('public.post_pendaftaran');
    }

    public function pembentukan($value='')
    {
        $id = Auth::user()->id;
        $nominal = Auth::user()->Pendaftaran->nominal;
        // get dasar iuran
        $api = new ApiController();
        $rincian = $api->hitung($nominal);
        $data = Pendaftaran::where('user_id',$id)->first();
        $program = Program::all();
        $total = 0;
        foreach ($program as $key => $value) {
            // dd($data);
            $value->jumlah_iuran = $data->nominal * $value->dasar_upah / 100;
            $total +=$value->jumlah_iuran;

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

        
        return view('public.pembentukan',compact('program','total','bulan','rincian'));   
    }
}
