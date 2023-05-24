<?php include ("header.php")?>

    <div class=" flex row navbar">
            <div class="flex row logo">
            <div class="image_logo"><a href="Programmation/index.php"><img src="Ressources/image_logo.png" alt="image logo indizik"></a></div>
            <div class="texte_logo"><a href="Programmation/index.php"><img src="Ressources/texte_logo.png" alt="texte logo indizik"></a></div>
            <div class="fin_logo"><a href="Programmation/index.php"><img src="Ressources/end_logo.png" alt="fin du logo"></a></div>
            </div>
            <div class="flex row navpage">
                <a href="Programmation/index.php"class="navlink active">Accueil</a>
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
                <a href="Programmation/maintenance.php"class="navlink">Forum</a>
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
                                <li><a href="Programmation/crud/read/login_user_form.php"class="navlink">Connexion</a></li>
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
    
    <div class="introduction">
        <div class="texte_intro">
            <h2>Bienvenue sur Indiezik</h2> 

            <p>Vous êtes à la recherche d’un site pour découvrir de nouveaux artistes ? 
            Vous voulez partager votre musique et avoir la possibilité de créer une communauté autour de vous ?

            <p>Indiezik donne cet opportunité à tous et toutes d’écoutez et partagez de la musique indépendant</p>
        </div>
    </div>
    <div class="flex row interraction_page">
        <div class="flex column inter_left">

            <div class="flex column inter_text">
                <div><h2>Création</h2></div>
                    <div>
                        <p>Mettez votre musique en ligne et partagez la au monde entier
                        Essayer de nouveaux style</p>
                        <p>N'hésitez pas à en informer votre public</p>
                    </div>
                    <a href="Programmation/crud/read/upload_form.php" class="inter_link">Mettre en ligne</a>
            </div>
        </div>
        <div class="flex column inter_right">
            <div><h2>Écoutez/Découvrez</h2></div>
            <input class="search_inter" type="text" placeholder="Recherche">
            <select class="selecteur">
                <option value="">style de musique</option>
                <option value="rock">Rock</option>
                <option value="reggae">Reggae</option>
                <option value="electro">Electro</option>
                <option value="jazz">Jazz</option>
                <option value="house">House</option>
                <option value="rap">Rap</option>
                <option value="kpop">k/pop</option>
            </select>
                <a href="Bibliotheque.php" class="inter_link">Recherchez</a>
        </div>
    </div>
    <div class="flex column image_banniere">
        <h2>Top indépendant du mois</h2>
        <div class="flex row lignes">
            <div class="flex column">
                <div class="flex row ligne1"><p>1 <u>Sunflower - Post malone</u></p><img src="Ressources/pochette1.png" alt="pochette musique sunflower"></img></div>
                <div class="flex row ligne1"><p>2 <u>Olga - Brav</u></p><img src="Ressources/pochette2.png" alt="pochette musique olga"></img></div>
                <div class="flex row ligne1"><p>3 <u>Lost cause - Billie Eilish</u></p><img src="Ressources/pochette3.png" alt="pochette musique lost cause"></img></div>
            </div>
            <div class="flex column vinyl">
                <img src="Ressources/vinyl_or-removebg-preview.png" alt="vinyl or"></img>
                <img src="Ressources/vinyl_argent-removebg-preview.png" alt="vinyl argent"></img>
                <img src="Ressources/vinyl_bronze-removebg-preview.png" alt="vinyl bronze"></img>
            </div>
        </div>
    </div>

    <div class="carousel">
    <h1>Sorties récentes</h1>
        <div class="slides">
            <div id="slide-1">
                <div class="flex row carousel_img">
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="Ressources/pochette1.png">
                        </a>
                        <p>
                            Sunflower<br>
                            Post-malone
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="Ressources/pochette2.png">
                        </a>    
                        <p>
                            Olga<br>
                            Brav
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="Ressources/pochette3.png">
                        </a>    
                        <p>
                            Power<br>
                            Billie eilish
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="Ressources/pochette6.png">
                        </a>    
                        <p>
                            Breaking up<br>
                            Jahneration
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="Ressources/pochette5.png">
                        </a>    
                        <p>
                            Merci<br>
                            Brav
                        </p>
                    </div>
                </div>
                <a href="Programmation/#slide-2"><img src="Ressources/fleche_droite.png"></a>
            </div>
            <div id="slide-2">
                <a href="Programmation/#slide-1"><img src="Ressources/fleche_gauche.png"></a>
                <div class="flex row carousel_img">
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="Ressources/pochette4.png">
                        </a>    
                        <p>
                            Bad guy<br>
                            Billie eillish
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="Ressources/pochette7.png">
                        </a>
                        <p>
                            Inside<br>
                            Bo burnham
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="Ressources/pochette8.png">
                        </a>
                        <p>
                            Nuclear<br>
                            Mike oldfield
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="Ressources/pochette9.png">
                        </a>
                        <p>
                            Qui dit mieux<br>
                            Gringe
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="Ressources/pochette10.png">
                        </a>
                        <p>
                            Jokes on you<br>
                            Charlotte lawrence
                        </p>
                    </div>
                </div>
                <a href="Programmation/#slide-3"><img src="Ressources/fleche_droite.png"></a>
            </div>
            <div id="slide-3">
                <a href="Programmation/#slide-2"><img src="Ressources/fleche_gauche.png"></a>
                <div class="flex row carousel_img">
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="Ressources/pochette11.png">
                        </a>
                        <p>
                            13<br>
                            XXX-tentacion
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="Ressources/pochette12.png">
                        </a>
                        <p>
                            The book of souls<br>
                            Iron maiden
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php include ("lecteur.php");?>
<?php include ("footer.php");?>
