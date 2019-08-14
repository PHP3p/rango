<?php
/**
 * author: wang yang
 * Date: 2019/8/13
 * Time: 11:17
 */

namespace IMooc;


class FemaleUser implements UserStrategy
{
    function showAd()
    {
        // TODO: Implement showAd() method.
        echo "2019新款女生";
    }

    function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo "女生";
    }
}