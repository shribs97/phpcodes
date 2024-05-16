<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Convert Currancy</title>
  </head>
  <body>
    <form class="" action="currancyconv.php" method="get" method="post">
      ₹INR :
      <input type="text" name="t1" value="">
      <input type="submit" name="" value="Submit">

    </form>
    <?php
      $a=$_GET["t1"];
      $b=76;
      $c=$a*$b;
      echo "INR $a = $ USD $c"
    ?>
  </body>
</html>
