<?php

require_once __DIR__ . '/vendor/autoload.php';

use dothanhdat\HelloWorld\Index;

$greeting = new Index();

echo $greeting->greet("Hello Composer");
