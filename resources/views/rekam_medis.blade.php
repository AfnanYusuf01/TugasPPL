<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Rekam Medis</title>
    <!-- Menggunakan Bootstrap untuk tampilan yang lebih baik -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2 class="mb-4">Formulir Rekam Medis</h2>

<form action="" method="POST">
    @csrf

    <div class="form-group">
        <label for="nama_pasien">Nama</label>
        <input type="text" class="form-control" name="nama_pasien" required>
    </div>

    <div class="form-group">
        <label for="tanggal_pemeriksaan">Tanggal</label>
        <input type="date" class="form-control" name="tanggal_pemeriksaan" required>
    </div>

    <div class="form-group">
        <label for="gejala">Gejala</label>
        <textarea class="form-control" name="gejala" rows="4" required></textarea>
    </div>

    <div class="form-group">
        <label for="diagnosis">Diagnosis</label>
        <textarea class="form-control" name="diagnosis" rows="4" required></textarea>
    </div>

    <div class="form-group">
        <label for="penanganan">Penanganan</label>
        <textarea class="form-control" name="penanganan" rows="4" required></textarea>
    </div>

    <div class="form-group">
        <label for="resep_obat">Resep Obat</label>
        <textarea class="form-control" name="resep_obat" rows="4" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Simpan Rekam Medis</button>
</form>

<!-- Menggunakan Bootstrap JavaScript (opsional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
