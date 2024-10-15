@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12 offset">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Staff</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Name Field -->
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $staff->name) }}" required>
                            </div>

                            <!-- Position Field -->
                            <div class="form-group">
                                <label for="position_id">Position</label>
                                <select class="form-control" id="position_id" name="position_id" required>
                                    <option value="">Select Position</option>
                                    @foreach ($positions as $position)
                                        <option value="{{ $position->id }}" {{ old('position_id', $staff->position_id) == $position->id ? 'selected' : '' }}>
                                            {{ $position->position_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Email Field -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $staff->email) }}" required>
                            </div>

                            <!-- Bio Field -->
                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <textarea class="form-control" id="bio" name="bio" rows="4" required>{{ old('bio', $staff->bio) }}</textarea>
                            </div>

                            <!-- Photo Field -->
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" class="form-control-file" id="photo" name="photo">
                                <small class="form-text text-muted">Leave blank if you do not want to change the photo.</small>
                            </div>
                            <hr>

                            <!-- Education Section -->
                            <h5>Education</h5>
                            <div id="education-fields">
                                @foreach ($staff->education as $index => $education)
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Degree" name="education[{{ $index }}][degree]" value="{{ old('education.' . $index . '.degree', $education->degree) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Major" name="education[{{ $index }}][major]" value="{{ old('education.' . $index . '.major', $education->major) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Institution" name="education[{{ $index }}][institution]" value="{{ old('education.' . $index . '.institution', $education->institution) }}">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <button type="button" class="btn btn-secondary mb-2" onclick="addEducationField()">Add More Education</button>

                            <!-- Media Section -->
                            <h5>Media</h5>
                            <div id="media-fields">
                                @foreach ($staff->media as $index => $media)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Platform" name="media[{{ $index }}][platform]" value="{{ old('media.' . $index . '.platform', $media->platform) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="url" class="form-control" placeholder="URL" name="media[{{ $index }}][url]" value="{{ old('media.' . $index . '.url', $media->url) }}">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <button type="button" class="btn btn-secondary mb-2" onclick="addMediaField()">Add More Media</button>

                            <!-- Research Section -->
                            <h5>Research</h5>
                            <div id="research-fields">
                                @foreach ($staff->research as $index => $research)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Research Field" name="research[{{ $index }}][research_field]" value="{{ old('research.' . $index . '.research_field', $research->research_field) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Description" name="research[{{ $index }}][description]" rows="2">{{ old('research.' . $index . '.description', $research->description) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <button type="button" class="btn btn-secondary" onclick="addResearchField()">Add More Research</button>

                            <!-- Submit Button -->
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary updateConfirm">Update Staff</button>
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
                if (event.target.classList.contains('updateConfirm')) {
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
                        text: "Memperbarui data sesuai yang anda inginkan",
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
        let educationIndex = {{ count($staff->education) }};
        let mediaIndex = {{ count($staff->media) }};
        let researchIndex = {{ count($staff->research) }};

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
