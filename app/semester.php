<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class semester extends Model
{
    protected $guarded = [];
    public function nilai()
    {
        return $this->hasMany('App\Nilai');
    }
}
