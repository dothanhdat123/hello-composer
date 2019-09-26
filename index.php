<?php

require_once __DIR__ . '/vendor/autoload.php';

use dothanhdat\HelloComposer\Hello;

$greeting = new Hello();

echo $greeting->say("Thanh cong roi :))"." "."Ahihi :D"."\n"."Author: Do Thanh Dat");