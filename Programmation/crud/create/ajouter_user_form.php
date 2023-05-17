<?php include ('../../header.php');?>

<div class=" flex row navbar">
        <div class="flex row">
            <div class="image_logo"><img src="Ressources/image_logo.png" alt="image logo indizik"></div>
            <div class="texte_logo"><img src="Ressources/texte_logo.png" alt="texte logo indizik"></div>
            <div class="fin_logo"><img src="Ressources/end_logo.png" alt="fin du logo"></div>
        </div>
        <div class="flex row navpage">
            <a href="Programmation/index.php"class="navlink">Accueil</a>
            <a href="Programmation/Bibliotheque"class="navlink">Bibliothèque</a>
            <a href="Programmation/Nouveautes.php"class="navlink">Nouveautés</a>
            <?php
                if(isset($_SESSION['login'])){
                if($_SESSION['login']){
            ?>
            <a href="Programmation/crud/read/upload_form.php"class="navlink">Upload</a>
            <?php
            }}
            ?>
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
            <a href="Programmation/crud/create/ajouter_user_form.php"class="navlink active">Inscription</a>
            <a href="Programmation/crud/read/login_user_form.php"class="navlink">Connexion</a>
            <?php
                if(isset($_SESSION['login'])){
                if($_SESSION['login']){
            ?>
            <a href="Programmation/logout.php"class="navlink">Déconnexion</a>
            <?php
            }}
            ?>
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
    <div class="flex column formulaire">
    <h2>Inscription</h2>
    <form action="Programmation/crud/create/ajouter_user.php" method="post">
        <label><p>Pseudo</p></label>
        <input type="text" name="pseudo">

        <label><p>Mail de l'utilisateur / utilisatrice</p></label>
        <input type="text" name="email">

        <label><p>Mot de passe de l'utilisateur / utilisatrice</p></label>
        <input type="text" name="password">

        <label><p>Prénom de l'utilisateur / utilisatrice</p></label>
        <input type="text" name="nickname">

        <label><p>Nom de l'utilisateur / utilisatrice</p></label>
        <input type="text" name="name">
        <div class="button">
            <input type="submit" class="inter_link" value="Envoyer">
        </div>
    </form>

    </div>

</div>