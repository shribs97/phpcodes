<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sort array</title>
  </head>
  <body><h3>
    <?php
        $fruits=array("mango","orange","banana","apple","pineapple");
        sort($fruits);
        echo "Sorted array assending";
        for($i=0;$i<5;$i++)
        {
           echo "".$fruits[$i]."<br />";
        }
        echo "Sorted array in decending<br />";
        rsort($fruits);
        for($i=0;$i<5;$i++)
        {
            echo "".$fruits[$i]."<br />";
        }
    ?></h3>
  </body>
</html>
