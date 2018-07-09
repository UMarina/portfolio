<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use App\Models\Model;
class Skills extends Model
{
      protected $table='skills';
    public $timestamps=false;
    
    protected $guarded=[''];
    protected $fillable=['skill','value'];
}
