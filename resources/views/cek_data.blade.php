@extends('layout.main')

@section('header&footer')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Page Staff</h1>
    </div>
</div>
<div class="container mt-4">
    <div class="text-center mt-4">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Dokumen</th>
                        <th>Ket</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data Antrian disini -->
                    <tr>
                        <td>1.</td>
                        <td>Kartu Tanda Penduduk</td>
                        <td>Sudah</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <form action="" method="post">
                                    <button type="submit" class="btn btn-danger btn-sm" >Cek data</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Kartu Keluarga</td>
                        <td>Sudah</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <form action="" method="post">
                                    <button type="submit" class="btn btn-danger btn-sm" >Cek data</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    {{-- @if ($antrian->penjamin === 'BPJS') --}}
                    <tr>
                        <td>3.</td>
                        <td>Kartu BPJS</td>
                        <td>Sudah</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="file:///C:/Users/LENOVO/Music/GENE%20MAMAS/Laravel-Project/Tugas%20kampus/tugasPPL%20-%20Copy/storage/app/{{$antrian->BPJS}}" class="btn btn-primary btn-sm">Cari Rekam Medis</a>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Surat Rujukan</td>
                        <td>Sudah</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="file:///C:/Users/LENOVO/Music/GENE%20MAMAS/Laravel-Project/Tugas%20kampus/tugasPPL%20-%20Copy/storage/app/{{ $antrian->surat_rujukan }}" target="_blank" class="btn btn-primary btn-sm">Link ke Surat Rujukan</a>
                            </div>                            
                        </td>
                    </tr>                    
                    {{-- @endif --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
