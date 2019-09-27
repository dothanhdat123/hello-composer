<?php 

namespace dothanhdat\HelloComposer;

class Hello
{
    public function say($toSay = "Hello World")
    {
        return $toSay;
    }
}

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

class CheckUrl
{
    public function checkURL(){
        // Input your URL
        $url = "htrrrrrrrrr.com";

        // Validate url
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            echo("URL bạn đã nhập là: .$url.</br> Kết quả: URL hợp lệ</br>");
        } else {
            echo("URL bạn đã nhập là: .$url.</br> Kết quả: URL không hợp lệ</br>");
        }
    }
}

class ShowDetailUrl
{
    public function ShowdetailUrl(){
        // Input your URL
        $url = "https://www.gooogle.com.vn/24h.com";

        // Show protocol, Domain Name ,and Path
        $url=parse_url($url);


        echo 'Scheme: :' .$url['scheme']."</br>";
        echo 'Host: :' .$url['host']."</br>";
        echo 'Path: :' .$url['path']."</br>";
    }
}

?>

