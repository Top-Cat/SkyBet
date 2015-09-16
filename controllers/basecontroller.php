<?php

abstract class basecontroller {

	protected $vars;

	public function __construct() {
		$this->PreRender();
		$this->Render();
	}

	public abstract function PreRender();

	public function Render() {
		if (isset($_GET['ajax'])) {
			$this->showView("ajax", $this->vars);
		} else {
			$this->showView(get_class($this), $this->vars);
		}
	}

	public function showView($viewName, $vars = []) {
		include "views/{$viewName}.php";
	}

}
