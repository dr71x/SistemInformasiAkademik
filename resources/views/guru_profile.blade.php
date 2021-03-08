@extends('layouts.apsps')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="profile card card-body px-3 pt-3 pb-0">
            <div class="profile-head">
                <div class="photo-content">
                    <div class="cover-photo"></div>
                </div>
                <div class="profile-info">
                    <div class="profile-photo">
                        <img src="{{ \Storage::url(Auth::guard('guru')->user()->foto)}}" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="profile-details">
                        <div class="profile-name px-3 pt-2">
                            <h4 class="text-primary mb-0">{{ \Auth::guard('guru')->user()->nama }}</h4>
                            <p>Guru</p>
                        </div>
                        <div class="profile-email px-2 pt-2">
                            <h4 class="text-muted mb-0">{{ \Auth::guard('guru')->user()->email }}</h4>
                            <p>Email</p>
                        </div>
                        <div class="profile-button px-5 pt-2">
                            <a href="{{ route('password.edit') }}" class="btn btn-rounded btn-primary mb-5"><span
                                class="btn-icon-left text-primary"><i class="far fa-edit"></i></span>Ganti Password</button></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="profile-tab">
                    <div class="custom-tab-1">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link">About Me</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="about-me" class="tab-pane fade">
                                <div class="profile-about-me">
                                    <div class="pt-4 border-bottom-1 pb-3">
                                        <h4 class="text-primary">About Me</h4>
                                        <p class="mb-2">Nama  &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; : {{ \Auth::guard('guru')->user()->nama }}</p>
                                        <p class="mb-2">Alamat   &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; : {{ \Auth::guard('guru')->user()->alamat }}</p>
                                        <p class="mb-2">Agama  &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; : {{ \Auth::guard('guru')->user()->agama }}</p>
                                        @if (\Auth::guard('guru')->user()->jenkel == 'L')
                                        <p class="mb-2">Jenis Kelamin  &ensp; &ensp; &ensp; &ensp; &ensp; : Laki_laki</p>
                                        @else
                                        <p class="mb-2">Jenis Kelamin &ensp; : Perempuan</p>
                                        @endif
                                        <p class="mb-2">Mata Pelajaran &ensp; &ensp; &ensp; &ensp;: {{ \Auth::guard('guru')->user()->mapel->nama }}</p>
                                        <p class="mb-2">Status Pegawai &ensp; &ensp; &ensp; &ensp;: {{ \Auth::guard('guru')->user()->status_pegawai }}</p>
                                        <p class="mb-2">E-mail &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; : {{ \Auth::guard('guru')->user()->email }}</p>
                                        <p class="mb-2">Pendidikan Terakhir  &ensp; : {{ \Auth::guard('guru')->user()->penhir }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
