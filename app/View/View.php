<?php

namespace App\View;

class View {

	private $template = 'index';

	private $template_dir;

	function __construct() {
		if (!is_dir(realpath(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR)) {
			new \App\Exception\CommonException('Template directory not found');
		}
		$this->template_dir = realpath(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR;

	}

	public function render($template, array $vars) {

	}
}
