<?php

require_once __DIR__ . '/vendor/autoload.php';

use dothanhdat\HelloComposer\Hello;

use dothanhdat\HelloComposer\GetUrl;

use dothanhdat\HelloComposer\CheckUrl;

use dothanhdat\HelloComposer\ShowDetailURL;

use dothanhdat\HelloComposer\LinkUrl;

/** Show class Hello**/
$greeting = new Hello();

// echo $greeting->say("Thanh cong roi :))"." "."Ahihi :D"."\n"."Author: Do Thanh Dat");

/** Show class GetUrl**/
$url = new GetUrl();

echo "<h1>Get Full Current Page URL in PHP</h1>"."<p> Current URL is :</p>".$url-> getFullURL()."</br>"."</br>";

/** Show class CheckUrl**/
$checkurl = new CheckUrl();
echo $checkurl->checkURL()."</br>";

/** Show class ShowdetailUrl**/
$ShowDUrl= new ShowdetailUrl();
echo $ShowDUrl->ShowdetailUrl();

/** Show class LinkUrl**/

// $ShowLinkUrl= new LinkUrl();
// echo $ShowLinkUrl->LinkUrl();

