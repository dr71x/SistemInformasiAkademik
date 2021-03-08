@extends('layouts.apsps')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Jadwal</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead class="thead-dark">
                            <tr>
                                <th class="width80"><strong>#</strong></th>
                                <th><center> Mata Pelajaran</center></th>
                                <th><center>Kelas</center></th>
                                <th><center>Hari</center> </th>
                                <th><center>Jam Pelajaran</center></th>
                                <th><center>Semester/Tahun</center></th>
                                <th><center>Nama Guru</center></th>

                            </tr>
                        </thead>
                        <tbody>

                                @forelse ($obj as $item)
                                <tr>
                                <td><strong><h5>{{ $loop->iteration }}</h5></strong></td>
                                <td align="center"><h5>{{ $item->mapel->nama }}</h5></td>
                                <td align="center"><h5>{{ $item->kelas->nama_kelas }}</h5></td>
                                <td align="center"><h5>{{ $item->hari }}</h5></td>
                                <td align="center"><h5>{{ $item->jam }}-{{ $item->jam_selesai }}</h5></td>
                                <td align="center"><h5>{{ $item->semester }}/{{ $item->tahun }}</h5></td>
                                <td align="center"><h5>{{ $item->guru->nama }}</h5></td>
                            </tr>
                                @empty
                                <td></td>
                                <td>Maaf Data Tidak Ada</td>
                                @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
