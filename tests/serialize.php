<?php

include_once "../models/user.php";

$arr = [[
	'firstname' => 'Leonard',
	'surname' => 'Hofstader',
	'jobtitle' => 'Experimental physicist'
]];

$user = User::fromArray($arr);
$serialized = serialize($user);
$output = unserialize($serialized);

print $user == $output ? "SUCCESS" : "FAILURE";

?><br />
