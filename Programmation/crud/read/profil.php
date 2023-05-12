<?php include ("../../header.php");?>

    <div class=" flex row navbar">
        <div class="flex row">
            <div class="image_logo"><a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/index.php"><img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/image_logo.png" alt="image logo indizik"></a></div>
            <div class="texte_logo"><a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/index.php"><img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/texte_logo.png" alt="texte logo indizik"></a></div>
            <div class="fin_logo"><a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/index.php"><img src="http://127.0.0.1/2023/Indizik_2.0/Indizik/Ressources/end_logo.png" alt="fin du logo"></a></div>
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
            <a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/crud/read/profil.php"class="navlink active">Profil</a>
            <a href="http://127.0.0.1/2023/Indizik_2.0/Indizik/Programmation/logout.php"class="navlink">Déconnexion</a>
        </div>
    </div>
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
    <div class="carousel">
    <h1>Favoris</h1>
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

<?php include ("../../footer.php");?>