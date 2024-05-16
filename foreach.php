<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>For each Loop</title>
  </head>
  <body style="background-color:blue">
    <h2>
      <?php
        echo "for loop <br />";
         for($i=0;$i<=10;$i++)
         {
           echo "$i <br />";

         }

         echo "<br /><br />for each loop <br><br>";
         $color=array("red","green","blue","yellow");
         foreach($color as  $x )
         {
            echo "$x ";
         }

      ?>

    </h2>
  </body>
</html>
