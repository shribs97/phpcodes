<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $arr=array("a"=>"apple","b"=>"ball","c"=>"cat");
      $res=array_flip($arr);
      print_r($res);
      echo "<br>";
      foreach($arr as $x=>$y)
      {
        echo "Key=".$x."  val ".$y."<br>";

      }

    ?>
  </body>
</html>
