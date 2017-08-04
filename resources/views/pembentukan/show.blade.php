@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pembentukan {{ $pembentukan->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('pembentukan/' . $pembentukan->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Pembentukan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['pembentukan', $pembentukan->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Pembentukan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pembentukan->id }}</td>
                                    </tr>
                                    <tr><th> User Id </th><td> {{ $pembentukan->user_id }} </td></tr><tr><th> Bulan </th><td> {{ $pembentukan->bulan }} </td></tr><tr><th> Bulan Pembayaran </th><td> {{ $pembentukan->bulan_pembayaran }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection