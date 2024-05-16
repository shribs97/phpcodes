<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Associated Arrat</title>
  </head>
  <body style="background-color:green">
    <h3>
        <?php
        //  $age=array();
          $age["Shridatta"]=20;
          $age["Akash"]=22;
          $age["Nikhil"]=18;
          echo "Shridatta is".$age["Shridatta"]." Akash is ".$age["Akash"]." Nikhils age is ".$age["Nikhil"]."";

          echo "<br />------------*----------------------------*----------------/------------*-----------------------";
          echo "<br />Loop with associeted array <br />";
          foreach($age as $x =>$val)
          {
            echo "key ".$x." Value ".$val."";
            echo "<br />";

          }
        ?>

    </h3>
  </body>
</html>
