@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="mb-4">Edit Kategori Artikel</h1>

                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="category_name">Nama Kategori</label>
                        <input type="text" class="form-control" id="category_name" name="category_name"
                            value="{{ old('category_name', $category->category_name) }}" required>
                        @error('category_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="feather icon-save"></i> Edit Kategori
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
