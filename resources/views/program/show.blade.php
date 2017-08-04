@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Program {{ $program->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('program/' . $program->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Program"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['program', $program->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Program',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $program->id }}</td>
                                    </tr>
                                    <tr><th> Nama Program </th><td> {{ $program->nama_program }} </td></tr><tr><th> Dasar Upah </th><td> {{ $program->dasar_upah }} </td></tr><tr><th> Jumlah Iuran </th><td> {{ $program->jumlah_iuran }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection