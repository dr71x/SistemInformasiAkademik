@extends('layouts.apps')

@section('content')
<div class="container">

            <div class="content__inner content__inner--sm">
                <header class="content__title">
                    <h1>Profile Siswa <small>Data lengkap siswa</small></h1>
                </header>

                <div class="card profile">
                    <div class="profile__img">
                        &ensp; &ensp; &ensp; &ensp;

                        <a href="{{ \Storage::url($obj->foto) }}">
                        <img src="{{ \Storage::url($obj->foto) }}" alt="">
                        </a>
                    </div>

                    <div class="profile__info">
                        &ensp;
                        <h1>{{$obj->nama}} </h1>
                        <p>NIS : &ensp; {{$obj->NIS}}</p>
                        {{-- <p>Agama : &ensp;{{ $obj->agama }}</p>
                        <p>Alamat : &ensp;{{ $obj->alamat}}</p>
                        @if ($obj->jenkel == 'L')
                        <p>Jenis Kelamin: &ensp; LAKI-LAKI</p>
                        @elseif($obj->jenkel == 'P')
                        <p>Jenis Kelamin: &ensp; PEREMPUAN</p>
                        @endif
                        <p>Kelas: &ensp; {{ $obj->kelas->nama_kelas }}</p>
                        <p>Wali Kelas: &ensp; {{ $obj->kelas->guru->nama }}</p>
                        <p>Status : &ensp; {{ $obj->status }}</p>
                        <p>E-mail: &ensp; {{ $obj->email }}</p>
                        <p>Nomor HP: &ensp; {{ $obj->no_hp }}</p>
                        <p>Jenis Tinggal: &ensp; {{ $obj->jenis_tinggal }}</p>
                        <a href="{{ url('admin/siswa/edit/'.$obj->id) }}" ><button class="btn btn-outline-success" type="button" ><i class="zwicon-edit-square-feather"></i> Edit Data </button></a>
                        <a href="{{ route('tambah-ortu',['siswa_id' => $obj->id,'NIS' => $obj->NIS ]) }}" ><button class="btn btn-outline-success" type="button" ><i class="zwicon-edit-square-feather"></i> Tambah Data Ortu </button></a>
                        <a href="{{ route('tambah-ortu',['siswa_id' => $obj->id ]) }}" ><button class="btn btn-outline-success" type="button" ><i class="zwicon-edit-square-feather"></i> Lihat Data Ortu </button></a> --}}
                    </div>
                </div>
                </div>
            </div>

@endsection
