<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $guarded = [];

    public function siswa()
    {
        return $this->hasMany('App\Siswa');
    }

    public function guru()
    {
        return $this->belongsTo('App\Guru');
    }

    public function wali()
    {
        return $this->hasOne('App\Guru');
    }

    public function jadwal()
    {
        return $this->hasMany('App\Jadwal');
    }


}
