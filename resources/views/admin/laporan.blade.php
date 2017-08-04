@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">LAPORAN KEUANGAN</div>

                <div class="panel-body">
                    <form action="" method="GET" class="form-inline" role="form">
                    
                        <div class="form-group">
                            Pilih Bulan
                            {!! Form::select('bulan',$bulan,null,['class'=>'form-control']) !!}
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>No Telp/HP</th>
                                <th>BULAN PEMBAYARAN</th>
                                <!-- <th>PENDAPATAN</th>
                                <th>PILIHAN</th> -->
                                <th>NOMINAL PEMBAYARAN</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                        @foreach($data as $dt)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$dt->User->Pendaftaran->nama_lengkap}}</td>
                                <td>{{$dt->User->Pendaftaran->nik}}</td>
                                <td>{{$dt->User->Pendaftaran->no_telp}}</td>
                                <td>{{$dt->bulan}} ({{$dt->bulan_pembayaran}} bulan)</td>
                                <!-- <td></td>
                                <td></td> -->
                                <td>Rp. {{number_format($dt->Detail_pembentukan->sum('jumlah_iuran'),0,'.','.')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <center>
                        <button type="button" class="btn btn-primary" onclick="window.print();">Cetak</button>
                        <button type="button" class="btn btn-primary">Simpan PDF</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
