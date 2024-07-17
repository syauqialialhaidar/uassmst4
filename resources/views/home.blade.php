@extends('app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card bg-light shadow-sm">
                        <div class="card-header bg-primary text-white text-center">
                            <h3 class="card-title">Sistem Pemilihan Kendaraan Operasional Terbaik</h3>
                        </div>
                        <div class="card-body">
                            <div class="jumbotron bg-white p-5 rounded shadow">
                                <p class="lead text-center">Sistem Pendukung Keputusan Metode SAW untuk Pemilihan Kendaraan Operasional Terbaik</p>
                                <hr class="my-4">
                                <p class="text-center">Sistem Pendukung Keputusan menggunakan metode Simple Additive Weighting untuk membantu Anda memilih kendaraan operasional terbaik berdasarkan kriteria berikut:</p>
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><i class="fas fa-tag"></i>1. Harga</li>
                                            <li class="list-group-item"><i class="fas fa-shield-alt"></i>2. Fitur Keselamatan</li>
                                            <li class="list-group-item"><i class="fas fa-truck"></i>3. Kapasitas Muatan</li>
                                            <li class="list-group-item"><i class="fas fa-wrench"></i>4. Biaya Perawatan</li>
                                            <li class="list-group-item"><i class="fas fa-gas-pump"></i>5. Konsumsi BBM</li>
                                        </ul>
                                    </div>                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
