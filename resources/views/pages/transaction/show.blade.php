@extends('layouts.app')

@section('title', 'Detail Transaksi')

@section('content')
<div class="container">
    <h1 class="h3 mb-3">Detail Transaksi</h1>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Informasi Transaksi</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Tanggal:</strong> {{ $transaction->created_at->format('d M Y H:i') }}</li>
                <li class="list-group-item"><strong>Total Produk:</strong> {{ $transaction->details->count() }}</li>
                <li class="list-group-item"><strong>Total Transaksi:</strong> Rp. {{ number_format($transaction->total_price, 0, ',', '.') }}</li>
                <li class="list-group-item"><strong>Uang Diterima:</strong> Rp. {{ number_format($transaction->cash_received, 0, ',', '.') }}</li>
                <li class="list-group-item"><strong>Kembalian:</strong> Rp. {{ number_format($transaction->change_returned, 0, ',', '.') }}</li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Daftar Produk</h5>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaction->details as $detail)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $detail->product->name ?? '-' }}</td>
                            <td>Rp. {{ number_format($detail->price, 0, ',', '.') }}</td>
                            <td>{{ $detail->quantity }}</td>
                            <td>Rp. {{ number_format($detail->subtotal, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <a href="{{ route('transaction.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
