<?php
// Fungsi untuk mendapatkan nama dokter secara acak
function generateRandomDokterName() {
    $firstNames = ["Dr. Anisa", "Dr. Budi", "Dr. Cindy", "Dr. Dharma", "Dr. Eka"];
    $lastNames = ["Santoso", "Wijaya", "Pratama", "Lestari", "Hakim"];

    $randomFirstName = $firstNames[array_rand($firstNames)];
    $randomLastName = $lastNames[array_rand($lastNames)];

    return $randomFirstName . " " . $randomLastName;
}

// Fungsi untuk mendapatkan nama Indonesia secara acak
function generateRandomIndonesianName() {
    $firstNames = ["Putu", "Gede", "Made", "Nyoman", "Ketut"];
    $lastNames = ["Sari", "Wijaya", "Prabowo", "Utami", "Gunawan"];

    $randomFirstName = $firstNames[array_rand($firstNames)];
    $randomLastName = $lastNames[array_rand($lastNames)];

    return $randomFirstName . " " . $randomLastName;
}

// Menggunakan fungsi-fungsi di atas untuk mendapatkan nama dokter dan nama Indonesia secara acak
$randomDokterName = generateRandomDokterName();
$randomIndonesianName = generateRandomIndonesianName();
?>

@extends('layout.main')
@section('header&footer')

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Our Dokters</h1>
    </div>
</div>

<!-- dokter Start -->
<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <!-- ... Bagian judul dan tampilan awal lainnya ... -->
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-dark fw-normal">Multi Specialty Doctors</h5>
            <h1 class="mb-5">Our Dokter</h1>
        </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <!-- Kelompok Dokter 1 -->
            <div class="carousel-item active">
                <div class="row g-4">
                    <h1 class="mb-5">Poli Bedah</h1>
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        echo '<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item text-center rounded overflow-hidden">
                                    <div class="rounded-circle overflow-hidden m-4">
                                        <img class="img-fluid" src="img/team-' . ($i + 1) . '.jpeg" alt="Doctor ' . ($i + 1) . '">
                                    </div>
                                    <h5 class="mb-0">' . generateRandomDokterName() . '</h5>
                                    <small>Designation 1</small>
                                    <div class="d-flex justify-content-center mt-3">
                                        <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?>
                </div>
            </div>
            <!-- Kelompok Dokter 2 -->
            <div class="carousel-item">
                <div class="row g-4">
                    <h1 class="mb-5">Poli Umum</h1>
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        echo '<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item text-center rounded overflow-hidden">
                                    <div class="rounded-circle overflow-hidden m-4">
                                        <img class="img-fluid" src="img/team-' . ($i + 1) . '.jpeg" alt="Doctor ' . ($i + 1) . '">
                                    </div>
                                    <h5 class="mb-0">' . generateRandomDokterName() . '</h5>
                                    <small>Designation 1</small>
                                    <div class="d-flex justify-content-center mt-3">
                                        <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?>
                </div>
            </div>
            <!-- Kelompok Dokter 3 -->
            <div class="carousel-item">
                <div class="row g-4">
                    <h1 class="mb-5">Poli Anak</h1>
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        echo '<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item text-center rounded overflow-hidden">
                                    <div class="rounded-circle overflow-hidden m-4">
                                        <img class="img-fluid" src="img/team-' . ($i + 1) . '.jpeg" alt="Doctor ' . ($i + 1) . '">
                                    </div>
                                    <h5 class="mb-0">' . generateRandomDokterName() . '</h5>
                                    <small>Designation 1</small>
                                    <div class="d-flex justify-content-center mt-3">
                                        <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-dark mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?>
                </div>
            </div>
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
<!-- dokter End -->

@endsection
