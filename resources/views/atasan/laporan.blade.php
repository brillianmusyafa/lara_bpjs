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
                            <select name="" id="input" class="form-control" required="required">
                <option value="">Januari 2017</option>
                <option value="">Februari 2017</option>
                <option value="">Maret 2017</option>
                <option value="">April 2017</option>
                <option value="">Mei 2017</option>
                <option value="">Juni 2017</option>
                <option value="">Juli 2017</option>
                <option value="">Agustus 2017</option>
                <option value="">September 2017</option>
                <option value="">Oktober 2017</option>
                <option value="">November 2017</option>
                <option value="">Desember 2017</option>
                <option value="">Januari 2018</option>
                <option value="">Februari 2018</option>
                <option value="">Maret 2018</option>
                <option value="">April 2018</option>
                <option value="">Mei 2018</option>
                <option value="">Juni 2018</option>
                <option value="">Juli 2018</option>
                <option value="">Agustus 2018</option>
                <option value="">September 2018</option>
                <option value="">Oktober 2018</option>
                <option value="">November 2018</option>
                <option value="">Desember 2018</option>
              </select>
               - 
               <select name="" id="input" class="form-control" required="required">
                <option value="">Januari 2017</option>
                <option value="">Februari 2017</option>
                <option value="">Maret 2017</option>
                <option value="">April 2017</option>
                <option value="">Mei 2017</option>
                <option value="">Juni 2017</option>
                <option value="">Juli 2017</option>
                <option value="">Agustus 2017</option>
                <option value="">September 2017</option>
                <option value="">Oktober 2017</option>
                <option value="">November 2017</option>
                <option value="">Desember 2017</option>
                <option value="">Januari 2018</option>
                <option value="">Februari 2018</option>
                <option value="">Maret 2018</option>
                <option value="">April 2018</option>
                <option value="">Mei 2018</option>
                <option value="">Juni 2018</option>
                <option value="">Juli 2018</option>
                <option value="">Agustus 2018</option>
                <option value="">September 2018</option>
                <option value="">Oktober 2018</option>
                <option value="">November 2018</option>
                <option value="">Desember 2018</option>
              </select>
                            {{-- Form::select('bulan',$bulan,null,['class'=>'form-control']) --}}
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
