<?php include ("../../header.php")?>

<div class=" flex row navbar">
        <div class="flex row">
            <div class="image_logo"><img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/image_logo.png" alt="image logo indizik"></div>
            <div class="texte_logo"><img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/texte_logo.png" alt="texte logo indizik"></div>
            <div class="fin_logo"><img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/end_logo.png" alt="fin du logo"></div>
        </div>
        <div class="flex row navpage">
            <a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/index.php"class="navlink">Accueil</a>
            <a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/Bibliotheque"class="navlink">Bibliothèque</a>
            <a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/Nouveautes.php"class="navlink">Nouveautés</a>
            <a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/Upload.php"class="navlink">Upload</a>
            <a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/Forum.php"class="navlink">Forum</a>
            <div class="search">
                <input type="text" placeholder="Recherche">
            </div>
            <div class="flex row modelightsombre">
                <img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/sun.png" alt="soleil miniature">
                <input type="checkbox" class="flex row checkbox" id="chk" />
	            <label class="label" for="chk">
		            <div class="ball"></div>
	            </label>
                <img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/lune.png" alt="lune miniature">
            </div>
        </div>
        <div class="flex row profil">
            <a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/crud/create/ajouter_user_form.php"class="navlink active">Inscription</a>
            <a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/login.php"class="navlink">Connexion</a>
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
        <h2>Connexion</h2>
        <div class="flex column formulaire">
            <form action="login_user.php" method="post">
                <label><p>Votre Pseudo</p></label>
                <input type="text" name="pseudo">

                <label><p>Votre mot de passe</p></label>
                <input type="text" name="password" name="password">
                
                <div class="button">
                <input type="submit" class="inter_link" value="Envoyer">
                </div>
            </form>
    </div>