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

            <!-- Formulir Pendaftaran start-->
            <form action="{{ route('store_antrian') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama">
                    @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="penjamin">Penjamin:</label>
                    <select id="penjamin" name="penjamin" class="form-control">
                        <option value="BPJS">BPJS</option>
                        <option value="Jasa Raharja">Jasa Raharja</option>
                        <option value="Umum">Umum</option>
                    </select>
                    @error('penjamin')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>                
                <div class="form-group">
                    <label for="poli">Poli:</label>
                    <select name="poli" id="poli" class="form-control">
                        <option value="">Pilih Poli</option>
                        @foreach($polies as $poli)
                            <option value="{{ $poli->id_poli }}">{{ $poli->nama }}</option>
                        @endforeach
                    </select>
                    @error('poli')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="dokter">Dokter:</label>
                    <select name="dokter" id="dokter" class="form-control">
                        <option value="">Pilih Dokter</option>
                        <!-- Looping poli -->
                        @foreach($polies->chunk(3) as $key => $chunk)
                            @foreach($chunk as $poli)
                                <optgroup label="{{ $poli->nama }}">
                                    <!-- Looping dokter di dalam poli -->
                                    <option value="{{ $poli->dokter->nama }}">{{ $poli->dokter->nama }}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                    @error('dokter')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>                
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
            <!-- Formulir Pendaftaran end-->                        
        </div>
    </div>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>
