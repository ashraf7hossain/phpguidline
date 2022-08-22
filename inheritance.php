<?php 
    include("constructor.php");

    class StrawBerry extends Fruit{
        function message(){
            echo "I am a berry fruit";
        }
    }

    $fruit = new Strawberry("Straberry" , "red");
    echo $fruit->message();

?>