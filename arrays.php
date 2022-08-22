<?php 
    $arr = array(2 , 3 , 5 , 7 , 11, 13 ,17, 19);

    echo $arr[0]." ".$arr[4]."<br>"; // prints 1st and 5th element of the array

    array_push($arr , 23); // pushing 23 at the end of the array

    var_dump($arr);

    echo "<br>";

    $arr2 = array(
        "name" => "Ashraf Hossain",
        "age" => "23",
        "id"  => "BS1199",
    );
    echo $arr2['name']."<br>";
    foreach($arr2 as $key=>$value){
        echo $key." : ".$value."<br>";
    }
  
?>