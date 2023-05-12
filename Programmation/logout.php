<?php
    session_start();
    $_SESSION = [];
    session_destroy();
    unset($_SESSION);
    header("location: index.php");
    setcookie (session_id(), "", time() - 3600);
    session_destroy();
    session_write_close();
?>