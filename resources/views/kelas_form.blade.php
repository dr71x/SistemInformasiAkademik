@extends('layouts.utama')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TAMBAH KELAS</div>
                <div class="card-body">
                    {!! Form::model($obj, array('action' => $action,'files'=>true,'method' => $method)) !!}
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('nama_kelas',null,['class' => 'form-control','placeholder'=>'NAMA KELAS']) }}
                                    <span class="text-helper">{{ $errors->first('nama_kelas') }}</span>
                                </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::select('guru_id',\App\Guru::pluck('nama','id'),null,['class' => 'form-control','placeholder'=>'WALI KELAS']) }}
                                        <span class="text-helper">{{ $errors->first('guru_id') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::text('id_jurusan',null,['class' => 'form-control','placeholder'=>'JURUSAN']) }}
                                        <span class="text-helper">{{ $errors->first('id_jurusan') }}</span>
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
