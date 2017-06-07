@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>


            </div>
                <div class="container_web">
                    <a href="{{ route('user') }}">User</a>
                    <br>    
                    <a href="{{ route('concert') }}">Wings Concert</a>
                </div>
        </div>
    </div>
</div>
@endsection
