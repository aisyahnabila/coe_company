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
                                            <button type="submit" class="btn btn-sm btn-danger deleteConfirm">
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
    <script src="{{ asset('swal2/script.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Attach event listener to the document or a parent container
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('deleteConfirm')) {
                    event.preventDefault(); // Prevent the button from immediately submitting the form

                    const form = event.target.closest('form'); // Get the closest form
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: "btn btn-primary btn-lg ml-2",
                            cancelButton: "btn btn-secondary btn-lg"
                        },
                        buttonsStyling: false
                    });

                    swalWithBootstrapButtons.fire({
                        title: "Apakah Anda yakin?",
                        text: "Data anda akan terhapus selamanya!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Ya",
                        cancelButtonText: "Batal",
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // If confirmed, submit the form
                            form.submit();
                        }
                    });
                }
            });
        });
    </script>
@endsection
