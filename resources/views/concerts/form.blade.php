<div class="form-group {{ $errors->has('id_concert') ? 'has-error' : ''}}">
    {!! Form::hidden('id_concert', 'Id Concert', ['class' => 'col-md-4 control-label']) !!}
    
        {!! Form::hidden('id_concert', null, ['class' => 'form-control']) !!}
        {!! $errors->first('id_concert', '<p class="help-block">:message</p>') !!}
    
    {!! Form::label('kelas', 'Class', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <!-- {!! Form::select('kelas', ['Regular', 'VIP', 'VVIP', 'SSVIP'], null, ['class' => 'form-control']) !!} -->
        {!! Form::select('kelas', array('Regular' => 'Regular', 'VIP' => 'VIP', 'VVIP' => 'VVIP', 'SVIP' => 'SVIP'), null, ['class' => 'form-control']) !!}
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
        {!! Form::input('datetime-local','jadwal_mulai', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jadwal_mulai', '<p class="help-block">:message</p>') !!}
    </div>
    {!! Form::label('jadwal_selesai', 'To', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('datetime-local','jadwal_selesai', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jadwal_selesai', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>