<?php

namespace App;

class App {

	public function __construct() {}

	public static function start() {

		\App\Controller\Controller::getAction(
			\App\Controller\Controller::getController($_SERVER['REQUEST_URI'])
		);
	}

}
