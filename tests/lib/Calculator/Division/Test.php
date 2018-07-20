<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 14.07.18
 * Time: 15:05
 */
namespace lib\Calculator\Division;

include_once __DIR__ . "/../Base.php";

class Test extends \lib\Calculator\Base
{

    public function test()
    {
        $calculator = $this->getTestInstance();
        $this->assertEquals(3, $calculator->division(6,2));
    }

}