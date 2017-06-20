@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">History Transactions</div>
                    <div class="panel-body">

                        

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Id Transaksi</th><th>Name</th><th>Address</th><th>Telp</th><th>Id Concert</th><th>Class</th><th>Price</th><th>From</th><th>To</th><th>Bought at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $item)
                                    <tr>
                                        <td>{{ $item->id_transaksi }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->telp }}</td>
                                        <td>{{ $item->id_concert }}</td>
                                        <td>{{ $item->kelas }}</td>
                                        <td>{{ $item->harga }}</td>
                                        <td>{{ $item->jadwal_mulai }}</td>
                                        <td>{{ $item->jadwal_selesai }}</td>
                                        <td>{{ $item->tgltransaksi }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- <div class="pagination-wrapper"> {!! $transactions->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
