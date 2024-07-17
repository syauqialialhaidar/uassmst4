@extends('app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Edit Alternatif</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('alternatif.update', $alternatif->id_alternatif) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id_alternatif" class="form-label">ID Alternatif</label>
                    <input type="text" class="form-control" id="id_alternatif" name="id_alternatif" value="{{ $alternatif->id_alternatif }}" readonly>
                    <!-- Jika ingin memungkinkan pengeditan ID, ubah "readonly" menjadi "text" -->
                </div>
                <div class="mb-3">
                    <label for="nama_alternatif" class="form-label">Nama Alternatif</label>
                    <input type="text" class="form-control" id="nama_alternatif" name="nama_alternatif" value="{{ $alternatif->nama_alternatif }}" required>
                </div>
                <!-- Tambahkan input untuk field lainnya sesuai kebutuhan -->
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
