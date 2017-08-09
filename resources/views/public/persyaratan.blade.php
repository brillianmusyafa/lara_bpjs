@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-body">
                <h3>Persyaratan</h3>
                <h5>Cara Mendaftara Menjadi Peserta</h5>
                <ul>


                    <li>Mempunyai NIK (Nomor Induk Kependudukan)</li>
                    <li>Mengisi formulir F1 BPU di menu pendaftaran untuk pendaftaran wadah/Kelompok/Mitra Baru atau
                       Menghubungi: </li>
                       <li>Kantor Cabang BPJS Ketenagakerjaan</li>
                       <li>Mitra/Payment Point(Aggregator/Perbankan) yang bekerjasama dengan BPJS Ketenagakerjaan.</li>
                       <li>Pembayaran iuran dapat dilakukan oleh peserta sendiri atau melalui Wadah/Mitra/Payment Point/Aggregator/Perbankan) selama bulanan/3 bulan/6 bulan/1 tahun sekaligus</li>
                   </ul>
                   <h5>TATA CARA PENGISIAN PENDAFTARAN MELALUI APLIKASI INI</h5>
                   <ol>

                       <li>Untuk yang calon peserta yang ingin mendaftar melalui aplikasi ini silahkan mengisi data 
                        diri secara lengkap pada menu pendaftaran.</li>
                        <li>Masukkan nilai nominal pendapatan dalam angka saja agar dapat dibuatkan perhitunngan dalam menu pembentukan</li>
                        <li>Peserta yang telah mendaftar dapat langsung masuk ke menu pembentukan untuk mencetak bukti pembentukan agar dapat dibayarkan melalui salah satu bank rekanan.</li>
                        <li>Calon peserta yang belum diverifikasi oleh admin tidak dapat melihat hasil pembentukan. Waktu verifikasi 1 x 24 jam hari dan jam kerja oleh admin</li>
                    </ol>

                    <p><strong>Silahkan <a href="{{url('/register')}}">register</a> atau <a href="{{'/login'}}">login</a> untuk melakukan pendaftaran</strong></p>
                </div>
            </div>
        </div>
    </div>
    @endsection
