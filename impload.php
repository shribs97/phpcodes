<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
          $arr=array("Shridatta","satyajeet","satvik");
          $s=implode(" | ",$arr);
          echo "$s";
          echo "<br><br /> ********************************************<br>";
          $x=join("***",$arr);
          echo "$x";
      ?>
  </body>
</html>
