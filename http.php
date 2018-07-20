<?php

/**
 * Created by PhpStorm.
 * User: kov
 * Date: 20.07.18
 * Time: 19:21
 */

include_once __DIR__ . '/system/bootstrap.php';


/**
 * @param \Calculator $calculator
 */
function sum($calculator) {
	$sum = $calculator->sum(1000, 111);
	echo "<b>$sum</b>\n";
}


sum(new \Calculator());
