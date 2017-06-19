@extends('layouts.app')

@section('content')
<section id="inputan">
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New transaction</div>
                    <div class="panel-body">
                        
                        <form class="form-horizontal" id="master-form">
                        <input type="hidden" id="csrf" name="_csrf" value="<?csrf_token()?>" />
                        <input type="hidden" id="maxquantity" name="maxquantity" />
                        <div class="box-body">
                            <div class="col-md-7">
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="name..">
                                    </div>
                                </div>
                            </div>
                                                        
                            <hr>
                            <div>
                                <table class="table table-borderless" id=tabel"">
                                    <thead>
                                        <tr>
                                            <th>Id Concert</th><th>Class</th><th>Capacity</th><th>Price</th><th>From</th><th>To</th><th>Total</th>
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
                        </div><!-- /.box-body -->                       
                        <div class="box-footer">
                            <a class="btn btn-primary" id="order">Order</a>
                            <span id="issubmit"></span>
                        </div>
                    </form>

                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$(document).ready(function() {
    $('#master-form').on( 'submit', function () {
        $('#order').hide();
        $('#issubmit').text("Submitting...");
        var data = $('#master-form').serialize();
        var dataline = $('#tabel').bootstrapTable('getData');
        var datas = data+'&produkline='+JSON.stringify(dataline);   
        console.log(datas);

        return false;       
    }); 
});

$(function() {
        $('#tabel').bootstrapTable();
});
</script>

@endsection