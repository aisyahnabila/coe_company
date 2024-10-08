@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12 offset">
                <div class="card">
                    <div class="card-header">
                        <h4>Page Controller</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('page.update', $about) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Partner Name Field -->
                            <div class="form-group">
                                <label for="partner_name">About Controller</label>
                                <textarea class="form-control" id="about" name="about" rows="4">{{ $about->about }}</textarea>
                            </div>

                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Update Page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
