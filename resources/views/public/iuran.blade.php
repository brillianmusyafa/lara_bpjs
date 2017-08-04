@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">
                <!-- <h3 class="panel-title">Panel title</h3> -->
            </div>
            <div class="panel-body">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>PROGRAM BPJS KETENAGAKERJAAN</th>
                            <th>NILAI IURAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jaminan Kecelakaan Kerja</td>
                            <td>1% (berdasarkan nominal tertentu sesuai kemampuan penghasilan)</td>
                        </tr>
                        <tr>
                            <td>Jaminan Kematian</td>
                            <td>Rp. 6.800,-</td>
                        </tr>
                        <tr>
                            <td>Jaminan Hari Tua</td>
                            <td>2%</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                 <div class="col-md-6">
                 <p>Ket:</p>
                <p>*Nominal berdasarkan tabel dasar upah yang dapat didownload <a href="http://www.bpjsketenagakerjaan.go.id/assets/uploads/tiny_mce/AGINTHEA1/29122015_155442_tabel%20iuran%20low.jpg">disni</a></p>
                <p>*Iuran ditanggung sepenuhnya oleh peserta</p>
                 </div>
                 <div class="col-md-6">
                 <div class="panel panel-success">
                     <div class="panel-heading">
                         <h3 class="panel-title">Kalkulator Perhitungan</h3>
                     </div>
                     <div class="panel-body">
                         <form action="" method="POST" role="form">
                       
                             <div class="form-group">
                                 <label for="">Masukkan Nilai Upah</label>
                                 <input type="text" class="form-control" id="" placeholder="">
                             </div>
                             <div class="form-group">
                                 <center><button type="button" class="btn btn-primary">Hitung</button></center>
                             </div>
                            <div class="form-group">
                                 <label for="">Nilai Pendapatan</label>
                                 <input type="text" class="form-control" id="" placeholder="">
                             </div>
                         </form>
                     </div>
                 </div>
                 </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
