@extends('layouts.app')
@section('content')
    <!-- Hero Section Start -->
    <section class="hero-section text-center">
        <div class="hero-content">
            <h1 class="hero-title">PEGAWAI KAMI</h1>
        </div>
    </section>
    <!-- Hero Section End-->

    <div class="container">
        <!-- Content Section -->
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 class="text-primary">KETUA COE BHT</h2>
                    <img src="{{ asset('../assets\img\foto_formal1.png') }}" class="img-fluid mb-3" alt="Ketua COE BHT">
                    <p>SUTO DERMAWAN M.T</p>
                </div>
            </div>

            <!-- Other Staff Start -->
            <div class="row text-center mt-5">
                <h2 class="text-primary mb-4">PEGAWAI COE BHT</h2>
                <div class="col-md-4">
                    <img src="{{ asset('../assets\img\foto_formal1.png') }}" class="img-fluid mb-2" alt="Staff">
                    <p>SUTO DERMAWAN M.T</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('../assets\img\foto_formal1.png') }}" class="img-fluid mb-2" alt="Staff">
                    <p>SUTO DERMAWAN M.T</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('../assets\img\foto_formal1.png') }}" class="img-fluid mb-2" alt="Staff">
                    <p>SUTO DERMAWAN M.T</p>
                </div>
            </div>
            <!-- Other Staff End -->

        </div>
        <!-- Content Section End-->

    </div>
@endsection
