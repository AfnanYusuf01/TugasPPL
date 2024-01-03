<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="storage/logo.png">
    <title>Rumah Sakit IKN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="im/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="path/to/owl.carousel.min.css">
    <link rel="stylesheet" href="path/to/owl.theme.default.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap JS dan Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-dark" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary-emphasis m-0"> <img src="storage/logo.png" alt="Foto Profil" class="profile-image">Rumah Sakit IKN</h1>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{route('index')}}" class="nav-item nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Beranda</a>
                <a href="{{route('about')}}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{route('layanan')}}" class="nav-item nav-link {{ request()->routeIs('layanan') ? 'active' : '' }}">Layanan</a>
                <a href="{{route('schedule')}}" class="nav-item nav-link {{ request()->routeIs('schedule') ? 'active' : '' }}">Jadwal Dokter</a>
                <a href="{{route('dokters')}}" class="nav-item nav-link {{ request()->routeIs('dokters') ? 'active' : '' }}">Daftar Dokter</a>
                <!-- Dropdown Profil -->
@if (Auth::check())
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                    <img src="storage/p.png" alt="Profile Photo" class="rounded-circle" width="30">
                    
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            Profile
                                <img src="storage/p.png" alt="Profile Photo" class="rounded-circle" width="30">
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
@endif

        </div>
        
    </nav>
</div>

                <!-- Navbar & Hero End -->

@yield('header&footer')
        <!-- Footer Start -->
        <div class="container-fluid bg-light text-dark footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" id="footer">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-dark fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-dark fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-dark btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-dark btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-dark btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-dark fw-normal mb-4">Opening</h4>
                        <h5 class="text-dark fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-dark fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-dark text-md-start mb-3 mb-md-0" id="footPage">
                            &copy; <a class="border-bottom-dark" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom text-dark" href="https://htmlcodex.com">HTML Codex</a><br><br>
                            Distributed By <a class="border-bottom text-dark" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end text-dark ">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-dark btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>    
    <!-- Add your JavaScript link(s) here -->
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.testimonial-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                responsive:{
                    0:{
                        items: 1
                    },
                    600:{
                        items: 2
                    },
                    1000:{
                        items: 3
                    }
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="/js/main.js"></script>
    {{-- <script>
        function updateStatus(antrianId) {
            // Mengubah warna secara langsung tanpa berinteraksi dengan server
            document.getElementById('status_' + antrianId).className = 'badge badge-success';
            document.getElementById('status_' + antrianId).innerText = 'Diproses';
        }
    </script> --}}
    
    @include('sweetalert::alert')
    <script>
        $(document).ready(function() {
            // Sembunyikan formulir BPJS saat halaman dimuat
            $('#formBPJS').hide();
    
            // Tampilkan atau sembunyikan formulir BPJS berdasarkan pilihan dropdown
            $('#penjamin').change(function() {
                if ($(this).val() === 'BPJS') {
                    $('#formBPJS').show();
                } else {
                    $('#formBPJS').hide();
                }
            });
        });
    </script>
    
</body>

</html>