@extends('layouts.apsps')
@section('content')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".updatenilai").keyup(function(event) {
            var tugas  = $("#tugas").val();
            var ulangan = $("#ulangan").val();
            var uts = $("#uts").val();
            var uas = $("#uas").val();
            var hasil = (parseInt(tugas) + parseInt(ulangan) + parseInt(uts) + parseInt(uas))/4;
            $("#total").val(hasil);
        });
    });
</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Nilai</div>
                <div class="card-body">
                    {!! Form::model($obj, array('action' => $action,'files'=>true,'method' => $method)) !!}
                        <div class="form-row">
                            <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::text('tugas', null, ['class' => 'form-control updatenilai' , 'id' => 'tugas','placeholder'=>'Tugas']) !!}
                                <span class="text-helper">{{ $errors->first('tugas') }}</span>
                            </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::text('ulangan',null,['class' => 'form-control updatenilai ','id' => 'ulangan','placeholder'=>'Ulangan']) }}
                                <span class="text-helper">{{ $errors->first('ulangan') }}</span>
                            </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::text('uts',null,['class' => 'form-control updatenilai','id' => 'uts','placeholder'=>'Uts']) }}
                                <span class="text-helper">{{ $errors->first('uts') }}</span>
                            </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::text('uas',null,['class' => 'form-control updatenilai','id' => 'tugas', 'id' => 'uas','placeholder'=>'Uas']) }}
                                <span class="text-helper">{{ $errors->first('uas') }}</span>
                            </div>
                            </div>
                        </td>
                        <td>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::text('total',null,['class' => 'form-control','readonly', 'id' => 'total']) }}
                                <span class="text-helper">{{ $errors->first('total') }}</span>
                            </div>
                        </div>
                        </td>
                    </div>

                        <button type="submit" class="btn btn-outline-primary">{{ $btn_simpan }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
