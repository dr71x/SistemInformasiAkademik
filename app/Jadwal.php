<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $guarded = [];

    public function mapel()
    {
        return $this->belongsTo('App\Mapel');
    }

    public function guru()
    {
        return $this->belongsTo('App\Guru');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
}
