<?php
class satvik
{
   public $a;
   public $b;
   function __construct($a,$b)
   {
     $this->a=$a;
     $this->b=$b;

   }
   function add()
   {
     return $this->a+$this->b;
   }
   function __destruct()
   {
     echo "this is {$this->a}";
   }
}
$s=new satvik(40,60);
//echo $s->add();

?>
