<div class="form-group {{ $errors->has('id_transaksi') ? 'has-error' : ''}}">
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

    <div>
        <table class="table table-borderless">
            <thead>
                <tr>
                 	<th>Id Concert</th><th>Class</th><th>Capacity</th><th>Price</th><th>From</th><th>To</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($concerts as $item)
                <tr>
                    <td>{{ $item->id_concert }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td>{{ $item->kapasitas }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->jadwal_mulai }}</td>
                    <td>{{ $item->jadwal_selesai }}</td>
                    <td>
					    
					        {!! Form::number('kapasitas', null, ['class' => 'form-control']) !!}
					        {!! $errors->first('kapasitas', '<p class="help-block">:message</p>') !!}
					    
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>



<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Buy', ['class' => 'btn btn-primary']) !!}
    </div>
</div>




