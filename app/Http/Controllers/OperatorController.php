<?php

namespace App\Http\Controllers;

use App\Models\DataSiswaModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OperatorController extends Controller
{
    public function index()
    {
        return view('Operator.Index');
    }
    public function kelolaSiswa($tahun)
    {
        $data = [
            'siswa' => DataSiswaModel::where('tahun_masuk',$tahun)->get(),
            'tahun' => $tahun
        ];
        return view('Operator.KelolaSiswa', $data);
    }
    public function detailSiswa($id)
    {
        $data = DataSiswaModel::find($id);
        if ($data) {
            $data = [
                'siswa' => $data,
                'is_alumni' => $data->checkAlumniOrNo($id)
            ];
            return view('Operator.DetailSiswa', $data);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }
    public function editSiswa($id)
    {
        $data = DataSiswaModel::find($id);
        if ($data) {
            $data = [
                'siswa' => $data,
                'is_alumni' => $data->checkAlumniOrNo($id)
            ];
            return view('Operator.EditSiswa', $data);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }
    public function updateSiswa(Request $request, $id)
    {
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
    public function tambahSiswa($tahun)
    {
        return view('Operator.TambahSiswa',['tahun' => $tahun]);
    }
    public function tambahSiswaProcess(Request $request)
    {
        $request->request->remove('_token');
        $is_alumni = ($request->tahun_lulus == 0 ? 0 : ($request->tahun_lulus <= date('Y') ? 1 : 0));
        $merge = [
            'is_alumni' => $is_alumni,
            'status' => 1,
            'is_active' => 1,
        ];
        $save = array_merge($request->all(), $merge);
        if (DataSiswaModel::create($save)) {
            if ($is_alumni == 1) {
                return redirect()->back()->with('success', 'Data berhasil ditambahkan, dan siswa ini sudah menjadi alumni');
            } else {
                return redirect()->back()->with('success', 'Data berhasil ditambahkan, data masuk ke daftar siswa aktif');
            }
        } else {
            return redirect()->back()->with('error', 'Data gagal ditambahkan');
        }
    }
    public function hapusData($id)
    {
        $data = DataSiswaModel::find($id);
        if ($data) {
            if ($data->delete()) {
                return redirect()->back()->with('success', 'Data berhasil dihapus');
            } else {
                return redirect()->back()->with('error', 'Data gagal dihapus');
            }
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }

    public function profile(){
        $data = [
            'operator' => Auth::guard('operator')->user()
        ];
        return view('Operator.Profile',$data);
    }

    public function updateProfile(Request $request)
    {
        $request->request->remove('_token');
        if ($request->password == null) {
            $request->request->remove('password');
        } else {
            $request->request->add(['password' => bcrypt($request->password)]);
        }
        if ($request->hasFile('foto')) {
            $validator = Validator::make($request->all(), [
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            } else {
                $file = $request->file('foto');
                $nama_file = time() . "_" . $file->getClientOriginalName();
                $tujuan_upload = 'foto_profile';
                $file->move($tujuan_upload, $nama_file);
                $request->request->add(['foto_profile' => $nama_file]);
            }
        }
        if (User::find(Auth::guard('operator')->user()->id)->update($request->all())){
            return redirect()->back()->with('success','Data berhasil diubah');
        }else{
            return redirect()->back()->with('error','Data gagal diubah');
        }
    }
}
