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
                        <th>Nama</th>
                        <th>Penjamin</th>
                        <th>Date Antrian</th>
                        <th>Status</th>
                        <th>No Urut</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data Antrian disini -->
                    @foreach($Antrians as $antrian)
                    <tr id="antrian_{{$antrian->id}}">
                        <td>{{$antrian->nama}}</td>
                        <td>{{$antrian->penjamin}}</td>
                        <td>{{$antrian->updated_at}}</td>
                        <td>{{$antrian->status}}</td>
                        <td>{{$antrian->no_urut}}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <form action="{{ route('delete_antrian', $antrian->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                                </form>
                            
                                <a href="{{ route('cek_dataa', ['id' => $antrian->id]) }}" class="btn btn-primary btn-sm">Cek Data</a>
                            
                                <form action="{{ route('update-status', ['id' => $antrian->id]) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <button type="submit" class="btn btn-success btn-sm">Periksa</button>
                                </form>
                            </div>
                        </td>
                        
                        
                    </tr>
                    <!-- Tambahkan data antrian lainnya sesuai kebutuhan -->
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
