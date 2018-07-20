<?php
/**
 * Created by PhpStorm.
 * User: kov
 * Date: 20.07.18
 * Time: 19:24
 */

spl_autoload_register(function($class_name) {
	
	$script_name = str_replace('\\', '/', $class_name) . ".php";
	
	if ('tests' === substr($class_name, 0, 5)) {
		include_once __DIR__ . "/../{$script_name}";
	} else {
		include_once __DIR__ . "/../lib/{$script_name}";
	}
	
});