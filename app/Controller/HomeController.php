<?php

namespace App\Controller;

class HomeController extends Controller {

	private $model;
	private $view;

	public function __construct($model, $view) {
		$this->model = $model;
		$this->view = $view;
	}

	public function index() {
		echo 'In the Home/Index';
	}

	public function about() {
		echo 'In the Home/About';
	}
}