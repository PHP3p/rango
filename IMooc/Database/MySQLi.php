<?php

namespace IMooc\Database;



use IMooc\IDatabase;

/**
 * author: wang yang
 * Date: 2019/8/12
 * Time: 15:28
 */
class MySQLi implements IDatabase
{
    protected $conn;

    function connect($host, $user, $pwd, $dbname)
    {
        $conn = mysqli_connect($host, $user, $pwd, $dbname);
        // mysql_select_db($dbname, $conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    function close()
    {
        mysqli_close($this->conn);
    }
}