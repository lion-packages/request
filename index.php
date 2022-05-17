<?php

require_once 'vendor/autoload.php';

use LionRequest\Json;

$data = [
	'name' => "Sergio Leon",
	'age' => 22
];

$encode = Json::encode($data);
$decode = Json::decode($encode);

var_dump($encode);
var_dump($decode);