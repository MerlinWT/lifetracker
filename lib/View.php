<?php

/**
 * Created by PhpStorm.
 * User: kov
 * Date: 21.07.18
 * Time: 13:39
 */
class View
{
	/**
	 * @param \Model $model
	 * @return string
	 */
	public static function render($model) {
		return '<b>' . $model->getData() . '<\b><br>';
	}
}