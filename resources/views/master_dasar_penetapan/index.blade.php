@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Master_dasar_penetapan</div>
                    <div class="panel-body">

                        <a href="{{ url('/master_dasar_penetapan/create') }}" class="btn btn-primary btn-xs" title="Add New Master_dasar_penetapan"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Iuran Low </th><th> Iuran High </th><th> Dasar Penghasilan </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($master_dasar_penetapan as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->iuran_low }}</td><td>{{ $item->iuran_high }}</td><td>{{ $item->dasar_penghasilan }}</td>
                                        <td>
                                            <a href="{{ url('/master_dasar_penetapan/' . $item->id) }}" class="btn btn-success btn-xs" title="View Master_dasar_penetapan"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/master_dasar_penetapan/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Master_dasar_penetapan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/master_dasar_penetapan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Master_dasar_penetapan" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Master_dasar_penetapan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $master_dasar_penetapan->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection