@extends('layouts.apsps')

@section('content')
@php

date_default_timezone_set("Asia/Jakarta");

$jam = date('H:i');

@endphp

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Contact Person Guru</h4>
                <small>Silahkan Hubungi guru yang mengajar Jika Ada yang Ingin Ditanyakan</small>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead class="thead-dark">
                            <tr>
                                <th class="width80"><strong>#</strong></th>
                                <th><center> Mata Pelajaran</center></th>
                                <th><center>Nama Guru</center></th>
                                <th><center>Contact Guru</center></th>
                            </tr>
                        </thead>
                        <tbody>

                                @forelse ($obj as $item)
                                <tr>
                                <td><strong><h5>{{ $loop->iteration }}</h5></strong></td>
                                <td><h5>{{ $item->mapel->nama }}</h5></td>
                                <td><h5>{{ $item->guru->nama }}</h5></td>
                                @if ($jam > '05:30' && $jam < '12:00' )
                                <td align="center"><h5><img src="https://img.icons8.com/ultraviolet/40/000000/whatsapp--v2.gif" height="35" width="35"/>
                                <a href="https://wa.me/{{ $item->guru->no_tlpn }}?text=Selamat%20Pagi%2C%20Saya%20Orang%20Tua%20Dari%20">+{{ $item->guru->no_tlpn }}</a></h5>
                                </td>
                                @elseif ($jam >= '12:00' && $jam < '15:00')
                                <td align="center"><h5><img src="https://img.icons8.com/ultraviolet/40/000000/whatsapp--v2.gif" height="35" width="35"/>
                                <a href="https://wa.me/{{ $item->guru->no_tlpn }}?text=Selamat%20Siang%2C%20Saya%20Orang%20Tua%20Dari%20">+{{ $item->guru->no_tlpn }}</a></h5></td>
                                @else
                                <td align="center"><h5><img src="https://img.icons8.com/ultraviolet/40/000000/whatsapp--v2.gif" height="35" width="35"/>
                                <a href="https://wa.me/{{ $item->guru->no_tlpn }}?text=Selamat%20Malam%2C%20Saya%20Orang%20Tua%20Dari%20">+{{ $item->guru->no_tlpn }}</a></h5></td>
                                @endif


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
