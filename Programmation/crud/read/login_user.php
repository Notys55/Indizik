<?php include ("../../header.php");?>

<?php
    if(!empty($_POST['pseudo']) && !empty($_POST['password']))
    {
        $request = $PDO->query('SELECT * FROM user WHERE pseudo = "'.$_POST['pseudo'].'"');
        $user = $request->fetch();

        if($user)
        {
            if(password_verify($_POST['password'], $user['password']))
            {
                session_start();
                $_SESSION['login'] = true;
                header("location: ../../index.php");
                exit;
            }
            else
            {
                $message = "Erreur il y a une erreur dans votre pseudo ou mot de passe";
                header("location: Programmation/crud/login_user_form.php?statut=$message");
            }
        }
    }
?>
