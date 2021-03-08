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
                                <th><center>Kelas</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>

                                @forelse ($obj as $item)
                                <tr>
                                <td><strong><h5>{{ $loop->iteration }}</h5></strong></td>
                                <td align="center"><h5>{{ $item->kelas->nama_kelas }}</h5></td>
                                <td>
                                    <center>
                                <a href="{{ url('guru/jadwal/index/'.$item->kelas_id) }}" class="btn btn-rounded btn-primary mb-3"><span
                                    class="btn-icon-left text-primary"><i class="fas fa-plus"></i></span> Lihat Jadwal</button></a>
                                </center>
                                </td>
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
