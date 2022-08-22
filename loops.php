<?php  
   
   for ($i=1; $i <=10 ; $i++) { 
     echo "7 x ".$i." = " .($i*7)."<br>";
   }

   $cars = array("toyota" , "mercedes" , "bmw" , "audi");

   foreach ($cars as $key => $value) {
    echo $value." ";
   }

?>