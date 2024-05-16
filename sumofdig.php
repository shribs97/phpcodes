<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">0
    <title>Sum Of DIGITS</title>
  </head>
  <body style="background-color:#FFFF00">
    <form class="" action="sumofdig.php" method="get">
      Enter a Number :
      <input type="text" name="t1" value=""><br>
      <input type="Submit" name="" value="Submit">

    </form>
    <br>
    <?php
      $a=$_GET["t1"];
      $dig=0;
      $sum=0;
      while($a>1)
      {
        $dig=$a%10;
        $sum +=$dig;
        $a /=10;
      }
      echo "Sum OF DIGITS IS $sum";
     ?>
  </body>
</html>
