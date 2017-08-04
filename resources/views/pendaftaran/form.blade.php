<div class="form-group {{ $errors->has('kantor_cabang_id') ? 'has-error' : ''}}">
    {!! Form::label('kantor_cabang_id', 'Kantor Cabang Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('kantor_cabang_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('kantor_cabang_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama_lengkap') ? 'has-error' : ''}}">
    {!! Form::label('nama_lengkap', 'Nama Lengkap', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_lengkap', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_lengkap', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nik') ? 'has-error' : ''}}">
    {!! Form::label('nik', 'Nik', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nik', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nik', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tempat') ? 'has-error' : ''}}">
    {!! Form::label('tempat', 'Tempat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tempat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tempat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : ''}}">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tanggal_lahir', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama_ibu_kandung') ? 'has-error' : ''}}">
    {!! Form::label('nama_ibu_kandung', 'Nama Ibu Kandung', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_ibu_kandung', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_ibu_kandung', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('no_telp') ? 'has-error' : ''}}">
    {!! Form::label('no_telp', 'No Telp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('no_telp', null, ['class' => 'form-control']) !!}
        {!! $errors->first('no_telp', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    {!! Form::label('alamat', 'Alamat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jenis_pekerjaan') ? 'has-error' : ''}}">
    {!! Form::label('jenis_pekerjaan', 'Jenis Pekerjaan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jenis_pekerjaan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jenis_pekerjaan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nominal') ? 'has-error' : ''}}">
    {!! Form::label('nominal', 'Nominal', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nominal', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nominal', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>