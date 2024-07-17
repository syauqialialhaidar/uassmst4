@extends('app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 mb-5">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title m-0">Tambah Kriteria</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('kriteria.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_kriteria">Nama Kriteria</label>
                                    <input type="text" name="nama_kriteria" id="nama_kriteria" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="atribut">Atribut</label>
                                    <input type="text" name="atribut" id="atribut" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="bobot">Bobot</label>
                                    <input type="number" name="bobot" id="bobot" class="form-control" step="0.01" min="0" max="1" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
