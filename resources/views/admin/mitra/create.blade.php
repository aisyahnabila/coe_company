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
                                <button type="submit" class="btn btn-primary">Create Mitra</button>
                                <a href="{{ route('mitra.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
