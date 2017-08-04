<div class="form-group {{ $errors->has('nama_program') ? 'has-error' : ''}}">
    {!! Form::label('nama_program', 'Nama Program', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_program', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_program', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('dasar_upah') ? 'has-error' : ''}}">
    {!! Form::label('dasar_upah', 'Dasar Upah', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dasar_upah', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dasar_upah', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jumlah_iuran') ? 'has-error' : ''}}">
    {!! Form::label('jumlah_iuran', 'Jumlah Iuran', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jumlah_iuran', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jumlah_iuran', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('keterangan') ? 'has-error' : ''}}">
    {!! Form::label('keterangan', 'Keterangan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>