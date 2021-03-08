@extends('layouts.apsps')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>DATA Materi</h4></div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Nama Guru</center></th>
                                <th><center>Mata Pelajaran</center></th>
                                <th><center>Jenis</center></th>
                                <th><center>Judul</center></th>
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
