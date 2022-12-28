@extends('Template.Main')
@section('title', 'Dashboard')
@section('content')
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3">

        <div class="col">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Semua Siswa</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ \App\Models\DataSiswaModel::count() }}</h6>
                            <span class="text-success small pt-1 fw-bold">Siswa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Siswa <span>| Perempuan</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-gender-female"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ \App\Models\DataSiswaModel::where('kelamin', 'Perempuan')->count() }}</h6>
                            <span class="text-success small pt-1 fw-bold">Siswa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Siswa <span>| Laki-Laki</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-gender-male"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ \App\Models\DataSiswaModel::where('kelamin', 'Laki-laki')->count() }}</h6>
                            <span class="text-success small pt-1 fw-bold">Siswa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3">
        @for ($tahun = 2004; $tahun <= date('Y'); $tahun++)
            <div class="col">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Siswa <span>| {{ $tahun }}</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ \App\Models\DataSiswaModel::countSiswa($tahun) }}</h6>
                                <span class="text-success small pt-1 fw-bold">Siswa</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection
