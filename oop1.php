<?php
    class py
    {
        public $color;
        function get_name($color)
        {
            $this->color=$color;
        }
        function set_name()
        {
            return $this->color;
        }
    }
    $blue=new py();
    $blue->get_name("Green");
    echo $blue->set_name();
 ?>
