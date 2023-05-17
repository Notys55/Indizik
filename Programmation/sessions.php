<?php session_start();?>
<?php
    if(!isset($_SESSION['login']))
    {
            
            if(!$_SESSION['login'])
            {
                header("location: http://127.0.0.1/tp/orphelinat1/login.php");
            }
    }
?>