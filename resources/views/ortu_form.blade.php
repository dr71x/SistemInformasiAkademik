@extends('layouts.utama')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TAMBAH SISWA</div>
                <div class="card-body">
                    {!! Form::model($obj, array('action' => $action,'files'=>true,'method' => $method)) !!}
                    {!! Form::hidden('siswa_id', $siswa_id) !!}
                    {!! Form::hidden('NIS', $NIS) !!}
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('nama',null,['class' => 'form-control','placeholder'=>'Nama Orang Tua']) }}
                                    <span class="text-helper">{{ $errors->first('nama') }}</span>
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
                                    {{ Form::text('alamat',null,['class' => 'form-control','placeholder'=>'Alamat Orang Tua']) }}
                                    <span class="text-helper">{{ $errors->first('alamat') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('pekerjaan',null,['class' => 'form-control','placeholder'=>'pekerjaan Orang Tua']) }}
                                    <span class="text-helper">{{ $errors->first('pekerjaan') }}</span>
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
