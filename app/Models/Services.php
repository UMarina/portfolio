<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use App\Models\Model;
class Services extends Model
{
     protected $table='services';
    public $timestamps=false;
    
    protected $guarded=[''];
    protected $fillable=['icon','title','descriptions'];
}
