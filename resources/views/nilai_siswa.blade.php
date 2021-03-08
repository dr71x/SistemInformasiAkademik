@extends('layouts.apsps')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>NILAI SISWA </h4></div>
                <div class="card-body">
                    <div class="row">
                        <h4 align="right">Semester : {{ $semester }} &ensp; &ensp;</h4>
                        <h4 align="right">Tahun Ajaran : {{ $tahun }}</h4>
                    </div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th><center>No</center></th>
                                <th><center>NIS</center></th>
                                <th><center>Nama Siswa</center></th>
                                <th><center>Tugas</center></th>
                                <th><center>Ulangan</center></th>
                                <th><center>Uts</center></th>
                                <th><center>Uas</center></th>
                                <th><center>Rata-Rata</center></th>
                                <th><center>Validasi</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @forelse ($obj as $item)
                                <td align="center"><h5>{{ $loop->iteration }}</h5></td>
                                <td align="center"><h5>{{ $item->siswa->NIS}}</h5></td>
                                <td><h5>{{ $item->siswa->nama}}</h5></td>
                                <td align="center"><h5>{{ $item->tugas}}</h5></td>
                                <td align="center"><h5>{{ $item->ulangan}}</h5></td>
                                <td align="center"><h5>{{ $item->uts}}</h5></td>
                                <td align="center"><h5>{{ $item->uas}}</h5></td>
                                <td align="center"><h5>{{ $item->total}}</h5></td>
                                @if ( $item->validasi == "validate")
                                <td align="center"><h5><img src="https://img.icons8.com/color/48/000000/approval--v3.gif" width="20" height="20"/>Validate</h5></td>
                                @else
                                <td align="center"><h5><img src="https://img.icons8.com/office/16/000000/rhombus-loader.gif" width="20" height="20"/>Belum Divalidasi</h5></td>
                                @endif
                                <td>
                                    <div class="btn-group">
                                    <a href="{{ url('guru/nilai/edit/'.$item->id) }}" ><button class="btn btn-outline-success" type="button" ><i class="zwicon-edit-square-feather"></i> Edit </button></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <td colspan="10"><center>Belum ada Data yang ditambahkan</center></td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
