@extends('layouts.utama')

@section('content')
<div class="container">
                <header class="content__title">
                    <h1>Profile Siswa <small>Data lengkap siswa</small></h1>
                </header>

                <div class="card profile">
                    <div class="profile__img">
                        &ensp; &ensp; &ensp; &ensp;

                        <a href="{{ \Storage::url($obj->foto) }}">
                        <img src="{{ \Storage::url($obj->foto) }}" alt="" width="100" height="100">
                        </a>
                    </div>
                    &ensp;
                    <div class="profile__info">
                        &ensp;
                        <h1>&ensp;&ensp;&ensp;{{$obj->nama}} </h1>
                        <p>&ensp; &ensp;&ensp;NIS : &ensp; {{$obj->NIS}}</p>
                        <p>&ensp;&ensp;&ensp;Agama : &ensp;{{ $obj->agama }}</p>
                        <p>&ensp;&ensp;&ensp;Alamat : &ensp;{{ $obj->alamat}}</p>
                        @if ($obj->jenkel == 'L')
                        <p>&ensp;&ensp;&ensp;Jenis Kelamin: &ensp; LAKI-LAKI</p>
                        @elseif($obj->jenkel == 'P')
                        <p>&ensp;&ensp;&ensp;Jenis Kelamin: &ensp; PEREMPUAN</p>
                        @endif
                        <p>&ensp;&ensp;&ensp;Kelas: &ensp; {{ $obj->kelas->nama_kelas }}</p>
                        <p>&ensp;&ensp;&ensp;Wali Kelas: &ensp; {{ $obj->kelas->guru->nama }}</p>
                        <p>&ensp;&ensp;&ensp;Status : &ensp; {{ $obj->status }}</p>
                        <p>&ensp;&ensp;&ensp;E-mail: &ensp; {{ $obj->email }}</p>
                        <p>&ensp;&ensp;&ensp;Nomor HP: &ensp; {{ $obj->no_hp }}</p>
                        <p>&ensp;&ensp;&ensp;Jenis Tinggal: &ensp; {{ $obj->jenis_tinggal }}</p>
                        <a href="{{ url('admin/siswa/edit/'.$obj->id) }}" ><button class="btn btn-outline-success" type="button" ><i class="zwicon-edit-square-feather"></i> Edit Data </button></a>
                        <a href="{{ route('tambah-ortu',['siswa_id' => $obj->id,'NIS' => $obj->NIS ]) }}" ><button class="btn btn-outline-success" type="button" ><i class="zwicon-edit-square-feather"></i> Tambah Data Ortu </button></a>
                    </div>
                </div>
                @if ($obj->ortu == null)
                @else
                <div class="card profile">
                    <div class="profile__img">
                        &ensp; &ensp; &ensp; &ensp;

                        <a href="{{ \Storage::url($obj->ortu->foto) }}">
                        <img src="{{ \Storage::url($obj->ortu->foto) }}" alt="" width="100" height="100">
                        </a>
                    </div>

                    <div class="profile__info">
                        &ensp;
                        <h1>&ensp;&ensp;{{$obj->ortu->nama}} </h1>
                        <p>&ensp;&ensp;&ensp;Orang Tua Dari : &ensp;{{ $obj->alamat}}</p>
                        <p>&ensp;&ensp;&ensp;Alamat : &ensp;{{ $obj->ortu->alamat}}</p>
                        <p>&ensp;&ensp;&ensp;Pekerjaan : &ensp; {{ $obj->ortu->pekerjaan }}</p>
                        <a href="{{ url('admin/ortu/hapus/'.$obj->ortu->id) }}" ><button class="btn btn-outline-success" type="button" ><i class="zwicon-edit-square-feather"></i> Hapus Data </button></a>
                    </div>
                </div>

            </div>
                @endif
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">DATA KELAS</div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th><center>No</center></th>
                                                <th><center>Nama Kelas</center></th>
                                                <th><center>Aksi</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($nilai as $data)
                                            <tr>
                                                <td align="center">{{ $loop->iteration }}</td>
                                                <td align="center">{{ $data->kelas->nama_kelas }}</td>
                                                <td>
                                                    <center>
                                                    <div class="btn-group">
                                                          <a href="{{ route('admin-semester',['kelas_id'=>$data->kelas_id,'siswa_id'=>$obj->id]) }}"><button class="btn btn-theme btn--icon-text"><i class="zwicon-users"></i>Lihat Nilai</button></a>
                                                    </div>
                                                </center>
                                                </td>
                                            </tr>
                                            @empty
                                            <td></td>
                                            <td><center>Belum ada Data yang ditambahkan</center>  </td>
                                            <td></td>
                                            <td></td>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
