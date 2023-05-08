<?php

namespace App\Models\admin\trait;

use App\Models\admin\crud\crud;

trait crud_trait
{
    public function crud(array $params)
    {
        $class_name=__CLASS__;
        $class_current=(new $class_name);
        $crud=new crud($class_current,$params);
        return $crud->crud();
    }
}
