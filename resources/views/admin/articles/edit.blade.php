@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12 offset">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Article</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('articles.update', $article->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Title Field -->
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title', $article->title) }}" required>
                            </div>

                            <!-- Category Field -->
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control" id="category_id" name="category_id" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $article->category_id ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Slug Field -->
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                    value="{{ old('slug', $article->slug) }}" required>
                            </div>

                            <!-- Content Field -->
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="6" required>{{ old('content', $article->content) }}</textarea>
                            </div>

                            <!-- Featured Image Field -->
                            <div class="form-group">
                                <label for="featured_img">Featured Image</label>
                                <input type="file" class="form-control-file" id="featured_img" name="featured_img">
                                <small>Current image: {{ $article->featured_img }}</small>
                            </div>

                            {{-- Link Registration Field --}}
                            <div class="form-group">
                                <label for="registration_link">Link Pendaftaran</label>
                                <input type="url" class="form-control" id="registration_link" name="registration_link"
                                    value="{{ old('registration_link', $article->registration_link ?? '') }}">
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Update Article</button>
                                <a href="{{ route('articles.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
