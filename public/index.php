<?php

use Src\Example\Example;

require_once __DIR__ . '/../vendor/autoload.php';

$test = new Example;
var_dump($test->say());
