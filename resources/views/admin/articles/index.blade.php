@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-2">

        <h1>Articles</h1>

        <!-- Tombol Create New Article -->
        <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Create New Article</a>

        <!-- Tabel Artikel -->
        <table class="table table-striped">
            <thead>
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
                        <td>{{ $article->category }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>

                            <!-- Tombol Delete -->
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
