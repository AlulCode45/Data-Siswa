<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class data_siswa2014 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents("http://localhost:8000/data2014.json");
        $result = json_decode($data, true);
        $a = [];
        foreach ($result as $key => $data) {
            $save = [
                'absen' => array_key_exists('ABSEN', $data) ? $data['ABSEN'] : null,
                'nama_siswa' => array_key_exists('NAMA SISWA', $data) ? $data['NAMA SISWA'] : null,
                'nisn' => array_key_exists('NISN', $data) ? $data['NISN'] : null,

                'ttl' => (array_key_exists('TEMPAT,', $data)  ? $data['TEMPAT,'] : null) . ", " . (array_key_exists('TTL1', $data)  ? $data['TTL1'] : null) . " " . (array_key_exists('TTL2', $data)  ? $data['TTL2'] : null) . " " . (array_key_exists('TTL3', $data)  ? $data['TTL3'] : null),

                'no_induk' => (array_key_exists('NOMOR', $data) ? $data['NOMOR'] : null) . (array_key_exists('INDUK', $data) ? $data['INDUK'] : null) . (array_key_exists('INDUK1', $data) ? $data['INDUK1'] : null) . (array_key_exists('INDUK2', $data) ? $data['INDUK2'] : null) . (array_key_exists('INDUK3', $data) ? $data['INDUK3'] : null),

                'agama' => array_key_exists('AGAMA', $data) ? $data['AGAMA'] : null,
                'komli' => array_key_exists('KLS', $data) ? $data['KLS'] : null,

                'kelamin' => array_key_exists('L/P', $data) ? ($data['L/P'] == "L" ? "Laki-laki" : "Perempuan") : null,
                'asal_sekolah' => array_key_exists('STTB TERAKHIR', $data) ? $data['STTB TERAKHIR'] : null,
                'no_sttb' => (array_key_exists('NO.STTB', $data)  ? $data['NO.STTB'] : null) . array_key_exists('NO.STTB1', $data)  ? $data['NO.STTB1'] : null,
                'tahun_lulus_smp' => array_key_exists('THN', $data)  ? intval($data['THN']) : null, 'tahun_masuk' => array_key_exists('TAHUN MASUK', $data)  ? intval($data['TAHUN MASUK']) : null,
                'anak_ke' => array_key_exists('ANAK KE', $data)  ? $data['ANAK KE'] : null,
                'dari_berapa_saudara' => array_key_exists('DARI', $data)  ? $data['DARI'] : null,
                'tinggi' => array_key_exists('TINGGI', $data)  ? $data['TINGGI'] : null,
                'berat' => array_key_exists('BERAT', $data)  ? $data['BERAT'] : null,
                'jalan_dukuh' => array_key_exists('ALAMAT', $data)  ? $data['ALAMAT'] : null,
                'desa' => array_key_exists('DESA', $data)  ? $data['DESA'] : null,
                'rt' => array_key_exists('RT', $data)  ? $data['RT'] : null,
                'rw' => array_key_exists('RW', $data)  ? $data['RW'] : null,
                'no_telp' =>  array_key_exists('TELP', $data)  ? $data['TELP'] : null,
                'kecamatan' => array_key_exists('KEC', $data)  ? $data['KEC'] : null,
                'kabupaten' => array_key_exists('KAB', $data) ? $data['KAB'] : null,
                'nama_ayah' => array_key_exists('ORTU', $data) ? $data['ORTU'] : null,
                'nama_ibu' => array_key_exists('IBU', $data) ? $data['IBU'] : null,
                'nama_wali' => array_key_exists('WALI', $data) ? $data['WALI'] : null,
                'pekerjaan_ayah' => array_key_exists('PEKERJAAN', $data) ? $data['PEKERJAAN'] : null,
                'pekerjaan_ibu' => array_key_exists('PEKERJAAN IBU', $data) ? $data['PEKERJAAN IBU'] : null,
                'pekerjaan_wali' => array_key_exists('PEKERJAAN WALI', $data) ? $data['PEKERJAAN WALI'] : null,
                'status' => 1,
                'keterangan_status' => '',
            ];
            array_push($a, $save);
        }
        // dd($a);
        DB::table('data_siswa')->insert($a);
    }
}
