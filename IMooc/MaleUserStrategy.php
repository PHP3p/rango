<?php
/**
 * author: wang yang
 * Date: 2019/8/13
 * Time: 11:21
 */

namespace IMooc;


class MaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        // TODO: Implement showAd() method.
        echo "老男人:iphone";
    }

    function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo "老男人游戏";
    }
}