@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pembentukan</div>
                    <div class="panel-body">

                        <a href="{{ url('/pembentukan/create') }}" class="btn btn-primary btn-xs" title="Add New Pembentukan"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> User Id </th><th> Bulan </th><th> Bulan Pembayaran </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pembentukan as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->user_id }}</td><td>{{ $item->bulan }}</td><td>{{ $item->bulan_pembayaran }}</td>
                                        <td>
                                            <a href="{{ url('/pembentukan/' . $item->id) }}" class="btn btn-success btn-xs" title="View Pembentukan"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/pembentukan/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Pembentukan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/pembentukan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Pembentukan" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Pembentukan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $pembentukan->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection