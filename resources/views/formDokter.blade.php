<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Dokter</title>
    <!-- Menggunakan Bootstrap untuk tampilan yang lebih baik -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 400px;">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Pendaftaran Dokter</h4>
        </div>
        <div class="card-body">
            <form action="{{route('store.dokter')}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="Nama">Nama Dokter (beserta gelar)</label>
                    <input type="text" class="form-control" name="Nama" required>
                </div>

                <div class="form-group">
                    <label for="Spesialisasi">Spesialisasi</label>
                    <input type="text" class="form-control" name="Spesialisasi" required>
                </div>

                <div class="form-group">
                    <label for="Nomer_izin_praktik">Nomor Izin Praktik</label>
                    <input type="text" class="form-control" name="Nomer_izin_praktik" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Daftar Dokter</button>
            </form>
        </div>
    </div>
</div>

<!-- Menggunakan Bootstrap JavaScript (opsional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
