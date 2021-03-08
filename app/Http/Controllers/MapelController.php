<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $obj    = \App\Mapel::latest()->paginate(5);
        $data['obj']    = $obj;
        return view('mapel_index', $data);
    }
    public function tambah()
    {
        $data['obj']    = new \App\Mapel();
        $data['action'] = 'MapelController@simpan';
        $data['method'] = "POST";
        $data['btn_simpan'] = "TAMBAH";
        return view('mapel_form', $data);
    }
    public function simpan(Request $request)
    {
        $request->validate([
            'nama'    => 'required|unique:mapels,nama',
        ]);

        $mapel  = new \App\Mapel();
        $mapel->nama = $request->nama;
        $mapel->save();
        return redirect('admin/mapel/index')->with('toast_success','Data Sudah Berhasil Ditambah');
    }

    public function hapus($id)
    {
        $obj = \App\Mapel::findOrFail($id);
        $obj->delete();
        return back()->with('toast_info','Data Sudah Dihapus');
    }
}
