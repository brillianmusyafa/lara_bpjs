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
                        <div class="form-group">
                            -
                            {!! Form::select('tahun',$tahun,null,['class'=>'form-control']) !!}
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                        @foreach($data_pendaftar as $data)
                            <tr class="{{($data->proses=='GAGAL DAFTAR')?'warning':''}}">
                                <td>{{$no++}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->nama_lengkap}}</td>
                                <td>{{$data->nik}}</td>
                                <td>{{$data->tempat}}, {{$data->tanggal_lahir}}</td>
                                <td>{{$data->nama_ibu_kandung}}</td>
                                <td>{{$data->no_telp}}</td>
                                <td>{{$data->Jenis_pekerjaan->nama_pekerjaan}}</td>
                                <td>PENDATAAN</td>
                                <td>
                                {!! Form::select('proses',$proses,$data->proses,['class'=>'form-control','onchange'=>'update_proses(this)','data-id'=>$data->id,'placeholder'=>'--Pilih Proses']) !!}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-primary">edit</button> 
                                    <button type="button" class="btn btn-xs btn-danger">hapus</button>
                                </td>
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

@push('js')
<script type="text/javascript">
    function update_proses(elem){
        id = elem.getAttribute('data-id');
        // console.log(elem);
        // console.log(id);
        val = elem.value;
        token = "{{csrf_token()}}";

        $.post("{{url('api/update_proses')}}/"+id,{proses:val,_token:token},function(data){
            console.log(data);
        });


    }

</script>
@endpush