@extends('Template.Main')
@section('title', 'Kelola Siswa Aktif')
@section('content')
    <div class="card">
        <div class="card-body">

            <div class="row w-100 mb-3">
                <div class="col-6 col-md-4">
                    <h5 class="card-title">Data Siswa Tahun {{ $tahun }}</h5>
                </div>
                <div class="col-6 col-md-8 d-flex my-auto">
                    <a class="btn btn-primary ms-auto text-center btn-tambahsiswa"
                       href="{{ route('operator.tambah_siswa',$tahun) }}">Tambah Data</a>
                    @if($tahun == date('Y') + 1)
                        <input class="d-none" id="link" value="{{ route('register',base64_encode($tahun)) }}"/>
                        <button class="btn btn-success ms-2 text-center btn-tambahsiswa" type="button" onclick="getLink()">Copy Link Pendaftaran</button>
                    @endif
                </div>
            </div>
            <div class="table-responsive">
                <table id="data-siswa" class="table table-striped">
                    <thead>
                    <tr>
                        <th>Absen</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>No Induk</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Komli</th>
                        <th>Kelamin</th>
                        <th>Agama</th>
                        <th>Asal Sekolah</th>
                        <th>No STTB</th>
                        <th>Tahun Masuk</th>
                        <th>Anak ke</th>
                        <th>Dari Berapa Saudara</th>
                        <th>Tinggi</th>
                        <th>Berat</th>
                        <th>JL/DK</th>
                        <th>Desa</th>
                        <th>RT</th>
                        <th>RW</th>
                        <th>No Telp</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Nama Wali</th>
                        <th>Pekerjaan Ayah</th>
                        <th>Pekerjaan Ibu</th>
                        <th>Pekerjaan Wali</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($siswa as $d)
                        <tr>
                            <td>{{ $d->absen }}</td>
                            <td>{{ $d->nama_siswa }}</td>
                            <td>{{ $d->nisn }}</td>
                            <td>{{ $d->no_induk }}</td>
                            <td>{{ $d->ttl }}</td>
                            <td>{{ $d->komli }}</td>
                            <td>{{ $d->kelamin }}</td>
                            <td>{{ $d->agama }}</td>
                            <td>{{ $d->asal_sekolah }}</td>
                            <td>{{ $d->no_sttb }}</td>
                            <td>{{ $d->tahun_masuk }}</td>
                            <td>{{ $d->anak_ke }}</td>
                            <td>{{ $d->dari_berapa_saudara }}</td>
                            <td>{{ $d->tinggi }}</td>
                            <td>{{ $d->berat }}</td>
                            <td>{{ $d->jalan_dukuh }}</td>
                            <td>{{ $d->desa }}</td>
                            <td>{{ $d->rt }}</td>
                            <td>{{ $d->rw }}</td>
                            <td>{{ $d->no_telp }}</td>
                            <td>{{ $d->kecamatan }}</td>
                            <td>{{ $d->kabupaten }}</td>
                            <td>{{ $d->nama_ayah }}</td>
                            <td>{{ $d->nama_ibu }}</td>
                            <td>{{ $d->nama_wali }}</td>
                            <td>{{ $d->pekerjaan_ayah }}</td>
                            <td>{{ $d->pekerjaan_ibu }}</td>
                            <td>{{ $d->pekerjaan_wali }}</td>
                            <td>
                                <a class="btn btn-success m-1" href="{{ route('operator.edit_siswa', $d->id) }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-primary m-1" href="{{ route('operator.detail_siswa', $d->id) }}">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a class="btn btn-danger m-1" href="{{ route('operator.hapus_data', $d->id) }}">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Absen</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>No Induk</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Komli</th>
                        <th>Kelamin</th>
                        <th>Agama</th>
                        <th>Asal Sekolah</th>
                        <th>No STTB</th>
                        <th>Tahun Masuk</th>
                        <th>Anak ke</th>
                        <th>Dari Berapa Saudara</th>
                        <th>Tinggi</th>
                        <th>Berat</th>
                        <th>JL/DK</th>
                        <th>Desa</th>
                        <th>RT</th>
                        <th>RW</th>
                        <th>No Telp</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Nama Wali</th>
                        <th>Pekerjaan Ayah</th>
                        <th>Pekerjaan Ibu</th>
                        <th>Pekerjaan Wali</th>
                        <th>Aksi</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#data-siswa').DataTable({
                order: [
                    [5, 'asc']
                ],
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

        });
    </script>
@endsection
