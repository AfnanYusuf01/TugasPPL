<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Kode Referal</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f8ff; /* Ganti dengan warna latar belakang yang Anda sukai */
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            width: 350px; /* Lebar kartu */
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border-radius: 12px 12px 0 0;
            padding: 20px;
        }

        .card-body {
            padding: 30px; /* Ruang batin pada kartu */
        }

        .form-group {
            margin-bottom: 20px; /* Jarak antar elemen form group */
        }

        .form-control {
            font-size: 16px; /* Ukuran teks input */
            text-align: center;
            border-color: #d6d6d6;
        }

        .form-control:hover {
            border-color: #007bff; /* Warna border saat dihover */
        }

        .btn-primary {
            font-size: 18px; /* Ukuran teks tombol */
            width: 100%;
            background-color: #28a745; /* Ganti dengan warna tombol yang Anda sukai */
            border-color: #28a745;
        }

        .btn-primary:hover {
            background-color: #218838; /* Warna tombol saat dihover */
            border-color: #1e7e34;
        }

        .alert {
            margin-top: 20px; /* Jarak antara alert dengan elemen di atasnya */
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Masukkan Kode Referal</h3>
            </div>
            <div class="card-body">
                <form action="{{route('cekReferal')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="referal_code" class="sr-only">Kode Referal</label>
                        <input type="text" name="referal_code" class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-primary">Cek Referal</button>
                </form>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
