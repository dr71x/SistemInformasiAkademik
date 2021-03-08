<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Siswa;
use \App\Guru;
use \App\Kelas;
use  \App\Mapel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $count = siswa::all()->count();
       $guru    = Guru::all()->count();
       $tu = kelas::all()->count();
       $mapel = Mapel::all()->count();
        return view('home')->with('count',$count)->with('guru', $guru)->with('tu', $tu)->with('mapel',$mapel);
    }
}
