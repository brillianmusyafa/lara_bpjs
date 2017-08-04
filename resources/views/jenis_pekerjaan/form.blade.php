<div class="form-group {{ $errors->has('nama_pekerjaan') ? 'has-error' : ''}}">
    {!! Form::label('nama_pekerjaan', 'Nama Pekerjaan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_pekerjaan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_pekerjaan', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>