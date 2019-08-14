<?php

namespace IMooc\Database;

use IMooc\IDatabase;

/**
 * author: wang yang
 * Date: 2019/8/12
 * Time: 15:29
 */
class  MySQL implements IDatabase
{
    protected $conn;

    function connect($host, $user, $pwd, $dbname)
    {
        $conn = mysql_connect($host, $user, $pwd);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $res = mysql_query($sql, $this->conn);
        return $res;
    }

    function close()
    {
        mysql_close($this->conn);
    }
}