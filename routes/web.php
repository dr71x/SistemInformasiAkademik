<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('guru/login', 'GuruController@formloginguru');
Route::post('proses-loginguru','GuruController@prosesloginguru');
Route::get('logout-guru', 'GuruController@logout');
Route::get('guru/beranda','GuruController@beranda');
Route::get('profile-guru', 'GuruController@profile');
Route::get('jadwal-guru', 'GuruController@jadwal');
Route::get('guru/jadwal/index/{id}', 'GuruController@jadwaldetail');
Route::get('guru/materi/kelas','GuruController@kelasMateri');
Route::get('guru/materi/index/{id}', 'GuruController@materi');
Route::get('guru/materi/tambah','GuruController@tambahmateri')->name('materi-tambah');
Route::post('guru/materi/simpan', 'GuruController@simpanmateri');
Route::get('guru/hapus-materi/{id}','GuruController@hapusmateri');
Route::get('guru/nilai/index', 'GuruController@nilai');
Route::get('guru/nilai/detail/', 'GuruController@nilaidetail')->name('nilai-input');
Route::post('guru/nilai/simpan','GuruController@simpannilai');
Route::get('guru/nilai/siswa/', 'GuruController@nilaisiswa')->name('nilai-siswa');
Route::get('guru/nilai/hapus/{id}','GuruController@hapusnilai');
Route::get('guru/nilai/edit/{id}','GuruController@nilaiupdate');
Route::put('guru/nilai/update/{id}','GuruController@updatenilai');
Route::get('guru/password','GuruController@gantipassword')->name('password.edit');
Route::patch('guru/password','GuruController@updatepassword')->name('password.edit');
Route::get('guru/validasi/index','GuruController@validasi');
Route::get('guru/validasi/semester','GuruController@validasiSemester')->name('validasi-semester');
Route::get('guru/validasi/siswa','GuruController@validasisiswa')->name('validasi-siswa');
Route::get('guru/validasi/detail','GuruController@validasiNilaiSiswa')->name('validasi-nilai');
Route::get('guru/validasi/update/{id}','GuruController@updatevalidasi');


Route::get('siswa/login', 'SiswaController@formloginsiswa');
Route::post('proses-loginsiswa','SiswaController@prosesloginsiswa');
Route::get('logout-siswa', 'SiswaController@logout');
Route::get('siswa/beranda', 'SiswaController@beranda');
Route::get('siswa/jadwal','SiswaController@jadwal');
Route::get('siswa/materi','SiswaController@materi');
Route::get('siswa/materi/detail/{id}', 'SiswaController@materidetail');
Route::get('siswa/nilai/index','SiswaController@NilaiSiswa');
Route::get('siswa/nilai/semester','SiswaController@semester')->name('semester');
Route::get('siswa/nilai/detail','SiswaController@nilaidetail')->name('detail-nilai');
Route::get('profile-siswa', 'SiswaController@profile');
Route::get('siswa/password','SiswaController@gantipassword')->name('password.edit');
Route::patch('siswa/password','SiswaController@updatepassword')->name('password.edit');

Route::get('ortu/login', 'OrtuController@formloginortu');
Route::post('proses-loginortu','OrtuController@prosesloginortu');
Route::get('logout-ortu', 'OrtuController@logout');
Route::get('ortu/beranda', 'OrtuController@beranda');
Route::get('ortu/jadwal','OrtuController@jadwal');
Route::get('ortu/nilai/index','OrtuController@NilaiSiswa');
Route::get('ortu/nilai/detail','OrtuController@nilaidetail')->name('detail-nilaiSiswa');
Route::get('ortu/contact-person/index','OrtuController@contactPerson');
Route::get('ortu/nilai/semester','OrtuController@semester')->name('semester-ortu');

Route::prefix('admin')->middleware('auth')->group(function ()
{
    Route::get('siswa/index', 'SiswaController@index');
    Route::get('siswa/tambah', 'SiswaController@tambah');
    Route::post('siswa/simpan', 'SiswaController@simpan');
    Route::get('siswa/hapus/{id}', 'SiswaController@hapus');
    Route::get('siswa/lihat/{id}', 'SiswaController@lihat');
    Route::get('siswa/edit/{id}', 'SiswaController@edit');
    Route::put('siswa/update/{id}','SiswaController@update');
    Route::get('siswa/cari','SiswaController@cari');
    Route::get('siswa/ortu/tambah','SiswaController@Tambahorangtua')->name('tambah-ortu');
    Route::post('siswa/ortu/simpan','SiswaController@simpanorangtua');
    Route::get('ortu/hapus/{id}', 'SiswaController@hapusortu');
    Route::get('siswa/nilai/semester','SiswaController@adminNilai')->name('admin-semester');
    Route::get('siswa/nilai/detail','SiswaController@adminnilaisiswa')->name('admin-nilai');

    Route::get('guru/index', 'GuruController@index');
    Route::get('guru/tambah', 'GuruController@tambah');
    Route::post('guru/simpan', 'GuruController@simpan');
    Route::get('guru/hapus/{id}', 'GuruController@hapus');
    Route::get('guru/lihat/{id}','GuruController@lihat');
    Route::get('guru/edit/{id}', 'GuruController@edit');
    Route::put('guru/update/{id}', 'GuruController@update');
    Route::get('guru/cari','GuruController@cari');

    Route::get('kelas/index','KelasController@index');
    Route::get('kelas/tambah', 'KelasController@tambah');
    Route::post('kelas/simpan','KelasController@simpan');
    Route::get('kelas/hapus/{id}', 'KelasController@hapus');
    Route::get('kelas/lihat/{id}','KelasController@lihat');
    Route::get('kelas/jadwal/{id}', 'KelasController@jadwal');
    Route::post('kelas/jadwal/simpan', 'KelasController@jadwalsimpan');
    Route::get('kelas/jadwal/hapus/{id}', 'KelasController@hapusjadwal');

    Route::get('mapel/index', 'MapelController@index');
    Route::get('mapel/tambah', 'MapelController@tambah');
    Route::post('mapel/simpan', 'MapelController@simpan');
    Route::get('mapel/hapus/{id}', 'MapelController@hapus');


});

Route::get('home', 'HomeController@index')->name('home');
Route::get('/', 'UtamaController@index');
Route::get('/about', 'UtamaController@about');

Auth::routes();


