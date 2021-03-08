<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    protected $guarded = [];

    public function guru()
    {
        return $this->belongsTo('App\guru');
    }

    public function mapel()
    {
        return $this->belongsTo('App\mapel');
    }
}
