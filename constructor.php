<?php
  class stud
  {
    public $name;
    function __construct($name)
    {
      $this->name=$name;
    }
    function getnm()
    {
      return $this->name;
    }
  }
  $a=new stud("satyajeet");
  echo $a->getnm();

 ?>
