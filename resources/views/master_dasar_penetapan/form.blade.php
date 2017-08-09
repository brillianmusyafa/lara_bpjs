<div class="form-group {{ $errors->has('iuran_low') ? 'has-error' : ''}}">
    {!! Form::label('iuran_low', 'Iuran Low', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('iuran_low', null, ['class' => 'form-control']) !!}
        {!! $errors->first('iuran_low', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('iuran_high') ? 'has-error' : ''}}">
    {!! Form::label('iuran_high', 'Iuran High', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('iuran_high', null, ['class' => 'form-control']) !!}
        {!! $errors->first('iuran_high', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('dasar_penghasilan') ? 'has-error' : ''}}">
    {!! Form::label('dasar_penghasilan', 'Dasar Penghasilan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dasar_penghasilan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dasar_penghasilan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jkk') ? 'has-error' : ''}}">
    {!! Form::label('jkk', 'Jkk', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jkk', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jkk', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jkm') ? 'has-error' : ''}}">
    {!! Form::label('jkm', 'Jkm', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jkm', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jkm', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jht') ? 'has-error' : ''}}">
    {!! Form::label('jht', 'Jht', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jht', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jht', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>