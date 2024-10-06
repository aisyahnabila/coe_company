@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-3">

        <div class="row">
            <div class="col-md-6">
                <h1 class="mb-4">Tambah Kategori Artikel</h1>

                <form action="{{ route('categories.store') }} " method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Kategori</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Masukkan nama kategori" required>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="feather icon-save"></i> Tambah Kategori
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
