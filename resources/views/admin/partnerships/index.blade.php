@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-3">

        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-2">Partnerships</h1>

                <!-- Tombol Create New Partnerships -->
                <a href="{{ route('partnerships.create') }}" class="btn btn-primary mb-2"> <i class="feather icon-plus"></i>
                    Create
                    New Partnership</a>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partnerships as $partnership)
                                <tr>
                                    <td>{{ $partnership->title }}</td>
                                    <td>{{ $partnership->status }}</td>
                                    <td>
                                        <a href="{{ route('partnerships.edit', $partnership->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('partnerships.destroy', $partnership->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger deleteConfirm">Delete</button>
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
