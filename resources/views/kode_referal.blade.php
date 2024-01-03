<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode Referal</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h1 class="display-4 mb-4">Kode Referal Anda</h1>
                        <h3 class="lead mb-4">Kode Anda: <span class="text-primary">{{ $token }}</span></h3>
                        <p>Mohon diingat dan disimpan baik baik kode referal diatas </p>
                        <a href="{{ route('index') }}" class="btn btn-primary mt-3">Kembali ke Menu Utama</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan script Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
