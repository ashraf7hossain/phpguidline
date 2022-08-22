<?php 
    abstract class Car{
        public $name;
        public function __construct($name){
            $this->name = $name;
        }
        abstract public function intro() : string;
    }

    class Audi extends Car{
        public function intro() : string {
            return "German Quality!!";
        }
    }
    class Ferrari extends Car{
        public function intro() : string {
            return "Italian Style !!";
        }
    }

    $audi = new Audi("Audi R8");

    echo $audi->intro()."<br>";

    $ferrari = new Ferrari("Ferrari Enzo");

    echo $ferrari->intro();
?>