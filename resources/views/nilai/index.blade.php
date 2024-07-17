@extends('app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 mb-5">
                    <div class="card-header bg-dark text-white text-center">
                        <h3 class="card-title m-0">Data Nilai Alternatif</h3>
                    </div>

                    <div class="card-body p-4">
                        <a href="{{ route('nilai.create') }}" class="btn btn-primary mb-3">Tambah Nilai</a>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped m-0">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        @foreach ($kriterias as $kriteria)
                                        <th>{{ $kriteria->nama_kriteria }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nilais as $key => $val)
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td>{{ $alternatifs[$key]->nama_alternatif }}</td>
                                        @foreach ($val as $k => $v)
                                        <td>{{ $v }}</td>
                                        @endforeach
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
