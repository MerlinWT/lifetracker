<?php

/**
 * Created by PhpStorm.
 * User: kov
 * Date: 21.07.18
 * Time: 13:17
 */
class ControllerConsole
{
	public function actionUsage() {
		echo \ViewConsole::render(new \ModelConsole());
	}
}