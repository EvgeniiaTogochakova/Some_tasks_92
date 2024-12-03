<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyEmployee extends Model
{
    public $timestamps=true;
    protected $fillable = ['name','last_name', 'post', 'email', 'address', 'workdata' ];
}
