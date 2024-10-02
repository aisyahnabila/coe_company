@extends('layouts.app')
@section('content')
    <!-- Header Section -->
    <section class=" text-center bg-white">
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
            <div class="my-5" id="tentang">
                <h3 class="fw-bold text-blue-dark text-center">TENTANG BHT</h3>
                <div class="row content-about my-4">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/img/Logo BHT.png') }}" alt="Doctor Illustration" width="80%"
                            class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <p class="text-intro">
                            <b>Center of Excellence (CoE) Biomedical & Healthcare Technology</b> ini akan fokus pada riset
                            dan
                            inovasi di bidang rekayasa biomedis dan teknologi layanan kesehatan, dengan menekankan pada
                            aspek
                            socio-economic dan psychological wellbeing pasien atau masyarakat. Riset dasar dan terapan,
                            serta
                            inovasi di bidang tersebut akan dilakukan secara kolaboratif dengan berbagai stakeholder di
                            bidang
                            Kesehatan seperti dengan Fakultas Kedokteran & Kesehatan Universitas DN/LN (Academic); Industri
                            ALKES, Rumah sakit, Klinik dll (Business); Kemenkes, Pemda, dll (Government); dan Asosiasi
                            Profesi
                            Kedokteran & Kesehatan (Society).
                        </p>
                    </div>
                </div>


                <div class="row text-center">
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

            {{-- ================ SEMINAR============== --}}
            <div id="training">
                <h3 class="fw-bold text-blue-dark text-center mb-5">PELATIHAN SEMINAR</h3>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <img src="{{ asset('assets/img/4 1.png') }}" class="card-img-top" alt="Slide Image">
                                <div class="card-body">
                                    <div class="text-start">
                                        <h5 class="card-title fw-bold">Card Title</h5>
                                        <p class="card-text seminar-text">This is a brief description of the content in the
                                            card. It
                                            provides some interesting information.</p>
                                    </div>

                                    <a href="#" class="btn btn-dark-blue w-100 mt-5 rounded-3">LINK REGISTRASI</a>
                                    <div class="row text-secondary mt-3">
                                        <div class="col-6 d-flex align-items-center"> <!-- Use col-6 for all sizes -->
                                            <img class="rounded-circle me-2" src="{{ asset('assets/img/Logo BHT.png') }}"
                                                style="width: 30px;" alt="">
                                            <p class="mb-0 text">Denny Daffa asd</p>
                                        </div>

                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <!-- Ensure flex alignment -->
                                            <i class="bi bi-clock me-2"></i>
                                            <p class="mb-0 text">20 Mei. 2024</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <img src="{{ asset('assets/img/4 1.png') }}" class="card-img-top" alt="Slide Image">
                                <div class="card-body">
                                    <div class="text-start">
                                        <h5 class="card-title fw-bold">Card Title</h5>
                                        <p class="card-text seminar-text">This is a brief description of the content in the
                                            card. It
                                            provides some interesting information.</p>
                                    </div>

                                    <a href="#" class="btn btn-dark-blue w-100 mt-5 rounded-3">LINK REGISTRASI</a>
                                    <div class="row text-secondary mt-3">
                                        <div class="col-6 d-flex align-items-center"> <!-- Use col-6 for all sizes -->
                                            <img class="rounded-circle me-2" src="{{ asset('assets/img/Logo BHT.png') }}"
                                                style="width: 30px;" alt="">
                                            <p class="mb-0 text">Denny Daffa asd</p>
                                        </div>

                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <!-- Ensure flex alignment -->
                                            <i class="bi bi-clock me-2"></i>
                                            <p class="mb-0 text">20 Mei. 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <img src="{{ asset('assets/img/4 1.png') }}" class="card-img-top" alt="Slide Image">
                                <div class="card-body">
                                    <div class="text-start">
                                        <h5 class="card-title fw-bold">Card Title</h5>
                                        <p class="card-text seminar-text">This is a brief description of the content in the
                                            card. It
                                            provides some interesting information.</p>
                                    </div>

                                    <a href="#" class="btn btn-dark-blue w-100 mt-5 rounded-3">LINK REGISTRASI</a>
                                    <div class="row text-secondary mt-3">
                                        <div class="col-6 d-flex align-items-center"> <!-- Use col-6 for all sizes -->
                                            <img class="rounded-circle me-2" src="{{ asset('assets/img/Logo BHT.png') }}"
                                                style="width: 30px;" alt="">
                                            <p class="mb-0 text">Denny Daffa asd</p>
                                        </div>

                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <!-- Ensure flex alignment -->
                                            <i class="bi bi-clock me-2"></i>
                                            <p class="mb-0 text">20 Mei. 2024</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination mt-5"></div>
                </div>
            </div>
        </div>

        {{-- ================ KERJA SAMA ============== --}}
        <section class="my-5  bg-dark-blue">
            <div class="container py-5">
                <h3 class="text-white py-3 fw-bold text-center">KERJA SAMA</h3>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide rounded-4">
                            <div class="card card-kerja-sama border-0">
                                <div class="card-body">
                                    <div class="text-start mb-3">
                                        <span class="badge text-bg-primary text-start">Status Aktif</span>
                                    </div>
                                    <div class="text-center">
                                        <h5 class="card-title fw-bold">Tide Eye – AI/IoT-powered Airborne System for
                                            Monitoring Water Level and Tidal Floods in North Coast of Central Java</h5>
                                    </div>

                                    <hr class="border border-primary border-3 opacity-75">
                                    <div class="custom-table-container">
                                        <table class="custom-table">
                                            <tr>
                                                <td class="text-start">Funder</td>
                                                <td>: KONEKSI-DFAT</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Skema</td>
                                                <td>: Kolaboratif Riset Indonesia-Australia</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Fund</td>
                                                <td>: $350,000</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Teams</td>
                                                <td>: Zoro, Pedrosa, Firsabersari, The Cangcuters</td>
                                            </tr>

                                        </table>

                                    </div>

                                    <span class="badge text-bg-dark-blue text-center w-100 mt-4">Kolaborasi Luar Negeri
                                        (LN)</span>
                                </div>
                                <div class="card-footer text-body-secondary">
                                    <div class="row text-secondary mt-3">
                                        <div class="col-6 d-flex align-items-center"> <!-- Use col-6 for all sizes -->
                                            <img class="rounded-circle me-2" src="{{ asset('assets/img/Logo BHT.png') }}"
                                                style="width: 30px;" alt="">
                                            <p class="mb-0 text">Denny Daffa asd</p>
                                        </div>

                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <!-- Ensure flex alignment -->
                                            <i class="bi bi-clock me-2"></i>
                                            <p class="mb-0 text">20 Mei. 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide rounded-4">
                            <div class="card card-kerja-sama border-0">
                                <div class="card-body">
                                    <div class="text-start mb-3">
                                        <span class="badge text-bg-primary text-start">Status Aktif</span>
                                    </div>
                                    <div class="text-center">
                                        <h5 class="card-title fw-bold">Tide Eye – AI/IoT-powered Airborne System for
                                            Monitoring Water Level and Tidal Floods in North Coast of Central Java</h5>
                                    </div>

                                    <hr class="border border-primary border-3 opacity-75">
                                    <div class="custom-table-container">
                                        <table class="custom-table">
                                            <tr>
                                                <td class="text-start">Funder</td>
                                                <td>: KONEKSI-DFAT</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Skema</td>
                                                <td>: Kolaboratif Riset Indonesia-Australia</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Fund</td>
                                                <td>: $350,000</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Teams</td>
                                                <td>: Zoro, Pedrosa, Firsabersari, The Cangcuters</td>
                                            </tr>

                                        </table>

                                    </div>

                                    <span class="badge text-bg-dark-blue text-center w-100 mt-4">Kolaborasi Luar Negeri
                                        (LN)</span>
                                </div>
                                <div class="card-footer text-body-secondary">
                                    <div class="row text-secondary mt-3">
                                        <div class="col-6 d-flex align-items-center"> <!-- Use col-6 for all sizes -->
                                            <img class="rounded-circle me-2" src="{{ asset('assets/img/Logo BHT.png') }}"
                                                style="width: 30px;" alt="">
                                            <p class="mb-0 text">Denny Daffa asd</p>
                                        </div>

                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <!-- Ensure flex alignment -->
                                            <i class="bi bi-clock me-2"></i>
                                            <p class="mb-0 text">20 Mei. 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide rounded-4">
                            <div class="card card-kerja-sama border-0">
                                <div class="card-body">
                                    <div class="text-start mb-3">
                                        <span class="badge text-bg-primary text-start">Status Aktif</span>
                                    </div>
                                    <div class="text-center">
                                        <h5 class="card-title fw-bold">Tide Eye – AI/IoT-powered Airborne System for
                                            Monitoring Water Level and Tidal Floods in North Coast of Central Java</h5>
                                    </div>

                                    <hr class="border border-primary border-3 opacity-75">
                                    <div class="custom-table-container">
                                        <table class="custom-table">
                                            <tr>
                                                <td class="text-start">Funder</td>
                                                <td>: KONEKSI-DFAT</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Skema</td>
                                                <td>: Kolaboratif Riset Indonesia-Australia</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Fund</td>
                                                <td>: $350,000</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Teams</td>
                                                <td>: Zoro, Pedrosa, Firsabersari, The Cangcuters</td>
                                            </tr>

                                        </table>

                                    </div>
                                    <span class="badge text-bg-dark-blue text-center w-100 mt-4">Kolaborasi Luar Negeri
                                        (LN)</span>
                                </div>
                                <div class="card-footer text-body-secondary">
                                    <div class="row text-secondary mt-3">
                                        <div class="col-6 d-flex align-items-center"> <!-- Use col-6 for all sizes -->
                                            <img class="rounded-circle me-2" src="{{ asset('assets/img/Logo BHT.png') }}"
                                                style="width: 30px;" alt="">
                                            <p class="mb-0 text">Denny Daffa asd</p>
                                        </div>

                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <!-- Ensure flex alignment -->
                                            <i class="bi bi-clock me-2"></i>
                                            <p class="mb-0 text">20 Mei. 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide rounded-4">
                            <div class="card card-kerja-sama border-0">
                                <div class="card-body">
                                    <div class="text-start mb-3">
                                        <span class="badge text-bg-primary text-start">Status Aktif</span>
                                    </div>
                                    <div class="text-center">
                                        <h5 class="card-title fw-bold">Tide Eye – AI/IoT-powered Airborne System for
                                            Monitoring Water Level and Tidal Floods in North Coast of Central Java</h5>
                                    </div>

                                    <hr class="border border-primary border-3 opacity-75">
                                    <div class="custom-table-container">
                                        <table class="custom-table">
                                            <tr>
                                                <td class="text-start">Funder</td>
                                                <td>: KONEKSI-DFAT</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Skema</td>
                                                <td>: Kolaboratif Riset Indonesia-Australia</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Fund</td>
                                                <td>: $350,000</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Teams</td>
                                                <td>: Zoro, Pedrosa, Firsabersari, The Cangcuters</td>
                                            </tr>

                                        </table>

                                    </div>

                                    <span class="badge text-bg-dark-blue text-center w-100 mt-4">Kolaborasi Luar Negeri
                                        (LN)</span>
                                </div>
                                <div class="card-footer text-body-secondary">
                                    <div class="row text-secondary mt-3">
                                        <div class="col-6 d-flex align-items-center"> <!-- Use col-6 for all sizes -->
                                            <img class="rounded-circle me-2" src="{{ asset('assets/img/Logo BHT.png') }}"
                                                style="width: 30px;" alt="">
                                            <p class="mb-0 text">Denny Daffa asd</p>
                                        </div>

                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <!-- Ensure flex alignment -->
                                            <i class="bi bi-clock me-2"></i>
                                            <p class="mb-0 text">20 Mei. 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination mt-5"></div>
                </div>
            </div>
        </section>

        <div class="container">

            {{-- ================ SEMINAR============== --}}
            <div class="py-5" id="training">
                <h3 class="fw-bold text-blue-dark text-center mb-5">PENGABDIAN MASYARAKAT</h3>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <img src="{{ asset('assets/img/4 1.png') }}" class="card-img-top" alt="Slide Image">
                                <div class="card-body">
                                    <div class="text-start">
                                        <h5 class="card-title fw-bold">Card Title</h5>
                                        <p class="card-text seminar-text">This is a brief description of the content in the
                                            card. It
                                            provides some interesting information.</p>
                                    </div>

                                    <a href="#" class="btn btn-dark-blue w-100 mt-5 rounded-3">LINK REGISTRASI</a>
                                    <div class="row text-secondary mt-3">
                                        <div class="col-6 d-flex align-items-center"> <!-- Use col-6 for all sizes -->
                                            <img class="rounded-circle me-2" src="{{ asset('assets/img/Logo BHT.png') }}"
                                                style="width: 30px;" alt="">
                                            <p class="mb-0 text">Denny Daffa asd</p>
                                        </div>

                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <!-- Ensure flex alignment -->
                                            <i class="bi bi-clock me-2"></i>
                                            <p class="mb-0 text">20 Mei. 2024</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <img src="{{ asset('assets/img/4 1.png') }}" class="card-img-top" alt="Slide Image">
                                <div class="card-body">
                                    <div class="text-start">
                                        <h5 class="card-title fw-bold">Card Title</h5>
                                        <p class="card-text seminar-text">This is a brief description of the content in the
                                            card. It
                                            provides some interesting information.</p>
                                    </div>

                                    <a href="#" class="btn btn-dark-blue w-100 mt-5 rounded-3">LINK REGISTRASI</a>
                                    <div class="row text-secondary mt-3">
                                        <div class="col-6 d-flex align-items-center"> <!-- Use col-6 for all sizes -->
                                            <img class="rounded-circle me-2" src="{{ asset('assets/img/Logo BHT.png') }}"
                                                style="width: 30px;" alt="">
                                            <p class="mb-0 text">Denny Daffa asd</p>
                                        </div>

                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <!-- Ensure flex alignment -->
                                            <i class="bi bi-clock me-2"></i>
                                            <p class="mb-0 text">20 Mei. 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <img src="{{ asset('assets/img/4 1.png') }}" class="card-img-top" alt="Slide Image">
                                <div class="card-body">
                                    <div class="text-start">
                                        <h5 class="card-title fw-bold">Card Title</h5>
                                        <p class="card-text seminar-text">This is a brief description of the content in the
                                            card. It
                                            provides some interesting information.</p>
                                    </div>

                                    <a href="#" class="btn btn-dark-blue w-100 mt-5 rounded-3">LINK REGISTRASI</a>
                                    <div class="row text-secondary mt-3">
                                        <div class="col-6 d-flex align-items-center"> <!-- Use col-6 for all sizes -->
                                            <img class="rounded-circle me-2" src="{{ asset('assets/img/Logo BHT.png') }}"
                                                style="width: 30px;" alt="">
                                            <p class="mb-0 text">Denny Daffa asd</p>
                                        </div>

                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <!-- Ensure flex alignment -->
                                            <i class="bi bi-clock me-2"></i>
                                            <p class="mb-0 text">20 Mei. 2024</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination mt-5"></div>
                </div>
            </div>
        </div>
        <div class="container">
            {{-- MITRA --}}
            <div class="py-3">
                <h3 class="fw-bold text-blue-dark text-center py-3 ">MITRA</h3>
                <div class="swiper mitraSwiper">
                    <div class="swiper-wrapper">
                        <!-- Swiper slide with images -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/mitra/ipgeri.png') }}" class="mitraImg" alt="Mitra 1"
                                style="width: 100%; height: auto;">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/mitra/up.png') }}" class="mitraImg" alt="Mitra 1"
                                style="width: 100%; height: auto;">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/mitra/ipgeri.png') }}" class="mitraImg" alt="Mitra 1"
                                style="width: 100%; height: auto;">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/mitra/ipgeri.png') }}" class="mitraImg" alt="Mitra 1"
                                style="width: 100%; height: auto;">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/mitra/ipgeri.png') }}" class="mitraImg" alt="Mitra 1"
                                style="width: 100%; height: auto;">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/mitra/ipgeri.png') }}" class="mitraImg" alt="Mitra 1"
                                style="width: 100%; height: auto;">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/mitra/ipgeri.png') }}" class="mitraImg" alt="Mitra 1"
                                style="width: 100%; height: auto;">
                        </div>

                    </div>
                </div>
            </div>
    </section>

    <script>
        // for card animation
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

        // styling scroll menu navbar
        document.addEventListener('DOMContentLoaded', function() {
            const navbarLinks = document.querySelectorAll('.navbar-nav .nav-link');

            navbarLinks.forEach(link => {
                link.addEventListener('click', function(e) {

                    const href = this.getAttribute('href');

                    if (href.includes('#')) {
                        e.preventDefault();

                        const targetId = href.split('#')[1];
                        const targetElement = document.getElementById(targetId);

                        if (targetElement) {
                            targetElement.scrollIntoView({
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });

            if (window.location.hash) {
                let targetElement = document.querySelector(window.location.hash);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    </script>
@endsection
