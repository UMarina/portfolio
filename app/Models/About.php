<?php

namespace App\Models;

use App\Models\Model;
//use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table='abouts';
    public $timestamps=false;
    
    protected $guarded=[''];
    protected $fillable=['title','description'];
}
