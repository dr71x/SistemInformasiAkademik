@extends('layouts.utama')

@section('content')
@php

date_default_timezone_set("Asia/Jakarta");

$jam = date('H:i');

@endphp
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="row">
@if ($jam > '05:30' && $jam < '12:00')

            <div class="col-md-12">
            <div class="card border-right">
                    <div class="card-body">
                        <h2 > Selamat Pagi {{ \Auth::user()->name }} <img src="https://img.icons8.com/office/16/000000/sunrise--v2.gif" height="100" width="100" align="right"/></h2>
                    </div>
            </div>
     </div>
@elseif ($jam >= '12:00' && $jam < '15:00')
<div class="col-md-12">
    <div class="card border-right">
            <div class="card-body">
                <h2 > Selamat Siang {{ \Auth::user()->name }} <img src="https://img.icons8.com/office/16/000000/sun--v2.gif" width="100" height="100" align="right"/></h2>
            </div>
    </div>
</div>
@elseif ($jam >= '15:00' && $jam < '18:00')
<div class="col-md-12">
    <div class="card border-right">
            <div class="card-body">
                <h2 > Selamat Sore {{ \Auth::user()->name }} <img src="https://img.icons8.com/office/16/000000/sunset--v2.gif" height="100" width="100" align="right"/></h2>
            </div>
    </div>
</div>
@else
<div class="col-md-12">
    <div class="card border-right">
            <div class="card-body">
                <h2 > Selamat Malam {{ \Auth::user()->name }} <img src="https://img.icons8.com/plasticine/100/000000/fog-night--v2.gif" height="100" width="100" align="right"/></h2>
            </div>
    </div>
</div>
@endif
                    <div class="col-md-6">
                        <div class="card border-right">
                            <div class="card-body">
                                <h2 > Data Siswa</h2>
                                <div  >
                                    <img src="{{ asset('baru')}}/resources/img/siswa.jpg" alt="" height="50" width="50">
                                    {{$count}} orang</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-right">
                            <div class="card-body">
                                <h2>Data Guru</h2>
                                <div  >
                                    <img src="{{ asset('baru')}}/resources/img/guru.png" alt="" height="50" width="50">
                                    {{$guru}} Orang</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-right">
                            <div class="card-body">
                                <h2>Data Kelas</h2>
                                <div  >
                                    <img src="{{ asset('baru')}}/resources/img/mapel.png" alt="" height="50" width="50">
                                {{ $tu }} Kelas
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-right">
                            <div class="card-body">
                                <h2>Data Kelas</h2>
                                <div >
                                    <img src="{{ asset('baru')}}/resources/img/mapel.png" alt="" height="50" width="50">
                                    {{$mapel}} Mapel</div>
                            </div>
                        </div>
                    </div>

                </div>
    </div>
</div>
@endsection
