@extends('layouts.utama')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TAMBAH GURU</div>
                <div class="card-body">
                    {!! Form::model($obj, array('action' => $action,'files'=>true,'method' => $method)) !!}
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('NIP',null,['class' => 'form-control','placeholder'=>'NIP']) }}
                                    <span class="text-helper">{{ $errors->first('NIP') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('nama',null,['class' => 'form-control','placeholder'=>'NAMA GURU']) }}
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
                                    {{ Form::select('id_mapel',\App\mapel::pluck('nama','id'),null,['class' => 'form-control','placeholder'=>'MATA PELAJARAN']) }}
                                    <span class="text-danger">{{ $errors->first('id_mapel') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::select('status_pegawai',['GTY'=>'GTY','Honor'=>'Honor'],null,['class' => 'form-control','placeholder'=>'STATUS PEGAWAI']) }}
                                    <span class="text-danger">{{ $errors->first('status_pegawai') }}</span>
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::text('penhir',null,['class' => 'form-control','placeholder'=>'PENDIDIKAN TERAKHIR']) }}
                                    <span class="text-danger">{{ $errors->first('penhir') }}</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::text('no_tlpn',null,['class' => 'form-control','placeholder'=>'Nomor Telpon']) }}
                                    <span class="text-danger">{{ $errors->first('no_tlpn') }}</span>
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
