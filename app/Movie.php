<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $fillable= ["title", "original_title","nationality", "date","vote"];
}
