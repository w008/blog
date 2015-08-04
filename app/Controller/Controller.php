<?php

namespace App\Controller;

/**
 *
 * Abstract controller
 */
class Controller {
	private static $controller = 'Home';

	private static $action = 'index';

	public function __construct() {

	}

	public static function getController($path) {

		$uri = explode('/', $path);

		if (isset($uri[1]) && !empty($uri[1])) {
			self::$controller = $uri[1];
		}

		if (isset($uri[2]) && !empty($uri[2])) {
			self::$action = $uri[2];
		}

		$class = '\\App\\Controller\\' . ucfirst(self::$controller) . 'Controller';

		if (class_exists($class)) {

			return new $class(new \App\Model\Model(), new \App\View\View());

		} else {
			new \App\Exception\Exception_404("Error loading controller: no class $class found.");
		}

	}

	public static function getAction($controller) {

		if (method_exists($controller, self::$action)) {

			$controller->{self::$action}();

		} else {
			new \App\Exception\Exception_404("Error loading action" . self::$action . " in controller $class.");
		}

	}

}
