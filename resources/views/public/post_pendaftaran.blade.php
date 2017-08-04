@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
       <div class="panel panel-success">
           <div class="panel-body">
                <p style="float: right">tanggal hari ini</p>
        <p>Nomor :</p>
        <p>Lampiran :</p>

        <p>Kepada Yth, </p>
        <p>Nama Sesuai pendaftaran, NIK sesuai pendaftaran</p>
        <p>Alamat sesuai pendaftaran</p>

        <p>Perihal : Pemberitahuan Jumlah Iuran Peserta Bukan Penerima Upah</p>

        <p>Berdasarkan pendaftaran yang dilakukan oleh Individu untuk menjadi peserta Bukan Penerima Upah (BPU) di BPJS
            Ketenagakerjaan, bersama ini kami tetapkan besarnya tarif Iuran dengan penjelasan sebagai berikut : </p>

            <ol>
                <li>Rincian yang harus dibayar
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>PROGRAM</th>
                                <th>DASAR UPAH</th>
                                <th>JUMLAH IURAN</th>
                                <th>KETERANGAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>JHT</td>
                                <td>0</td>
                                <td>Rp.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>JKK</td>
                                <td>1</td>
                                <td>Rp.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>JKM</td>
                                <td>1</td>
                                <td>Rp.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2">Jumlah Total Iuran yang harus dibayar</td>
                                <td>Rp.</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </li>
                <li>Pembayaran dilaksanakan melalui Bank yang telah bekerjasama dengan BPJS Ketenagakerjaan atau melalui
                   Payment Point Online Banking (PPOB) dengan menggunakan Nomor Induk Kependudukan (NIK)</li>
               </ol>

               <center>
                <button type="button" class="btn btn-primary">Cetak</button>
                <button type="button" class="btn btn-primary">Simpan PDF</button>
                </center>
           </div>
       </div>
        </div>
    </div>
    @endsection
