<?php
/**
 * author: wang yang
 * Date: 2019/8/14
 * Time: 11:14
 */

namespace IMooc;

interface IDatabase
{
    function connect($host, $user, $pwd, $dbname);

    function query($sql);

    function close();
}
