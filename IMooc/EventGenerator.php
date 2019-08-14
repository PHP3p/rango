<?php
/**
 * author: wang yang
 * Date: 2019/8/14
 * Time: 13:33
 */

namespace IMooc;


abstract class EventGenerator
{
    private $Observer = array();

    function Observer(Observer $Observer)
    {
        $this->Observer[] = $Observer;
    }

    function notify()
    {
        foreach ($this->Observer as $observers) {
            $observers->update();
        }
    }
}