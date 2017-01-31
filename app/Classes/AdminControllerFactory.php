<?php

namespace App\Classes;

use App\Http\Controllers\Admin\AdminInterface;

class AdminControllerFactory
{

    /**
     * @param string $name
     * @return AdminInterface
     */
    public static function create($name)
    {
        $class = 'App\Http\Controllers\Admin\\' . $name . 'Controller';
        if (class_exists($class))
        {
            return new $class();
        } else {
            return abort('404');
        }
    }

}
