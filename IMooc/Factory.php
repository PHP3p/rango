<?php

namespace IMooc;
/**
 * author: wang yang
 * Date: 2019/8/12
 * Time: 13:28
 */
class  Factory
{
    static function createDataBase()
    {
        $db = Database::getInstance();
        Register::set('db1', $db);
        return $db;
    }
}