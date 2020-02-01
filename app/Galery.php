<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $table = "galerys";
    protected $fillable = ['title', 'description'];
}
