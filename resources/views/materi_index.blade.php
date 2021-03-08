@extends('layouts.apsps')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>DATA Materi</h4></div>
                <div class="card-body">
                    <a href="{{ route('materi-tambah',['kelas_id' => $kelas_id]) }}" class="btn btn-rounded btn-primary mb-3"><span
                        class="btn-icon-left text-primary"><i class="fas fa-plus"></i></span> Tambah</a>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Nama Guru</center></th>
                                <th><center>Mata Pelajaran</center></th>
                                <th><center>Jenis</center></th>
                                <th><center>Judul</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($obj as $item)
                            <tr>
                                <td align="center"><h5>{{ $loop->iteration }}</h5></td>
                                <td align="center"><h5>{{ $item->guru->nama}}</h5></td>
                                <td align="center"><h5>{{ $item->mapel->nama}}</h5></td>
                                <td align="center"><h5>{{ $item->jenis}}</h5></td>
                                <td align="center"><a href="{{ \Storage::url($item->file)}}"><i class="fas fa-file-download"> {{ $item->judul }}</i></a></td>
                                <td>
                                    <center>
                                     <a href="{{ url('guru/hapus-materi/'.$item->id) }}" onclick="return confirm('Anda yakin?')"><button class="btn btn-rounded btn-danger"><span
                                        class="btn-icon-left text-primary"><i class="fas fa-trash-alt"></i></span> Hapus Data</button></a>
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
