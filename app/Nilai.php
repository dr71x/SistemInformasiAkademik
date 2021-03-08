<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }

    public function semester()
    {
        return $this->belongsTo('App\semester');
    }
    public function guru()
    {
        return $this->belongsTo('App\Guru');
    }
    public function mapel()
    {
        return $this->belongsTo('App\Mapel');
    }
}
