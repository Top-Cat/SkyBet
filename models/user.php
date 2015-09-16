<?php

class user implements JsonSerializable {

	private static function getVal($arr, $index) {
		return isset($arr[$index]) ? htmlspecialchars($arr[$index]) : "";
	}

	public static function fromArray($arr) {
		$people = [];
		foreach ($arr as $person) {
			$people[] = new user(
				self::getVal($person, 'firstname'),
				self::getVal($person, 'surname'),
				self::getVal($person, 'jobtitle')
			);
		}
		return $people;
	}

	private $firstName;
	private $lastName;
	private $jobTitle;

	public function __construct($firstName, $lastName, $jobTitle) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->jobTitle = $jobTitle;
	}

	public function getFirstName() {
		return $this->firstName;
	}

	public function getLastName() {
		return $this->lastName;
	}

	public function getJobTitle() {
		return $this->jobTitle;
	}

	public function toArray() {
		return array(
			'firstname' => $this->firstName,
			'surname' => $this->lastName,
			'jobtitle' => $this->jobTitle
		);
	}

	public function jsonSerialize() {
		return $this->toArray();
	}

}
