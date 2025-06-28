@extends('layouts.app')

@section('title', 'Transaction')

@section('content')
<h1 class="h3 mb-3">Data Transaksi</h1>

@if (session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<a href="{{ route('transaction.create') }}" class="btn btn-primary mb-2">Tambah</a>


<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Date</th>
            <th>Total Product</th>
            <th>Total Transaction</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($transactions as $transaction)
        
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $transaction->created_at }}</td>
            <td>{{ $transaction->details->count() }}</td>
            
            <td>Rp. {{ number_format($transaction->total_price, 0, ',', '.') }}</td>
            <td>
                <a href="" class="btn btn-info text-white">Detail</a>
                {{-- <form action="" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-white" >Hapus</button>
                </form> --}}
            </td>
        </tr>

        @empty

        <tr>
            <td>Belum ada data</td>
        </tr>

        @endforelse
    </tbody>
    
</table>
@endsection