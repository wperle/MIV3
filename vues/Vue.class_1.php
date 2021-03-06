<?php
/**
 * Class Vue
 * Template de classe Vue. Dupliquer et modifier pour votre usage.
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */


class Vue {

	/**
	 * Affiche le header 
	 * @access public
	 * 
	 */
    public function afficheHeader() {
		?>
		<html lang="fr">

        <head>
            <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
            <meta content="width=device-width, initial-scale=1" name="viewport">
            <meta name="description" content="Dans le secteur de l’immobilier en leur offrant un portail de l’immobilier qui leur permet de publier leurs produits et services." />
            <meta name="keywords" content="mon immobilier" />
            <meta name="author" content="Mehdi Ghazisaeedi" />
            <link href="img/ico/favicon.ico" rel="shortcut icon">

            <title>monimmobilier - accueil</title>

            <!-- Bootstrap core CSS -->
            <link rel="stylesheet" href="css/bootstrap.min.css">

            <!-- Custom styles for this template -->
            <link rel="stylesheet" href="css/navbar-fixed-top.css">
            <link rel="stylesheet" href="css/main.css">



            <!-- Chargement police Lato  -->
            <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
            <!-- Chargement font-awesome  -->
            <link href="css/font-awesome.css" rel="stylesheet">
            <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
            
            <!-- Just for debugging purposes. Don't actually copy this line! -->
            <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
        </head>

		<?php
		
	}
    
    /**
	 * Affiche le navigateur
	 * @access public
	 * 
	 */
    public function afficheNavigateur() {
		?>
		
        <body>
            <!-- nav -->
            <div role="navigation" class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.php?page=accueil" class="navbar-brand navbarLogo"></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.php?page=accueil">
                                    <span class="glyphicon glyphicon-home"></span>
                                </a>
                            </li>
                        </ul>
<!--                        </li>
                        </ul>-->
                        <form action="espaceAgence/index.html" class="navbar-form navbar-left" role="form">
                            <div class="form-group">
                                <input type="text" placeholder="Courriel" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Mot de passe" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Connexion</button>
                            <div class="form-group divCreerCompte"><a href="fr/creationcompte.html"><p>Créer un</p><p>compte</p></a></div>
                        </form>

                        <nav>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Acheter
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Résidentielle</a>
                                        </li>
                                        <li>
                                            <a href="#">Commerciale</a>
                                        </li>
                                        <li>
                                            <a href="#">Multi logement</a>
                                        </li>
                                        <li>
                                            <a href="#">Terrain</a>
                                        </li>
                                        <li>
                                            <a href="#">Ferme</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Vendre
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Notre offre</a>
                                        </li>
                                        <li>
                                            <a href="#">Inscrivez votre propriété</a>
                                        </li>
                                        <li>
                                            <a href="#">Devenir un courtier</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="fr/forfaits.html">Nos Forfaits</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--/nav -->
		<?php
		
	}
    
    
	
    	/**
	 * Affiche le pied de page 
	 * @access public
	 * 
	 */
    public function affichePiedPage() {
		?>
		<!--Debut du footer-->
    <footer>
        <div class="container">
            <!--Debut de la section class container-->
            <div class="row">
                <!--Debut du row pour le footer-->
                <article class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!--Debut de la premiere colonne Mon Immobilier et les coordonnees-->
                    <h1>Mon Immobilier</h1>
                    <!--Adresse et lien vers google maps-->
                    <a href="https://www.google.ca/maps/preview?source=newuser-ws">
                        <p>1910, Rue du Centre</p>
                        <p>Montréal</p>
                        <p>Quebec H3k 1h9</p>
                    </a>
                    <p>
                        <i>
                            <span class="glyphicon glyphicon-earphone"></span> (514) 649-1630</i>
                    </p>
                    <p>
                        <i>
                            <span class="glyphicon glyphicon-envelope"></span> admin@moimmobilier.ca</i>
                    </p>

                </article>
                <!--Fin de la premiere colonne Mon Immobilier et les coordonnees-->

                <article class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!--Debut de la deuxieme colonne pages-->
                    <h1>Pages</h1>
                    <ul>
                        <li>
                            <a href="#">À Propos</a>
                        </li>
                        <li>
                            <a href="./Blog/index.html">Blog</a>
                        </li>
                        <li>
                            <a href="#">Termes et conditions</a>
                        </li>
                        <li>
                            <a href="#">Politique de confidentialité</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </article>
                <!--Fin de la deuxieme colonne pages-->

                <article class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!--Debut de la troisieme colonne des dernieres publications-->
                    <h1>Dernières publications</h1>
                    <ul>
                        <li>
                            <a href="#">Renover Sa Maison</a>
                        </li>
                        <li>
                            <a href="#"></a>Decorer son Chez Soi</li>
                        <li>
                            <a href="#">Utiliser Paypal</a>
                        </li>
                        <li>
                            <a href="#">Guide Pour Louer un Bien</a>
                        </li>
                        <li>
                            <a href="#">La satisfaction de nos clients</a>
                        </li>
                    </ul>
                </article>
                <!--Fin de la troisieme colonne des dernieres publications-->

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!--Debut de la quatrieme colonne des flickrs-->
                    <h1>Suivez-Nous!</h1>
                    <ul>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--Fin de la quatrieme colonne des flickrs-->
            </div>
            <!--Fin du row pour le footer-->
        </div>
        <!--Fin de la section class container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p id="copyright">monimmobilier.ca © 2014 Tous droits réservés</p>
                </div>
            </div>
        </div>

    </footer>

    <!--Fin du footer-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- Activation de carousel -->
    <script src="js/carousel.js"></script>

</body>

</html>
		<?php
		
	}
    
    /**
	 * Affiche le contenu de la page Accueil 
	 * @access public
	 * 
	 */
    public function afficheContenuAccueil() {
		?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="brand">monimmobilier
                    <span class="domain">.ca</span>
                </h1>
            </div>
        </div>
    </div>
    <!-- recherche principale Début -->
    <form id="recherche" role="form" action="fr/resultats.html">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="chercheTexte">Chercher par ville, rue ou code postal</label>
                        <input type="text" class="form-control" id="chercheTexte" placeholder="Où?">
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="categorie">Catégorie</label>
                            <select class="form-control" id="categorie">
                                <option value="tousCategorie" selected>Toutes</option>
                                <option value="residentielle">Résidentielle</option>
                                <option value="commerciale">Commerciale</option>
                                <option value="multiLogement">Multi logement</option>
                                <option value="terrain">Terrain</option>
                                <option value="ferme">Ferme</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="typeDeBien">Type de bien</label>
                            <select class="form-control" id="typeDeBien">
                                <option value="tousTypeDeBien" selected>Toutes</option>
                                <option value="appartement">Appartement</option>
                                <option value="condo">Condo</option>
                                <option value="maison">Maison</option>
                                <option value="chalet">Chalet</option>
                                <option value="bungalow">Bungalow</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="prix">Prix</label>
                            <input type="range" name="prix" id="prix" min="0" max="10" step="2">
                        </div>
                        <div class="form-group">
                            <label for="chambres">Chambres</label>
                            <select class="form-control" id="chambres">
                                <option value="0" selected>0 et +</option>
                                <option value="1">1 et +</option>
                                <option value="2">2 et +</option>
                                <option value="3">3 et +</option>
                                <option value="4">4 et +</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sallesDeBain">Salles de bain</label>
                            <select class="form-control" id="sallesDeBain">
                                <option value="0" selected>0 et +</option>
                                <option value="1">1 et +</option>
                                <option value="2">2 et +</option>
                                <option value="3">3 et +</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="filtrer">
                    <div class="form-group">
                        <label for="FiltrerResultats">Filtrer les résultats</label>
                        <select class="form-control" id="FiltrerResultats">
                            <option value="tous" selected>Tous</option>
                            <option value="vendre">À vendre</option>
                            <option value="louer">À louer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="TrierResultats">Trier les résultats</label>
                        <select class="form-control" id="TrierResultats">
                            <option value="MoinsCher" selected>Moins cher en premier</option>
                            <option value="PlusCher">Plus cher en premier</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" id="lancerRecherche" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <span class="glyphicon glyphicon-search"></span>Lancer la recherche</button>
            </div>
        </div>
    </form>
    <!-- recherche principale fin -->

    <div class="container" id="accueil">
        <!-- carousel principale début -->
        <!-- source: http://webdesign.tutsplus.com/articles/twitter-bootstrap-101-the-carousel--webdesign-7442-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="carrouselPhotos" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/slide/slide1.jpg" alt="Montréal, QC H3E 0B3" />
                            <div class="carousel-caption">
                                <p>111 Ch. de la Pointe-Nord 501, Montréal, QC H3E 0B3</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slide/slide2.jpg" alt="Montréal, QC H3E 0B3" />
                            <div class="carousel-caption">
                                <p>111 Ch. de la Pointe-Nord 501, Montréal, QC H3E 0B3</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slide/slide3.jpg" alt="Montréal, QC H3E 0B3" />
                            <div class="carousel-caption">
                                <p>111 Ch. de la Pointe-Nord 501, Montréal, QC H3E 0B3</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slide/slide4.jpg" alt="Montréal, QC H3E 0B3" />
                            <div class="carousel-caption">
                                <p>111 Ch. de la Pointe-Nord 501, Montréal, QC H3E 0B3</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slide/slide5.jpg" alt="Montréal, QC H3E 0B3" />
                            <div class="carousel-caption">
                                <p>111 Ch. de la Pointe-Nord 501, Montréal, QC H3E 0B3</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control left" href="#carrouselPhotos" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#carrouselPhotos" data-slide="next">&rsaquo;</a>
                </div>
            </div>
        </div>
    </div>
    <!-- carousel principale fin -->


    <!-- Les panneaux début -->
    <div class="container">
        <div class="row panneaux">
            <!-- acticle principal début -->
            <article>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-acheter">
                        <div class="panel-heading">
                            <h1 class="panel-title">ACHETER UNE PROPRIÉTÉ</h1>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Résidentielle</a>
                                </li>
                                <li>
                                    <a href="#">Commerciale</a>
                                </li>
                                <li>
                                    <a href="#">Multi logement</a>
                                </li>
                                <li>
                                    <a href="#">Terrain</a>
                                </li>
                                <li>
                                    <a href="#">Ferme</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-vendre">
                        <div class="panel-heading">
                            <h1 class="panel-title">VENDRE MA PROPRIÉTÉ</h1>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Notre offre</a>
                                </li>
                                <li>
                                    <a href="#">Nos programmes exclusifs</a>
                                </li>
                                <li>
                                    <a href="#">Inscrivez votre propriété</a>
                                </li>
                                <li>
                                    <a href="#">Devenir un courtier</a>
                                </li>
                                <li>
                                    <a href="#">Guide de vente</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-apropos">
                        <div class="panel-heading">
                            <h1 class="panel-title">À PROPOS DE MONIMMOBILIER.CA</h1>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Profil</a>
                                </li>
                                <li>
                                    <a href="#">Nous joindre</a>
                                </li>
                                <li>
                                    <a href="#">Nos Courtiers</a>
                                </li>
                                <li>
                                    <a href="#">Liens immobiliers</a>
                                </li>
                                <li>
                                    <a href="#">Avis Légaux</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            <!-- acticle principal fin -->
        </div>
    </div>
    <!-- Les panneaux fin -->

    <!-- article 2 début -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <article>
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                            <img src="img/logo/monimmobilier_logo.png" id="monimmobilierLogo" alt="monimmobilier">
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                            <h1>NOTRE VISION</h1>
                            <p>Développement d’une clientèle dans le secteur de l’immobilier en leur offrant un portail de l’immobilier qui leur permet de publier leurs produits et services.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2>POURQUOI monimmobilier.ca ?</h2>
                            <ul>
                                <li>Faciliter la location, vente et achat des biens immobiliers entre clients et agences.</li>
                                <li>Créer un espace vendeur pour les agences immobilières et les particuliers ou ils pourront ajouter et faire des mises à jour de leurs biens.</li>
                                <li>Créer un espace pour les demandeurs (à travers un formulaire d'inscription) d'un bien en particulier.</li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>

            <!-- article 2 fin -->

            <!-- aside principal début -->

            <aside>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title">VISITES LIBRES</h1>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <p class="date">17</p>
                                        <p class="mois">juin</p>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <a href="#">121, Rue Roger, Duvernay</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <p class="date">16</p>
                                        <p class="mois">juin</p>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <a href="#">692, 36e Avenue, Lachine</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <p class="date">15</p>
                                        <p class="mois">juin</p>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <a href="#">5614, Rue Condor, Brossard</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <p class="date">14</p>
                                        <p class="mois">juin</p>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <a href="#">568, Rue Chénier, Granby</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
        </aside>
    </div>
    <!-- aside principal fin -->
		<?php
		
	}
	

}
?>