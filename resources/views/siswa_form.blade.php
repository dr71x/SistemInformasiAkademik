@extends('layouts.utama')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TAMBAH SISWA</div>
                <div class="card-body">
                    {!! Form::model($obj, array('action' => $action,'files'=>true,'method' => $method)) !!}
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('NIS',null,['class' => 'form-control','placeholder'=>'Masukkan NIS']) }}
                                    <span class="text-helper">{{ $errors->first('NIS') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('nama',null,['class' => 'form-control','placeholder'=>'NAMA SISWA']) }}
                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::text('alamat',null,['class' => 'form-control','placeholder'=>'ALAMAT']) }}
                                    <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('agama',null,['class' => 'form-control','placeholder'=>'AGAMA']) }}
                                    <span class="text-danger">{{ $errors->first('agama') }}</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::select('jenkel',['L'=>'Laki-Laki','P'=>'Perempuan'],null,['class' => 'form-control','placeholder'=>'JENIS KELAMIN']) }}
                                    <span class="text-danger">{{ $errors->first('jenkel') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::select('kelas_id',\App\kelas::pluck('nama_kelas','id'),null,['class' => 'form-control','placeholder'=>'Select Kelas']) }}
                                    <span class="text-danger">{{ $errors->first('kelas_id') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::select('status',['Aktif'=>'Aktif','Tidak aktif'=>'Tidak Aktif'],null,['class' => 'form-control','placeholder'=>'STATUS']) }}
                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::email('email',null,['class' => 'form-control','placeholder'=>'E-MAIL']) }}
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::password('password',['class' => 'form-control','placeholder'=>'PASSWORD']) }}
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('no_hp',null,['class' => 'form-control','placeholder'=>'NOMOR HANDPHONE']) }}
                                    <span class="text-danger">{{ $errors->first('no_hp') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('jenis_tinggal',null,['class' => 'form-control','placeholder'=>'JENIS TINGGAL']) }}
                                    <span class="text-danger">{{ $errors->first('jenis_tinggal') }}</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::file('foto',['class' => 'form-control','placeholder'=>'FOTO']) }}
                                    <span class="text-danger">{{ $errors->first('foto') }}</span>
                                </div>
                            </div>

                        <button type="submit" class="btn btn-theme">{{ $btn_simpan }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
