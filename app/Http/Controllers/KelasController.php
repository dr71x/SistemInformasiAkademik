<?php

namespace App\Http\Controllers;

use App\Mapel;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class KelasController extends Controller
{
    public function index()
    {
        $obj    = \App\Kelas::latest()->paginate(10);
        $data['obj']    = $obj;
        return View('kelas_index',$data);
    }

    public function tambah()
    {
        $data['obj']    = new \App\Kelas();
        $data['action'] = 'KelasController@simpan';
        $data['method'] = "POST";
        $data['btn_simpan'] = 'SIMPAN';
        return view('kelas_form', $data);
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|unique:kelas',
            'guru_id'   =>'required|unique:kelas,guru_id',
            'id_jurusan'    =>  'required'
        ]);
            $Kelas = new \App\Kelas();
            $Kelas->nama_kelas  = $request->nama_kelas;
            $Kelas->guru_id     = $request->guru_id;
            $Kelas->id_jurusan     = $request->id_jurusan;
            $Kelas->save();
            return redirect('admin/kelas/index')->with('toast_success','Data sudah berhasil diTambahkan');



    }

    public function hapus($id)
    {
        $obj = \App\Kelas::findOrfail($id);
        $obj->delete();
        return back()->with('toast_info','Data sudah Berhasil Dihapus');
    }

    public function lihat(Request $request, $id)
    {
        $data['model']  = \App\Kelas::findOrFail($id);
        $data['object']    = new \App\Jadwal();
        $data['kelas_id']   = $request->id;
        $data['action']     = 'KelasController@jadwalsimpan';
        $data['method']     = "POST";
        $data['btn_simpan'] = "SIMPAN";
        $data['obj']    = \App\Jadwal::all()->where('kelas_id',$id);
        return view('kelas_lihat', $data);
    }

    public function jadwal(Request $request,$id)
    {
        $data['obj']    = new \App\Jadwal();
        $data['model']  = $request->id;
        $data['kelas_id']   = $request->id;
        $data['action']     = 'KelasController@jadwalsimpan';
        $data['method']     = "POST";
        $data['btn_simpan'] = "SIMPAN";
        return view('jadwal_form',$data);
    }

    public function jadwalsimpan(Request $request)
    {
        $request->validate([
            'guru_id'   => 'required',
            'mapel_id'  => 'required',
            'hari'      =>  'required',
            'jam'       =>  'required',
            'jam_selesai'   => 'required',
            'kelas_id'      => 'required',
            'semester'      => 'required',
            'tahun'         => 'required',
        ]);

        $jadwal     = new \App\Jadwal();
        $jadwal->guru_id = $request->guru_id;
        $jadwal->mapel_id   = $request->mapel_id;
        $jadwal->hari = $request->hari;
        $jadwal->jam = $request->jam;
        $jadwal->jam_selesai = $request->jam_selesai;
        $jadwal->kelas_id   = $request->kelas_id;
        $jadwal->semester   = $request->semester;
        $jadwal->tahun  = $request->tahun;
        $jadwal->save();
        return back()->with('toast_success','Data Sudah diTambahkan');
    }

    public function hapusjadwal($id)
    {
        $obj = \App\Jadwal::findOrfail($id);
        $obj->delete();
        return back()->with('toast_info','Data Sudah Berhasil Dihapus');
    }

}
