<?php

namespace IMooc;
/**
 * author: wang yang
 * Date: 2019/8/12
 * Time: 10:05
 */
class Loader
{
    static function autoloader($class)
    {
       require BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
       // var_dump($file);
    }
}