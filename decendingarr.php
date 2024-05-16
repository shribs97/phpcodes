<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Decending array</title>
  </head>
  <body style="background-color:#FFFF00">
    <h3>
      <?php
          $a=array("Satyajeet"=>19314,"Sohel"=>19304,"Vijay"=>19305,"Rupesh"=>19306);
          arsort($a);
          echo "Decending order by value <br />";
          foreach($a as $x=>$y)
          {
              echo "Key=".$x." Value".$y."<br />";
          }
          echo "Decending order by key<br /><br>";
          krsort($a);
          foreach($a as $x=>$y)
          {
              echo "Key=".$x." Value = ".$y."<br />";
          }
       ?></h3>
  </body>
</html>
