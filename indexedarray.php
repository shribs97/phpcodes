<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>IndexedArray</title>
  </head>
  <body>
    <?php
      $x=array();
      $x[0]="mango";
      $x[1]="banana";
      $x[2]="apple";
      echo "".$x[2]."";
      echo "array is <br />";
      for($i=0 ; $i < 3;$i++)
      {
        echo $x[$i];
        echo "<br>";
      }
    ?>
  </body>
</html>
