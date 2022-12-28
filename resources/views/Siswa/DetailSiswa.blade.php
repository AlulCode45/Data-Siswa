@extends('Template.Main')
@section('title', 'Kelola Siswa siswa')
@section('content')
    <div class="card shadow rounded">
        <div class="card-body">
            <div class="row w-100 mb-3">
                <div class="col-6 col-md-4">
                    <h5 class="card-title">Data Siswa</h5>
                </div>
                <div class="col-6 col-md-8 d-flex my-auto">
                    <a class="btn btn-primary ms-auto text-center btn-tambahsiswa"
                        href="{{ route('siswa.edit_siswa') }}">Edit Data </a>
                </div>
            </div>
            <hr>
            <div class="mt-3">
                <h5 class="text-primary mt-3">Data Siswa</h5>
                <div class="row">
                    <div class="col-2">
                        <div class="form-group">
                            <label for="absen">Absen</label>
                            <input type="text" class="form-control" id="absen" name="absen"
                                value="{{ $siswa->absen }}" readonly>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="form-group">
                            <label for="nama_siswa">Nama Siswa</label>
                            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa"
                                value="{{ $siswa->nama_siswa }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="no_induk">No Induk</label>
                            <input type="text" class="form-control" id="no_induk" name="no_induk"
                                value="{{ $siswa->no_induk }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" class="form-control" id="nisn" name="nisn"
                                value="{{ $siswa->nisn }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="komli">Komli</label>
                    <input type="text" class="form-control" id="komli" name="komli" value="{{ $siswa->komli }}"
                        readonly>
                </div>
                <h5 class="text-primary mt-3">Data Diri</h5>
                <div class="form-group">
                    <label for="kelamin">Kelamin</label>
                    <input type="text" class="form-control" id="kelamin" name="kelamin" value="{{ $siswa->kelamin }}"
                        readonly>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="ttl">Tempat Tanggal Lahir</label>
                            <input type="text" class="form-control" id="ttl" name="ttl"
                                value="{{ $siswa->ttl }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input type="text" class="form-control" id="agama" name="agama"
                                value="{{ $siswa->agama }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Asal sekolah</label>
                            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah"
                                value="{{ $siswa->asal_sekolah }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="alamat">No STTB</label>
                            <input type="text" class="form-control" id="no_sttb" name="no_sttb"
                                value="{{ $siswa->no_sttb }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Tahun Lulus SMP</label>
                            <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus"
                                   value="{{ $siswa->tahun_lulus_smp }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Tahun Masuk</label>
                            <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk"
                                value="{{ $siswa->tahun_masuk }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Anak ke</label>
                            <input type="text" class="form-control" id="anak_ke" name="anak_ke"
                                value="{{ $siswa->anak_ke }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Dari berapa saudara</label>
                            <input type="text" class="form-control" id="dari_berapa_saudara"
                                name="dari_berapa_saudara" value="{{ $siswa->dari_berapa_saudara }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Tinggi</label>
                            <input type="text" class="form-control" id="tinggi" name="tinggi"
                                value="{{ $siswa->tinggi }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Berat</label>
                            <input type="text" class="form-control" id="berat" name="berat"
                                value="{{ $siswa->berat }}" readonly>
                        </div>
                    </div>
                </div>
                <h5 class="text-primary mt-3">Data Alamat</h5>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Jalan / Dukuh</label>
                            <input type="text" class="form-control" id="jalan_dukuh" name="jalan_dukuh"
                                value="{{ $siswa->jalan_dukuh }}" readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">RT</label>
                            <input type="text" class="form-control" id="rt" name="rt"
                                value="{{ $siswa->rt }}" readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">RW</label>
                            <input type="text" class="form-control" id="rw" name="rw"
                                value="{{ $siswa->rw }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Desa</label>
                            <input type="text" class="form-control" id="desa" name="desa"
                                value="{{ $siswa->desa }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                                value="{{ $siswa->kecamatan }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Kabupaten</label>
                    <input type="text" class="form-control" id="kabupaten" name="kabupaten"
                        value="{{ $siswa->kabupaten }}" readonly>
                </div>
                <div class="form-group">
                    <label for="">No Telp</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp"
                        value="{{ $siswa->no_telp }}" readonly>
                </div>
                <h5 class="text-primary mt-3">Data Orang Tua</h5>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Nama Ayah</label>
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                                value="{{ $siswa->nama_ayah }}" readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Nama Ibu</label>
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                                value="{{ $siswa->nama_ibu }}" readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Nama Wali</label>
                            <input type="text" class="form-control" id="nama_wali" name="nama_wali"
                                value="{{ $siswa->nama_wali }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Pekerjaan Ayah</label>
                            <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah"
                                value="{{ $siswa->pekerjaan_ayah }}" readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu"
                                value="{{ $siswa->pekerjaan_ibu }}" readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Pekerjaan Wali</label>
                            <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali"
                                value="{{ $siswa->pekerjaan_wali }}" readonly>
                        </div>
                    </div>
                </div>
                {{-- <div class="w-100 d-flex">
                    <button type="button" class="btn btn-secondary mt-3 ms-auto"
                        onclick="history.back()">Kembali</button>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
