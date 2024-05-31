@extends('layouts.navbar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WhyNot | Landing Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('Groovin/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('Groovin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Groovin/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Groovin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Groovin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Groovin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Groovin/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Groovin/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('Groovin/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Groovin
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active"
                        style="background-image: url({{ asset('Groovin/assets/img/slide/slide-1.jpg);') }}">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Why Not</h2>
                                <p class="animate__animated animate__fadeInUp">Relawan adalah agen perubahan positif.
                                    Mereka membantu mengatasi berbagai masalah sosial, ekonomi, dan lingkungan dengan
                                    menyumbangkan energi dan dedikasi mereka untuk menyediakan solusi yang bermanfaat
                                    bagi masyarakat.</p>

                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row no-gutters">
                    <div
                        class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                    </div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3>Memangnya apa pentingnya adanya seorang Relawan?</h3>
                            <p>

                            </p>
                            <div class="row">
                                <div class="col-md-6 icon-box">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Meningkatkan Kesadaran dan Pendidikan</h4>
                                    <p>Relawan juga berperan dalam meningkatkan kesadaran masyarakat tentang
                                        masalah-masalah sosial dan lingkungan yang relevan. </p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Membangun Komunitas yang Kuat</h4>
                                    <p>Relawan membantu membangun komunitas yang kuat dan saling peduli. </p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class="bx bx-images"></i>
                                    <h4>Peningkatan Kesejahteraan Mental</h4>
                                    <p>Melalui interaksi sosial dan pemberian dukungan, relawan dapat membantu
                                        meningkatkan kesejahteraan mental orang-orang di sekitar mereka.
                                    </p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class="bx bx-shield"></i>
                                    <h4>Menginspirasi Generasi Berikutnya</h4>
                                    <p>Melalui tindakan mereka, relawan menginspirasi generasi berikutnya untuk peduli
                                        terhadap orang lain dan lingkungan di sekitar mereka. </p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-items-center justify-content-center mb-4">
                        <div class="count-box text-center">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                                class="purecounter">...</span>
                            <p><strong>Relawan</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-items-center justify-content-center mb-4">
                        <div class="count-box text-center">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
                                class="purecounter">...</span>
                            <p><strong>Aktivitas</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-items-center justify-content-center mb-4">
                        <div class="count-box text-center">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
                                class="purecounter">...</span>
                            <p><strong>Organisasi</strong></p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        @php
            use App\Models\Activity;
            $activity = Activity::all();
        @endphp
        <section id="services" class="services">
           
                
            <div class="container">
                <div class="section-title">
                    <h2>Aktivitas</h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>
                <div class="row">
                    @foreach ($activity as $index)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('assets/image/' . $index->cover) }}" alt="Cover Image"
                                class="card-img-top" alt="..." height="160px">
                            <div class="card-body">
                                <span class="text-uppercase p-1"
                                    style="border: 1px solid; font-size:8px; font-weight:400; border-radius:10%; border-color:green; color:green;">
                                    Jenis Aktivitas
                                </span>
                                <h5 class="card-title mt-2"><b>{{$index->judul_aktivitas}}</b></h5>
                                <h6 class="thin text-muted">Nama Organisasi</h6>
                                <hr>
                                <div class="d-flex flex-row align-items-center">
                                    <img src="{{ asset('assets/image/calendar.png') }}" alt=""
                                        width="16" height="16">
                                    <h6 class="thin text-muted mx-2 my-2">{{$index->tanggal_aktivitas}}</h6>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                    <img src="{{ asset('assets/image/location.png') }}" alt=""
                                        width="16" height="16">
                                    <h6 class="thin text-muted mx-2 my-2">{{$index->lokasi}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Services Section -->



    </main><!-- End #main -->

</body>

</html>
