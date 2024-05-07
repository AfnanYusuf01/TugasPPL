<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Berkas</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        h2 {
            color: #007bff;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Form Pengisian Berkas</h2>
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Gunakan enctype="multipart/form-data" untuk mengirim file -->
        <form action="{{ route('storeBerkas') }}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="bpjs">Upload BPJS:</label>
                <input type="file" id="bpjs" name="bpjs" class="form-control">
            </div>
            <div class="form-group">
                <label for="surat_rujukan">Upload Surat Rujukan:</label>
                <input type="file" id="surat_rujukan" name="surat_rujukan" class="form-control">
            </div>
            <div class="form-group">
                <label for="surat_jasaraharja">Upload Surat Jasa Raharja:</label>
                <input type="file" id="surat_jasaraharja" name="surat_jasaraharja" class="form-control">
            </div>
            <div class="form-group">
                <label for="surat_klaim_asuransi">Upload Surat Klaim Asuransi:</label>
                <input type="file" id="surat_klaim_asuransi" name="surat_klaim_asuransi" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
