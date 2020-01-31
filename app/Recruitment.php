<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    protected $table = "recruitments";
    protected $fillable = ['name', 'phone', 'email', 'cv', 'observation'];
}
