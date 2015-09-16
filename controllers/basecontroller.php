<?php

abstract class basecontroller {

	protected $vars;

	public function __construct() {
		$this->PreRender();
		$this->Render();
	}

	public abstract function PreRender();

	public function Render() {
		$this->showView(get_class($this), $this->vars);
	}

	public function showView($viewName, $vars = []) {
		include "views/{$viewName}.php";
	}

}
