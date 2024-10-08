@extends('admin.layouts.app')
@section('admin-content')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/template/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
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
                                                    <img src="{{ asset('storage/' . $mitra->logo_img) }}" alt="{{ $mitra->logo_img }}" width="50">
                                                @else
                                                    No Logo
                                                @endif
                                            </td>
                                            <td><a href="{{ $mitra->website_url }}" target="_blank">{{ $mitra->website_url }}</a></td>
                                            <td >
                                                <div class="d-flex">
                                                    <a href="{{ route('mitra.edit', $mitra->id) }}" class="btn btn-sm btn-warning mr-1">
                                                        <i class="icon-settings"></i>
                                                    </a>
                                                    <form action="{{ route('mitra.destroy', $mitra->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">
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
    <script src="{{ asset('assets/template/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/buttons.print.min.js') }}"></script>

    <script>
        var eventsTable = $('.dom-jQuery-events').DataTable();

        $('.dom-jQuery-events tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            alert('You clicked on ' + data[0] + '\'s row');
        });
    </script>
@endsection
