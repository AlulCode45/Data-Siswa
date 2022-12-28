<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('nama_user');
            $table->date('tangggal_lahir');
            $table->string('kelamin');
            $table->string('asal_sekolah');
            $table->string('no_sttb');
            $table->year('tahun_masuk');
            $table->integer('anak_ke');
            $table->integer('dari_berapa_saudara');
            $table->integer('tinggi');
            $table->string('jalan_dukuh');
            $table->string('desa');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('no_telp');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('nama_wali');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('pekerjaan_wali');
            $table->year('tahun_lulus');
            $table->integer('status');
            $table->text('keterangan_status');
            $table->boolean('is_active');
            $table->boolean('is_alumni');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_siswa');
    }
};
