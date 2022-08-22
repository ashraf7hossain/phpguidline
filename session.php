<?php 
    session_start();

    $_SESSION['name'] = "Ashraf";
    $_SESSION['pass'] = "Hossain";

    echo $_SESSION['name'].$_SESSION["pass"];

?>