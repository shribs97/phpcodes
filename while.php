<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>While Loop</title>
  </head>
  <body style="background-color:pink">
    <h2>
    <?php
      $a=1;
      echo "Odd number between 1 to 100 <br />";
      do
      {
          $a+=2;
          echo "$a ";
          if($a%11==0)
          {
            echo"<br>";
          }
      }while($a<=98);
    ?></h2>
  </body>
</html>
