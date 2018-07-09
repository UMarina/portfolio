<?php

namespace App\Models;

use App\Models\Model;

class Portfolio extends Model
{
     protected $guarded=[''];
    protected $fillable=['title','url','preview','description','category'];
}
