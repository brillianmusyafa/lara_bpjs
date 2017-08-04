@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Detail_pembentukan</div>
                    <div class="panel-body">

                        <a href="{{ url('/detail_pembentukan/create') }}" class="btn btn-primary btn-xs" title="Add New Detail_pembentukan"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Pembentukan Id </th><th> Program Id </th><th> Jumlah Iuran </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($detail_pembentukan as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->pembentukan_id }}</td><td>{{ $item->program_id }}</td><td>{{ $item->jumlah_iuran }}</td>
                                        <td>
                                            <a href="{{ url('/detail_pembentukan/' . $item->id) }}" class="btn btn-success btn-xs" title="View Detail_pembentukan"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/detail_pembentukan/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Detail_pembentukan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/detail_pembentukan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Detail_pembentukan" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Detail_pembentukan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $detail_pembentukan->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection