<?php require_once 'includes/header.php' ?>
    <div id="carousel">
        <ul>
            <li>
                <img src="img/slide.png">
                <h2>Recettes aux framboises</h2>
                <h3>Un amour de framboise</h3>
            </li>
        </ul>
    </div>

    <section id="choix">
        <div id="gris">
            <div class='contenu'>
                <ul>
                    <li class="carre"><div class="textcarre"><a href="#">APÉRITIFS</a></div></li><li>
                    <img src="img/entrée.png" alt=""></li><li class="carre"><div class="textcarre"><a href="#">PLATS</a></div></li><li>
                    <img src="img/desserts.png" alt=""></li>
                </ul><ul>
                <li><img src="img/aperitif.png" alt=""></li><li class="carre"><div class="textcarre"><a href="#">ENTRÉES</a></div></li><li>
                <img src="img/plats.png" alt=""></li><li class="carre"><div class="textcarre"><a href="#">DESSERTS</a></div></li>
            </ul>
            </div>

        </div>
    </section>

    <section id="recette">
        <div id="depot">
            <ul>
                <li class="rectanglevertdepot"><div class="textdepot">DÉPOSER UNE RECETTE</div></li>
                <li><img src="img/trianglevert.png" alt=""></li>
                <li><p>Devenez membre de la communauté N’Cook en ajoutant votre propre recette !</p></li>
                <li><a class="home_new_recette" href="#">Nouvelle Recette</a></li>

            </ul>
        </div>
        <div id="affichage">
            <div class="contenuaffichage">
            <div class="affichagerecette">
            <ul>
                <li><img src="img/recettepimenté.png" alt=""></li>
                <li><h3>Recette allégée</h3></li>
                <li><p>Nos recettes pour maigrir</p></li>
                <li class="rectanglerouge"><div class="textrecette"><a href="#">RECETTES</a></div></li>
            </ul>
            </div>
            <div class="affichagerecette2">
                <ul>
                    <li><img src="img/recettepimenté.png" alt=""></li>
                    <li><h3>Recette allégée</h3></li>
                    <li><p>Nos recettes pour maigrir</p></li>
                    <li class="rectanglerouge"><div class="textrecette"><a href="#">RECETTES</a></div></li>
                </ul>
            </div>
            </div>
        </div>
    </section>

    <section id="recette2">
        <div id="affichage2">
            <div class="contenuaffichage">
                <div class="affichagerecette">
                    <ul>
                        <li><img src="img/recettepimenté.png" alt=""></li>
                        <li><h3>Recette allégée</h3></li>
                        <li><p>Nos recettes pour maigrir</p></li>
                        <li class="rectanglerouge"><div class="textrecette"><a href="#">RECETTES</a></div></li>
                    </ul>
                </div>
                <div class="affichagerecette2">
                    <ul>
                        <li><img src="img/recettepimenté.png" alt=""></li>
                        <li><h3>Recette allégée</h3></li>
                        <li><p>Nos recettes pour maigrir</p></li>
                        <li class="rectanglerouge"><div class="textrecette"><a href="#">RECETTES</a></div></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="depot2">
            <ul>
                <li class="rectanglevertdepot"><div class="textdepot">NEWSLETTER</div></li>
                <li><img src="img/trianglevert.png" alt=""></li>
                <li><p>Abonnez-vous à notre newsletter et recevez toute notre actualité</p></li>
                <li><input class="mail" type="text" name="search" value="" placeholder="Votre adresse mail"></li>
            </ul>
        </div>
    </section>

    <section id="membres">
        <div id="contenumembre">
            <h2>DEVENEZ MEMBRE DE LA COMMUNAUTÉ</h2>
            <div class="imagesmembres">
                <ul>
                    <li><a href=""><img src="img/member.png" alt=""></a></li>
                    <li><a href=""><img src="img/member2.png" alt=""></a></li>
                    <li><a href=""><img src="img/member3.png" alt=""></a></li>
                </ul>
                <ul>
                    <li><a href=""><img src="img/member4.png" alt=""></a></li>
                    <li><a href=""><img src="img/member5.png" alt=""></a></li>
                    <li><a href=""><img src="img/member6.png" alt=""></a></li>
                </ul>
                <ul>
                    <li><a href=""><img src="img/member7.png" alt=""></a></li>
                    <li><a href=""><img src="img/member8.png" alt=""></a></li>
                    <li><a href=""><img src="img/member9.png" alt=""></a></li>
                </ul>
            </div>
            <div class="informationmembre">
                <ul>
                    <li><p><img src="img/plusrouge.png" alt="" /> Déposez vos recettes</p></li>
                    <li><p><img src="img/like.png" alt="" /> Notez les propositions d’ingrédients</p></li>
                    <li><p><img src="img/share-arrow.png" alt="" /> Partagez à vos proches</p></li>
                </ul>
            </div>
        </div>
    </section>

    <?php require_once 'includes/footer.php'?>

    <section id="fiche_recette">
        <div id="recette_left">
            <a class="like" href=""><i class="flaticon-like"></i></a>
            <div class="share">
                <a href=""><img srimg/print.png"></a>
                <a href=""><img srimg/send.png"></a>
            </div>
        </div>
        <div id="recette_right">
            <div id="recette_title_div">
                <p class="categorie_title">Entrée <a href="profil.php">par Marine</a></p>
                <h2>Tartelettes au saumon</h2>
                <div id="recette_sous">
                    <ul>
                        <li>Parts <br><span>4 pers</span></li>
                        <li>Temps <br><span>60 min</span></li>
                        <li>Budget <br><span>20€</span></li>
                        <li>Difficulté <br><span>Facile</span></li>
                    </ul>
                </div>
                <a class="cross" href=""><img src="img/cross.png"></a>
            </div>
            <div id="recette_tache_div">
                <nav>
                    <a class="menu_active" id="menu_recette" href="">Recettes</a>
                    <a id="menu_favoris" href="">Favoris</a>
                </nav>

                <div id="les_ingredients">
                    <ul>
                        <li class="ing">4 tartines de pain complet <a href=""><img class="plusingredients" src="img/plusingredients.png"></a>
                            <div>
                                <ul class="propositions">
                                    <li>4 tartines de pain complet <i class="flaticon-star"></i> <span class="propo_nmb">23</span></li>
                                    <li>6 tartines de pain complet <i class="flaticon-star"></i> <span class="propo_nmb">12</span></li>
                                    <li>5 tartines de pain complet <i class="flaticon-star"></i> <span class="propo_nmb">7</span></li>
                                    <li class="new_propo"><a href="">Faire une proposition</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="ing">6 tranches de saumon fumé <a href=""><img class="plusingredients" src="img/plusingredients.png"></a></li>
                        <li class="ing">2 concombres <a href=""><img class="plusingredients" src="img/plusingredients.png"></a></li>
                        <li class="ing">20g de pistaches <a href=""><img class="plusingredients" src="img/plusingredients.png"></a></li>
                        <li class="ing">100g de crème fraîche <a href=""><img class="plusingredients" src="img/plusingredients.png"></a></li>
                        <li class="ing">coriandre</li>
                        <li class="ing">sel, poivre</li>
                    </ul>
                </div>
                <div id="les_etapes">
                    <ul>
                        <li><span>étape 1</span><br><br><p>Sed laeditur hic coetuum magnificus splendor levitate paucorum incondita, ubi nati sunt non reputantium.</p></li>
                        <li><span>étape 2</span><br><br><p>Ultima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam egregias, nullam nulli cedentem sed sibi.</p></li>
                        <li><span>étape 3</span><br><br><p>Caesaream, quam ad honorem Octaviani principis exaedificavit Herodes, et Eleutheropolim et Neapolim itidemque Ascalonem Gazam aevo superiore exstructas. Nunc vero inanes flatus quorundam vile esse quicquid extra urbis pomerium nascitur aestimant praeter orbos et caelibes, nec credi potest qua obsequiorum diversitate coluntur homines sine liberis Romae.</p></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <script src="../js/jquery-1.11.3-jquery.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>