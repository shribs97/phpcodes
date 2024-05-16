<?php
    class A
    {
       function no()
       {
          echo "This is parent";
       }
    }
    class C extends A
    {
        function no()
        {
           echo "This is child";
        }

    }
    $x=new C();
    $x->no();
 ?>
