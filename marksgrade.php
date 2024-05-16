<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Check grade of Stud</title>
  </head>
  <body style="background-color:#4dff4d">
    <h2>
      <form class="" action="marksgrade.php" method="get">
          Advance Java          :
          <input type="text" name="s1" value=""><br>
          Operating System      :
          <input type="text" name="s2" value=""><br>
          Client side Scripting :
          <input type="text" name="s3" value=""><br>
          Software testing      :
          <input type="text" name="s4" value=""><br>
          Enviorment Stuies     :
          <input type="text" name="s5" value=""><br>
          <input type="submit" name="" value="Submit"><br>
      </form>
      <?php
        $a=$_GET["s1"];
        $b=$_GET["s2"];
        $c=$_GET["s3"];
        $d=$_GET["s4"];
        $e=$_GET["s5"];
        $f=$a+$b+$c+$d+$e;
        $g=$f/5;
        echo "persentage Of Student : $g <br/>";
        if($g>=75)
        {
          echo "greade is A";
        }
        elseif($g<75 && $g>=60) {
          echo "Grade is B";
        }
        elseif($g<60 && $g>=40)
        {
          echo "Grade is C";
        }
        else {
          echo "You are fail";
        }
      ?>
    </h2>
  </body>
</html>
