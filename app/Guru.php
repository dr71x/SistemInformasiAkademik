<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Guru extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $guard = 'guru';
    protected $guarded = [];

    public function mapel()
    {
        return $this->belongsTo('App\mapel','id_mapel');
    }

    public function kelas()
    {
        return $this->hasMany('App\kelas', 'guru_id');
    }
}
