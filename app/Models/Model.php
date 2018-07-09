<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

use Schema;

class Model extends BaseModel
{
    public function getFields()
    {
      return Schema::getColumnListing($this->table);  
    }
}

