<?php

namespace App\Exception;

class CommonException extends Exception {

	private $message = 'default message';

	public function __construct($message) {
		$this->message = $message;
		$this->display();
	}

	public function display() {
		echo "Whhops! Something wrong. " . $this->message;
	}

}