<?php include ("../../header.php")?>

<div class=" flex row navbar">
            <div class="flex row logo">
            <div class="image_logo"><a href="Programmation/index.php"><img src="Ressources/image_logo.png" alt="image logo indizik"></a></div>
            <div class="texte_logo"><a href="Programmation/index.php"><img src="Ressources/texte_logo.png" alt="texte logo indizik"></a></div>
            <div class="fin_logo"><a href="Programmation/index.php"><img src="Ressources/end_logo.png" alt="fin du logo"></a></div>
            </div>
            <div class="flex row navpage">
                <a href="Programmation/index.php"class="navlink">Accueil</a>
                <a href="Programmation/maintenance.php"class="navlink">Bibliothèque</a>
                <a href="Programmation/maintenance.php"class="navlink">Nouveautés</a>
                <?php
                session_start();
                if(isset($_SESSION['login'])){
                if($_SESSION['login']){
                ?>
                <a href="Programmation/crud/read/upload_form.php"class="navlink">Upload</a>
                <?php
                }
                }
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
                <div class="flex row profil">
                    <ul>
                        <li class=" deroulant navlink">Mon compte
                            <ul class="sous">
                                <?php
                                    if(isset($_SESSION['login'])){
                                    if($_SESSION['login']){
                                    ?>
                                    <li><a href="Programmation/crud/read/profil.php"class="navlink">Profil</a></li>
                                    <?php
                                    }}
                                ?>
                                <li><a href="Programmation/crud/create/ajouter_user_form.php"class="navlink">Inscription</a></li>
                                <li><a href="Programmation/crud/read/login_user_form.php"class="navlink active">Connexion</a></li>
                                <?php
                                    if(isset($_SESSION['login'])){
                                    if($_SESSION['login']){
                                    ?>
                                    <li><a href="Programmation/logout.php"class="navlink">Déconnexion</a></li>
                                    <?php
                                    }}
                                ?>
                            </ul>
                        </li>

                    </ul>
                </div>
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
            <form action="Programmation/crud/read/login_user.php" method="post">
                <label><p>Votre Pseudo</p></label>
                <input type="text" name="pseudo">

                <label><p>Votre mot de passe</p></label>
                <input type="text" name="password" name="password">
                
                <div class="button">
                <input type="submit" class="inter_link" value="Envoyer">
                </div>
            </form>
    </div>