<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Antrian Rumah Sakit</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS dan Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 500px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            border-radius: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 10px;
        }
        .btn-success {
            border: none;
            border-radius: 10px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>


    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="mb-4 text-center">Formulir Pendaftaran Antrian Rumah Sakit</h2>

            <!-- Formulir Pendaftaran -->
            <form action="{{ route('store_antrian') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <!-- Poli -->
                <div class="mb-3">
                    <label for="poli" class="form-label">Poli</label>
                    <select class="form-select" id="poli" name="poli" required>
                        <option value="" selected disabled>Pilih Poli</option>
                        <option value="poli_umum">Poli Umum</option>
                        <option value="poli_gigi">Poli Gigi</option>
                        <!-- Tambahkan opsi poli lainnya sesuai kebutuhan -->
                    </select>
                </div>

                <!-- Penjamin -->
                <div class="mb-3">
                    <label for="penjamin" class="form-label">Penjamin</label>
                    <select class="form-select" id="penjamin" name="penjamin" required>
                        <option value="" selected disabled>Pilih Penjamin</option>
                        <option value="BPJS">BPJS Kesehatan</option>
                        <option value="Asuransi">Asuransi Kesehatan</option>
                        <option value="Pribadi">Pembayaran Pribadi</option>
                        <!-- Tambahkan opsi penjamin lainnya sesuai kebutuhan -->
                    </select>
                </div>
            
                    <!-- Formulir BPJS -->
                    <div id="formBPJS">
                        <div class="mb-3">
                            <h4>Pastikan beberapa dokumen ini lengkap</h4><br>
                            <p>1. Kartu BPJS</p>
                            <p>2. Surat Rujukan</p><br>
                        </div>
                        <div class="mb-3">
                            <label for="file_bpjs" class="form-label">File BPJS</label>
                            <input type="file" class="form-control-file" id="file_bpjs" name="bpjs" >
                        </div>
                    

                        <!-- Formulir Surat Rujukan -->
                        <div class="mb-3">
                            <label for="file_surat_rujukan" class="form-label">File Surat Rujukan</label>
                            <input type="file" class="form-control-file" id="file_surat_rujukan" name="surat_rujukan" >
                        </div>
                    </div>

                <!-- Tombol Submit -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary mr-2">Daftar Antrian</button>
                    <a href="{{ route('index') }}" class="btn btn-success">Kembali</a>
                </div>
                
            </form>
        </div>
    </div>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
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
