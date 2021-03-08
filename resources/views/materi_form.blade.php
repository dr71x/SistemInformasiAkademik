@extends('layouts.apsps')
@section('content')
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TAMBAH Materi</div>
                <div class="card-body">
                    {!! Form::model($obj, array('action' => $action,'files'=>true,'method' => $method)) !!}
                        <div class="form-row">
                            {!! Form::hidden('guru_id', $guru_id) !!}
                            {!! Form::hidden('kelas_id', $kelas_id) !!}
                            {!! Form::hidden('mapel_id', $mapel_id) !!}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::text('judul',null,['class' => 'form-control','auto-focus','placeholder'=>'Judul Materi']) }}
                                        <span class="text-helper">{{ $errors->first('judul') }}</span>
                                    </div>
                                </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select name="jenis" class="form-control">
                                                <option value="ppt"> PPT </option>
                                                <option value="pdf"> Pdf </option>
                                            </select>
                                        </div>
                                     </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::file('file',['class' => 'form-control','placeholder'=>'File Materi']) }}
                                        <span class="text-danger">{{ $errors->first('file') }}</span>
                                    </div>
                                </div>
                        <button type="submit" class="btn btn-outline-primary">{{ $btn_simpan }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection
