@extends('layout.main')
@section('header&footer')
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                </div>
            </div>
        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about21.jpeg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about22.jpeg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about23.jpeg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about24.jpeg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="mb-4">Welcome to <i class="fa-regular fa-hospital text-dark"></i></i>Our Hospital</h1>
                        <p class="mb-4">Kami percaya bahwa setiap pasien memiliki kebutuhan unik, dan kami berkomitmen untuk memberikan perawatan yang disesuaikan dengan kebutuhan individual mereka. Dari pemeriksaan rutin hingga perawatan yang lebih kompleks, tim dokter kami selalu siap memberikan perhatian yang cermat dan komprehensi.</p>
                        <p class="mb-4"> Selain itu, kami menyediakan akses mudah ke informasi jadwal dokter, pendaftaran pasien, dan layanan darurat. Rumah Sakit IKN adalah tempat di mana perawatan berkualitas bertemu dengan perhatian yang tulus, dan kami berusaha untuk menjadikan setiap kunjungan Anda sebagai pengalaman yang nyaman dan positif <a href="#" class="read-more-link">Baca Selengkapnya</a></p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-dark mb-0" data-toggle="counter-up">15</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-dark mb-0" data-toggle="counter-up">50</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Spesialis Dokter</h6>
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


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <!-- ... Bagian judul dan tampilan awal lainnya ... -->
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-dark fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Dokter</h1>
                </div>
                     <!-- Tombol kontrol Carousel -->
                        <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-interval="false">
                    <!-- Wrapper for slides -->
                    
                    <div class="carousel-inner">
                        <!-- Kelompok Dokter 1 -->
                        <div class="carousel-item active">
                            <div class="row g-4">
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item text-center rounded overflow-hidden">
                                        <div class="rounded-circle overflow-hidden m-4">
                                            <img class="img-fluid" src="img/team-1.jpeg" alt="Doctor 1">
                                        </div>
                                        <h5 class="mb-0">Full Name 1</h5>
                                        <small>Designation 1</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item text-center rounded overflow-hidden">
                                        <div class="rounded-circle overflow-hidden m-4">
                                            <img class="img-fluid" src="img/team-2.jpeg" alt="Doctor 1">
                                        </div>
                                        <h5 class="mb-0">Full Name 1</h5>
                                        <small>Designation 1</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item text-center rounded overflow-hidden">
                                        <div class="rounded-circle overflow-hidden m-4">
                                            <img class="img-fluid" src="img/team-3.jpeg" alt="Doctor 1">
                                        </div>
                                        <h5 class="mb-0">Full Name 1</h5>
                                        <small>Designation 1</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item text-center rounded overflow-hidden">
                                        <div class="rounded-circle overflow-hidden m-4">
                                            <img class="img-fluid" src="img/team-4.jpeg" alt="Doctor 1">
                                        </div>
                                        <h5 class="mb-0">Full Name 1</h5>
                                        <small>Designation 1</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- Kelompok Dokter 2 -->
                        <div class="carousel-item ">
                            <div class="row g-4">
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item text-center rounded overflow-hidden">
                                        <div class="rounded-circle overflow-hidden m-4">
                                            <img class="img-fluid" src="img/team-1.jpeg" alt="Doctor 1">
                                        </div>
                                        <h5 class="mb-0">Full Name 1</h5>
                                        <small>Designation 1</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item text-center rounded overflow-hidden">
                                        <div class="rounded-circle overflow-hidden m-4">
                                            <img class="img-fluid" src="img/team-2.jpeg" alt="Doctor 1">
                                        </div>
                                        <h5 class="mb-0">Full Name 1</h5>
                                        <small>Designation 1</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item text-center rounded overflow-hidden">
                                        <div class="rounded-circle overflow-hidden m-4">
                                            <img class="img-fluid" src="img/team-3.jpeg" alt="Doctor 1">
                                        </div>
                                        <h5 class="mb-0">Full Name 1</h5>
                                        <small>Designation 1</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item text-center rounded overflow-hidden">
                                        <div class="rounded-circle overflow-hidden m-4">
                                            <img class="img-fluid" src="img/team-4.jpeg" alt="Doctor 1">
                                        </div>
                                        <h5 class="mb-0">Full Name 1</h5>
                                        <small>Designation 1</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kelompok Dokter 3 -->
                        <div class="carousel-item ">
                            <div class="row g-4">
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item text-center rounded overflow-hidden">
                                        <div class="rounded-circle overflow-hidden m-4">
                                            <img class="img-fluid" src="img/team-1.jpeg" alt="Doctor 1">
                                        </div>
                                        <h5 class="mb-0">Full Name 1</h5>
                                        <small>Designation 1</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item text-center rounded overflow-hidden">
                                        <div class="rounded-circle overflow-hidden m-4">
                                            <img class="img-fluid" src="img/team-2.jpeg" alt="Doctor 1">
                                        </div>
                                        <h5 class="mb-0">Full Name 1</h5>
                                        <small>Designation 1</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item text-center rounded overflow-hidden">
                                        <div class="rounded-circle overflow-hidden m-4">
                                            <img class="img-fluid" src="img/team-3.jpeg" alt="Doctor 1">
                                        </div>
                                        <h5 class="mb-0">Full Name 1</h5>
                                        <small>Designation 1</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item text-center rounded overflow-hidden">
                                        <div class="rounded-circle overflow-hidden m-4">
                                            <img class="img-fluid" src="img/team-4.jpeg" alt="Doctor 1">
                                        </div>
                                        <h5 class="mb-0">Full Name 1</h5>
                                        <small>Designation 1</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        
        <!-- Team End -->

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-dark fw-normal">Contact Us</h5>
                    <h1 class="mb-5">Contact For Any Query</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12 bg-gradient-dark" >
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-dark">Whats App</h5>
                                <p><i class="fa-brands fa-whatsapp m-2"></i>08532978957</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-dark">Email</h5>
                                <p><i class="fa-solid fa-envelope m-2"></i></i>rsikn@example.com</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-dark">FAQ</h5>
                                <p><i class="fa-solid fa-phone m-2"></i></i>02193456</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63301.57548478356!2d109.16860952167971!3d-7.426634300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655fb3a6af47a1%3A0x33a7872cebe8d698!2sWaroenk%20Ramen%20Purwokerto!5e0!3m2!1sid!2sid!4v1689219275035!5m2!1sid!2sid"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                            
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-dark">Kritik Dan Saran</h1>
                        <p class="foot mb-5">kritik dan saran anda membangun kami jadi lebih baik</p>
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="" method="post">
                            @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name" name="nama">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject" name="subjek">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px" name="pesan"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit"  >Send Massage</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    
@endsection

