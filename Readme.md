-Hướng dẫn cài đặt và sử dụng:

#Cách cài đặt composer:
 +Địa chỉ Dowload: https://getcomposer.org/.
 +Dowload về cài đặt đơn giản hoặc có thể xem video sau: https://www.youtube.com/watch?v=pbxI7I4iC2I.

#Lý thuyết composer pakage:
  
  +Xem hướng dẫn tại: https://freetuts.net/huong-dan-su-dung-composer-php-699.html.
                      https://viblo.asia/p/tu-tao-composer-package-cho-php-n7prv33ovKod.
                    
  +Làm sao để tạo một composer package ?
            Update php lên phiên bản 5.3 hoặc cao hơn.
            Sử dụng phần mềm quản lý code git, svn.
            Tạo tài khoản github và packagist.org (có thể sử dụng luôn tài khoản github).

#Các bước để tạo composer pakage:
   
   1.Khởi tại project.
   2.Tạo file composer.json.
   3.Tạo file Test.php.
   4.push code lên github.
   5.Đăng ký package trên packages.org.

#Cách sử dụng:
  - Trên file composer.json của project muốn include package đó cần thêm vào dòng.
  Ví dụ:
   "require": {
        "kynm/hello-world": "dev-master"
    }
  - Dùng lệnh : composer update để load package về project.
  -Trên file index của project cần require file autoload:
           require_once __DIR__ . '/vendor/autoload.php'; 
  -Khi sử dụng chỉ cần sử dụng đúng namespace. 

  #Link sau khi cập nhật trên Packagist.

  -https://packagist.org/packages/dothanhdat/hello-compose#v1.0.        
     
