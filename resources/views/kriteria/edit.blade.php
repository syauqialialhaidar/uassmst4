@extends('app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Edit Kriteria</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kriteria.update', $kriteria->id_kriteria) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                <label for="id_kriteria" class="form-label">ID Alternatif</label>
                <input type="text" name="id_kriteria" class="form-control" value="{{ $kriteria->id_kriteria }}" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_kriteria">Nama Kriteria</label>
                    <input type="text" name="nama_kriteria" class="form-control" value="{{ $kriteria->nama_kriteria }}" required>
                </div>
                <div class="form-group">
                    <label for="atribut">Atribut</label>
                    <input type="text" name="atribut" class="form-control" value="{{ $kriteria->atribut }}" required>
                </div>
                <div class="form-group">
                    <label for="bobot">Bobot</label>
                    <input type="text" name="bobot" class="form-control" value="{{ $kriteria->bobot }}" required>
                </div>
                <!-- Tambahan form untuk atribut lainnya -->
               
                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('kriteria.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
