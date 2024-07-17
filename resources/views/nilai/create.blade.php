@extends('app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 mb-5">
                    <div class="card-header bg-dark text-white text-center">
                        <h3 class="card-title m-0">Tambah Nilai Alternatif</h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('nilai.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="alternatif_id">Nama Alternatif</label>
                                <select class="form-control" id="alternatif_id" name="alternatif_id">
                                    @foreach ($alternatifs as $alternatif)
                                    <option value="{{ $alternatif->id }}">{{ $alternatif->nama_alternatif }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @foreach ($kriterias as $kriteria)
                            <div class="form-group">
                                <label for="kriteria_{{ $kriteria->id }}">{{ $kriteria->nama_kriteria }}</label>
                                <input type="text" class="form-control" id="kriteria_{{ $kriteria->id }}" name="kriteria[{{ $kriteria->id }}]">
                            </div>
                            @endforeach
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection