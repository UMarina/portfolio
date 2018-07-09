<?php
namespace App\Factory;
use App\Factory\FactoryInterface;

class CrudFactory implements FactoryInterface
{
   
    public function factoryModel ($model)
    {
        $className='App\\Models\\'. ucfirst($model);
        return new $className;
    }
}