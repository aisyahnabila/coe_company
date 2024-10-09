@extends('layouts.app')
@section('content')
    <style>
        .modal-header {
            background-color: #007bff;
            /* Primary color */
            color: white;
        }

        .table td {
            padding: 10px;
            /* Adjust padding for table cells */
        }

        .table th {
            color: #007bff;
            /* Color for table headers */
        }

        .border {
            border: 2px solid #007bff;
            /* Border for the image */
        }

        .rounded-circle {
            border-radius: 50%;
            /* Make the image circular */
        }

        .modal-content {
            border-radius: 1rem;
            /* Rounded corners */
        }

        .bio-section {
            padding: 15px;
            background-color: #f8f9fa;
            /* Light background color */
            border-radius: 8px;
            /* Rounded corners */
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            /* Shadow for depth */
        }

        .bio-item {
            font-size: 16px;
            /* Font size */
        }

        .bio-item strong {
            color: #007bff;
            /* Color for the labels */
            min-width: 100px;
            /* Fixed width for alignment */
        }

        .education-section {
            padding-left: 15px;
            /* Indent education/research sections */
        }

        .card {
            transition: transform 0.2s;
            /* Animation for hover effect */
        }

        .card:hover {
            transform: translateY(-2px);
            /* Lift effect on hover */
        }

        .modal-content {
            border-radius: 1rem;
            /* Rounded corners */
        }

        .bio-section {
            padding: 20px;
        }

        .bio-item {
            font-size: 16px;
            /* Font size for bio items */
            color: #333;
            /* Dark text color for readability */
        }

        .badge {
            font-size: 14px;
            /* Font size for badges */
            margin-right: 5px;
            /* Spacing between badges */
        }

        .badge.bg-secondary {
            background-color: #6c757d !important;
            /* Override Bootstrap default color for media badges */
        }

        .badge.bg-light {
            background-color: #f8f9fa !important;
            /* Light background for education/research badges */
            color: #333;
            /* Dark text color */
        }
    </style>
    <!-- Hero Section Start -->
    <section class="text-center">
        <div class="hero-content p-5 my-5">
            <h1 class="hero-title">PEGAWAI KAMI</h1>
        </div>
    </section>
    <!-- Hero Section End-->

    <div class="container">
        <!-- Content Section -->
        <div class="container mt-5">
            <h2 class="text-primary text-center">KETUA COE BHT</h2>
            <div class="row ">
                @foreach ($leaders as $leader)
                    <div class="col-lg-12 d-flex justify-content-center">
                        <button class="staff-button" data-bs-toggle="modal" data-bs-target="#leaderModal{{ $leader->id }}">

                            <img src="{{ asset('storage/' . $leader->photo) }}" class="img-fluid mb-3" style="height: 400px"
                                alt="Ketua COE BHT">
                            <p>{{ $leader->name }}</p>
                        </button>
                        <div class="modal fade modal-xl" id="leaderModal{{ $leader->id }}" tabindex="-1"
                            aria-labelledby="leaderModalLabel{{ $leader->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content shadow-lg border-0">
                                    <div class="modal-header" style="background-color: #0056b3; color: white;">
                                        <h5 class="modal-title" id="leaderModalLabel{{ $leader->id }}">Biodata Ketua COE
                                            BHT</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-5 d-flex justify-content-center align-items-center mb-3">
                                                <img src="{{ asset('storage/' . $leader->photo) }}"
                                                    class="img-fluid rounded-circle border border-primary"
                                                    alt="Ketua COE BHT" style="max-height: 300px; object-fit: cover;">
                                            </div>
                                            <div class="col-md-7">
                                                <h3 class="mb-4" style="color: #0056b3;">Biodata</h3>
                                                <div class="bio-section">
                                                    <div class="bio-item mb-3">
                                                        <strong style="color: #0056b3;">Nama:</strong>
                                                        <span>{{ $leader->name }}</span>
                                                    </div>
                                                    <div class="bio-item mb-3">
                                                        <strong style="color: #0056b3;">Jabatan:</strong> <span>Ketua COE
                                                            BHT</span>
                                                    </div>
                                                    <div class="bio-item mb-3">
                                                        <strong style="color: #0056b3;">Email:</strong>
                                                        <span>{{ $leader->email }}</span>
                                                    </div>
                                                    <div class="bio-item mb-3">
                                                        <strong style="color: #0056b3;">Bio:</strong>
                                                        <p class="mb-0">{{ $leader->bio }}</p>
                                                    </div>
                                                    <div class="bio-item mb-3">
                                                        <strong style="color: #0056b3;">Pendidikan:</strong>
                                                        <div class="education-section">
                                                            @if ($leader->education && count($leader->education) > 0)
                                                                @foreach ($leader->education as $edu)
                                                                    <div class="mb-2">
                                                                        <span
                                                                            class="badge bg-light text-dark">{{ $edu->degree }}</span>
                                                                        <span> in {{ $edu->major }} at
                                                                            {{ $edu->institution }}</span>
                                                                    </div>
                                                                @endforeach
                                                            @else
                                                                <div>Tidak ada informasi pendidikan.</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="bio-item mb-3">
                                                        <strong style="color: #0056b3;">Media:</strong>
                                                        <div>
                                                            @if ($leader->media && count($leader->media) > 0)
                                                                @foreach ($leader->media as $media)
                                                                    <a href="{{ $media->url }}"
                                                                        class="badge bg-secondary text-white me-1"
                                                                        target="_blank">{{ $media->platform }}</a>
                                                                @endforeach
                                                            @else
                                                                <span>Tidak ada media yang terdaftar.</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="bio-item mb-3">
                                                        <strong style="color: #0056b3;">Research:</strong>
                                                        <div class="education-section">
                                                            @if ($leader->research && count($leader->research) > 0)
                                                                @foreach ($leader->research as $research)
                                                                    <div class="mb-2">
                                                                        <span
                                                                            class="badge bg-light text-dark">{{ $research->research_field }}</span>
                                                                        <p class="mb-0">{{ $research->description }}</p>
                                                                    </div>
                                                                @endforeach
                                                            @else
                                                                <div>Tidak ada penelitian yang terdaftar.</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                @endforeach
            </div>

            <!-- Other Staff Start -->
            <div class="row mt-5">
                <h2 class="text-primary mb-4  text-center">PEGAWAI COE BHT</h2>
                @foreach ($employees as $employee)
                    <div class="col-md-4">
                        <button class="staff-button" data-bs-toggle="modal"
                            data-bs-target="#employeeModal{{ $employee->id }}">
                            <img src="{{ asset('storage/' . $employee->photo) }}" class="img-fluid mb-3"
                                style="height: 400px" alt="Karyawan">
                            <p>{{ $employee->name }}</p>
                        </button>

                        <div class="modal fade modal-xl" id="employeeModal{{ $employee->id }}" tabindex="-1" aria-labelledby="employeeModalLabel{{ $employee->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content shadow-lg border-0">
                                    <div class="modal-header" style="background-color: #007bff; color: white;">
                                        <h5 class="modal-title" id="employeeModalLabel{{ $employee->id }}">Biodata Karyawan</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-5 d-flex justify-content-center align-items-center mb-3">
                                                <img src="{{ asset('storage/' . $employee->photo) }}" class="img-fluid rounded-circle border border-primary" alt="Karyawan" style="max-height: 300px; object-fit: cover;">
                                            </div>
                                            <div class="col-md-7">
                                                <h3 class="mb-4" style="color: #007bff;">Biodata</h3>
                                                <div class="bio-section">
                                                    <div class="bio-item mb-3">
                                                        <strong style="color: #007bff;">Nama:</strong> <span>{{ $employee->name }}</span>
                                                    </div>
                                                    <div class="bio-item mb-3">
                                                        <strong style="color: #007bff;">Jabatan:</strong> <span>{{ $employee->position->name }}</span>
                                                    </div>
                                                    <div class="bio-item mb-3">
                                                        <strong style="color: #007bff;">Email:</strong> <span>{{ $employee->email }}</span>
                                                    </div>
                                                    <div class="bio-item mb-3">
                                                        <strong style="color: #007bff;">Bio:</strong>
                                                        <p class="mb-0">{{ $employee->bio }}</p>
                                                    </div>
                                                    <div class="bio-item mb-3">
                                                        <strong style="color: #007bff;">Pendidikan:</strong>
                                                        <div class="education-section">
                                                            @if ($employee->education && count($employee->education) > 0)
                                                                @foreach ($employee->education as $edu)
                                                                    <div class="mb-2">
                                                                        <span class="badge bg-light text-dark">{{ $edu->degree }}</span>
                                                                        <span> in {{ $edu->major }} at {{ $edu->institution }}</span>
                                                                    </div>
                                                                @endforeach
                                                            @else
                                                                <div>Tidak ada informasi pendidikan.</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="bio-item mb-3">
                                                        <strong style="color: #007bff;">Media:</strong>
                                                        <div>
                                                            @if ($employee->media && count($employee->media) > 0)
                                                                @foreach ($employee->media as $media)
                                                                    <a href="{{ $media->url }}" class="badge bg-secondary text-white me-1" target="_blank">{{ $media->platform }}</a>
                                                                @endforeach
                                                            @else
                                                                <span>Tidak ada media yang terdaftar.</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="bio-item mb-3">
                                                        <strong style="color: #007bff;">Research:</strong>
                                                        <div class="education-section">
                                                            @if ($employee->research && count($employee->research) > 0)
                                                                @foreach ($employee->research as $research)
                                                                    <div class="mb-2">
                                                                        <span class="badge bg-light text-dark">{{ $research->research_field }}</span>
                                                                        <p class="mb-0">{{ $research->description }}</p>
                                                                    </div>
                                                                @endforeach
                                                            @else
                                                                <div>Tidak ada penelitian yang terdaftar.</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
            <!-- Other Staff End -->
        </div>
        <!-- Content Section End -->
    </div>
@endsection
