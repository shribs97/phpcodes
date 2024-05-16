<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:#FFFF00">
    <?php
          $s="apple,banana,cherry";
          print_r(explode(',',$s,0));
          echo "<br />";
          print_r(explode(',',$s,3));
          echo "<br />";
          print_r(explode(',',$s,-1));
          echo "<br />";


    ?>
  </body>
</html>
