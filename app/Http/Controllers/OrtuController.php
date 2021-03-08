<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrtuController extends Controller
{
    public function formloginortu()
    {
        $data['obj']            =  new \App\Ortu();
        $data['action']         = 'OrtuController@prosesloginortu';
        $data['method']         = "POST";
        return view('login_ortu',$data);
    }
    public function prosesloginortu(Request $request)
    {
        $request->validate
        ([
            'NIS' => 'required',
            'password'  => 'required|max:25',
        ]);

        $credentials= [
            'NIS' => $request ->NIS,
            'password'=> $request->password,
        ];

        if (\Auth::guard('ortu')->attempt($credentials)) {
            return redirect('ortu/beranda');
        }
        else{
            return back()->with('pesan','email atau password anda salah silahkan cek kembali');
        }
    }

    public function beranda()
    {
       if (\Auth::guard('ortu')->check()) {
        $siswa = \App\Siswa::where('id',\Auth::guard('ortu')->user()->siswa_id)->pluck('kelas_id');
        $data['jadwal']  = \App\Jadwal::where('kelas_id',$siswa)->get('kelas_id')->count();
        $data['mapel']  = \App\Jadwal::where('kelas_id',$siswa)->groupBy('mapel_id')->get('mapel_id')->count();
           return view('ortu_beranda',$data);
       }
       else{
           return view('403');
       }
    }

    public function logout()
    {
        \Auth::guard('siswa')->logout();
        return redirect('/');
    }

    public function jadwal()
    {
        if (\Auth::guard('ortu')->check()) {
            $siswa = \App\Siswa::where('id',\Auth::guard('ortu')->user()->siswa_id)->pluck('kelas_id');
            $data['obj'] = \App\Jadwal::where('kelas_id',$siswa)->get();
            return view('ortu_jadwal',$data);
            echo $siswa;
        }
        else {
            return view('403');
        }
    }

    public function contactPerson()
    {
        if (\Auth::guard('ortu')->check()) {
            $siswa = \App\Siswa::where('id',\Auth::guard('ortu')->user()->siswa_id)->pluck('kelas_id');
            $data['obj'] = \App\Jadwal::where('kelas_id',$siswa)->get();
            return view('CP_jadwal',$data);
        }
        else {
            return view('403');
        }
    }

    public function NilaiSiswa()
    {
       if (\Auth::guard('ortu')->check()) {
        $data['obj']    = \App\Nilai::where('siswa_id',\Auth::guard('ortu')->user()->siswa_id)->groupBy('kelas_id')->get();
        return view('nilai_Siswaindexortu',$data);
       }
       else{
           return view('403');
       }
    }
    public function semester(Request $request)
    {
        if(\Auth::guard('ortu')->check()){
            $kelas_id = $request->kelas_id;
            $data['kelas_id'] = $kelas_id;
            $data['obj']    = \App\Nilai::where('siswa_id',\Auth::guard('ortu')->user()->siswa_id)->where('kelas_id',$kelas_id)->groupBy('semester')->get();
            return view('siswa_semesterortu',$data);
        }
         else{
               return view('403');
           }
    }

    public function nilaidetail(Request $request)
    {
        if (\Auth::guard('ortu')->check()) {
        $data['semester'] = $request->semester;
        $data['tahun']  = $request->tahun;
        $semester = $request->semester;
        $tahun = $request->tahun;
        $data['obj']    = \App\Nilai::where('siswa_id',\Auth::guard('ortu')->user()->siswa_id)->where('semester',$semester)->where('tahun',$tahun)->get();
        return view('nilai_detailsiswaortu',$data);
        } else {
            return view('403');
        }


    }

}
