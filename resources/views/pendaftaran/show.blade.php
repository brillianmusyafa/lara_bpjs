@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pendaftaran {{ $pendaftaran->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('pendaftaran/' . $pendaftaran->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Pendaftaran"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['pendaftaran', $pendaftaran->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Pendaftaran',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pendaftaran->id }}</td>
                                    </tr>
                                    <tr><th> Kantor Cabang Id </th><td> {{ $pendaftaran->kantor_cabang_id }} </td></tr><tr><th> Nama Lengkap </th><td> {{ $pendaftaran->nama_lengkap }} </td></tr><tr><th> Nik </th><td> {{ $pendaftaran->nik }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection