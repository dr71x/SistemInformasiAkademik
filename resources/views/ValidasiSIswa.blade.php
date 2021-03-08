@extends('layouts.apsps')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>Validasi</h4></div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th><center>No</center></th>
                                <th><center>NIS Siswa</center></th>
                                <th><center>Nama Siswa</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($obj as $item)
                            <tr>
                                <td align="center"><h5>{{ $loop->iteration }}</h5></td>
                                <td><h5>{{ $item->siswa->NIS}}</h5></td>
                                <td><h5>{{ $item->siswa->nama}}</h5></td>
                                <td>
                                    <center>
                                     <a href="{{ route('validasi-nilai',['kelas_id'=>$item->kelas_id,'semester'=>$item->semester,'tahun'=>$item->tahun,'siswa_id'=>$item->siswa_id]) }}" class="btn btn-rounded btn-success mb-3"><span
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
