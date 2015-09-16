<?php

class index extends basecontroller {

	public function PreRender() {
		$save = isset($_GET['people']);

		if (isset($_GET['ajax'])) {
			$json = json_decode(file_get_contents("php://input"), true);
			$save = $json['save'];
			if ($save) $_GET['people'] = $json['people'];
		}

		if ($save) {
			$people = user::fromArray($_GET['people']);
			file_put_contents("data.ser", serialize($people));
		}

		$this->vars['people'] = unserialize(file_get_contents("data.ser"));
	}

}
