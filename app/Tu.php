<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Tu extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $guard = 'tu';
    protected $guarded = [];
}
