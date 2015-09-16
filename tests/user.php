<?php

include_once "../models/user.php";

$arr = [[
	'firstname' => 'Leonard',
	'surname' => 'Hofstader',
	'jobtitle' => 'Experimental physicist'
]];

$user = User::fromArray($arr);
$output = [$user[0]->toArray()];

print $arr === $output ? "SUCCESS" : "FAILURE";

?><br />
