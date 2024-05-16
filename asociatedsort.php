<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sorting Associated array</title>
  </head>
  <body style="background-color:#FFFF00">
    <h2>
    <?php
          $a=array("name"=>"satyajeet","rollno"=>19305,"address"=>19314);
          asort($a);
          echo "Assending order by Value <br />";
          foreach($a as $x => $y)
          {
              echo "key=".$x.", value =".$y."<br />";
          }
          ksort($a);
          echo "Assending order by key <br />";
          foreach($a as $x => $y)
          {
              echo "key=".$x.", value =".$y."<br />";
          }
     ?></h2>

  </body>
</html>
