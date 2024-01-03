@extends('layout.main')
@section('header&footer')
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Schedule Dokter</h1>
                </div>
            </div>

<!-- Start jadwal dokter -->
        <div class="container-xxl py-5">
                <div class="container">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h5 class="section-title ff-secondary text-center text-dark fw-normal">Schedule</h5>
                            <h1 class="mb-5">Dokters Schedule</h1>
                        </div>
                    <div id="doctorSchedule" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3>Poli Umum</h3>
                                        <ul>
                                            <li>Dr. John Doe - Senin 09:00-12:00</li>
                                            <li>Dr. Jane Smith - Selasa 13:00-16:00</li>
                                            <!-- Tambahkan lebih banyak nama dokter dan jadwal di sini -->
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Poli Anak</h3>
                                        <ul>
                                            <li>Dr. Emily Johnson - Rabu 10:00-13:00</li>
                                            <li>Dr. Michael Brown - Kamis 14:00-17:00</li>
                                            <!-- Tambahkan lebih banyak nama dokter dan jadwal di sini -->
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Poli Gigi</h3>
                                        <ul>
                                            <li>Dr. Sarah White - Jumat 08:00-11:00</li>
                                            <li>Dr. Kevin Lee - Sabtu 09:00-12:00</li>
                                            <!-- Tambahkan lebih banyak nama dokter dan jadwal di sini -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Tambahkan slide tambahan di sini -->
                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3>Poli Umum</h3>
                                        <ul>
                                            <li>Dr. John Doe - Senin 09:00-12:00</li>
                                            <li>Dr. Jane Smith - Selasa 13:00-16:00</li>
                                            <!-- Tambahkan lebih banyak nama dokter dan jadwal di sini -->
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Poli Anak</h3>
                                        <ul>
                                            <li>Dr. Emily Johnson - Rabu 10:00-13:00</li>
                                            <li>Dr. Michael Brown - Kamis 14:00-17:00</li>
                                            <!-- Tambahkan lebih banyak nama dokter dan jadwal di sini -->
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Poli Gigi</h3>
                                        <ul>
                                            <li>Dr. Sarah White - Jumat 08:00-11:00</li>
                                            <li>Dr. Kevin Lee - Sabtu 09:00-12:00</li>
                                            <!-- Tambahkan lebih banyak nama dokter dan jadwal di sini -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3>Poli Umum</h3>
                                        <ul>
                                            <li>Dr. John Doe - Senin 09:00-12:00</li>
                                            <li>Dr. Jane Smith - Selasa 13:00-16:00</li>
                                            <!-- Tambahkan lebih banyak nama dokter dan jadwal di sini -->
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Poli Anak</h3>
                                        <ul>
                                            <li>Dr. Emily Johnson - Rabu 10:00-13:00</li>
                                            <li>Dr. Michael Brown - Kamis 14:00-17:00</li>
                                            <!-- Tambahkan lebih banyak nama dokter dan jadwal di sini -->
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Poli Gigi</h3>
                                        <ul>
                                            <li>Dr. Sarah White - Jumat 08:00-11:00</li>
                                            <li>Dr. Kevin Lee - Sabtu 09:00-12:00</li>
                                            <!-- Tambahkan lebih banyak nama dokter dan jadwal di sini -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="text-center " >   
                        <button class="carousel-control-prev" type="button" data-bs-target="#doctorSchedule" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next " type="button" data-bs-target="#doctorSchedule" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
        </div>
<!-- End jadwal dokter -->

@endsection