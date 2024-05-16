<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
          function myfun($key,$val)
          {
            echo "The key is ".$key." The value is ".$val."<br>";
          }
          $arr=array("a"=>"red","b"=>"green","c"=>"yellow");
          array_walk($arr,"myfun")
    ?>
  </body>
</html>
