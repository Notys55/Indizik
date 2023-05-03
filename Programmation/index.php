<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class=" flex row navbar">
        <div class="flex row">
            <div class="logonav"><img src="lecteur/logozic2.png" alt="logo indizik"></div>
            <div class="textnav"><p>INDIZIK</p></div>
        </div>
        <div class="flex row navpage">
            <li>Accueil</li>
            <li>Bibliothèque</li>
            <li>Nouveautés</li>
            <li>Upload</li>
            <li>Forum</li>
            <div class="search">Search</div>
            <div class="modelightsombre"></div>
        </div>
        <div class="profil"></div>
    </div>
    <div class="introduction">
        <div class="texte_intro">
            <h2>Bienvenue sur Indiezik</h2> 

            <p>Vous êtes à la recherche d’un site pour découvrir de nouveaux artistes ? 
            Vous voulez partager votre musique et avoir la possibilité de créer une communauté autour de vous ?

            Indiezik donne cet opportunité a tous et toutes d’écoutez et partagez de la musique indépendant</p>
        </div>
    </div>
    <div class="flex row interraction_page">
        <div class="flex column inter_left">
            <div class="inter_titre"><h2>Création</h2></div>
            <div class="inter_text">
                <p> 
                    Mettez votre musique en ligne et partagez la au monde entier<br>
                    Essayer de nouveaux style<br>
                    N'hésitez pas à en informer votre public
                </p>
            </div>
            <div class="inter_link">
                <a href="Uploads.php" class="button">Mettre en ligne</a>
            </div>

        </div>
        <div class="flex column inter_right">
            <div><h2>Ecoutez/Découvrez</h2></div>
            <div class="search_inter">Search</div>
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
            <div class="inter_link">
                <a href="Bibliotheque.php" class="button">Recherchez</a>
            </div> 
        </div>
    </div>
    <div class="flex column image_banniere">
        <h2>Top indépendant du mois</h2>
        <div class="flex column lignes">
            <div class="flex row ligne1"><p>Sunflower - post malone</p><img src="../Ressources/pochette1.png" alt="pochette musique sunflower"></div>
            <div class="flex row ligne1"><p>Olga - Brav</p><img src="../Ressources/pochette2.png" alt="pochette musique olga"></div>
            <div class="flex row ligne1"><p>Lost cause - Billie Eilish</p><img src="../Ressources/pochette3.png" alt="pochette musique lost cause"></div>
        </div>
    </div>
    <div class="container">
        <div class="carousel">
            <div class="item">
                <div class="item__image">
                    <img src="../Ressources/pochette1.png" alt="pochette sunflower">
                </div>
                <div class="item__body">
                    <div class="item__title">
                        le titre 1
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
    <div class=" flex row navbar">
        <div class="flex row navpage">
            <li>A propos</li>
            <li>Droit d'auteur</li>
            <li>Conditions d'utilisation</li>
            <li>Informations légales</li>
            <li>Gestion des cookies</li>
            <li>Politique des cookies</li>
        </div>
        <div class="flex row social_media">
            <a href="twitter.com"><img src="../Ressources/twitter_icon.png"></a>
            <a href="facebook.com"><img src="../Ressources/facebook_icon.png"></a>
            <a href="instagram.com"><img src="../Ressources/insta_icon.png"></a>
        </div>
    </div>
    </footer>
</body>
</html>