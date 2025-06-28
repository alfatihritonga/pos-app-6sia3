@extends('layouts.app')

@section('title', 'Category')

@section('content')
    <h1 class="h3 mb-3">Edit Kategori</h1>

    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" value="{{ $category->name }}" id="name" type="text" class="form-control">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
        <a href="{{ route('category.index') }}" class="btn btn-danger">Batal</a>
    </form>
@endsection