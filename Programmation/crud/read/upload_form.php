<?php include ("../../header.php")?>
<?php
if ($_POST){
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
                if (move_uploaded_file($_FILES['myFile']['tmp_name'], "Ressources/uploads/$newName")){

                    $sql = "INSERT INTO musiques (name, author, myFile ) VALUES (?,?,?)";
                    $pdo->prepare($sql)->execute([$_POST['name'], $_POST['author'], $newName]);
                    $message = "Extensions de fichier non valide";
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
            throw new Exception('Fichier absent');
        }



    }
}
?>

<div class=" flex row navbar">
        <div class="flex row">
            <div class="image_logo"><a href="Programmation/index.php"><img src="Ressources/image_logo.png" alt="image logo indizik"></a></div>
            <div class="texte_logo"><a href="Programmation/index.php"><img src="Ressources/texte_logo.png" alt="texte logo indizik"></a></div>
            <div class="fin_logo"><a href="Programmation/index.php"><img src="Ressources/end_logo.png" alt="fin du logo"></a></div>
        </div>
        <div class="flex row navpage">
            <a href="Programmation/index.php"class="navlink">Accueil</a>
            <a href="Programmation/Bibliotheque"class="navlink">Bibliothèque</a>
            <a href="Programmation/Nouveautes.php"class="navlink">Nouveautés</a>
            <a href="Programmation/crud/read/upload_form.php"class="navlink active">Upload</a>
            <a href="Programmation/Forum.php"class="navlink">Forum</a>
            <div class="search">
                <input type="text" placeholder="Recherche">
            </div>
            <div class="flex row modelightsombre">
                <img src="Ressources/sun.png" alt="soleil miniature">
                <input type="checkbox" class="flex row checkbox" id="chk" />
	            <label class="label" for="chk">
		            <div class="ball"></div>
	            </label>
                <img src="Ressources/lune.png" alt="lune miniature">
            </div>
        </div>
        <div class="flex row profil">
            <a href="Programmation/crud/create/ajouter_user_form.php"class="navlink">Inscription</a>
            <a href="Programmation/login.php"class="navlink">Connexion</a>
        </div>
    </div>

    <div class="flex column bloc_blanc">
    <div class="flex row texte-info">
                <div class="text-success">
                    <?php 
                        if(isset($_GET['message']))
                        {
                            echo $_GET['message'];
                        }
                        ?>
                </div>
                <div class="text-danger">
                    <?php
                        if(isset($_GET['statut']))
                        {
                            echo $_GET['statut'];
                        }
                    ?>
                </div>
    </div>
    <form action="Programmation/crud/read/upload.php" method="post" enctype="multipart/form-data">
        <label><p>Déposez votre fichier ici</p></label>
        <input type="file" name="myFile">
        <label><p>Votre nom</p></label>
        <input type="text" name="name">
        <label><p>Auteur / autrice du fichier</p></label>
        <input type="text" name="author">
        <label><p>Date de création</p></label>
        <input type="date" name="date">
        <div class="button">
            <input type="submit" name="submit" class="inter_link" value="Envoyer">
        </div>
    </form>        
</div>