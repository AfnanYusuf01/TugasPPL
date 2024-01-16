<!-- resources/views/editDetailRekamMedis.blade.php -->

@extends('layout.main')

@section('header&footer')
    <div class="container mt-6">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5>Edit Detail Rekam Medis</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update_rekam_medis') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $rekamMedis->id }}">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $rekamMedis->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" value="{{ $rekamMedis->tanggal }}" required>
                            </div>
                            <div class="form-group">
                                <label for="gejala">Gejala</label>
                                <textarea class="form-control" name="gejala" required>{{ $rekamMedis->gejala }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="diagnosis">Diagnosis</label>
                                <textarea class="form-control" name="diagnosis" required>{{ $rekamMedis->diagnosis }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="penangan">Penanganan</label>
                                <textarea class="form-control" name="penangan" required>{{ $rekamMedis->penangan }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="resep_obat">Resep Obat</label>
                                <textarea class="form-control" name="resep_obat" required>{{ $rekamMedis->resep_obat }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
