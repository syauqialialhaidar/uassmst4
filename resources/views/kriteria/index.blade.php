@extends('app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0 mb-5">
                        <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                            <h3 class="card-title m-0">Daftar Kriteria</h3>
                            <a href="{{ route('kriteria.create') }}" class="btn btn-light btn-sm">Tambah Kriteria</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped m-0">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Atribut</th>
                                            <th>Bobot</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kriterias as $kriteria)
                                            <tr>
                                                <td>{{ $kriteria->nama_kriteria }}</td>
                                                <td>{{ $kriteria->atribut }}</td>
                                                <td>{{ $kriteria->bobot }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('kriteria.edit', $kriteria->id_kriteria) }}" class="btn btn-sm btn-primary mx-1">Edit</a>
                                                    <form action="{{ route('kriteria.destroy', $kriteria->id_kriteria) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger mx-1" onclick="return confirm('Apakah Anda yakin ingin menghapus kriteria ini?')">Hapus</button>
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
