@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12 offset">
                <div class="card">
                    <div class="card-header">
                        <h4>Create New Mitra</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('mitra.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Partner Name Field -->
                            <div class="form-group">
                                <label for="partner_name">Partner Name</label>
                                <input type="text" class="form-control" id="partner_name" name="partner_name" value="{{ old('partner_name') }}" required>
                            </div>

                            <!-- Logo Image Field -->
                            <div class="form-group">
                                <label for="logo_img">Logo Image</label>
                                <input type="file" class="form-control-file" id="logo_img" name="logo_img" required>
                            </div>

                            <!-- Website URL Field -->
                            <div class="form-group">
                                <label for="website_url">Website URL</label>
                                <input type="url" class="form-control" id="website_url" name="website_url" value="{{ old('website_url') }}" required>
                            </div>

                            <!-- Hidden User ID Field -->
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                            <!-- Submit Button -->
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary btnConfirm">Create Mitra</button>
                                <a href="{{ route('mitra.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/template/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('swal2/script.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Attach event listener to the document or a parent container
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('btnConfirm')) {
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
                        text: "Menambahkan data sesuai yang anda inginkan",
                        icon: "question",
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
