<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswaModel;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function index()
    {
        $data = [
            'siswa' => Auth::guard('siswa')->user()
        ];
        return view('Siswa.DetailSiswa', $data);
    }
    public function editSiswa()
    {
        $data = DataSiswaModel::find(Auth::guard('siswa')->user()->id);
        if ($data) {
            $data = [
                'siswa' => $data,
                'is_alumni' => $data->checkAlumniOrNo(Auth::guard('siswa')->user()->id)
            ];
            return view('Siswa.EditSiswa', $data);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }
    public function updateSiswa(Request $request)
    {
        $id = Auth::guard('siswa')->user()->id;
        $request->request->remove('_token');
        $save = array_merge($request->all(), ['is_alumni' => DataSiswaModel::checkAlumniOrNo($id)]);
        $data = DataSiswaModel::find($id);
        if ($data) {
            if ($data->update($save)) {
                return redirect()->back()->with('success', 'Data berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Data gagal diubah');
            }
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }
}
