@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header">DATA STAFF TU</div>
                {!! Form::open(['method'=>'GET','url'=>'admin/tu/cari','role'=>'search']) !!}
                <br>
                <div class="input-group custom-search-form col-md-8 ">
                    <input type="text" class="form-control" name="search" placeholder="Cari Data...">
                    &ensp;
                    <span class="input-group-btn ">
                        <a href="#"><button class="btn btn-theme btn--icon-text"  type="submit"><i class="zwicon-search"></i> Cari </button></a>
                        <a href="{{ url('admin/tu/index') }}" class="btn btn-theme btn--icon-text"><i class="zwicon-refresh-double"></i> Refresh Data </a>
                    </span>
                </div>
                {!! Form::close() !!}
                <div class="card-body">
                    <a href="{{ url('admin/tu/tambah', []) }}" class="btn btn-theme btn--icon-text mb-3"><i class="zwicon-user-plus"></i>Tambah</a>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Nama</center></th>
                                <th><center>Agama</center></th>
                                <th><center>Jenis Kelamin</center></th>
                                <th><center>alamat</center></th>
                                <th><center>Status Pegawai</center></th>
                                <th><center>E-mail</center></th>
                                <th><center>Foto</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($obj as $item)
                            <tr>
                                <td >{{$loop->iteration}}</td>
                                <td >{{$item->nama}}</td>
                                <td >{{$item->agama}}</td>
                                <td >{{$item->jenis_kelamin}}</td>
                                <td >{{$item->alamat}}</td>
                                <td >{{$item->status}}</td>
                                <td >{{$item->email}}</td>
                                <td>
                                    <center>
                                    <a href="{{ \Storage::url($item->foto)}}">
                                    <img src="{{ \Storage::url($item->foto)}}" alt="" width="50" height="50">
                                    </a>
                                </center>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('admin/tu/edit/'.$item->id) }}"><button class="btn btn-theme btn--icon-text"><i></i>Edit</button></a>
                                        <a href="{{ url('admin/tu/hapus/'.$item->id) }}" onclick="return confirm('Anda yakin?')"><button class="btn btn-theme btn--icon-text"><i></i> Hapus</button></a>
                                    </div>

                                </td>
                            </tr>
                            @empty
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><center>Maaf Data Tidak Ada</center></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            @endforelse
                        </tbody>
                        {{ $obj->links() }}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
