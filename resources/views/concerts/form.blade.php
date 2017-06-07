<div class="form-group {{ $errors->has('id_concert') ? 'has-error' : ''}}">
    {!! Form::label('id_concert', 'Id Concert', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('id_concert', null, ['class' => 'form-control']) !!}
        {!! $errors->first('id_concert', '<p class="help-block">:message</p>') !!}
    </div>
    {!! Form::label('kelas', 'Class', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('kelas', null, ['class' => 'form-control']) !!}
        {!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
    </div>
    {!! Form::label('kapasitas', 'Capacity', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('kapasitas', null, ['class' => 'form-control']) !!}
        {!! $errors->first('kapasitas', '<p class="help-block">:message</p>') !!}
    </div>
    {!! Form::label('harga', 'Price', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('harga', null, ['class' => 'form-control']) !!}
        {!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
    </div>
    {!! Form::label('jadwal_mulai', 'From', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jadwal_mulai', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jadwal_mulai', '<p class="help-block">:message</p>') !!}
    </div>
    {!! Form::label('jadwal_selesai', 'To', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jadwal_selesai', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jadwal_selesai', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
