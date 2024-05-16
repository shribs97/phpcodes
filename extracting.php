<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Extract method</title>
  </head>
  <body>
    <?php
        $arr=array("a"=>"apple","b"=>"banana","d"=>"Cherry");
        extract($arr);
        echo "\$a=$a \$b=$b \$d=$d  ";


     ?>
  </body>
</html>
