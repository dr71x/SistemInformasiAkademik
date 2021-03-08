<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $guarded = [];

    public function Kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
}
