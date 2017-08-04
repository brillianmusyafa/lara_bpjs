<div class="form-group {{ $errors->has('pembentukan_id') ? 'has-error' : ''}}">
    {!! Form::label('pembentukan_id', 'Pembentukan Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('pembentukan_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pembentukan_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('program_id') ? 'has-error' : ''}}">
    {!! Form::label('program_id', 'Program Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('program_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('program_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jumlah_iuran') ? 'has-error' : ''}}">
    {!! Form::label('jumlah_iuran', 'Jumlah Iuran', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jumlah_iuran', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jumlah_iuran', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>