<?php 

namespace dothanhdat\HelloComposer;

class GetUrl
{
    //show url current
   public function getFullURL(){
      $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443)? "https://" : "http://";
      $host = $_SERVER['HTTP_HOST'];
      $uri = $_SERVER['REQUEST_URI'];
      return $protocol.$host.$uri;
  }
  
}
