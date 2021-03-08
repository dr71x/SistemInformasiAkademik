@extends('layouts.apsps')

@section('content')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".inputnilai").keyup(function(event){
            var tugas = $(this).val();
            var id = $(this).attr('data-id');
            var ulangan = $("#ulangan"+id).val();
            var uts = $("#uts"+id).val();
            var uas = $("#uas"+id).val();
            var total = (parseInt(tugas)+parseInt(ulangan)+parseInt(uts)+parseInt(uas))/4;
            $("#total"+id).val(total);
        });
    });
</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header"><h4>INPUT NILAI SISWA</h4></div>
                <div class="card-body">
                    {!! Form::model($model, array('action' => $action,'files'=>true,'method' => $method)) !!}
                    {!! Form::hidden('kelas_id', $kelas_id) !!}
                    {!! Form::hidden('guru_id', $guru_id) !!}
                    {!! Form::hidden('mapel_id', $mapel_id) !!}
                    {!! Form::hidden('semester', $semester) !!}
                    {!! Form::hidden('tahun', $tahun) !!}
                    <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::text('semester', $semester, ['class'=>'form-control','disabled' => true,'placeholder' => 'Masukkan Semester']) !!}
                            <span class="text-helper">{{ $errors->first('semester') }}</span>
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::text('tahun', $tahun, ['class'=>'form-control disable','disabled' => true,'placeholder' => 'Masukkan Tahun Semester']) !!}
                            <span class="text-helper">{{ $errors->first('tahun') }}</span>
                        </div>
                    </div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th><center>No</center></th>
                                <th><center>NISN Siswa</center></th>
                                <th>Nama Siswa</th>
                                <th><center>Tugas</center></th>
                                <th><center>Ulangan</center></th>
                                <th><center>Uts</center></th>
                                <th><center>Uas</center></th>
                                <th><center>Rata-Rata</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($obj as $item)
                            <tr>
                                <td align="center"><h5>{{ $loop->iteration }}</h5></td>
                                <td align="center"><h5>{{ $item->NIS}}</h5></td>
                                <td align="center"><h5>{{ $item->nama}}</h5></td>
                                <td>
                                    {!! Form::hidden('siswa_id[]', $item->id) !!}
                                    <div class="form-group">
                                        {{ Form::text('tugas[]',null,['class' => 'form-control inputnilai','data-id' => $item->id,'id' =>'tugas'.$item->id]) }}
                                        <span class="text-helper">{{ $errors->first('tugas[]') }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        {{ Form::text('ulangan[]',null,['class' => 'form-control inputnilai' ,'data-id' => $item->id,'id' =>'ulangan'.$item->id]) }}
                                        <span class="text-helper">{{ $errors->first('ulangan[]') }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        {{ Form::text('uts[]',null,['class' => 'form-control inputnilai' ,'data-id' => $item->id,'id' =>'uts'.$item->id]) }}
                                        <span class="text-helper">{{ $errors->first('uts[]') }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        {{ Form::text('uas[]',null,['class' => 'form-control inputnilai' ,'data-id' => $item->id,'id' =>'uas'.$item->id]) }}
                                        <span class="text-helper">{{ $errors->first('uas[]') }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        {{ Form::text('total[]',null,['class' => 'form-control','readonly' => '', 'data-id' => $item->id,'id' =>'total'.$item->id]) }}
                                        <span class="text-helper">{{ $errors->first('total[]') }}</span>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <td></td>
                            <td><center>Belum ada Data yang ditambahkan</center>  </td>
                            <td></td>
                            <td></td>
                            @endforelse
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-outline-primary">{{ $btn_simpan }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
