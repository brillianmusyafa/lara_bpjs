@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Kantor_cabang</div>
                    <div class="panel-body">

                        <a href="{{ url('/kantor_cabang/create') }}" class="btn btn-primary btn-xs" title="Add New Kantor_cabang"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Cabang </th><th> Alamat </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($kantor_cabang as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->cabang }}</td><td>{{ $item->alamat }}</td>
                                        <td>
                                            <a href="{{ url('/kantor_cabang/' . $item->id) }}" class="btn btn-success btn-xs" title="View Kantor_cabang"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/kantor_cabang/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Kantor_cabang"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/kantor_cabang', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Kantor_cabang" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Kantor_cabang',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $kantor_cabang->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection