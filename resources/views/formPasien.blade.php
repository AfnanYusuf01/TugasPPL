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

    
.step-wizard { 
    display: flex;
    justify-content: center;
    align-items: center;
}
.step-wizard-list{
    
    margin-top: 10px;
    margin-bottom: -10px;
    background: #fff;
    box-shadow: 0 15px 25px rgba(0,0,0,0.1);
    color: #333;
    list-style-type: none;
    border-radius: 10px;
    display: flex;
    padding: 20px 10px;
    position: relative;
    z-index: 10;
}

.step-wizard-item{
    padding: 0 20px;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive:1;
    flex-grow: 1;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    text-align: center;
    min-width: 170px;
    position: relative;
}
.step-wizard-item + .step-wizard-item:after{
    content: "";
    position: absolute;
    left: 0;
    top: 19px;
    background: #21d4fd;
    width: 100%;
    height: 2px;
    transform: translateX(-50%);
    z-index: -10;
}
.progress-count{
    height: 40px;
    width:40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-weight: 600;
    margin: 0 auto;
    position: relative;
    z-index:10;
    color: transparent;
}
.progress-count:after{
    content: "";
    height: 40px;
    width: 40px;
    background: #21d4fd;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    z-index: -10;
}
.progress-count:before{
    content: "";
    height: 10px;
    width: 20px;
    border-left: 3px solid #fff;
    border-bottom: 3px solid #fff;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -60%) rotate(-45deg);
    transform-origin: center center;
}
.progress-label{
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
}
.current-item .progress-count:before,
.current-item ~ .step-wizard-item .progress-count:before{
    display: none;
}
.current-item ~ .step-wizard-item .progress-count:after{
    height:10px;
    width:10px;
}
.current-item ~ .step-wizard-item .progress-label{
    opacity: 0.5;
}
.current-item .progress-count:after{
    background: #fff;
    border: 2px solid #21d4fd;
}
.current-item .progress-count{
    color: #21d4fd;
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
  <section class="step-wizard">
    <ul class="step-wizard-list">
        <li class="step-wizard-item">
            <span class="progress-count">1</span>
            <span class="progress-label">Billing Info</span>
        </li>
        <li class="step-wizard-item current-item">
            <span class="progress-count">2</span>
            <span class="progress-label">Payment Method</span>
        </li>
        <li class="step-wizard-item">
            <span class="progress-count">3</span>
            <span class="progress-label">Checkout</span>
        </li>
        <li class="step-wizard-item">
            <span class="progress-count">4</span>
            <span class="progress-label">Success</span>
        </li>
    </ul>
</section>
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
