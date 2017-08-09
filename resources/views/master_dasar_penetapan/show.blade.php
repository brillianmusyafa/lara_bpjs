@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Master_dasar_penetapan {{ $master_dasar_penetapan->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('master_dasar_penetapan/' . $master_dasar_penetapan->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Master_dasar_penetapan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['master_dasar_penetapan', $master_dasar_penetapan->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Master_dasar_penetapan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $master_dasar_penetapan->id }}</td>
                                    </tr>
                                    <tr><th> Iuran Low </th><td> {{ $master_dasar_penetapan->iuran_low }} </td></tr><tr><th> Iuran High </th><td> {{ $master_dasar_penetapan->iuran_high }} </td></tr><tr><th> Dasar Penghasilan </th><td> {{ $master_dasar_penetapan->dasar_penghasilan }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection