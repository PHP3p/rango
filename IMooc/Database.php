<?php

namespace IMooc;
/**
 * author: wang yang
 * Date: 2019/8/12
 * Time: 11:17
 */
interface IDatabase
{
    function connect($host, $user, $pwd, $dbname);

    function query($sql);

    function close();
}

class Database
{
    protected $db;

    private function __construct()
    {
    }

    static function getInstance()
    {
        if (self::$db) {
            return self::$db;
        } else {
            self::$db = self::getInstance();
            return self::$db;
        }
    }

    function where($where)
    {
        return $this;
    }

    function order($order)
    {
        return $this;
    }

    function limit($limit)
    {
        return $this;
    }
}