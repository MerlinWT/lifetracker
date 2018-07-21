<?php

/**
 * Created by PhpStorm.
 * User: kov
 * Date: 21.07.18
 * Time: 13:39
 */
class ViewConsole
{
	/**
	 * @param \ModelConsole|string $model
	 * @return string
	 */
	public static function render($model) {
		return $model->getData() . "\n";
	}
}