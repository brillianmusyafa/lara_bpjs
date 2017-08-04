@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Detail_pembentukan {{ $detail_pembentukan->id }}</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($detail_pembentukan, [
                            'method' => 'PATCH',
                            'url' => ['/detail_pembentukan', $detail_pembentukan->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('detail_pembentukan.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection