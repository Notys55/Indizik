<?php include ('../../header.php')?>
<?php
if ($_POST)
{
    if ( !empty($_POST['name']) && !empty($_POST['author'])){

        // on Upload l'image

        $fileExtensions= ['mp3', 'wav'];

        if($_FILES){

            $oldName = $_FILES['myFile']['name'];
            $getEndOfFileName = explode('.', $oldName);
            $fileExtension = strtolower(end($getEndOfFileName));
            if (in_array($fileExtension, $fileExtensions)){
                $newName = uniqid();
                $newName .= '.' . $fileExtension;
                if (move_uploaded_file($_FILES['myFile']['tmp_name'], "../../../Ressources/uploads/$newName")){

                    $sql = "INSERT INTO musiques (name, author, myFile ) VALUES (?,?,?)";
                    $PDO->prepare($sql)->execute([$_POST['name'], $_POST['author'], $newName]);
                    $message = "Votre fichier à bien était envoyé";
                    Header("Location: upload_form.php?message=$message");
                    exit;
                }
            }
            else{
                $message = "Extensions de fichier non valide";
                header("location: upload_form.php?statut=$message");
            }
        }
        else{
            $message = "Fichier invalide";
            header("location: upload_form.php?statut=$message");
        }
    }
    else
    {
        $message = "Vous n'avez rien selectionner";
        header("location: upload_form.php?statut=$message");
    }
}

?>