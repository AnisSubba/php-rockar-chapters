<?php

session_start();
# to make sure it is an admin

if (!isset($_SESSION['isAdmin']) || 
    $_SESSION['isAdmin'] != 1) {
        header('Location: login.php');
        #if not send to login page
    }
?>