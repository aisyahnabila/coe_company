@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12 offset">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Partnership</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('mitra.update', $mitra->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Use PUT method for update -->

                            <!-- Partner Name Field -->
                            <div class="form-group">
                                <label for="partner_name">Partner Name</label>
                                <input type="text" class="form-control" id="partner_name" name="partner_name" value="{{ old('partner_name', $mitra->partner_name) }}" required>
                            </div>

                            <!-- Logo Image Field -->
                            <div class="form-group">
                                <label for="logo_img">Logo Image</label>
                                <input type="file" class="form-control-file" id="logo_img" name="logo_img">
                                @if ($mitra->logo_img)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $mitra->logo_img) }}" alt="{{ $mitra->logo_img }}" width="50">
                                    </div>
                                @endif
                            </div>

                            <!-- Website URL Field -->
                            <div class="form-group">
                                <label for="website_url">Website URL</label>
                                <input type="url" class="form-control" id="website_url" name="website_url" value="{{ old('website_url', $mitra->website_url) }}" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Update Partnership</button>
                                <a href="{{ route('mitra.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
