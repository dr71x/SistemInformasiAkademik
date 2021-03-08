<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Ortu extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $guard = 'ortu';
    protected $guarded = [];
}
