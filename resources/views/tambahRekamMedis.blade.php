@extends('layout.main')

@section('header&footer')
<div class="container mt-6">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('store.rekam_medis') }}" method="post">
                        @csrf
                        <input type="hidden" name="id_pasien" value="{{ $pasien->id }}">
                        <input type="hidden" name="id_dokter" value="{{ Auth::user()->dokter->id }}">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="gejala">Gejala</label>
                            <textarea class="form-control" name="gejala" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="diagnosis">Diagnosis</label>
                            <textarea class="form-control" name="diagnosis" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="penangan">Penanganan</label>
                            <textarea class="form-control" name="penangan" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="resep_obat">Resep Obat</label>
                            <textarea class="form-control" name="resep_obat" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Rekam Medis</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
