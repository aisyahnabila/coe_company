@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12 offset">
                <div class="card">
                    <div class="card-header">
                        <h4>Create New Article</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Title Field -->
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Category Field -->
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" id="category"
                                    name="category_id" required>
                                    <option value="">-- Select Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Slug Field -->
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                    id="slug" name="slug" value="{{ old('slug') }}" required>
                                @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Content Field -->
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="6"
                                    required>{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Featured Image Field -->
                            <div class="form-group">
                                <label for="featured_img">Featured Image</label>
                                <input type="file" class="form-control-file @error('featured_img') is-invalid @enderror"
                                    id="featured_img" name="featured_img" required>
                                @error('featured_img')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Create Article</button>
                                <a href="{{ route('articles.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
