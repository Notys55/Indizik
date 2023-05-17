<?php include ('../../header.php');?>

<?php

    if( !empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['email'])&& !empty($_POST['nickname']) && !empty($_POST['name']) )
    {
        $email = $_POST['email'];
        $verifUser = $PDO ->query('SELECT COUNT(*) FROM user WHERE email = "' .$email.'"');
        $verifUserNombre = $verifUser->fetch();
        if($verifUserNombre[0] == 0)
        {
            try
            {
                $mdp = password_hash($_POST['password'], PASSWORD_ARGON2I);
                $requete = $PDO->prepare("INSERT INTO user(pseudo, password, email, nickname, name) VALUES ( ?, ?, ?, ?, ?)");
                $sql = $requete->execute([$_POST['pseudo'], $mdp, $_POST['email'],$_POST['nickname'],$_POST['name']]);

                $message = "Vous avez bien était enregistrer";
                header("location: profil.php?message=$message");
                exit;
            }
            catch (PDOException $e) 
            {
                echo $e->getMessage();
            }

        }
        else
        {
            $message = "il y a une erreur";
            header("location: ajouter_user_form.php?statut=$message");
        }
    }
    else
    {
        $message = "veuillez remplir correctement le formulaire";
        header("location: ajouter_user_form.php?statut=$message");
    }



?>