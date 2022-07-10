@extends('layouts.main')

@section('title')
    Riwayat Transaksi
@endsection

@section('Konten')

    <h3 class="text-center mt-3">Riwayat Transaksi</h3>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    </div>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Customer</th>
                <th scope="col">Jumlah Pembelian</th>
                <th scope="col">Jenis LPG</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->customer_type }}</td>
                    <td>{{ $order->total }}</td>
                    <td>
                        @foreach (json_decode($order->lpg_type) as $lpg_type)
                            &middot; {{ $lpg_type }} <br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
