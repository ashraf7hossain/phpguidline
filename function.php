<?php
   
    function greet($name){
        echo "Hello ".$name."<br>";
    }
    greet("Ashraf Hossain");

    function fib($x){
        if($x <= 2){
            return $x;
        }
        return fib($x - 1) + fib($x - 2);
    }
    echo fib(9);
?>