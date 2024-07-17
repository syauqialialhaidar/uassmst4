@extends('app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Tambah</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kriteria.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_kriteria">Nama Kriteria</label>
                    <input type="text" name="nama_kriteria" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="atribut">Atribut</label>
                    <input type="text" name="atribut" class="form-control" required>
                </div>
                <div class="form-group">
    
                <label for="bobot">Bobot</label>
                    <input type="text" name="bobot" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('kriteria.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
