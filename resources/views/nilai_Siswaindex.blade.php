@extends('layouts.apsps')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>DATA NILAI SISWA </h4></div>
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
                            @forelse ($obj as $item)
                            <tr>
                                <td align="center"><h5>{{ $loop->iteration }}</h5></td>
                                <td align="center"><h5>{{ $item->kelas->nama_kelas}}</h5></td>
                                <td>
                                    <center>
                                     <a href="{{ route('semester',['kelas_id' => $item->kelas_id]) }}" class="btn btn-rounded btn-success mb-3"><span
                                        class="btn-icon-left text-success"><i class="fas fa-info-circle"></i></span> Lihat Nilai</button></a>
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
