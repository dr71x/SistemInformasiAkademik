@extends('layouts.utama')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DATA MATA PELAJARAN</div>
                <div class="card-body">
                    <a href="{{ url('admin/mapel/tambah', []) }}" class="btn btn-theme btn--icon-text mb-3"><i class="zwicon-user-plus"></i>Tambah</a>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Nama Mata Pelajaran</center></th>
                                <th><center>Aksi</center></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($obj as $item)
                            <tr>
                                <td align="center">{{ $loop->iteration }}</td>
                                <td align="center">{{ $item->nama }}</td>
                                <td>
                                    <center>
                                    <div class="btn-group">
                                        <a href="{{ url('admin/mapel/hapus/'.$item->id) }}" onclick="return confirm('Anda yakin?')"><button class="btn btn-theme btn--icon-text"><i class="zwicon-user-delete"></i> Hapus Data</button></a>
                                    </div>
                                </center>
                                </td>
                                <td></td>
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
