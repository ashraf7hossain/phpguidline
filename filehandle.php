<?php  
    
    echo readfile("files.txt");
    echo "<br>";
    $file = fopen("files.txt" , "r") or die("program crashed");
    while(!feof($file)){
        echo fgets($file)."<br>";
    }
    fclose($file);
   
?>