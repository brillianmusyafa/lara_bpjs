@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Jenis_pekerjaan</div>
                    <div class="panel-body">

                        <a href="{{ url('/jenis_pekerjaan/create') }}" class="btn btn-primary btn-xs" title="Add New Jenis_pekerjaan"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nama Pekerjaan </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($jenis_pekerjaan as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama_pekerjaan }}</td>
                                        <td>
                                            <a href="{{ url('/jenis_pekerjaan/' . $item->id) }}" class="btn btn-success btn-xs" title="View Jenis_pekerjaan"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/jenis_pekerjaan/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Jenis_pekerjaan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/jenis_pekerjaan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Jenis_pekerjaan" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Jenis_pekerjaan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $jenis_pekerjaan->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection