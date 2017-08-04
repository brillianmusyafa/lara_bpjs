@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Baru</div>

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
                                <th>Tanggal Pendaftaran</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>TTL</th>
                                <th>Nama Ibu Kandung</th>
                                <th>No Telp/HP</th>
                                <th>Jenis Pekerjaan</th>
                                <th>PENDATAAN</th>
                                <th>PROSES</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                        @foreach($data_pendaftar as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->nama_lengkap}}</td>
                                <td>{{$data->nik}}</td>
                                <td>{{$data->tempat}}, {{$data->tanggal_lahir}}</td>
                                <td>{{$data->nama_ibu_kandung}}</td>
                                <td>{{$data->no_telp}}</td>
                                <td>{{$data->Jenis_pekerjaan->nama_pekerjaan}}</td>
                                <td>PENDATAAN</td>
                                <td>PROSES</td>
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
