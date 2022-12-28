<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\DataSiswaModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.Login');
    }
    public function operatorLogin()
    {
        return view('Auth.OperatorLogin');
    }
    public function register($tahun)
    {
        if ($tahun < date('y')){
            return redirect()->route('login')-with('error', 'Pendaftaran untuk tahun ajaran '.$tahun.' sudah ditutup');
        }
        $data = [
            'tahun' => base64_decode($tahun)
        ];

        return view('Auth.Register', $data);
    }

    public function registerProcess(Request $request)
    {
        $request->request->remove('_token');
        if (DataSiswaModel::create($request->all())) {
            return redirect()->route('login')->with('success', 'Berhasil mendaftar, silahkan login');
        } else {
            return redirect()->back()->with('error', 'Gagal mendaftar, silahkan coba lagi');
        }
    }
    public function loginProcess(Request $request)
    {
        Auth::guard('siswa')->logout();
        Auth::guard('operator')->logout();
        if ($request->role == '1') {
            $validator = Validator::make($request->all(), [
                'nisn' => 'numeric|required',
                'nama_ortu' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $user = DataSiswaModel::where('nisn', $request->nisn)
                ->where('nama_ayah', 'LIKE', "%{$request->nama_ortu}%")
                ->orWhere('nama_ibu', 'LIKE', "%{$request->nama_ortu}%")
                ->orWhere('nama_wali', 'LIKE', "%{$request->nama_ortu}%")
                ->first();
            if ($user) {
                Auth::guard('siswa')->login($user);
                return redirect()->route('siswa.dashboard');
            } else {
                return redirect()->back()->with('error', 'NISN atau Nama Orang Tua Salah');
            }
        } elseif ($request->role == '2') {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $credentials = $request->only('email', 'password');
            if (Auth::guard('operator')->attempt($credentials)) {
                return redirect()->route('operator.dashboard');
            } else {
                return redirect()->back()->with('error', 'Email atau Password Salah');
            }
        }
    }
    function logout()
    {
        Auth::guard('siswa')->logout();
        Auth::guard('operator')->logout();
        return redirect()->route('login')->with('success', 'Berhasil Logout');
    }
}
