
<?php require_once 'Model/model-profile.php'?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cook</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="icon" type="image/png" href="assets/img/logo.png"/>
</head>
<body id="home">
<header>
    <div id="header">
        <div id="logo">
            <h1><a href="index.php"><img id="logoimg" src="assets/img/logo.png"></a></h1>
            <a id="logo_nom" href="index.php">N'Cook</a>
        </div>
        <div id="access">
            <div id="recherche">
                <input type="text" name="search" value="" placeholder="Recherchez">
            </div>
            <a class="nouvelle_recette_header" href=""><img id="smallplusrouge" src="assets/img/plusrouge.png">Nouvelle Recette</a>
            <div class="dropdown">
                <button class="dropbtn"><?php echo $userRow['user_name']; ?>&nbsp;</button>
                <div class="dropdown-content">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Voir le profil</a></li>
                    <li><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Se déconnecter</a></li>
                </div>
            </div>
        </div>
    </div>



    <nav>
        <ul id="nav">
            <li><a href="#"><img src="assets/img/home.png" alt="homepage"></a></li>
            <li><a href="#">MENUS</a></li>
            <li><a href="#">RECETTES</a></li>
            <li><a href="#">NOUVEAUTÉS</a></li>
            <li><a href="#">RECETTES DE SAISONS</a></li>
            <li><a href="#">COMMUNAUTÉ</a></li>
            <li><a href="#">ASTUCES</a></li>
            <li><a href="#">RECETTES ALÉATOIRES</a></li>
        </ul>
    </nav>
</header>
	<div class="clearfix"></div>

<section id="content_profil">
    <div id="profil_left">
        <img src="assets/img/member10.png">
        <p id="nom">Marine</p>
        <p id="lieu">Paris - Amateur</p>
        <a href="">S'abonner</a>
        <a href="">Contacter</a>
        <div id="infos">
            <div class="nmb_profil">
                <p><span>10</span> recettes</p>
            </div>
            <div class="nmb_profil">
                <p><span>23</span> contributions</p>
            </div>
        </div>
    </div>
    <div id="profil_right">
        <nav>
            <a class="menu_active" id="menu_recette" href="">Recettes</a>
            <a id="menu_favoris" href="">Favoris</a>
        </nav>
        <div id="profil_recette">
            <div class="widget_recette">
                <div class="widget_photo" style="background-image: url(assets/img/plats/02.jpg);"></div>
                <a class="widget_title" href="">Omelette avocat</a>
                <div class="widget_infos">
                    <ul>
                        <li><img src="assets/img/coeur.png"></li>
                        <li>20</li>
                    </ul>
                    <ul>
                        <li><img src="assets/img/pen.png"></li>
                        <li>12</li>
                    </ul>
                </div>
            </div>
            <div class="widget_recette">
                <div class="widget_photo" style="background-image: url(assets/img/plats/03.jpg);"></div>
                <a class="widget_title" href="">Hamburger</a>
                <div class="widget_infos">
                    <ul>
                        <li><img src="assets/img/coeur.png"></li>
                        <li>15</li>
                    </ul>
                    <ul>
                        <li><img src="assets/img/pen.png"></li>
                        <li>4</li>
                    </ul>
                </div>
            </div>
            <div class="widget_recette">
                <div class="widget_photo" style="background-image: url(assets/img/plats/04.jpg);"></div>
                <a class="widget_title" href="">Salade crevettes</a>
                <div class="widget_infos">
                    <ul>
                        <li><img src="assets/img/coeur.png"></li>
                        <li>34</li>
                    </ul>
                    <ul>
                        <li><img src="assets/img/pen.png"></li>
                        <li>9</li>
                    </ul>
                </div>
            </div>
            <div class="widget_recette">
                <div class="widget_photo" style="background-image: url(assets/img/plats/05.jpg);"></div>
                <a class="widget_title" href="">Boeuf épicé</a>
                <div class="widget_infos">
                    <ul>
                        <li><img src="assets/img/coeur.png"></li>
                        <li>23</li>
                    </ul>
                    <ul>
                        <li><img src="assets/img/pen.png"></li>
                        <li>34</li>
                    </ul>
                </div>
            </div>
            <div class="widget_recette">
                <div class="widget_photo" style="background-image: url(assets/img/plats/06.jpg);"></div>
                <a class="widget_title" href="">Oeuf entrée</a>
                <div class="widget_infos">
                    <ul>
                        <li><img src="assets/img/coeur.png"></li>
                        <li>34</li>
                    </ul>
                    <ul>
                        <li><img src="assets/img/pen.png"></li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
            <div class="widget_add">
                <a href=""><img src="assets/img/plusblanc.png"></a>
                <a id="add_new" href="">Nouvelle Recette</a>
            </div>
        </div>
        <!-- <div id="profil_recette">
            <div class="widget_recette">
                <div class="widget_photo" style="background-image: url(img/plats/02.jpg);"></div>
                <a class="widget_title" href="">Omelette avocat</a>
                <div class="widget_infos">
                    <ul>
                        <li><img src="img/coeur.png"></li>
                        <li>20</li>
                    </ul>
                    <ul>
                        <li><img src="img/pen.png"></li>
                        <li>12</li>
                    </ul>
                </div>
            </div>
            <div class="widget_recette">
                <div class="widget_photo" style="background-image: url(img/plats/03.jpg);"></div>
                <a class="widget_title" href="">Hamburger</a>
                <div class="widget_infos">
                    <ul>
                        <li><img src="img/coeur.png"></li>
                        <li>15</li>
                    </ul>
                    <ul>
                        <li><img src="img/pen.png"></li>
                        <li>4</li>
                    </ul>
                </div>
            </div>
            <div class="widget_recette">
                <div class="widget_photo" style="background-image: url(img/plats/04.jpg);"></div>
                <a class="widget_title" href="">Salade crevettes</a>
                <div class="widget_infos">
                    <ul>
                        <li><img src="img/coeur.png"></li>
                        <li>34</li>
                    </ul>
                    <ul>
                        <li><img src="img/pen.png"></li>
                        <li>9</li>
                    </ul>
                </div>
            </div>
            <div class="widget_recette">
                <div class="widget_photo" style="background-image: url(img/plats/05.jpg);"></div>
                <a class="widget_title" href="">Boeuf épicé</a>
                <div class="widget_infos">
                    <ul>
                        <li><img src="img/coeur.png"></li>
                        <li>23</li>
                    </ul>
                    <ul>
                        <li><img src="img/pen.png"></li>
                        <li>34</li>
                    </ul>
                </div>
            </div>
            <div class="widget_recette">
                <div class="widget_photo" style="background-image: url(img/plats/06.jpg);"></div>
                <a class="widget_title" href="">Oeuf entrée</a>
                <div class="widget_infos">
                    <ul>
                        <li><img src="img/coeur.png"></li>
                        <li>34</li>
                    </ul>
                    <ul>
                        <li><img src="img/pen.png"></li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>
</section>

</div>


<script src="bootstrap/js/bootstrap.min.js"></script>
<label class="h5">Bienvenue : <?php print($userRow['user_name']); ?></label>
</body>
</html>