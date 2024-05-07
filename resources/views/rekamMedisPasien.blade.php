<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laporan Medis Pasien</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f0f0f0;
    }
    .container {
        max-width: 600px;
        margin: auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
    }
    form {
        margin-top: 20px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .info {
        display: grid;
        grid-template-columns: max-content auto;
        gap: 10px;
        align-items: center;
    }
    .info span {
        padding: 5px;
        border-radius: 5px;
        background-color: #f2f2f2;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    .no-record {
        text-align: center;
        margin-top: 20px;
    }
    .no-record button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .no-record button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Laporan Medis Pasien</h1>
    <div class="form-group">
        <div class="info">
            <label for="nama">Nama:</label>
            <span>{{$pasien->nama}}</span>
        </div>
    </div>
    <div class="form-group">
        <div class="info">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <span>{{$pasien->jenis_kelamin}}</span>
        </div>
    </div>
    <div class="form-group">
        <div class="info">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <span>{{$pasien->tanggal_lahir}}</span>
        </div>
    </div>
    <div class="form-group">
        <div class="info">
            <label for="alamat">Alamat:</label>
            <span>{{$pasien->alamat}}</span>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Gejala</th>
                <th>Diagnosis</th>
                <th>Resep Obat</th>
                <th>Penanganan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rekamMedis as $rekam)
            <tr>
                <td>{{$rekam->gejala}}</td>
                <td>{{$rekam->diagnosis}}</td>
                <td>{{$rekam->resep_obat}}</td>
                <td>{{$rekam->penangan}}</td>
                <td>{{$rekam->tanggal}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if($rekamMedis->isEmpty())
    <div class="no-record">
        <p>Belum Ada Rekam Medis</p>
     @endif
     <button type="button" onclick="window.location.href='{{ route('create.rekamMedisPasien', ['id' => $pasien->id_pasien]) }}'">
     Tambah Rekam Medis
    </button>
    <button type="button" onclick="window.location.href='{{ route('index') }}'">beranda
    </button>
 
    </div>
</div>
</body>
</html>
