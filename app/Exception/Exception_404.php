<?php

namespace App\Exception;

class Exception_404 extends Exception {

	private $message = '404 not found';

	public function __construct($message) {
		$this->message = $message;
		$this->display();
	}

	public function display() {
		echo "Whhops! Something wrong. " . $this->message;
	}

}