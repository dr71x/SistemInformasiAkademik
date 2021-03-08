@extends('layouts.apsps')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>NILAI SISWA </h4></div>
                <div class="card-body">
                    <h4>semester/tahun : {{ $semester }}/{{ $tahun }}</h4>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Nama Guru</center></th>
                                <th><center>Mata Pelajaran</center></th>
                                <th><center>Tugas</center></th>
                                <th><center>Ulangan</center></th>
                                <th><center>Uts</center></th>
                                <th><center>Uas</center></th>
                                <th><center>Rata-Rata</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @forelse ($obj as $item)
                                <td align="center"><h5>{{ $loop->iteration }}</h5></td>
                                <td><h5>{{ $item->guru->nama}}</h5></td>
                                <td><h5>{{ $item->mapel->nama}}</h5></td>
                                <td align="center"><h5>{{ $item->tugas}}</h5></td>
                                <td align="center"><h5>{{ $item->ulangan}}</h5></td>
                                <td align="center"><h5>{{ $item->uts}}</h5></td>
                                <td align="center"><h5>{{ $item->uas}}</h5></td>
                                <td align="center"><h5>{{ $item->total}}</h5></td>
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
