@extends('app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-dark text-white text-center d-flex justify-content-between align-items-center">
                            <h3 class="card-title mb-0">Daftar Alternatif Kendaraan Operasional</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 text-left">
                                <a href="{{ route('alternatif.create') }}" class="btn btn-outline-success btn-sm">Tambah</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped m-0">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alternatifs as $alternatif)
                                            <tr>
                                                <td>{{ $alternatif->id_alternatif }}</td>
                                                <td>{{ $alternatif->nama_alternatif }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('alternatif.edit', $alternatif->id_alternatif) }}" class="btn btn-outline-warning btn-sm mx-1">Edit</a>
                                                    <form action="{{ route('alternatif.destroy', $alternatif->id_alternatif) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger btn-sm mx-1" onclick="return confirm('Apakah Anda yakin ingin menghapus alternatif ini?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
