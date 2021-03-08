<?php

namespace App\Http\Controllers;

use App\materi;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Groups;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnValueMap;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        $obj    = \App\Guru::latest()->paginate(10);
        $data['obj']    = $obj;
        return view('guru_index', $data);
    }

    public function tambah()
    {
        $data['obj']    = new \App\Guru();
        $data['action'] = 'GuruController@simpan';
        $data['btn_simpan'] = "SIMPAN";
        $data['method'] = "POST";
        return view('guru_form', $data);

    }

    public function simpan(Request $request){
        $request ->validate([
            'NIP' => 'required|unique:gurus,NIP',
            'nama' => 'required',
            'agama' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
            'id_mapel' => 'required',
            'status_pegawai' => 'required',
            'email' => 'required|email|unique:gurus,email',
            'password' => ['required', 'string', 'min:8'],
            'penhir' => 'required',
            'no_tlpn' => 'required',
            'foto'  =>  'required',
        ]);
        $path = $request->file('foto')->store('public/foto-guru');

        $guru  = new \App\Guru();
        $guru->NIP = $request->NIP;
        $guru->nama = $request->nama;
        $guru->agama = $request->agama;
        $guru->jenkel = $request->jenkel;
        $guru->alamat = $request->alamat;
        $guru->id_mapel = $request->id_mapel;
        $guru->status_pegawai = $request->status_pegawai;
        $guru->email = $request->email;
        $guru->password = bcrypt($request->password);
        $guru->penhir = $request->penhir;
        $guru->no_tlpn = $request->no_tlpn;
        $guru->foto = $path;
        $guru->save();
        return redirect('admin/guru/index')->with('toast_success', 'Data Sudah Berhasil Disimpan');
    }

    public function hapus($id)
    {
        $guru = \App\Guru::findOrfail($id);
        $guru->delete();
        return back()->with('toast_info','Data Berhasil DiHapus');
    }

    public function lihat($id)
    {
        $data['obj']    = \App\Guru::findOrfail($id);
        $data['action'] = array('GuruController@lihat',$id);
        $data['method'] = "PUT";
        return view('guru_lihat',$data);
    }

    public function edit($id)
    {
        $data['obj']    = \App\Guru::findOrfail($id);
        $data['action'] =   array('GuruController@update',$id);
        $data['btn_simpan'] = "UPDATE";
        $data['method'] = "PUT";
        return view('guru_form',$data);
    }

    public function update(Request $request, $id){
        $request ->validate([
            'NIP' => 'required',
            'nama' => 'required',
            'agama' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
            'id_mapel' => 'required',
            'status_pegawai' => 'required',
            'email' => 'required',
            'password' => ['required', 'string', 'min:8'],
            'penhir' => 'required',
            'no_tlpn' => 'required',
            'foto'  =>  'required',
        ]);
        $path = $request->file('foto')->store('public/foto-guru');

        $guru  = \App\Guru::findOrfail($id);
        $guru->NIP = $request->NIP;
        $guru->nama = $request->nama;
        $guru->agama = $request->agama;
        $guru->jenkel = $request->jenkel;
        $guru->alamat = $request->alamat;
        $guru->id_mapel = $request->id_mapel;
        $guru->status_pegawai = $request->status_pegawai;
        $guru->email = $request->email;
        $guru->password = bcrypt($request->password);
        $guru->penhir = $request->penhir;
        $guru->no_tlpn = $request->no_tlpn;
        $guru->foto = $path;
        $guru->save();
        return redirect('admin/guru/index')->with('toast_info', 'Data Sudah Berhasil DiUpdate');
    }

    public function cari(Request $ambildata)
    {
	    $cari = $ambildata->get('search');
	    $data['obj']= \App\Guru::where('nama','LIKE','%'.$cari.'%')
				        ->orwhere('NIP','LIKE','%'.$cari.'%')->paginate(10);
	    return view('guru_index',$data);
    }

     public function formloginguru()
    {
        $data['obj']            =  new \App\Guru();
        $data['action']         = 'GuruController@prosesloginguru';
        $data['btn_submit']     = 'proseslogin';
        $data['method']         = "POST";
        return view('login_guru',$data);
    }

    public function prosesloginguru(Request $request)
    {
        $request->validate
        ([
            'NIP' => 'required',
            'password'  => 'required|max:25',
        ]);

        $credentials= [
            'NIP' => $request ->NIP,
            'password'=> $request->password,
        ];

        if (\Auth::guard('guru')->attempt($credentials)) {
            return redirect('guru/beranda');
        }
        else{
            return back()->with('error','NIP atau password anda salah silahkan cek kembali');
        }
    }

    public function beranda()
    {
        if (\Auth::guard('guru')->check())
        {
            $data['obj']    = \App\Jadwal::where('guru_id',\Auth::guard('guru')->user()->id)->count();
            $jadwal = \App\Jadwal::where('guru_id', \Auth::guard('guru')->user()->id)->orderBy('kelas_id')->get();
            $data['kelas'] = $jadwal->groupBy('kelas_id')->count();
            return view('guru_beranda', $data);
        }
        else {

            return view('403');
        }
    }

    public function logout()
    {
        \Auth::guard('guru')->logout();
        return redirect('/');
    }

    public function profile()
    {
        if (\Auth::guard('guru')->check())
        {
            return view('guru_profile');
        }
        else
        {
            return view('403');
        }
    }

    public function jadwal()
    {
        if (\Auth::guard('guru')->check())
        {
            $data['obj'] = \App\Jadwal::where('guru_id' , \Auth::guard('guru')->user()->id)->groupBy('kelas_id')->get();
            return view('guru_jadwaldetail',$data);
        }
        else
        {
            return view('403');
        }

    }

    public function jadwaldetail($id)
    {
        if (\Auth::guard('guru')->check())
        {
            $data['obj'] = \App\Jadwal::where('guru_id' , \Auth::guard('guru')->user()->id)->where('kelas_id',$id)->get();
            return view('guru_jadwal',$data);
        }
        else
        {
            return view('403');
        }

    }

    public function kelasMateri()
    {
        if (\Auth::guard('guru')->check()) {
            $data['obj'] = \App\Jadwal::where('guru_id',\Auth::guard('guru')->user()->id)->groupBy('kelas_id')->get();
            return view('kelasMateri',$data);
        }
        else {
            return view('403');
        }
    }

    public function materi($id)
    {
      if (\Auth::guard('guru')->check())
        {
            $kelas_id = $id;
            $data['kelas_id'] = $id;
          $data['obj']  = \App\materi::where('guru_id', \Auth::guard('guru')->user()->id)->where('kelas_id',$kelas_id)->get();
          return view('materi_index',$data);
        }
    }

    public function tambahmateri(Request $request)
    {
        if (\Auth::guard('guru')->check())
        {
            $data['obj'] = new \App\materi();
            $data['action'] = 'GuruController@simpanmateri';
            $data['method'] = "POST";
            $data['btn_simpan'] = 'SIMPAN';
            $data['mapel_id']   = \Auth::guard('guru')->user()->id_mapel;
            $data['guru_id']    = \Auth::guard('guru')->user()->id;
            $data['kelas_id']   = $request->kelas_id;
            return view('materi_form',$data);
        }
        else
        {
            return view('403');
        }

    }

    public function simpanmateri(Request $request)
    {
        if (\Auth::guard('guru')->check())
        {
            $request->validate([
                'guru_id' => 'required',
                'kelas_id' => 'required',
                'mapel_id' => 'required',
                'judul'    => 'required',
                'jenis'     => 'required',
                'file'      => 'file|mimes:pdf,ppt'
            ]);
                $path = $request->file('file')->store('public/materi-guru');

            $materi = new \App\materi();
            $materi->guru_id = $request->guru_id;
            $materi->kelas_id = $request->kelas_id;
            $materi->mapel_id   = $request->mapel_id;
            $materi->judul = $request->judul;
            $materi->jenis = $request->jenis;
            $materi->file = $path;
            $materi->save();
            return redirect('guru/materi/kelas')->with('toast_success','Data Sudah Berhasil DI simpan');
        }
        else
        {
            return view('403');
        }


    }

    public function hapusmateri($id)
    {
        $materi = \App\materi::findOrFail($id);
        $materi->delete();
        return back()->with('toast_info', 'Data Sudah Di Hapus');
    }

    public function nilai()
    {

        if (\Auth::guard('guru')->check())
        {
            $data['obj'] = \App\Jadwal::where('guru_id', \Auth::guard('guru')->user()->id)->groupBy('kelas_id')->get();
            $data['guru'] = \App\Kelas::where('guru_id',\Auth::guard('guru')->user()->id)->count();
        return view('nilai_index',$data);
        }
        else
        {
            return view('403');
        }
    }

    public function nilaidetail(Request $request)
    {
        if (\Auth::guard('guru')->check())
        {
        $data['kelas_id'] = $request->kelas_id;
        $data['semester'] = $request->semester;
        $data['tahun'] = $request->tahun;
        $kelas_id = $request->kelas_id;
        $data['guru_id']   = \Auth::guard('guru')->user()->id;
        $data['mapel_id']   = \Auth::guard('guru')->user()->id_mapel;
        $data['obj']    = \App\Siswa::where('kelas_id', $kelas_id)->get();
        $data['model']  = new \App\Nilai();
        $data['action'] ='GuruController@simpannilai';
        $data['method'] = "POST";
        $data['btn_simpan'] = 'SIMPAN';
        return view('nilai_input',$data);
        }
        else
        {
        return view('403');
        }
    }

    public function simpannilai(Request $request)
    {
    $nilai = \App\nilai::where('guru_id',$request->guru_id)->where('kelas_id',$request->kelas_id)->where('semester',$request->semester)->where('tahun',$request->tahun)->first();
    if ($nilai != null) {
        return redirect('guru/nilai/index')->with('toast_info','Data Sudah Ada');
    }
    else {
        $request->validate([
            'kelas_id' => 'required',
            'guru_id'   => 'required',
            'mapel_id'  => 'required',
            'siswa_id' => 'required',
            'tugas' => 'required',
            'ulangan' => 'required',
            'uts'   => 'required',
            'uas'   => 'required',
            'total' => 'required',
            'semester'  => 'required',
            'tahun' => 'required',

        ]);
      for ($i=0; $i < count($request->siswa_id); $i++) {
          $siswa_id = $request->siswa_id[$i];
          $tugas = $request->tugas[$i];
          $ulangan = $request->ulangan[$i];
          $uts = $request->uts[$i];
          $uas = $request->uas[$i];
          $total = $request->total[$i];

            \App\Nilai::create([
                'kelas_id' => $request->kelas_id,
                'guru_id'   => $request->guru_id,
                'mapel_id'  => $request->mapel_id,
                'siswa_id' => $siswa_id,
                'tugas' => $tugas,
                'ulangan' => $ulangan,
                'uts'   => $uts,
                'uas'   => $uas,
                'total' => $total,
                'semester'  => $request->semester,
                'tahun' => $request->tahun,
                'validasi' => "Belum Divalidasi",

            ]);
      }
        return redirect('guru/nilai/index')->with('toast_success','Data Sudah Berhasil Di Simpan Semua');
        }
    }

    public function nilaiupdate($id)
    {
        if (\Auth::guard('guru')->check())
        {
        $data['obj']    = \App\Nilai::findOrFail($id);
        $data['action'] = array('GuruController@updatenilai',$id);
        $data['method'] = "PUT";
        $data['btn_simpan'] = "UPDATE";
        return view('nilai_update',$data);
        }
        else
        {
        return view('403');
        }
    }

    public function updatenilai(Request $request,$id){
    if (\Auth::guard('guru')->check())
        {
        $request->validate([
            'tugas' => 'required',
            'ulangan' => 'required',
            'uts'   => 'required',
            'uas' => 'required',
            'total' =>  'required',
        ]);
       $nilaisiswa = \App\Nilai::findOrFail($id);
        $nilaisiswa->tugas = $request->tugas;
        $nilaisiswa->ulangan = $request->ulangan;
        $nilaisiswa->uts = $request->uts;
        $nilaisiswa->total = $request->total;
        $nilaisiswa->save();
       return redirect('guru/nilai/index');
        }
        else
        {
        return view('403');
        }
    }


    public function nilaisiswa(Request $request)
    {
        if (\Auth::guard('guru')->check())
        {
        $kelas_id= $request->kelas_id;
        $semester = $request->semester;
        $tahun = $request->tahun;
        $data['semester']   = $request->semester;
        $data['tahun']  = $request->tahun;
        $data['obj']  = \App\Nilai::where('guru_id', \Auth::guard('guru')->user()->id)->where('kelas_id', $kelas_id)
        ->where('semester',$semester)->where('tahun',$tahun)->get();
        return view('nilai_siswa',$data);
        }
        else
        {
        return view('403');
        }
    }

    public function gantipassword()
    {
        if (\Auth::guard('guru')->check()) {
            return view('edit_password');
        }
        else
        {
        return view('403');
        }
    }

    public function updatepassword()
    {
        if  (\Auth::guard('guru')->check())
        {
            request()->validate([
                'old_password' => 'required',
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            $currentPassword = \Auth::guard('guru')->user()->password;
            $oldpassword = request('old_password');

            if (Hash::check($oldpassword, $currentPassword)) {
                \Auth::guard('guru')->user()->update([
                    'password' => bcrypt(request('password')),
                ]);
                return redirect('profile-guru')->with('success','Password Sudah Berhasil Di Rubah');
            }
            else {
                return back()->withErrors(['old_password' => 'Pastikan Anda Mengisi Kata Sandi Anda Saat Ini']);
            }

        }
    }

    public function validasi()
    {
        if (\Auth::guard('guru')->check()) {
            $data['obj'] = \App\Kelas::where('guru_id', \Auth::guard('guru')->user()->id)->groupBy('id')->get();
            return view('ValidasiNilaiiIndex',$data);
        }
        else
        {
        return view('403');
        }

    }

    public function validasiSemester(Request $request)
    {
        if(\Auth::guard('guru')->check()){
        $data['kelas_id'] = $request->kelas_id;
        $data['obj'] = \App\Nilai::where('kelas_id',$request->kelas_id)->groupBy('semester')->get();
        return view('validasi-semester',$data);
        }
        else
        {
            return view('403');
        }
    }

    public function validasisiswa(Request $request)
    {
        if (\Auth::guard('guru')->check()) {
            $data['object'] = \App\Nilai::where('kelas_id',$request->kelas_id)->groupBy('kelas_id')->get();
            $data['obj'] = \App\nilai::where('kelas_id',$request->kelas_id)->where('semester',$request->semester)->where('tahun',$request->tahun)->get();
            return view('ValidasiSIswa',$data);
        }
        else
        {
            return view('403');
        }
    }

    public function validasiNilaiSiswa(Request $request)
    {
        if (\Auth::guard('guru')->check()) {
            $data['semester'] = $request->semester;
            $data['tahun'] = $request->tahun;
            $data['obj'] = \App\Nilai::where('kelas_id',$request->kelas_id)->where('semester',$request->semester)->where('tahun',$request->tahun)->where('siswa_id',$request->siswa_id)->get();
            return view('validasinilai_siswa',$data);
        }
        else
        {
            return view('403');
        }

    }

    public function updatevalidasi($id)
    {
        if (\Auth::guard('guru')->check()) {
            $validate = \App\Nilai::findOrFail($id);
            $validate->validasi = "validate";
            $validate->save();
            return back()->with('toast_success','Data Sudah Berhasil Di Validasi');
        }
        else {
            return view('403');
        }

    }
}
