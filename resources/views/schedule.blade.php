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

        <div id="doctorSchedule" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                @foreach($polies->chunk(3) as $key => $chunk)
                    <div class="carousel-item{{ $key == 0 ? ' active' : '' }}">
                        <div class="row">
                            @foreach($chunk as $poli)
                                <div class="col-md-4">
                                    <h3>{{ $poli->nama }}</h3>
                                    <ul>
                                        @if($poli->dokter)
                                            <li>{{ $poli->dokter->nama }}</li>
                                        @else
                                            <li>Tidak ada dokter terkait</li>
                                        @endif
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End jadwal dokter -->


@endsection