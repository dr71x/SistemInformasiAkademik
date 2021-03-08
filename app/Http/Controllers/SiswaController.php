<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $obj         = \App\Siswa::latest()->paginate(10);
        $data['obj'] = $obj;
        return view("siswa_index",$data);
    }
    public function lihat($id)
    {
        $data['obj']     = \App\Siswa::findOrFail($id);
        $data['nilai'] = \App\Nilai::where('siswa_id',$id)->groupBy('kelas_id')->get();
        return view('siswa_lihat',$data);
    }

    public function adminNilai(Request $request)
    {
        $data['kelas_id'] = $request->kelas_id;
        $data['siswa_id'] = $request->siswa_id;
        $data['obj']  = \App\Nilai::where('siswa_id',$request->siswa_id)->where('kelas_id',$request->kelas_id)->groupBy('semester')->get();
        return view('adminSiswaSemester',$data);
    }

    public function adminnilaisiswa(Request $request){
        $data['semester'] = $request->semester;
        $data['tahun'] = $request->tahun;
        $data['siswa'] = \App\Siswa::findOrFail($request->siswa_id);
        $data['obj'] = \App\Nilai::where('siswa_id',$request->siswa_id)->where('kelas_id',$request->kelas_id)->where('semester',$request->semester)->where('tahun',$request->tahun)->get();
        return view('nilaiSiswaAdmin',$data);
    }

    public function tambah(){
        $data['obj']         = new \App\siswa();
        $data['action']      = 'SiswaController@simpan';
        $data['btn_simpan']  = 'SIMPAN';
        $data['method']      = "POST";
        return view('siswa_form',$data);
    }
    public function simpan(Request $request){
        $request-> validate(
            [
                'NIS' => 'required|unique:siswas,NIS',
                'nama' => 'required',
                'agama' => 'required',
                'alamat' => 'required',
                'jenkel' => 'required',
                'kelas_id' => 'required',
                'status'   => 'required',
                'email' => 'required|email|unique:siswas,email',
                'password' => ['required', 'string', 'min:8'],
                'no_hp' => 'required',
                'jenis_tinggal'=> 'required',
                'foto' =>'required',

            ]);


                $path = $request->file('foto')->store('public/foto-siswa');

                $siswa = new \App\siswa();
                $siswa->NIS = $request->NIS;
                $siswa->nama = $request->nama;
                $siswa->agama = $request->agama;
                $siswa->alamat = $request->alamat;
                $siswa->jenkel = $request->jenkel;
                $siswa->kelas_id = $request->kelas_id;
                $siswa->status = $request->status;
                $siswa->email = $request->email;
                $siswa->password = bcrypt($request->password);
                $siswa->no_hp = $request->no_hp;
                $siswa->jenis_tinggal = $request->jenis_tinggal;
                $siswa->foto = $path;
                $siswa->save();
                return redirect('admin/siswa/index')->with('toast_success', 'Data Sudah Berhasil Disimpan');
    }
    public function edit($id){
        $data['obj']    = \App\Siswa::findorfail($id);
        $data['method'] = "PUT";
        $data['btn_simpan'] = "UPDATE";
        $data['action'] = array('SiswaController@update', $id);
        return view('siswa_form',$data);
    }
    public function update(Request $request, $id){
        $request-> validate(
            [
                'NIS' => 'required',
                'nama' => 'required',
                'agama' => 'required',
                'alamat' => 'required',
                'jenkel' => 'required',
                'kelas_id' => 'required',
                'status'   => 'required',
                'email' => 'required|email',
                'password' => ['required', 'string', 'min:8'],
                'no_hp' => 'required',
                'jenis_tinggal'=> 'required',
                'foto' =>'required',

            ]);
                $path = $request->file('foto')->store('public/foto-siswa');

                $siswa = \App\siswa::findorfail($id);
                $siswa->NIS = $request->NIS;
                $siswa->nama = $request->nama;
                $siswa->agama = $request->agama;
                $siswa->alamat = $request->alamat;
                $siswa->jenkel = $request->jenkel;
                $siswa->kelas_id = $request->kelas_id;
                $siswa->status = $request->status;
                $siswa->email = $request->email;
                $siswa->password = bcrypt($request->password);
                $siswa->no_hp = $request->no_hp;
                $siswa->jenis_tinggal = $request->jenis_tinggal;
                $siswa->foto = $path;
                $siswa->save();
                return redirect('admin/siswa/index')->with('toast_info', 'Data Sudah Berhasil DiUpdate');

    }
     public function hapus($id)
    {
        $siswa = \App\siswa::findOrFail($id);
        $siswa->delete();
        return back()->with('toast_info', 'Data Sudah DiHapus');
    }

    public function Tambahorangtua(Request $request)
    {
        $data['obj'] = new \App\Ortu();
        $data['siswa_id'] = $request->siswa_id;
        $data['NIS']    = $request->NIS;
        $data['action'] = 'SiswaController@simpanorangtua';
        $data['method'] = "POST";
        $data['btn_simpan'] = 'SIMPAN';
        return view('ortu_form',$data);
    }

    public function simpanorangtua(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'nama'  => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'NIS'   => 'required',
            'password' => 'required',
            'foto' => 'file|mimes:png,jpg',
        ]);
        $dataortu = \App\Ortu::whereSiswaId($request->siswa_id)->first();
        if ($dataortu != null) {
            return redirect('admin/siswa/lihat/'.$request->siswa_id)->with('toast_info', 'Data Sudah Ada');
        }
        else {
            $path = $request->file('foto')->store('public/foto-ortu');

            $ortu = new \App\Ortu();
            $ortu->siswa_id = $request->siswa_id;
            $ortu->nama = $request->nama;
            $ortu->alamat = $request->alamat;
            $ortu->pekerjaan = $request->pekerjaan;
            $ortu->NIS = $request->NIS;
            $ortu->password = bcrypt($request->password);
            $ortu->foto = $path;
            $ortu->save();
            return redirect('admin/siswa/lihat/'.$request->siswa_id)->with('toast_success', 'Data Sudah Berhasil Disimpan');
        }



    }

    public function hapusortu($id)
    {
        $siswa = \App\Ortu::findOrFail($id);
        $siswa->delete();
        return back()->with('toast_info', 'Data Sudah DiHapus');
    }



    public function cari(Request $ambildata)
    {
	    $cari = $ambildata->get('search');
	    $data['obj']= \App\Siswa::where('nama','LIKE','%'.$cari.'%')
				        ->orwhere('NISN','LIKE','%'.$cari.'%')->paginate(10);
	    return view('siswa_index',$data);
    }

    public function formloginsiswa()
    {
        $data['obj']            =  new \App\Siswa();
        $data['action']         = 'SiswaController@prosesloginsiswa';
        $data['method']         = "POST";
        return view('login_siswa',$data);
    }
    public function prosesloginsiswa(Request $request)
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

        if (\Auth::guard('siswa')->attempt($credentials)) {
            return redirect('siswa/beranda');
        }
        else{
            return back()->with('error','NIS atau password anda salah silahkan cek kembali');
        }
    }

    public function beranda()
    {
       if (\Auth::guard('siswa')->check()) {
           $data['jadwal']  = \App\Jadwal::where('kelas_id',\Auth::guard('siswa')->user()->kelas_id)->count();
           $data['mapel']  = \App\Jadwal::where('kelas_id',\Auth::guard('siswa')->user()->kelas_id)->groupBy('mapel_id')->get('mapel_id')->count();
           return view('siswa_beranda',$data);
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
        if (\Auth::guard('siswa')->check()) {
            $data['obj']    = \App\Jadwal::where('kelas_id',\Auth::guard('siswa')->user()->kelas_id)->get();
            return view('siswa_jadwal',$data);
        }
        else {
            return view('403');
        }
    }

    public function materi()
    {
        if (\Auth::guard('siswa')->check()) {
            $data['obj'] = \App\Materi::where('kelas_id',\Auth::guard('siswa')->user()->kelas_id)->groupBy('mapel_id')->get('mapel_id');
            return view('materi_siswa',$data);
        }
        else {
            return view('403');
        }
    }

    public function materidetail($id)
    {
        if (\Auth::guard('siswa')->check())
        {
            $mapel_id    = $id;
            $data['obj']   = \App\Materi::where('kelas_id',\Auth::guard('siswa')->user()->kelas_id)->where('mapel_id', $mapel_id)->get();
            return view('materi_siswaDetail',$data);
        }
        else {
            return view('403');
        }
    }

    public function NilaiSiswa()
    {
       if (\Auth::guard('siswa')->check()) {
        $data['obj']    = \App\Nilai::where('siswa_id',\Auth::guard('siswa')->user()->id)->groupBy('kelas_id')->get();
        return view('nilai_Siswaindex',$data);
       }
       else{
           return view('403');
       }
    }

    public function semester(Request $request)
    {
        if(\Auth::guard('siswa')->check()){
            $kelas_id = $request->kelas_id;
            $data['kelas_id'] = $kelas_id;
            $data['obj']    = \App\Nilai::where('siswa_id',\Auth::guard('siswa')->user()->id)->where('kelas_id',$kelas_id)->groupBy('semester')->get();
            return view('siswa_semester',$data);
        }
         else{
               return view('403');
           }
    }

    public function nilaidetail(Request $request)
    {
        if (\Auth::guard('siswa')->check()) {
            $data['semester'] = $request->semester;
            $data['tahun']  = $request->tahun;
            $semester = $request->semester;
            $tahun = $request->tahun;
            $data['obj']    = \App\Nilai::where('siswa_id',\Auth::guard('siswa')->user()->id)->where('kelas_id',$request->kelas_id)->where('semester',$semester)->where('tahun',$tahun)->where('validasi',"validate")->get();
            return view('nilai_detailsiswa',$data);
           }
           else{
               return view('403');
           }

    }
    public function profile()
    {
        if (\Auth::guard('siswa')->check())
        {
            return view('siswa_profile');
        }
        else
        {
            return view('403');
        }
    }
    public function gantipassword()
    {
        if (\Auth::guard('siswa')->check()) {
            return view('SiswaEdit_password');
        }
        else {
            return view('403');
        }
    }

    public function updatepassword()
    {
        if  (\Auth::guard('siswa')->check())
        {
            request()->validate([
                'old_password' => 'required',
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            $currentPassword = \Auth::guard('siswa')->user()->password;
            $oldpassword = request('old_password');

            if (Hash::check($oldpassword, $currentPassword)) {
                \Auth::guard('siswa')->user()->update([
                    'password' => bcrypt(request('password')),
                ]);
                return redirect('profile-siswa')->with('success','Password Sudah Berhasil Di Rubah');
            }
            else {
                return back()->withErrors(['old_password' => 'Pastikan Anda Mengisi Kata Sandi Anda Saat Ini']);
            }

        }
        else {
            return view('403');
        }
    }
}
