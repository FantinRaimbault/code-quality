<?php

namespace App;

class Toto{
     public $_name;
    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function hello(){
        echo 'hello ' . $this->name;
    }
}
