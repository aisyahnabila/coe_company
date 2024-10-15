@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create New Staff</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Name Field -->
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Position Field -->
                            <div class="form-group">
                                <label for="position_id">Position</label>
                                <select class="form-control @error('position_id') is-invalid @enderror" id="position_id" name="position_id" required>
                                    <option value="">Select Position</option>
                                    @foreach ($positions as $position)
                                        <option value="{{ $position->id }}" {{ old('position_id') == $position->id ? 'selected' : '' }}>
                                            {{ $position->position_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('position_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Bio Field -->
                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio" rows="4" required>{{ old('bio') }}</textarea>
                                @error('bio')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Photo Field -->
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" class="form-control-file @error('photo') is-invalid @enderror" id="photo" name="photo" required>
                                @error('photo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <hr>

                            <!-- Education Section -->
                            <h5>Education</h5>
                            <div id="education-fields">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('education.0.degree') is-invalid @enderror" placeholder="Degree" name="education[0][degree]" value="{{ old('education.0.degree') }}">
                                            @error('education.0.degree')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('education.0.major') is-invalid @enderror" placeholder="Major" name="education[0][major]" value="{{ old('education.0.major') }}">
                                            @error('education.0.major')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('education.0.institution') is-invalid @enderror" placeholder="Institution" name="education[0][institution]" value="{{ old('education.0.institution') }}">
                                            @error('education.0.institution')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary mb-2" onclick="addEducationField()">Add More Education</button>

                            <!-- Media Section -->
                            <h5>Media</h5>
                            <div id="media-fields">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('media.0.platform') is-invalid @enderror" placeholder="Platform" name="media[0][platform]" value="{{ old('media.0.platform') }}">
                                            @error('media.0.platform')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="url" class="form-control @error('media.0.url') is-invalid @enderror" placeholder="URL" name="media[0][url]" value="{{ old('media.0.url') }}">
                                            @error('media.0.url')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary mb-2" onclick="addMediaField()">Add More Media</button>

                            <!-- Research Section -->
                            <h5>Research</h5>
                            <div id="research-fields">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('research.0.research_field') is-invalid @enderror" placeholder="Research Field" name="research[0][research_field]" value="{{ old('research.0.research_field') }}">
                                            @error('research.0.research_field')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control @error('research.0.description') is-invalid @enderror" placeholder="Description" name="research[0][description]" rows="2">{{ old('research.0.description') }}</textarea>
                                            @error('research.0.description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary" onclick="addResearchField()">Add More Research</button>

                            <!-- Submit Button -->
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary btnConfirm">Create Staff</button>
                                <a href="{{ route('staff.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
    <script>
        let educationIndex = 1;
        let mediaIndex = 1;
        let researchIndex = 1;

        function addEducationField() {
            const educationFields = document.getElementById('education-fields');
            educationFields.insertAdjacentHTML('beforeend', `
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Degree" name="education[${educationIndex}][degree]" value="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Major" name="education[${educationIndex}][major]" value="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Institution" name="education[${educationIndex}][institution]" value="">
                        </div>
                    </div>
                </div>
            `);
            educationIndex++;
        }

        function addMediaField() {
            const mediaFields = document.getElementById('media-fields');
            mediaFields.insertAdjacentHTML('beforeend', `
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Platform" name="media[${mediaIndex}][platform]" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="url" class="form-control" placeholder="URL" name="media[${mediaIndex}][url]" value="">
                        </div>
                    </div>
                </div>
            `);
            mediaIndex++;
        }

        function addResearchField() {
            const researchFields = document.getElementById('research-fields');
            researchFields.insertAdjacentHTML('beforeend', `
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Research Field" name="research[${researchIndex}][research_field]" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Description" name="research[${researchIndex}][description]" rows="2"></textarea>
                        </div>
                    </div>
                </div>
            `);
            researchIndex++;
        }
    </script>
@endsection
