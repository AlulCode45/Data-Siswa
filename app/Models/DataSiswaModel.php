<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DataSiswaModel extends Authenticatable
{
    use HasFactory;
    protected $table = 'data_siswa';
    protected $guarded = ['id'];
    public $timestamps = false;

    public static function checkAlumniOrNo($id)
    {
        $data = DataSiswaModel::find($id);
        if ($data) {
            if ($data->is_alumni == 1 or $data->tahun_lulus <= date('Y')) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public static function countSiswa($tahun){
        return DataSiswaModel::where('tahun_masuk',$tahun)->count();
    }
}
