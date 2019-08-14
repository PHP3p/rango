<?php

namespace IMooc;
/**
 * author: wang yang
 * Date: 2019/8/12
 * Time: 14:55
 */
class Register
{
    protected static $object;

    function set($alias, $object)
    {
        self::$object[$alias] = $object;
    }

    function get($name)
    {
        return self::$object[$name];
    }

    function _unset($alias)
    {
        unset(self::$object[$alias]);
    }
}