<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Siswa SMKN 4 Bojonegoro</title>
    <meta content="Aplikasi untuk mengelola data siswa SMKN 4 Bojonegoro" name="description">
    <meta content="Data siswa, smkn4 bojonegoro, smkn bojonegoro, Aplikasi, SMK, Bojonegoro" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-primary">
    <div class="container mt-5">
        <div class="card shadow rounded">
            <div class="card-body">
                <div class="row w-100 mb-3">
                    <div class="col-6 col-md-4">
                        <h5 class="card-title">Daftar Siswa Baru {{ $tahun }}/{{ $tahun+1 }}</h5>
                    </div>
                </div>
                <hr>
                <div class="mt-3">
                    <form action="{{ route('registerProcess',$tahun) }}" method="post">
                        @csrf
                        <input type="hidden" name="tahun_masuk" value="{{ $tahun }}">
                        <h5 class="text-primary mt-3">Data Diri</h5>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">NISN</label>
                                    <input type="number" name="nisn" class="form-control" placeholder="NISN" required>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="nama_siswa">Nama Siswa</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kelamin">Kelamin</label>
                            <select class="form-control" id="kelamin" name="kelamin">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="ttl">Tempat Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="ttl" name="ttl">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <input type="text" class="form-control" id="agama" name="agama">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Asal sekolah</label>
                                    <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="alamat">No STTB</label>
                                    <input type="text" class="form-control" id="no_sttb" name="no_sttb">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                {{-- @if ($is_alumni) --}}
                                <div class="form-group">
                                    <label for="">Tahun Lulus SMP</label>
                                    <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus_smp"
                                           min="2004" >
                                </div>
                                {{-- @endif --}}
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Tahun Pendaftaran SMK</label>
                                    <input type="number" class="form-control" id="tahun_masuk" name="tahun_masuk"
                                           value="{{ $tahun }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Anak ke</label>
                                    <input type="number" class="form-control" id="anak_ke" name="anak_ke">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Dari berapa saudara</label>
                                    <input type="number" class="form-control" id="dari_berapa_saudara"
                                           name="dari_berapa_saudara">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Tinggi</label>
                                    <input type="number" class="form-control" id="tinggi" name="tinggi">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Berat</label>
                                    <input type="number" class="form-control" id="berat" name="berat">
                                </div>
                            </div>
                        </div>
                        <h5 class="text-primary mt-3">Data Alamat</h5>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Jalan / Dukuh</label>
                                    <input type="text" class="form-control" id="jalan_dukuh" name="jalan_dukuh">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">RT</label>
                                    <input type="number" class="form-control" id="rt" name="rt">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">RW</label>
                                    <input type="number" class="form-control" id="rw" name="rw">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Desa</label>
                                    <input type="text" class="form-control" id="desa" name="desa">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Kecamatan</label>
                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control" id="kabupaten" name="kabupaten">
                        </div>
                        <div class="form-group">
                            <label for="">No Telp</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp">
                        </div>
                        <h5 class="text-primary mt-3">Data Orang Tua</h5>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Nama Ayah</label>
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Nama Ibu</label>
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Nama Wali</label>
                                    <input type="text" class="form-control" id="nama_wali" name="nama_wali">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Pekerjaan Ayah</label>
                                    <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Pekerjaan Ibu</label>
                                    <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Pekerjaan Wali</label>
                                    <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali">
                                </div>
                            </div>
                        </div>
                        <div class="w-100 d-flex">
                            <a type="button" class="btn btn-secondary mt-3 ms-auto"
                                    href="/">Kembali
                            </a>
                            <button type="submit" class="btn btn-success mt-3 ms-2">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
