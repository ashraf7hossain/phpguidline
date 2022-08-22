<?php 
    class Fruit{
        public $name;
        public $color;
        function setName($name){
            $this->name = $name;
        }
        function getName(){
            return $this->name;
        }
    }

    $apple = new Fruit(); // calling object
    $apple->setName("Mango");
    echo $apple->getName();

?>