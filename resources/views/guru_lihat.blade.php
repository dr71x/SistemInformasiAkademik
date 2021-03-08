@extends('layouts.utama')

@section('content')
<div class="container">

            <div class="content__inner content__inner--sm">
                <header class="content__title">
                    <h1>Profile Guru <small>Data lengkap Guru</small></h1>
                </header>

                <div class="card profile">
                    <div class="profile__img">
                        &ensp; &ensp; &ensp; &ensp;

                        <a href="{{ \Storage::url($obj->foto) }}">
                        <img src="{{ \Storage::url($obj->foto) }}" alt="" height="100" width="100">
                        </a>
                    </div>

                    <div class="profile__info">
                        &ensp;
                        <h1>&ensp;&ensp;&ensp;{{$obj->nama}} </h1>
                        <p>&ensp;&ensp;&ensp;NIP : &ensp; {{$obj->NIP}}</p>
                        <p>&ensp;&ensp;&ensp;Agama : &ensp;{{ $obj->agama }}</p>
                        <p>&ensp;&ensp;&ensp;Alamat: &ensp;{{ $obj->alamat }}</p>
                        @if ($obj->jenkel == 'L')
                        <p>&ensp;&ensp;&ensp;Jenis Kelamin: &ensp; LAKI-LAKI</p>
                        @elseif($obj->jenkel == 'P')
                        <p>&ensp;&ensp;&ensp;Jenis Kelamin: &ensp; PEREMPUAN</p>
                        @endif
                        <p>&ensp;&ensp;&ensp;Mata Pelajaran: &ensp; {{ $obj->mapel->nama }}</p>
                        <p>&ensp;&ensp;&ensp;Status Kepegawaian : &ensp; {{ $obj->status_pegawai }}</p>
                        <p>&ensp;&ensp;&ensp;E-mail: &ensp; {{ $obj->email }}</p>
                        <p>&ensp;&ensp;&ensp;Pendidikan Terakhir: &ensp; {{ $obj->penhir }}</p>
                        <a href="{{ url('admin/guru/edit/'.$obj->id) }}" ><button class="btn btn-outline-success" type="button" ><i class="zwicon-edit-square-feather"></i> Edit Data</button></a>
                    </div>
                </div>
            </div>
    </div>
        </div>
    </div>
</div>
@endsection
