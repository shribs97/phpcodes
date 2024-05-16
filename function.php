<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP function</title>
  </head>
  <body>
    <h2>
    <?php
      function sub()
      {
          $a=5;
          $b=7;
          $c=$a-$b;
          echo "Subtraction is $c<br/>";
      }
      sub();
    ?>
    <h2>
  </body>
</html>
