@extends('layout.main')

@section('header&footer')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Page Staff</h1>
    </div>
</div>
<div class="container mt-6">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form class="d-flex justify-content-center align-items-center" action="{{route('cari_pasien')}}" method="POST">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Penjamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                @if(isset($pasien))
                    @forelse($pasien as $pasie)
                        <tr id="{{ $pasie->id }}">
                            <td>{{ $pasie->nama }}</td>
                            <td>{{ $pasie->nik }}</td>
                            <td>{{ $pasie->email }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <form action="{{ route('show.rekam_medis', ['id' => $pasie->id]) }}" method="get" class="ml-2">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-sm">Lihat Rekam Medis</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada data ditemukan</td>
                        </tr>
                    @endforelse
                    @endif
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@endsection
