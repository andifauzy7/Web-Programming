<?php
    session_start();
    // Jika USER telah melakukan Login.
    if( !isset($_SESSION["login"]) ){
        header("Location: login.php");
        exit;
    }
    $_SESSION = [];
    session_destroy();
    header("Location: login.php");
?>