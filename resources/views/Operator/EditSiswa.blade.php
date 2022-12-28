@extends('Template.Main')
@section('title', 'Edit Siswa siswa')
@section('content')
    <div class="card shadow rounded">
        <div class="card-body">
            <div class="row w-100 mb-3">
                <div class="col-6 col-md-4">
                    <h5 class="card-title">Edit Data Siswa</h5>
                </div>
            </div>
            <hr>
            <div class="mt-3">
                <form action="{{ route('operator.edit_siswa', $siswa->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="is_alumni" value="{{ $is_alumni }}">
                    <h5 class="text-primary mt-3">Data Siswa</h5>
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <label for="absen">Absen</label>
                                <input type="number" class="form-control" id="absen" name="absen"
                                    value="{{ $siswa->absen }}">
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                <label for="nama_siswa">Nama Siswa</label>
                                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa"
                                    value="{{ $siswa->nama_siswa }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="no_induk">No Induk</label>
                                <input type="text" class="form-control" id="no_induk" name="no_induk"
                                    value="{{ $siswa->no_induk }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="number" class="form-control" id="nisn" name="nisn"
                                    value="{{ $siswa->nisn }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="komli">Komli</label>
                        <select class="form-control" id="komli" name="komli">
                            <option value="">Pilih Komli</option>
                            @foreach (\App\Models\KomliModel::all() as $komli)
                                <option value="{{ $komli->nama_komli }}" {{ $siswa->komli == $komli->nama_komli ? 'selected' : '' }}>
                                    {{ $komli->nama_komli }}</option>
                            @endforeach
                        </select>
                    </div>
                    <h5 class="text-primary mt-3">Data Diri</h5>
                    <div class="form-group">
                        <label for="kelamin">Kelamin</label>
                        <select class="form-control" id="kelamin" name="kelamin">
                            <option value="Laki-laki" {{ $siswa->kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                            </option>
                            <option value="Perempuan" {{ $siswa->kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="ttl">Tempat Tanggal Lahir</label>
                                <input type="text" class="form-control" id="ttl" name="ttl"
                                    value="{{ $siswa->ttl }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <input type="text" class="form-control" id="agama" name="agama"
                                    value="{{ $siswa->agama }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Asal sekolah</label>
                                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah"
                                    value="{{ $siswa->asal_sekolah }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="alamat">No STTB</label>
                                <input type="text" class="form-control" id="no_sttb" name="no_sttb"
                                    value="{{ $siswa->no_sttb }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="">Tahun Lulus SMP</label>
                            <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus_smp"
                                   value="{{ $siswa->tahun_lulus_smp }}">
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Tahun Masuk</label>
                                <input type="number" class="form-control" id="tahun_masuk" name="tahun_masuk"
                                    value="{{ $siswa->tahun_masuk }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Anak ke</label>
                                <input type="number" class="form-control" id="anak_ke" name="anak_ke"
                                    value="{{ $siswa->anak_ke }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Dari berapa saudara</label>
                                <input type="number" class="form-control" id="dari_berapa_saudara"
                                    name="dari_berapa_saudara" value="{{ $siswa->dari_berapa_saudara }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Tinggi</label>
                                <input type="number" class="form-control" id="tinggi" name="tinggi"
                                    value="{{ $siswa->tinggi }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Berat</label>
                                <input type="number" class="form-control" id="berat" name="berat"
                                    value="{{ $siswa->berat }}">
                            </div>
                        </div>
                    </div>
                    <h5 class="text-primary mt-3">Data Alamat</h5>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Jalan / Dukuh</label>
                                <input type="text" class="form-control" id="jalan_dukuh" name="jalan_dukuh"
                                    value="{{ $siswa->jalan_dukuh }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">RT</label>
                                <input type="number" class="form-control" id="rt" name="rt"
                                    value="{{ $siswa->rt }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">RW</label>
                                <input type="number" class="form-control" id="rw" name="rw"
                                    value="{{ $siswa->rw }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Desa</label>
                                <input type="text" class="form-control" id="desa" name="desa"
                                    value="{{ $siswa->desa }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                                    value="{{ $siswa->kecamatan }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Kabupaten</label>
                        <input type="text" class="form-control" id="kabupaten" name="kabupaten"
                            value="{{ $siswa->kabupaten }}">
                    </div>
                    <div class="form-group">
                        <label for="">No Telp</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp"
                            value="{{ $siswa->no_telp }}">
                    </div>
                    <h5 class="text-primary mt-3">Data Orang Tua</h5>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Nama Ayah</label>
                                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                                    value="{{ $siswa->nama_ayah }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Nama Ibu</label>
                                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                                    value="{{ $siswa->nama_ibu }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Nama Wali</label>
                                <input type="text" class="form-control" id="nama_wali" name="nama_wali"
                                    value="{{ $siswa->nama_wali }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Pekerjaan Ayah</label>
                                <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah"
                                    value="{{ $siswa->pekerjaan_ayah }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Pekerjaan Ibu</label>
                                <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu"
                                    value="{{ $siswa->pekerjaan_ibu }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Pekerjaan Wali</label>
                                <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali"
                                    value="{{ $siswa->pekerjaan_wali }}">
                            </div>
                        </div>
                    </div>
                    <div class="w-100 d-flex">
                        <button type="button" class="btn btn-secondary mt-3 ms-auto"
                            onclick="history.back()">Kembali</button>
                        <button type="submit" class="btn btn-success mt-3 ms-2">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
