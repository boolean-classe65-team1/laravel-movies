<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TvSeries extends Model
{
    public $fillable= ["title", "original_title","nationality", "date","vote"];
}
