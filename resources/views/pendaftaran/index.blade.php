@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pendaftaran</div>
                    <div class="panel-body">

                        <a href="{{ url('/pendaftaran/create') }}" class="btn btn-primary btn-xs" title="Add New Pendaftaran"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Kantor Cabang Id </th><th> Nama Lengkap </th><th> Nik </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pendaftaran as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->kantor_cabang_id }}</td><td>{{ $item->nama_lengkap }}</td><td>{{ $item->nik }}</td>
                                        <td>
                                            <a href="{{ url('/pendaftaran/' . $item->id) }}" class="btn btn-success btn-xs" title="View Pendaftaran"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/pendaftaran/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Pendaftaran"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/pendaftaran', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Pendaftaran" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Pendaftaran',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $pendaftaran->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection