<?php

namespace IMooc;

/**
 * author: wang yang
 * Date: 2019/8/12
 * Time: 15:29
 */
class PDO implements IDatabase
{
    protected $conn;

    function connect($host, $user, $pwd, $dbname)
    {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }
}