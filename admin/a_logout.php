<?php
    require "../config.php";
    $_SESSION = ["uid"];
    session_unset();
    session_destroy();
    header("Location: ../login.php");
?>