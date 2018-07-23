<?php

/**
 * Created by PhpStorm.
 * User: kov
 * Date: 23.07.18
 * Time: 20:11
 */
class request
{
	public static function get() {
		return [
			'url' => $_SERVER['REQUEST_URI'],
			'params' => $_GET,
		];
	}
}