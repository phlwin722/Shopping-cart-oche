<?php 
    session_start();
    session_destroy();
    header("Location: /shopping-cart-oche/Project/login/signin.php");
?>