<?php 
   
   $date = Date("d/m/Y");
   $time = date("h:m:sa"); //global time 
   echo $date."<br>";
   echo $time."<br>";   
   date_default_timezone_set("Asia/Dhaka");
   $time = date("h:m:sa"); // setting timezone

   echo $time;

?>