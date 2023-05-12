<?php include ("header.php")?>

    <div class=" flex row navbar">
            <div class="flex row">
            <div class="image_logo"><a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/index.php"><img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/image_logo.png" alt="image logo indizik"></a></div>
            <div class="texte_logo"><a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/index.php"><img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/texte_logo.png" alt="texte logo indizik"></a></div>
            <div class="fin_logo"><a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/index.php"><img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/end_logo.png" alt="fin du logo"></a></div>
            </div>
            <div class="flex row navpage">
                <a href="index.php"class="navlink active">Accueil</a>
                <a href="Bibliotheque"class="navlink">Bibliothèque</a>
                <a href="Nouveautes.php"class="navlink">Nouveautés</a>
                <a href="Upload.php"class="navlink">Upload</a>
                <a href="Forum.php"class="navlink">Forum</a>
                <div class="search">
                    <input type="text" placeholder="Recherche">
                </div>
                <div class="flex row modelightsombre">
                    <img src="../Ressources/sun.png" alt="soleil miniature">
                    <input type="checkbox" class="flex row checkbox" id="chk" />
                    <label class="label" for="chk">
                        <div class="ball"></div>
                    </label>
                    <img src="../Ressources/lune.png" alt="lune miniature">
                </div>
            </div>
            <div class="flex row profil">
                <a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/crud/create/ajouter_user_form.php"class="navlink">Inscription</a>
                <a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/crud/read/login_user_form.php"class="navlink">Connexion</a>
                <a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/logout.php"class="navlink">Déconnexion</a>
            </div>
    </div>
    
    <div class="introduction">
        <div class="texte_intro">
            <h2>Bienvenue sur Indiezik</h2> 

            <p>Vous êtes à la recherche d’un site pour découvrir de nouveaux artistes ? 
            Vous voulez partager votre musique et avoir la possibilité de créer une communauté autour de vous ?

            <p>Indiezik donne cet opportunité a tous et toutes d’écoutez et partagez de la musique indépendant</p>
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
                <a href="Uploads.php" class="inter_link">Mettre en ligne</a>
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
                <div class="flex row ligne1"><p>1 <u>Sunflower - Post malone</u></p><img src="../Ressources/pochette1.png" alt="pochette musique sunflower"></img></div>
                <div class="flex row ligne1"><p>2 <u>Olga - Brav</u></p><img src="../Ressources/pochette2.png" alt="pochette musique olga"></img></div>
                <div class="flex row ligne1"><p>3 <u>Lost cause - Billie Eilish</u></p><img src="../Ressources/pochette3.png" alt="pochette musique lost cause"></img></div>
            </div>
            <div class="flex column vinyl">
                <img src="../Ressources/vinyl_or-removebg-preview.png" alt="vinyl or"></img>
                <img src="../Ressources/vinyl_argent-removebg-preview.png" alt="vinyl argent"></img>
                <img src="../Ressources/vinyl_bronze-removebg-preview.png" alt="vinyl bronze"></img>
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
                            <img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/pochette1.png">
                        </a>
                        <p>
                            Sunflower<br>
                            Post-malone
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/pochette2.png">
                        </a>    
                        <p>
                            Olga<br>
                            Brav
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/pochette3.png">
                        </a>    
                        <p>
                            Power<br>
                            Billie eilish
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/pochette6.png">
                        </a>    
                        <p>
                            Breaking up<br>
                            Jahneration
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/pochette5.png">
                        </a>    
                        <p>
                            Merci<br>
                            Brav
                        </p>
                    </div>
                </div>
                <a href="#slide-2"><img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/fleche_droite.png"></a>
            </div>
            <div id="slide-2">
                <a href="#slide-1"><img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/fleche_gauche.png"></a>
                <div class="flex row carousel_img">
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/pochette4.png">
                        </a>    
                        <p>
                            Bad guy<br>
                            Billie eillish
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/pochette7.png">
                        </a>
                        <p>
                            Inside<br>
                            Bo burnham
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/pochette8.png">
                        </a>
                        <p>
                            Nuclear<br>
                            Mike oldfield
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/pochette9.png">
                        </a>
                        <p>
                            Qui dit mieux<br>
                            Gringe
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/pochette10.png">
                        </a>
                        <p>
                            Jokes on you<br>
                            Charlotte lawrence
                        </p>
                    </div>
                </div>
                <a href="#slide-3"><img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/fleche_droite.png"></a>
            </div>
            <div id="slide-3">
                <a href="#slide-2"><img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/fleche_gauche.png"></a>
                <div class="flex row carousel_img">
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/pochette11.png">
                        </a>
                        <p>
                            13<br>
                            XXX-tentacion
                        </p>
                    </div>
                    <div class="card">
                        <a href="Bibliotheque.php">
                            <img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/pochette12.png">
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
<?php include ("footer.php")?>
