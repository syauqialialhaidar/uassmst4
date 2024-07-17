@extends('app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <!-- Data Nilai Section -->
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title m-0">Data Nilai Alternatif</h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped m-0">
                            <thead class="bg-light">
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
                                <tr class="bg-light">
                                    <td colspan="2"><strong>Min</strong></td>
                                    @foreach ($minmax as $key => $val)
                                        <td>{{ $val['min'] }}</td>
                                    @endforeach
                                </tr>
                                <tr class="bg-light">
                                    <td colspan="2"><strong>Max</strong></td>
                                    @foreach ($minmax as $key => $val)
                                        <td>{{ $val['max'] }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Normalisasi Section -->
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title m-0">Normalisasi</h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped m-0">
                            <thead class="bg-light">
                                <tr>
                                    <th>Id</th>
                                    @foreach ($kriterias as $kriteria)
                                        <th>{{ $kriteria->id_kriteria }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($normal as $key => $val)
                                    <tr>
                                        <td>{{ $key }}</td>
                                        @foreach ($val as $k => $v)
                                            <td>{{ round($v, 4) }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Perangkingan Section -->
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-header bg-warning text-white">
                    <h3 class="card-title m-0">Perangkingan</h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped m-0">
                            <thead class="bg-light">
                                <tr>
                                    <th>Rank</th>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rank as $key => $val)
                                    <tr>
                                        <td>{{ $val }}</td>
                                        <td>{{ $key }}</td>
                                        <td>{{ $alternatifs[$key]->nama_alternatif }}</td>
                                        <td>{{ round($total[$key], 4) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
