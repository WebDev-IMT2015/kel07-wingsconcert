@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New transaction</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/transactions', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('transactions.form')


                        {!! Form::close() !!}

                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
