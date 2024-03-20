
@extends('layout.main')
@section('header&footer')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Our Dokters</h1>
    </div>
</div>

<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-dark fw-normal">Multi Specialty Doctors</h5>
            <h1 class="mb-5">Our Dokter</h1>
        </div>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($polies->chunk(4) as $key => $chunk)
                    <div class="carousel-item{{ $key == 0 ? ' active' : '' }}">
                        <div class="row g-4">
                            @foreach($chunk as $poli)
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item text-center rounded overflow-hidden">
                                        <div class="rounded-circle overflow-hidden m-4">
                                            <!-- Ganti 'img/t.jpeg' dengan sumber gambar yang sesuai -->
                                            <img class="img-fluid" src="img/dokter.jpeg" alt="Doctor {{ $loop->index + 1 }}">
                                        </div>
                                        <h5 class="mb-0">{{ $poli->dokter->nama }}</h5>
                                        <small>{{ $poli->nama }}</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Tombol kontrol Carousel di sini -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>

@endsection
