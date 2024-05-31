<html lang="en">

<head>

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href={{ route('landing') }}>WhyNot</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="{{ asset('Groovin/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href={{ route('listaktivitas') }}>Cari Aktivitas</a></li>
                    <li><a href="">Tentang Kami</a></li>
                    @auth
                        <li class="dropdown"><a class="getstarted" href="#"><span>{{Auth::user()->nama}}</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ route('auth.editrelawan') }}">Edit Profil</a></li>
                                <li><a href="#" class="submenu-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                                  <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                                  </li> 
                            </ul>
                        </li>
                    @else
                        <li class="dropdown"><a class="getstarted" href="#"><span>Masuk</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ route('auth.login') }}">Masuk</a></li>
                                <li class="dropdown"><a href="#"><span>Buat Akun</span> <i
                                            class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="{{ route('auth.relregister') }}">Akun Relawan</a></li>
                                        <li><a href="{{ route('auth.orgregister') }}">Akun Organisasi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    @endauth

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- Vendor JS Files -->
    <script src="{{ asset('Groovin/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('Groovin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Groovin/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Groovin/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Groovin/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Groovin/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Groovin/assets/js/main.js') }}"></script>
</body>

</html>
