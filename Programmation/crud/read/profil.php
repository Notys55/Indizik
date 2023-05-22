<?php include ("../../header.php");?>
<?php include ("../../sessions.php");?>

<div class=" flex row navbar">
            <div class="flex row logo">
            <div class="image_logo"><a href="Programmation/index.php"><img src="Ressources/image_logo.png" alt="image logo indizik"></a></div>
            <div class="texte_logo"><a href="Programmation/index.php"><img src="Ressources/texte_logo.png" alt="texte logo indizik"></a></div>
            <div class="fin_logo"><a href="Programmation/index.php"><img src="Ressources/end_logo.png" alt="fin du logo"></a></div>
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
                                    <li><a href="Programmation/crud/read/profil.php"class="navlink active">Profil</a></li>
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
                <a href="Programmation/crud/read/profil.php/#slide-2"><img src="Ressources/fleche_droite.png"></a>
            </div>
            <div id="slide-2">
                <a href="Programmation/crud/read/profil.php/#slide-1"><img src="Ressources/fleche_gauche.png"></a>
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
                <a href="Programmation/crud/read/profil.php/#slide-3"><img src="Ressources/fleche_droite.png"></a>
            </div>
            <div id="slide-3">
                <a href="Programmation/crud/read/profil.php/#slide-2"><img src="Ressources/fleche_gauche.png"></a>
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
        <div class="historique">

        </div>
        <div class="playlists">

        </div>
    </div>

<?php include ("../../footer.php");?>