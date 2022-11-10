<?php
    require "./config.php";
    $_SESSION = ["id"];
    session_unset();
    session_destroy();
    header("Location: login.php");
?>