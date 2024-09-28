@extends('layouts.app')
@section('content')
    <!-- Header Section -->
    <section class="hero-section text-center bg-white">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-start">
                    <h1 class="display-5 fw-bold text-blue-dark">BIOMEDICAL & HEALTHCARE</h1>
                    <p class="lead text-danger">TECH. TELKOM UNIVERSITY</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/hero.png') }}" alt="Doctor Illustration" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section py-5">
        <div class="container">
            <h3 class="fw-bold text-blue-dark text-center">TENTANG BHT</h3>
            <div class="row content-about my-4">
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/Logo BHT.png') }}" alt="Doctor Illustration" width="80%"
                        class="img-fluid">
                </div>
                <div class="col-md-8">
                    <p class="text-intro">
                        <b>Center of Excellence (CoE) Biomedical & Healthcare Technology</b> ini akan fokus pada riset dan
                        inovasi di bidang rekayasa biomedis dan teknologi layanan kesehatan, dengan menekankan pada aspek
                        socio-economic dan psychological wellbeing pasien atau masyarakat. Riset dasar dan terapan, serta
                        inovasi di bidang tersebut akan dilakukan secara kolaboratif dengan berbagai stakeholder di bidang
                        Kesehatan seperti dengan Fakultas Kedokteran & Kesehatan Universitas DN/LN (Academic); Industri
                        ALKES, Rumah sakit, Klinik dll (Business); Kemenkes, Pemda, dll (Government); dan Asosiasi Profesi
                        Kedokteran & Kesehatan (Society).
                    </p>
                </div>
            </div>


            <div class="row text-center">
                <!-- Focus Area -->
                <div class="col-md-4 mb-4">
                    <div class="info-card text-center align-center">
                        <div class="rounded-circle bg-icons p-4 mt-5 mb-4">
                            <i class="bi bi-search"></i>
                        </div>
                        <h5 class="mb-4 fw-bold">Focus Area</h5>
                        <p>Digital Health, Social and Wellness​</p>
                    </div>
                </div>
                <!-- Sub Focus Area -->
                <div class="col-md-4 mb-4">
                    <div class="info-card">
                        <div class="rounded-circle bg-icons p-4 mt-5 mb-4">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h5 class="mb-4 fw-bold">Sub Focus Area</h5>
                        <p>Intelligent Biomedical Engineering, Digital Healthcare System, Psychological Well-being.</p>
                    </div>
                </div>

                <!-- Kepakaran -->
                <div class="col-md-4 mb-4">
                    <div class="info-card">
                        <div class="rounded-circle bg-icons p-4 mt-5 mb-4">
                            <i class="bi bi-person-gear"></i>
                        </div>
                        <h5 class="mb-4 fw-bold">Kepakaran</h5>
                        <p>Biomedical Instrumentations, Innovative therapeutic design, ICT for Healthcare solutions,
                            Techno-economic analysis of healthcare technology, Social engineering for health promotions,
                            Social & psychological wellbeing engineering </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll('.info-card');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add('fade-in');
                        }, index * 200); // Delay each card slightly (200ms difference)
                        observer.unobserve(entry
                        .target); // Stop observing once the animation has run
                    }
                });
            }, {
                threshold: 0.1
            }); // Trigger when 10% of the card is visible

            cards.forEach(card => {
                observer.observe(card);
            });
        });
    </script>
@endsection
