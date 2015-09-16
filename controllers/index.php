<?php

class index extends basecontroller {

	public function PreRender() {
		if (isset($_GET['people'])) {
			$people = user::fromArray($_GET['people']);
			file_put_contents("data.ser", serialize($people));
		}

		$this->vars['people'] = unserialize(file_get_contents("data.ser"));
	}

}

?>
