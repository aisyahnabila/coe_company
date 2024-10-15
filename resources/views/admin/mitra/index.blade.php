@extends('admin.layouts.app')
@section('admin-content')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/template/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/swal2/styles.css') }}">
    <div class="container mt-3">


        <div class="row card p-2">
            <div class="container">
                <div class="col-md-12">
                    <div class="justify-content-between d-flex">
                        <h1 class="mb-2">Mitra</h1>

                        <!-- Button to Create New Partner -->
                        <a href="{{ route('mitra.create') }}" class="btn btn-primary mb-2">
                            <i class="feather icon-plus"></i> Create New Partner
                        </a>
                    </div>

                    <!-- Partners Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dom-jQuery-events">
                            <thead>
                                <tr>
                                    <th>Partner Name</th>
                                    <th>Logo</th>
                                    <th>Website URL</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mitras as $mitra)
                                    <tr>
                                        <td>{{ $mitra->partner_name }}</td>
                                        <td>
                                            @if ($mitra->logo_img)
                                                <img src="{{ asset('storage/' . $mitra->logo_img) }}"
                                                    alt="{{ $mitra->logo_img }}" width="50">
                                            @else
                                                No Logo
                                            @endif
                                        </td>
                                        <td><a href="{{ $mitra->website_url }}"
                                                target="_blank">{{ $mitra->website_url }}</a></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('mitra.edit', $mitra->id) }}"
                                                    class="btn btn-sm btn-warning mr-1">
                                                    <i class="icon-settings"></i>
                                                </a>
                                                <form
                                                    action="
                                                {{-- {{ route('mitra.destroy', $mitra->id) }} --}}
                                                 "
                                                    method="POST" class="deleteConfirm">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger deleteConfirm">
                                                        <i class="feather icon-trash"></i>
                                                    </button>
                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/buttons.print.min.js') }}"></script>
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
    <script>
        var eventsTable = $('.dom-jQuery-events').DataTable();

        $('.dom-jQuery-events tbody').on('click', 'tr', function() {
            var data = eventsTable.row(this).data(); // Use eventsTable instead of table
            // Show an alert with the clicked row data
        });
    </script>
@endsection
