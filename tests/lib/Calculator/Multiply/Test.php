<?php

namespace lib\Calculator\Multiply;

include_once __DIR__ . "/../Base.php";

/**
 * Created by PhpStorm.
 * User: kov
 * Date: 14.07.18
 * Time: 13:29
 */

class Test extends \lib\Calculator\Base
{

    public function test() {
        $calculator = $this->getTestInstance();
        $this->assertEquals(4, $calculator->multiply(2,2));
    }

}