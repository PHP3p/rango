<?php

namespace IMooc;
/**
 * author: wang yang
 * Date: 2019/8/12
 * Time: 9:54
 */
class  Objects
{
    protected $array = array();

    function __set($key, $value)
    {
        var_dump(__METHOD__);

        $this->array[$key] = $value;
    }

    function __get($key)
    {
        var_dump(__METHOD__);
        return $this->array[$key];
    }

    function __call($function, $params)
    {
        var_dump($function, $params);
        return "magic function \n";
    }

    static function __callStatic($function, $params)
    {
        var_dump($function, $params);
        return "magic function \n";
    }

    function __toString()
    {
        return __CLASS__;
    }

    function __invoke($params)
    {
        var_dump($params);
        return 'invoke';
    }

    static function test()
    {
        echo __METHOD__;
    }
}