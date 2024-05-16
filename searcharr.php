<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $arr=array("red","green","blue","orange");
        if(in_array("red",$arr))
        {
            echo "Match found";
        }
        else
        {
            echo "Match not found";
        }
        echo "**************************************************<br><br>";
        $a=array("a"=>"red","b"=>"green","c"=>"blue");
        echo array_search("green",$a);
     ?>
  </body>
</html>
