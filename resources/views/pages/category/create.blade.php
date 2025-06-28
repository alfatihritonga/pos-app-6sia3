@extends('layouts.app')

@section('title', 'Category')

@section('content')
    <h1 class="h3 mb-3">Tambah Kategori Baru</h1>

    <form action="{{ url('category') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" id="name" type="text" class="form-control">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/category" class="btn btn-danger">Batal</a>
    </form>
@endsection