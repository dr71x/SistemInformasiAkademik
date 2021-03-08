@extends('layouts.utama')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-right">
            <div class="card">
                <div class="card-header">DATA SISWA</div>
                {!! Form::open(['method'=>'GET','url'=>'admin/siswa/cari','role'=>'search']) !!}
                <br>
                <div class="input-group custom-search-form col-md-8 ">
                    <input type="text" class="form-control" name="search" placeholder="Cari Data...">
                    &ensp;
                    <span class="input-group-btn ">
                        <a href="#"><button class="btn btn-theme btn--icon-text"  type="submit"><i class="zwicon-search"></i> Cari </button></a>
                        <a href="{{ url('admin/siswa/index') }}" class="btn btn-theme btn--icon-text"><i class="zwicon-refresh-double"></i> Refresh Data </a>
                    </span>
                </div>
                {!! Form::close() !!}
                <div class="card-body">
                    <a href="{{ url('admin/siswa/tambah', []) }}" class="btn btn-theme btn--icon-text mb-3"><i class="zwicon-user-plus"></i>Tambah</a>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Nis</center></th>
                                <th><center>Nama</center></th>
                                <th><center>Kelas</center></th>
                                <th><center>Foto</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($obj as $item)
                            <tr>
                                <td align="center">{{ $loop->iteration }}</td>
                                <td align="center">{{ $item->NIS }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->kelas->nama_kelas }}</td>
                                <td><center>
                                <a href="{{ \Storage::url($item->foto) }}">
                            <img src="{{ \Storage::url($item->foto) }}" alt="" width="50" height="50">
                                </a>
                        </center>
                        </td>
                                <td>
                                    <center>
                                    <div class="btn-group">
                                        <a href="{{ url('admin/siswa/lihat/'.$item->id) }}"><button class="btn btn-theme btn--icon-text"><i class="zwicon-users"></i>Detail Data</button></a>
                                        <a href="{{ url('admin/siswa/hapus/'.$item->id) }}" onclick="return confirm('Anda yakin?')"><button class="btn btn-theme btn--icon-text"><i class="zwicon-user-delete"></i> Hapus Data</button></a>
                                    </div>
                                </center>
                                </td>
                            </tr>
                            @empty
                            <td></td>
                            <td><center>Maaf Data Belum Ada</center></td>
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
</div>
@endsection
