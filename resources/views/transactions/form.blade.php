<div class="form-group {{ $errors->has('id_transaksi') ? 'has-error' : ''}}" id="master-form">
    <!-- {!! Form::label('id_transaksi', 'Id Transaksi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('id_transaksi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('id_transaksi', '<p class="help-block">:message</p>') !!}
    </div> -->
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
    {!! Form::label('address', 'Address', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
     {!! Form::label('telp', 'Telp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('telp', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telp', '<p class="help-block">:message</p>') !!}
    </div>
    
    {!! Form::label('id_concert', 'Concert', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
            
          <select class="form-control" name="id_concert">
          
            @foreach($concerts as $item)
              <option value="{{$item->id_concert}}">{{$item->kelas}} / {{$item->kapasitas}} / {{$item->harga}} / {{$item->jadwal_mulai}} - {{$item->jadwal_selesai}}</option>
            @endforeach
          </select>
          <p>Kelas / Capacity / Price / From - To</p>
    </div>
</div>



<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Buy', ['class' => 'btn btn-primary']) !!}
    </div>
</div>




