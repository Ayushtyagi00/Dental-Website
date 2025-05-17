<?php
    session_start(); 

    if(isset($_SESSION["userid"])) 
    {
        unset($_SESSION["userid"]);
        unset($_SESSION["username"]);
        session_destroy();
        header("location: index.php");
        exit; 
    }

    // This condition is not necessary, you can remove it
    if(isset($_SESSION["userid"]))
        header("location: index.php");
?>