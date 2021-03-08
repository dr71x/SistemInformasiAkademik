<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelasSiswa extends Model
{
    protected $guarded = [];

    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
}
