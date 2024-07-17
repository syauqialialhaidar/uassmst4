@extends('app')

@section('content')
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <form action="{{ route('alternatif.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_alternatif">ID Alternatif</label>
                    <input type="text" name="id_alternatif" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nama_alternatif">Nama Alternatif</label>
                    <input type="text" name="nama_alternatif" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
