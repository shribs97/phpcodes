<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array in PHP</title>
  </head>
  <body style="background-color:#00FFFF">
    <h3>
    <?php
      $car=array("BMW","RangeRover","Fortuner","Oddy");
      echo "I like " .$car[0]." <br>I love ".$car[1]." and ".$car[2]."<br> Dream car ".$car[3].".";
      echo "<br>Number of elements ".count($car)."";
    ?>
  </h3>
  </body>
</html>
