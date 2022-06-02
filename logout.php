<?php
    session_start();

$page = "logout"; 
    if(session_destroy()){
        
        header("Location: login.php");
    }
?>