<?php 
    session_start();
    if (!isset($_SESSION["auth"]) or $_SESSION["auth"] !== true) {
        header("location: /index.php", true, 302);
        exit;
    }