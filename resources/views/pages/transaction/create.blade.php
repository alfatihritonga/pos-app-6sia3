@extends('layouts.app')

@section('title', 'Product')

@section('content')
    <h1 class="h3 mb-3">Tambah Produk Baru</h1>

    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" id="name" type="text" class="form-control" required>
            @error('name')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Kategori</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input name="price" id="price" type="number" class="form-control" required>
            @error('price')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stok</label>
            <input name="stock" id="stock" type="number" class="form-control" required>
            @error('stock')
                {{ $message }}
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('product.index') }}" class="btn btn-danger">Batal</a>
    </form>
@endsection