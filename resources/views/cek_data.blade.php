<!-- cek_data.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bagian head HTML -->
</head>
<body>

    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="mb-4 text-center">Formulir Periksa Berkas</h2>

            <!-- Menampilkan Gambar KTP -->
            {{-- <div class="mb-3">
                <label for="gambar_ktp" class="form-label">Gambar KTP</label>
                <img src="{{ asset('storage/' . $antrian->pasien->file_ktp) }}" alt="Gambar KTP">

            </div> --}}

            <!-- Menampilkan Gambar BPJS -->
            <div class="mb-3">
                <label for="gambar_bpjs" class="form-label">Gambar BPJS</label>
                <img src="{{ asset('storage/bpjs_files'.$antrian->bpjs) }}" alt="Gambar BPJS" class="img-thumbnail">
            </div>

            <!-- Menampilkan Gambar Surat Rujukan -->
            <div class="mb-3">
                <label for="gambar_rujukan" class="form-label">Gambar Surat Rujukan</label>
                <img src="{{ asset('/storage/'.$antrian->surat_rujukan) }}" alt="Gambar Surat Rujukan" class="img-thumbnail">
            </div>

            <!-- Tombol Kembali -->
            <div class="text-center">
                <a href="{{ route('index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>

</body>
</html>
