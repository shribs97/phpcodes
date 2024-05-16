<?php
Class A
{
    function dis1()
    {
       echo "GrandParrent<br>";
    }

}
class b extends A
{
    function dis()
    {
        echo "Parrent <br>";

    }

}
class c extends b
{
  function d3()
  {
     echo "Child";
  }
}
$x1=new c();
echo $x1->dis1();
echo $x1->dis();
echo $x1->d3();
 ?>
