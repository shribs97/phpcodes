<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>multidim</title>
  </head>
  <body style="background-color:#00FFFF">
      <h3>
          <?php
            $arr=array(
              array("Shridatta",19305,"TYCO"),
              array("Satayjeet",19314,"TYCO"),
              array("Satvik",19313,"TYCO"),
              array("Sohel",19304,"TYCO")
              );
            echo $arr[0][0]." ".$arr[0][1]." ".$arr[0][2]."<br>";
            echo $arr[1][0]." ".$arr[1][1]." ".$arr[1][2]."<br>";
            echo $arr[2][0]." ".$arr[2][1]." ".$arr[2][2]."<br>";
            echo $arr[3][0]." ".$arr[3][1]." ".$arr[3][2]."<br>";

          ?>

      </h3>
  </body>
</html>
