@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-3">

        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-2">Articles</h1>

                <!-- Tombol Create New Article -->
                <a href="{{ route('articles.create') }}" class="btn btn-primary mb-2">
                    <i class="feather icon-plus"></i> Create New Article
                </a>

                <!-- Tabel Artikel -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->category->category_name }}</td>
                                    <td>{{ $article->created_at->format('d M Y') }}</td>
                                    <td>
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-warning">
                                            <i class="feather icon-edit"></i> Edit
                                        </a>

                                        <!-- Tombol Delete -->
                                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="feather icon-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
