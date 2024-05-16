<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $color=array("red","green","blue","orange");
        echo "Current :".current($color)."<br>";
        echo "Next ".next($color)."<br>";
        echo "end ".end($color)."<br>";
        echo "previous ".prev($color)."<br>";
        echo "first ".reset($color)."<br>";
        echo "key for current Position ".key($color)."<br>";
        print_r(each($color))

    ?>
  </body>
</html>
