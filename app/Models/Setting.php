<?php

namespace App\Models;

use App\Models\Model;
//use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table='settings';
    public $timestamps=false;
    
    protected $guarded=[''];
    protected $fillable=['email','tel'];
}
