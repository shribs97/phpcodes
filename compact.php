<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $nm="Shridatta";
      $lnm="Bhasme";
      $age=19;
      $ar=array("nm","lnm");
      $rs=compact($ar,"age");
  //    echo " sb".$ar."";
      print_r($rs);

    ?>
  </body>
</html>
