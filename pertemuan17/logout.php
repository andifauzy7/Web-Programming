<?php
    session_start();
    // Jika USER telah melakukan Login.
    if( !isset($_SESSION["login"]) ){
        header("Location: login.php");
        exit;
    }
    $_SESSION = [];
    session_destroy();
    setcookie( "login","",time()-3600 );
    setcookie( "keyname","",time()-3600 );
    header("Location: login.php");
?>