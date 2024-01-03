@extends('layout.main')

@section('header&footer')
<div class="container-xxl py-5 bg-primary text-white hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 mb-3 animated slideInDown">Rekam Medis</h1>
    </div>
</div>
<div class="container-xl text-center mt-4">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Tanggal</th>
                    <th>Gejala</th>
                    <th>Diagnosis</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @isset($rekamMedis)
                    @forelse($rekamMedis as $rekam)
                    <tr>
                        <td>{{ $rekam->tanggal }}</td>
                        <td>{{ $rekam->gejala }}</td>
                        <td>{{ $rekam->diagnosis }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <form action="{{ route('route_detail_rekam_medis', ['id' => $rekam->id]) }}" method="get">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-sm">Detail</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada rekam medis ditemukan</td>
                    </tr>
                    @endforelse
                @else
                    <tr>
                        <td colspan="4" class="text-center">Data rekam medis belum tersedia</td>
                    </tr>
                @endisset
                <tr>
                    <td colspan="4" class="text-center">                            
                        <form action="{{ route('route_tambah_rekam_medis', ['id_pa' => $id_pasien, 'id_dokter' => $id_dokter]) }}" method="get">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm">Tambah Rekam Medis</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
