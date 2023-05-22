<?php session_start();?>
<?php
    if(!isset($_SESSION['login']))
    {
            
            if(!$_SESSION['login'])
            {
                header("location: login_user_form.php");
            }
    }
?>