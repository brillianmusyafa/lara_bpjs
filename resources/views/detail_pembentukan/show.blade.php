@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Detail_pembentukan {{ $detail_pembentukan->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('detail_pembentukan/' . $detail_pembentukan->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Detail_pembentukan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['detail_pembentukan', $detail_pembentukan->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Detail_pembentukan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $detail_pembentukan->id }}</td>
                                    </tr>
                                    <tr><th> Pembentukan Id </th><td> {{ $detail_pembentukan->pembentukan_id }} </td></tr><tr><th> Program Id </th><td> {{ $detail_pembentukan->program_id }} </td></tr><tr><th> Jumlah Iuran </th><td> {{ $detail_pembentukan->jumlah_iuran }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection