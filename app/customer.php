<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{

    protected $fillables = ['name','email','phone'];
}
