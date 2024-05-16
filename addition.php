<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Addition</title>
  </head>
  <body>
    <h3>
    <?php
      $a=10;//first number
      $b=20;//second number
      $c=$a/*first no*/+$b/*second number*/;
      echo "Addition :$c<br/>";#print c
      /*in this program
      we chake the value of a is integer or not
      */
      if(is_int($a))
      {
        echo "<br/>number is integer";
      }
      else
      {
        echo "<br/>number is not a integer";
      }
     ?>
     <h3>
  </body>
</html>
