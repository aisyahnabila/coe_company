@extends('layouts.app')
@section('content')
    <!-- Hero Section Start -->
    <section class="text-center">
        <div class="hero-content">
            <h1 class="hero-title">PEGAWAI KAMI</h1>
        </div>
    </section>
    <!-- Hero Section End-->

    <div class="container">
        <!-- Content Section -->
        <div class="container mt-5">
            <div class="row text-center">
                <a class="col-lg-12">
                    <button class="staff-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <h2 class="text-primary">KETUA COE BHT</h2>
                        <img src="{{ asset('../assets\img\foto_formal1.png') }}" class="img-fluid mb-3" alt="Ketua COE BHT">
                        <p>SUTO DERMAWAN M.T</p>
                    </button>

                </a>
            </div>

            <!-- Other Staff Start -->
            <div class="row text-center mt-5">
                <h2 class="text-primary mb-4">PEGAWAI COE BHT</h2>
                <div class="col-md-4">
                    <button class="staff-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="{{ asset('../assets\img\foto_formal1.png') }}" class="img-fluid mb-2" alt="Staff">
                        <p>SUTO DERMAWAN M.T</p>
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="staff-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="{{ asset('../assets\img\foto_formal1.png') }}" class="img-fluid mb-2" alt="Staff">
                        <p>SUTO DERMAWAN M.T</p>
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="staff-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="{{ asset('../assets\img\foto_formal1.png') }}" class="img-fluid mb-2" alt="Staff">
                        <p>SUTO DERMAWAN M.T</p>
                    </button>
                </div>
            </div>
            <!-- Other Staff End -->

        </div>
        <!-- Content Section End-->
        <!-- Modal -->
        <div class="modal fade modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('../assets/img/foto_formal1.png') }}" class="img-fluid mb-3"
                                    alt="Ketua COE BHT">
                            </div>
                            <div class="col-md-6">
                                <h3>Biodata</h3>
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Nama</strong></td>
                                        <td>: [Nama Ketua]</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Jabatan</strong></td>
                                        <td>: Ketua COE BHT</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Pendidikan</strong></td>
                                        <td>: [Pendidikan Ketua]</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email</strong></td>
                                        <td>: [Email Ketua]</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Telepon</strong></td>
                                        <td>: [Nomor Telepon]</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
