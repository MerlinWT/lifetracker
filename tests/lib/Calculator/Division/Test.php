<?php

namespace tests\lib\Calculator\Division;

/**
 * Created by PhpStorm.
 * User: tim
 * Date: 14.07.18
 * Time: 15:05
 */

class Test extends \tests\lib\Calculator\Base
{

    public function test()
    {
        $calculator = $this->getTestInstance();
        $this->assertEquals(3, $calculator->division(6,2));
    }

}