<?php

require_once __DIR__ . '/vendor/autoload.php';


use dothanhdat\HelloComposer\GetUrl;


/** Show class GetUrl**/
$url = new GetUrl();

echo "<h1>Get Full Current Page URL in PHP</h1>"."<p> Current URL is :</p>".$url-> getFullURL()."</br>"."</br>";



