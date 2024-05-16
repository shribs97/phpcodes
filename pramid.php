<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Piramid in php</title>
  </head>
  <body>
    <h2>
      <?php
        $a=5;
        $b=($a*2)-1;
        $i=1;
        $c=1;
        while($a>=1)
        {
           while($c>=1)
           {
             echo " ";
             if($c==$a)
             {
               echo "*";
             }
             $c++;
           }
        }
      ?>

    </h2>
  </body>
</html>
