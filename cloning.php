<?php
 class  x
{
  public $nm;
   function cy($nm)
   {
     $this->nm=$nm;
   }
   function ty()
   {
     return $this->nm;
   }
}
$p=new x();
$p->cy("s");
echo $p->ty();

 ?>
