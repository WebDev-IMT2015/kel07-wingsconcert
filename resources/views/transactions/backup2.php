@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New transaction</div>
                    <div class="panel-body">
                        
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Id Transaksi</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($concerts as $item)
                                    <tr>
                                        <td>{{ $item->id_concert }}</td>
                                        <td>
                                            <a href="{{ url('/concerts/' . $item->id_concert) }}" title="View transaction"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/concerts/' . $item->id_concert . '/edit') }}" title="Edit transaction"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/concerts', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete transaction',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $concerts->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                        <div class="form-group {{ $errors->has('id_transaksi') ? 'has-error' : ''}}">
    
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

                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>

                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
