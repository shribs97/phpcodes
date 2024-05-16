<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Leap year</title>
  </head>
  <body style="background-color:#FFFF00">
    <h3>
    <form class="" action="leapyear.php" method="get" method="post">
      Enter year:
      <input type="text" name="t1" value=""><br>
      <input type="submit" name="t2" value="Submit"><br>
      
      </h3>

    </form>
    <?php
      $a=$_GET["t1"];
      if($a%4==0)
      {
        echo"Year is leap";
      }
      else {
        echo"Year is not leap";
      }
     ?>

  </body>
</html>
