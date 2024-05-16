<?php
  class fruits
  {
      public $name;

      function set_name($name)
      {
        $this->name=$name;
      }
      function get_name()

      {
        return $this->name;
      }

  }
  $apple= new fruits();
  $apple->set_name("Apple");
  echo $apple->get_name();
echo "<br>";

$banana=new fruits();
$banana->set_name("Shridatta");
echo $banana->get_name();

 ?>
