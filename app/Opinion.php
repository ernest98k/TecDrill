<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $table = "opinions";
    protected $fillable = ['name', 'email', 'opinion'];
}
