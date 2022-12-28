@extends('Template.Main')
@section('title', 'Tambah Siswa')
@section('content')
    <div class="card shadow rounded">
        <div class="card-body">
            <div class="row w-100 mb-3">
                <div class="col-6 col-md-4">
                    <h5 class="card-title">Tambah Data Siswa</h5>
                </div>
            </div>
            <hr>
            <div class="mt-3">
                <form action="{{ route('operator.tambah_siswa',$tahun) }}" method="post">
                    @csrf
                    <input type="hidden" name="tahun_masuk" value="{{ $tahun }}">
                    <h5 class="text-primary mt-3">Data Siswa</h5>
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <label for="absen">Absen</label>
                                <input type="number" class="form-control" id="absen" name="absen">
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                <label for="nama_siswa">Nama Siswa</label>
                                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="no_induk">No Induk</label>
                                <input type="text" class="form-control" id="no_induk" name="no_induk">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="number" class="form-control" id="nisn" name="nisn">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="komli">Komli</label>
                        <select class="form-control" id="komli" name="komli">
                            @foreach (\App\Models\KomliModel::all() as $komli)
                                <option value="{{ $komli->nama_komli }}">{{ $komli->nama_komli }}</option>
                            @endforeach
                        </select>
                    </div>
                    <h5 class="text-primary mt-3">Data Diri</h5>
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
                            <div class="form-group">
                                <label for="">Tahun Masuk</label>
                                <input type="number" class="form-control" id="tahun_masuk" name="tahun_masuk"
                                    value="{{ $tahun }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            {{-- @if ($is_alumni) --}}
                            <div class="form-group">
                                <label for="">Tahun Lulus</label>
                                <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus"
                                    min="2004">
                            </div>
                            {{-- @endif --}}
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
