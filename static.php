<?php 
    class Greet{
        public static $name = "Ashraf Hossain"; //static property
        public static function Welcome(){       //static method 
            echo "Hello , Welcome ".self::$name."<br";
        }
    }
    // Greet::Welcome();
    Greet::Welcome();
?>