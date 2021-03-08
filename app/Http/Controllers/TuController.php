<?php

namespace App\Http\Controllers;

use App\Tu;
use Illuminate\Http\Request;

class TuController extends Controller
{
    public function index(Request $request)
    {
        $obj    = \App\Tu::latest()->paginate(10);
        $data['obj']   = $obj;
        return view('tu_index',$data);
    }

    public function tambah()
    {
        $data['obj']    = new \App\Tu();
        $data['action'] = 'TuController@simpan';
        $data['btn_simpan'] = 'SIMPAN';
        $data['method'] = "POST";
        return view('tu_form',$data);

    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:tus,nama',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'status' => 'required',
            'alamat'    => 'required',
            'email' => 'required|unique:tus,email',
            'password'  => 'required',
            'foto'  => 'required',
        ]);

        $path = $request->file('foto')->store('public/foto-tu');

        $tu = new \App\Tu();
        $tu->nama = $request->nama;
        $tu->agama = $request->agama;
        $tu->jenis_kelamin = $request->jenis_kelamin;
        $tu->status = $request->status;
        $tu->alamat = $request->alamat;
        $tu->email = $request->email;
        $tu->password = bcrypt($request->password);
        $tu->foto = $path;
        $tu->save();
        return redirect('admin/tu/index')->with('toast_success','Data sudah Berhasil DI tambah');
    }

    public function hapus($id)
    {
        $tu = \App\Tu::find($id);
        $tu->delete();
        return back()->with('toast_info','Data sudah dihapus!!!');

    }

    public function cari(Request $ambildata)
    {
	    $cari = $ambildata->get('search');
	    $data['obj']= \App\Tu::where('nama','LIKE','%'.$cari.'%')
				        ->orwhere('status','LIKE','%'.$cari.'%')->paginate(10);
	    return view('tu_index',$data);
    }

    public function edit($id)
    {
        $data['obj']    = \App\Tu::findOrFail($id);
        $data['method'] = "PUT";
        $data['btn_simpan'] = "UPDATE";
        $data['action'] = array('TuController@update', $id);
        return view('tu_form',$data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'status' => 'required',
            'alamat'    => 'required',
            'email' => 'required',
            'password'  => 'required',
            'foto'  => 'required',
        ]);

        $path = $request->file('foto')->store('public/foto-tu');

        $tu =  \App\Tu::findOrFail($id);
        $tu->nama = $request->nama;
        $tu->agama = $request->agama;
        $tu->jenis_kelamin = $request->jenis_kelamin;
        $tu->status = $request->status;
        $tu->alamat = $request->alamat;
        $tu->email = $request->email;
        $tu->password = bcrypt($request->password);
        $tu->foto = $path;
        $tu->save();
        return redirect('admin/tu/index')->with('toast_success','Data sudah Berhasil DI Edit');
    }



}
