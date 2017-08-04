@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Jenis_pekerjaan {{ $jenis_pekerjaan->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('jenis_pekerjaan/' . $jenis_pekerjaan->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Jenis_pekerjaan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['jenis_pekerjaan', $jenis_pekerjaan->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Jenis_pekerjaan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $jenis_pekerjaan->id }}</td>
                                    </tr>
                                    <tr><th> Nama Pekerjaan </th><td> {{ $jenis_pekerjaan->nama_pekerjaan }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection