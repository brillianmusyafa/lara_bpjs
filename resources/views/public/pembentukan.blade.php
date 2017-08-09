@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-body">
                <h3>FORM PEMBENTUKAN</h3>
                <form action="{{url('pembentukan')}}" method="POST" role="form">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="">BULAN PEMBAYARAN</label>
                        {!! Form::select('bulan',$bulan,null,['class'=>'form-control']) !!}
                        -
                        {!! Form::select('tahun',['2017'=>'2017','2018'=>'2018'],null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="">JUMLAH BULAN PEMBAYARAN</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="jumlah_bulan_pembentukan" id="input" value="1" checked="checked">
                                1 Bulan
                            </label>
                            <label>
                                <input type="radio" name="jumlah_bulan_pembentukan" id="input" value="3">
                                3 Bulan
                            </label>
                            <label>
                                <input type="radio" name="jumlah_bulan_pembentukan" id="input" value="6">
                                6 Bulan
                            </label>
                            <label>
                                <input type="radio" name="jumlah_bulan_pembentukan" id="input" value="12">
                                12 Bulan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>RINCIAN PEMBAYARAN</label>
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
                                @foreach($program as $pg)
                                <tr>
                                    <td>{{$pg->nama_program}}</td>
                                    <td>{{$pg->dasar_upah}}%</td>
                                    <td>
                                        {!! Form::hidden('program['.$pg->nama_program.']',$pg->jumlah_iuran) !!}
                                        Rp. {{number_format($pg->jumlah_iuran,0,'.','.')}}
                                    </td>
                                    <td width="500px"> {{$pg->keterangan}}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="2">Jumlah Total Iuran yang harus dibayar</td>
                                    <td>
                                    {!! Form::hidden('total',$total) !!}
                                    Rp. {{number_format($total,0,'.','.')}}</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
