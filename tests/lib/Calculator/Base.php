<?php

namespace tests\lib\Calculator;

/**
 * Created by PhpStorm.
 * User: tim
 * Date: 14.07.18
 * Time: 14:45
 */

abstract class Base extends \Test
{

    /**
     * @return \Calculator
     */
    public function getTestInstance()
    {
        $calculator = new \Calculator();
        return $calculator;
    }

}
