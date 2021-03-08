@extends('layouts.utama')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DATA KELAS</div>
                <div class="card-body">
                    <a href="{{ url('admin/kelas/tambah', []) }}" class="btn btn-theme btn--icon-text mb-3"><i class="zwicon-user-plus"></i>Tambah</a>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Nama Kelas</center></th>
                                <th><center>jurusan</center></th>
                                <th><center>Wali Kelas</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($obj as $item)
                            <tr>
                                <td align="center">{{ $loop->iteration }}</td>
                                <td align="center">{{ $item->nama_kelas }}</td>
                                <td align="center">{{ $item->id_jurusan }}</td>
                                <td align="center">{{ $item->guru->nama }}</td>
                                <td>
                                    <center>
                                    <div class="btn-group">
                                          <a href="{{ url('admin/kelas/lihat/'.$item->id) }}"><button class="btn btn-theme btn--icon-text"><i class="zwicon-users"></i>Jadwal Kelas</button></a>
                                        <a href="{{ url('admin/kelas/hapus/'.$item->id) }}" onclick="return confirm('Anda yakin?')"><button class="btn btn-theme btn--icon-text"><i class="zwicon-user-delete"></i> Hapus Data</button></a>
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
                          {{ $obj->links() }}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
