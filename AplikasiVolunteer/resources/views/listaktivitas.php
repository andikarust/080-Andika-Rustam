@extends('layouts.navbar')

<html lang="en">
<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WhyNot | Aktivitas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset ('Groovin/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset ('Groovin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset ('Groovin/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset ('Groovin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset ('Groovin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset ('Groovin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset ('Groovin/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset ('Groovin/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset ('Groovin/assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2><strong>Cari Aktivitas</strong>, ... aktivitas membutuhkan bantuan anda</h2>
              <ol>
                <li><a href="">Home</a></li>
                <li>Cari Aktivitas</li>
              </ol>
            </div>
    
          </div>
        </section><!-- End Breadcrumbs -->
    
        <section class="inner-page">
          <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="{{asset ('assets/image/0c20ef6803462262835fa8a8f975d2b6.jpg') }}" class="card-img-top" alt="..." height="160px">
                    <div class="card-body">
                      <span class="text-uppercase p-1" style="border: 1px solid; font-size:8px; font-weight:400; border-radius:10%; border-color:green; color:green;"> Jenis Aktivitas</span>
                      <h5 class="card-title mt-2"><b>Nama Aktivitas</b></h5>
                      <h6 class="thin text-muted">Nama Organisasi</h6>
                      <hr>
                      <div class="d-flex flex-row align-items-center ">
                        <img src="{{asset ('assets/image/calendar.png') }}" alt="" width="16" height="16">
                        <h6 class="thin text-muted mx-2 my-2">Jadwal</h6>
                      </div>
                      <div class="d-flex flex-row align-items-center ">
                        <img src="{{asset ('assets/image/location.png') }}" alt="" width="16" height="16">
                        <h6 class="thin text-muted mx-2 my-2">Lokasi</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="{{asset ('assets/image/0c20ef6803462262835fa8a8f975d2b6.jpg') }}" class="card-img-top" alt="..." height="160px">
                    <div class="card-body">
                      <span class="text-uppercase p-1" style="border: 1px solid; font-size:8px; font-weight:400; border-radius:10%; border-color:green; color:green;"> Jenis Aktivitas</span>
                      <h5 class="card-title mt-2"><b>Nama Aktivitas</b></h5>
                      <h6 class="thin text-muted">Nama Organisasi</h6>
                      <hr>
                      <div class="d-flex flex-row align-items-center ">
                        <img src="{{asset ('assets/image/calendar.png') }}" alt="" width="16" height="16">
                        <h6 class="thin text-muted mx-2 my-2">Jadwal</h6>
                      </div>
                      <div class="d-flex flex-row align-items-center ">
                        <img src="{{asset ('assets/image/location.png') }}" alt="" width="16" height="16">
                        <h6 class="thin text-muted mx-2 my-2">Lokasi</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="{{asset ('assets/image/0c20ef6803462262835fa8a8f975d2b6.jpg') }}" class="card-img-top" alt="..." height="160px">
                    <div class="card-body">
                      <span class="text-uppercase p-1" style="border: 1px solid; font-size:8px; font-weight:400; border-radius:10%; border-color:green; color:green;"> Jenis Aktivitas</span>
                      <h5 class="card-title mt-2"><b>Nama Aktivitas</b></h5>
                      <h6 class="thin text-muted">Nama Organisasi</h6>
                      <hr>
                      <div class="d-flex flex-row align-items-center ">
                        <img src="{{asset ('assets/image/calendar.png') }}" alt="" width="16" height="16">
                        <h6 class="thin text-muted mx-2 my-2">Jadwal</h6>
                      </div>
                      <div class="d-flex flex-row align-items-center ">
                        <img src="{{asset ('assets/image/location.png') }}" alt="" width="16" height="16">
                        <h6 class="thin text-muted mx-2 my-2">Lokasi</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="{{asset ('assets/image/0c20ef6803462262835fa8a8f975d2b6.jpg') }}" class="card-img-top" alt="..." height="160px">
                    <div class="card-body">
                      <span class="text-uppercase p-1" style="border: 1px solid; font-size:8px; font-weight:400; border-radius:10%; border-color:green; color:green;"> Jenis Aktivitas</span>
                      <h5 class="card-title mt-2"><b>Nama Aktivitas</b></h5>
                      <h6 class="thin text-muted">Nama Organisasi</h6>
                      <hr>
                      <div class="d-flex flex-row align-items-center ">
                        <img src="{{asset ('assets/image/calendar.png') }}" alt="" width="16" height="16">
                        <h6 class="thin text-muted mx-2 my-2">Jadwal</h6>
                      </div>
                      <div class="d-flex flex-row align-items-center ">
                        <img src="{{asset ('assets/image/location.png') }}" alt="" width="16" height="16">
                        <h6 class="thin text-muted mx-2 my-2">Lokasi</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="{{asset ('assets/image/0c20ef6803462262835fa8a8f975d2b6.jpg') }}" class="card-img-top" alt="..." height="160px">
                    <div class="card-body">
                      <span class="text-uppercase p-1" style="border: 1px solid; font-size:8px; font-weight:400; border-radius:10%; border-color:green; color:green;"> Jenis Aktivitas</span>
                      <h5 class="card-title mt-2"><b>Nama Aktivitas</b></h5>
                      <h6 class="thin text-muted">Nama Organisasi</h6>
                      <hr>
                      <div class="d-flex flex-row align-items-center ">
                        <img src="{{asset ('assets/image/calendar.png') }}" alt="" width="16" height="16">
                        <h6 class="thin text-muted mx-2 my-2">Jadwal</h6>
                      </div>
                      <div class="d-flex flex-row align-items-center ">
                        <img src="{{asset ('assets/image/location.png') }}" alt="" width="16" height="16">
                        <h6 class="thin text-muted mx-2 my-2">Lokasi</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
          </div>
        </section>
    
      </main><!-- End #main -->
</body>
</html>