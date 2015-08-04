<?php

namespace App\Controller;

class BlogController extends Controller {

	private $model;
	private $view;

	public function __construct($model, $view) {
		$this->model = $model;
		$this->view = $view;
	}

	public function index() {
		echo 'In the Blog/Index';

	}

}