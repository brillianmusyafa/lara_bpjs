<div class="form-group {{ $errors->has('role_name') ? 'has-error' : ''}}">
    {!! Form::label('role_name', 'Role Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('role_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('role_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>