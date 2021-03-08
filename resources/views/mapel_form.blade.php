@extends('layouts.utama')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TAMBAH MAPEL</div>
                <div class="card-body">
                    {!! Form::model($obj, array('action' => $action,'files'=>true,'method' => $method)) !!}
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::text('nama',null,['class' => 'form-control','placeholder'=>'Mata Pelajaran']) }}
                                    <span class="text-helper">{{ $errors->first('nama') }}</span>
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
