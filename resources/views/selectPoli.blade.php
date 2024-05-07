<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Poli</title>
    <!-- Menggunakan Bootstrap untuk styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <!-- Tombol Poli Anak -->
            <div class="col-md-3">
                <button
                    class="btn btn-primary btn-block"
                    onclick="window.location.href='{{ route('lihatDataAntrian', ['poli_id' => 1]) }}'"
                >
                    Poli Anak
                </button>
            </div>
            <!-- Tombol Poli Umum -->
            <div class="col-md-3">
                <button
                    class="btn btn-success btn-block"
                    onclick="window.location.href='{{ route('lihatDataAntrian', ['poli_id' => 2]) }}'"
                >
                    Poli Umum
                </button>
            </div>
            <!-- Tombol Poli Bedah -->
            <div class="col-md-3">
                <button
                    class="btn btn-danger btn-block"
                    onclick="window.location.href='{{ route('lihatDataAntrian', ['poli_id' => 3]) }}'"
                >
                    Poli Bedah
                </button>
            </div>
            <!-- Tombol Poli Mata -->
            <div class="col-md-3">
                <button
                    class="btn btn-warning btn-block"
                    onclick="window.location.href='{{ route('lihatDataAntrian', ['poli_id' => 4]) }}'"
                >
                    Poli Mata
                </button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS dan dependensi -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
