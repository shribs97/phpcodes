<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        function myfun($v1,$v2)
        {
          return $v1+$v2;
        }
        $arr=array(10,20,30);
        print_r(array_reduce($arr,"myfun",20));

     ?>
  </body>
</html>
