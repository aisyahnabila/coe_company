@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-3">

        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-2">Categories</h1>

                <!-- Tombol Create New Category -->
                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">
                    <i class="feather icon-plus"></i> Add New Category
                </a>

                <!-- Tabel Kategori -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Category Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->category_name }}</td>
                                    <td>
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('categories.edit', $category->id) }}"
                                            class="btn btn-sm btn-warning">
                                            <i class="feather icon-edit"></i> Edit
                                        </a>

                                        <!-- Tombol Delete -->
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
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
