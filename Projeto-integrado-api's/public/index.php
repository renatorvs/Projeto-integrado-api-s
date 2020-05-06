<?php

require "../bootstrap.php";

use core\Controller;
use core\Method;
use core\Parameters;

$controller = new Controller;
$controller = $controller->load();

$controller = new $controller();

$method = new Method;
$method = $method->load($controller);

$parameters = new Parameters;
$parameters = $parameters->load();

try {
	$controller->$method($parameters);
} catch (\Throwable $e) {
	dd($e->getMessage() . $e->getFile() . $e->getline());
}