@extends('layouts.utama')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DATA JADWAL {{ $model->nama_kelas }}</div>
                <div class="card-body">
                   <a ><button type="button" class="btn btn-theme btn--icon-text mb-3" data-toggle="modal" data-target="#exampleModalCenter"><i class="zwicon-user-plus"></i>Tambah
                      </button></a>
                    <table class="table  mb-0">
                        <thead class="bg-success text-white">
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Mata Pelajaran</center></th>
                                <th><center>Hari</center></th>
                                <th><center>Jam Pelajaran</center></th>
                                <th><center>Semester/Tahun</center></th>
                                <th><center>Nama Guru</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody class="border border-success">
                         @forelse ($obj as $item)
                         <tr>
                            <td align="center">{{ $loop->iteration }}</td>
                            <td align="center">{{ $item->mapel->nama }}</td>
                            <td align="center">{{ $item->hari }}</td>
                            <td align="center">{{ $item->jam }}-{{ $item->jam_selesai }}</td>
                            <td align="center">{{ $item->semester }}/{{ $item->tahun }}</td>
                            <td align="center">{{ $item->guru->nama }}</td>
                            <td>
                                <center>
                                <div class="btn-group">
                              <a href="{{ url('admin/kelas/jadwal/hapus/'.$item->id) }}" onclick="return confirm('Anda yakin?')"><button class="btn btn-theme btn--icon-text"><i class="zwicon-user-delete"></i> Hapus Data</button></a>
                            </center>
                            </div>
                        </td>
                            </tr>
                            @empty
                            <h4>Data Belum Ada</h4>
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="card">
            <div class="card-header">DATA JADWAL {{ $model->nama_kelas }}</div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card-body">
            {!! Form::model($object, array('action' => $action,'files'=>true,'method' => $method)) !!}
            <div class="form-row">
                {!! Form::hidden('kelas_id', $kelas_id) !!}
                <div class="col-md-12">
                    <div class="form-group">
                        {{ Form::select('guru_id',\App\Guru::pluck('nama','id'),null,['class' => 'form-control','placeholder'=>'Nama Guru']) }}
                        <span class="text-helper">{{ $errors->first('guru_id') }}</span>
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::select('mapel_id',\App\Mapel::pluck('nama','id'),null,['class' => 'form-control','placeholder'=>'Nama Mata Pelajaran']) }}
                            <span class="text-helper">{{ $errors->first('mapel_id') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::text('hari',null,['class' => 'form-control','placeholder'=>'Hari']) }}
                            <span class="text-helper">{{ $errors->first('hari') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::time('jam',null,['class' => 'form-control','placeholder'=>'Jam Mulai']) }}
                            <span class="text-helper">{{ $errors->first('jam') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::time('jam_selesai',null,['class' => 'form-control','placeholder'=>'Jam Selesai']) }}
                            <span class="text-helper">{{ $errors->first('jam_selesai') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::text('semester',null,['class' => 'form-control','placeholder'=>'Semester']) }}
                            <span class="text-helper">{{ $errors->first('semester') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::text('tahun',null,['class' => 'form-control','placeholder'=>'Tahun']) }}
                            <span class="text-helper">{{ $errors->first('tahun') }}</span>
                        </div>
                    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-theme btn--icon-text mb-3" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-theme btn--icon-text mb-3">{{ $btn_simpan }}</button>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
