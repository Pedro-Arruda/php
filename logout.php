<?php
    session_start();
    $_SESSION["usuario"] = null;

    var_dump($_SESSION["usuario"]);
    header("location: login.php");
?>