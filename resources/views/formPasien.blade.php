<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Formulir Biodata</title>
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      max-width: 600px;
      margin-top: 50px;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="mb-4">Formulir Biodata</h2>
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
      <form action="{{route('store.biodata')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')

    <!-- Tambahkan elemen formulir lainnya dengan desain yang serupa -->
     <div class="mb-3">
      <label for="name" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" id="name" name="nama" required>
    </div>
    <div class="mb-3">
      <label for="place_of_birth" class="form-label">Tempat Lahir</label>
      <input type="text" class="form-control" id="place_of_birth" name="tempat_lahir" required>
    </div>
    <div class="mb-3">
      <label for="dob" class="form-label">Tanggal Lahir</label>
      <input type="date" class="form-control" id="dob" name="tanggal_lahir" required>
    </div>
    <div class="mb-3">
      <label for="gender" class="form-label">Jenis Kelamin</label>
      <select class="form-select" id="gender" name="jenis_kelamin" required>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Alamat</label>
      <textarea class="form-control" id="address" name="alamat" rows="3" required></textarea>
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Nomor Telepon</label>
      <input type="tel" class="form-control" id="phone" name="nomor_telepon" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Alamat Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="occupation" class="form-label">Pekerjaan</label>
      <input type="text" class="form-control" id="occupation" name="pekerjaan" required>
    </div>
    <div class="mb-3">
      <label for="kk_number" class="form-label">Nomor KK</label>
      <input type="text" class="form-control" id="kk_number" name="nomor_kk" required>
    </div>
    <div class="mb-3">
      <label for="ktp_file" class="form-label">NIK</label>
      <input type="text" class="form-control" id="ktp_file" name="nik" required>
    </div>
    <div class="mb-3">
      <label for="religion" class="form-label">Agama</label>
      <input type="text" class="form-control" id="religion" name="agama" required>
    </div>
    <div class="mb-3">
      <label for="marital_status" class="form-label">Status Kawin</label>
      <select class="form-select" id="marital_status" name="status_kawin" required>
        <option value="single">Belum Menikah</option>
        <option value="married">Menikah</option>
        <option value="divorced">Cerai</option>
        <option value="widowed">Duda/Janda</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="ktp_file" class="form-label">File KTP</label>
      <input type="file" class="form-control" id="ktp_file" name="file_ktp" required>
    </div>
    <div class="mb-3">
      <label for="file_kk" class="form-label">File KK</label>
      <input type="file" class="form-control" id="file_kk" name="file_kk" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
