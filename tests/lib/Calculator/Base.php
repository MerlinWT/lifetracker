<?php

namespace tests\lib\Calculator;

/**
 * Created by PhpStorm.
 * User: tim
 * Date: 14.07.18
 * Time: 14:45
 */

abstract class Base extends \PHPUnit\Framework\TestCase
{

    abstract public function test();

    public function __construct($name = null, array $data = [], $dataName = '') {
        parent::__construct($name, $data, $dataName);
    }

    /**
     * @return \Calculator
     */
    public function getTestInstance()
    {
        $calculator = new \Calculator();
        return $calculator;
    }

}
