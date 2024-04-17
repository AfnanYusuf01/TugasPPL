@extends('layout.main')
@section('header&footer')



        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-primary-emphasis animated slideInLeft">Welcome<br>Our Hospital</h1>
                        <p class="text-primary-emphasis animated slideInLeft mb-4 pb-2">Pusat Kesehatan Terdepan yang Menyediakan Layanan Kesehatan Komprehensif, Menerapkan Praktik Terbaik, dan Memiliki Tenaga Medis Terlatih dengan Lebih dari 20 Tahun Pengalaman.</p>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="img/japan-food/logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <a class="fa-solid fa-user-doctor fa-5x text-dark" href = "{{route('dokters')}}"></a>
                                <h5>Daftar Dokter</h5>
                                <p>Temui tim dokter berpengalaman kami yang siap memberikan perawatan medis terbaik untuk Anda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <a class="fa-regular fa-calendar-days fa-5x text-dark" href="{{route('schedule')}}"></a>
                                <h5>Jadwal Dokter</h5>
                                <p>"Temukan tim dokter berpengalaman yang siap memberikan perawatan kesehatan terbaik untuk Anda."</p>
                            </div>
                        </div>
                    </div>
                    @if (Auth::check())
                    @if (Auth::user()->hasRole('Pasien'))
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <a class="fa-regular fa-handshake fa-5x text-dark" href="{{ route('create_antrian') }}"></a>
                                    <h5>Registrasi Online</h5>
                                    <p>"Daftar sebagai pasien dan mulailah perjalanan menuju kesehatan dan perawatan yang terbaik dengan kami."</p>
                                </div>
                            </div>
                        </div>
                    @elseif (Auth::user()->hasRole('staff'))
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <a class="fa-solid fa-list fa-5x text-dark" href="{{route('showDataAntrian')}}" ></a>
                                    <h5>Lihat Data Antrian</h5>
                                    <p>Layanan untuk staff rumah sakit</p>
                                </div>
                            </div>
                        </div>
                    @elseif (Auth::user()->hasRole('dokter'))
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <a class="fa-regular fa-pen-to-square fa-5x text-dark" href="{{route('cari.dokter')}}" ></a>
                                    <h5>Input Rekam Medis</h5>
                                    <p>Layanan untuk staff rumah sakit</p>
                                </div>
                            </div>
                        </div>

                    @endif

                @else
                    <!-- Tampilkan elemen login default jika pengguna tidak masuk -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <a class="fa-solid fa-right-to-bracket fa-5x text-dark" href="{{ route('login') }}" ></a>
                                <h5>Log In</h5>
                                <p>Layanan untuk staff rumah sakit</p>
                            </div>
                        </div>
                    </div>
                @endif                
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="mb-4">Welcome to <i class="fa-regular fa-hospital text-dark"></i></i>Our Hospital</h1>
                        <p class="mb-4">Kami percaya bahwa setiap pasien memiliki kebutuhan unik, dan kami berkomitmen untuk memberikan perawatan yang disesuaikan dengan kebutuhan individual mereka. Dari pemeriksaan rutin hingga perawatan yang lebih kompleks, tim dokter kami selalu siap memberikan perhatian yang cermat dan komprehensi.</p>
                        <p class="mb-4"> Selain itu, kami menyediakan akses mudah ke informasi jadwal dokter, pendaftaran pasien, dan layanan darurat. Rumah Sakit IKN adalah tempat di mana perawatan berkualitas bertemu dengan perhatian yang tulus, dan kami berusaha untuk menjadikan setiap kunjungan Anda sebagai pengalaman yang nyaman dan positif.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-dark px-3">
                                    <h1 class="flex-shrink-0 display-5 text-dark mb-0" data-toggle="counter-up">3</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-dark px-3">
                                    <h1 class="flex-shrink-0 display-5 text-dark mb-0" data-toggle="counter-up">10</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Profesinal Doktor</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Berita Starr -->
        <div class="container-xxl py-5" id="berita">
            <h2 class="textBerita">Berita Terkini Kesehatan</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="news-card" id="bg-berita">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <img src="img/berita1.jpg" alt="Berita 1" class="gambar-berita">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <a href="#" class="btn btn-sm btn-dark">Berita Menarik</a>
                                <h3>Judul Berita 1</h3>
                                <p>Deskripsi singkat berita 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="read-more-link">Lihat Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="news-card" id="bg-berita">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <img src="img/berita1.jpg" alt="Berita 1" class="gambar-berita">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <a href="#" class="btn btn-sm btn-dark">Berita Menarik</a>
                                <h3>Judul Berita 1</h3>
                                <p>Deskripsi singkat berita 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="read-more-link">Lihat Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="news-card" id="bg-berita">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <img src="img/berita1.jpg" alt="Berita 1" class="gambar-berita">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <a href="#" class="btn btn-sm btn-dark">Berita Menarik</a>
                                <h3>Judul Berita 1</h3>
                                <p>Deskripsi singkat berita 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="read-more-link">Lihat Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="news-card" id="bg-berita">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <img src="img/berita1.jpg" alt="Berita 1" class="gambar-berita">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <a href="#" class="btn btn-sm btn-dark">Berita Menarik</a>
                                <h3>Judul Berita 1</h3>
                                <p>Deskripsi singkat berita 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="read-more-link" data-target="#exampleModal">Lihat Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!-- Menu End -->

        <!-- Modal Start  -->
<!-- Button trigger modal -->
<a href="#" class="read-more-link" data-toggle="modal" data-target="#exampleModal">Lihat Berita</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Judul Berita</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Isi berita Anda di sini -->
        <p>Isi berita dapat ditampilkan di sini.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
        <!-- Modal End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center" id="bg-service">
                    <div class="card-body">
                        <h3>IKN Medic TV</h3>
                        <p class="card-text">Lebih dekat bersama kami.</p>
                    </div>
                </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->

    <!-- Carasoul Start -->
    <div class="container-xxl py-5">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-interval="3000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/carasoul1.jpeg" alt="Slide 1" class="d-block mx-auto img-fluid">
            </div>
            <div class="carousel-item">
              <img src="img/carasoul2.jpeg" alt="Slide 2" class="d-block mx-auto img-fluid">
            </div>
            <div class="carousel-item">
              <img src="img/carasoul3.jpeg" alt="Slide 3" class="d-block mx-auto img-fluid">
            </div>
            <div class="carousel-item">
              <img src="img/carasoul4.jpeg" alt="Slide 4" class="d-block mx-auto img-fluid">
            </div>
            <div class="carousel-item">
              <img src="img/carasoul15.jpeg" alt="Slide 5" class="d-block mx-auto img-fluid">
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
              
<!-- Carasoul End -->
        

        
@endsection