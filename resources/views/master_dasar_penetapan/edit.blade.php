@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Master_dasar_penetapan {{ $master_dasar_penetapan->id }}</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($master_dasar_penetapan, [
                            'method' => 'PATCH',
                            'url' => ['/master_dasar_penetapan', $master_dasar_penetapan->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('master_dasar_penetapan.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection