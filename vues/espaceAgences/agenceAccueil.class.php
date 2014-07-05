<?php 
/**
 * Description of agenceAccueil
 *
 * @author belhmidi
 */
class agenceAccueil {
    
    public function afficheAgenceAccueil() {
?>       
        <div class="container-fluid block3">
            <!-- sidebar -->
            <div class="col-lg-4 col-md-4 col-sm-12  col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                          Recherche rapide
                      </h3>
                    </div>
                    <div class="panel-body">
                        Pour une recherche rapide
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Moteur de recherche</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            les critères de selection à insèrer.
                        </p>
                        <p>
                            Permet à l'agence de chercher une ou des annonce(s)
                            d'un bien précise
                        </p>
                    </div>
                </div>
            </div>
            <!-- fin sidebar -->
            <!-- contenu du centre (article)-->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <!--  <h2 class="sub-header">Section title</h2> -->

                <div class="row">
                    <div class="col-xs-12 col-lg-4 col-lg-offset-8 well well-sm ajouterannonce">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object pull-left icone" src="./img/adminAgence/add.png">
                            </a>
                            <div class="media-body">
                                <p class="media-heading">
                                    <a class="pull-left" href="index.php?page=agenceAccueil&section=ajoutAnnonce">
                            Ajouter une annonce
                            </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="table-responsive ">
                    <table class="table table-striped">          
                        <tbody>
                            <tr>
                                <td>Réf.1</td>
                                <td>
                                    Duplex, Isolé
                                    <br/>Résidentielle seulement
                                    <br/>Revenue bruts potentiel : 12 560$
                                </td>
                                <td>
                                    <a href="#">
                                        <img class="icone" data-toggle="modal" data-target="#myModal1" src="./img/adminAgence/upload.png">
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?page=agenceAccueil&section=visionner">
                                        <img class="icone" src="./img/adminAgence/visionner.png">
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?page=agenceAccueil&section=modifier">
                                        <img class="icone" src="./img/adminAgence/modifier.jpg">
                                    </a>
                                </td>
                                <td>
                                    <button data-toggle="modal" href="#desactiver">
                                        <img class="icone" src="./img/adminAgence/desactiver.jpg">
                                    </button>
                                    <div class="modal" id="desactiver" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">x</button>
                                                    <h3 class="media-heading text-danger">Votre annonce est désactivée</h3>

                                                </div>
                                                <div class="modal-body">
                                                    <div class="media">
                                                        <img class="img-thumbnail" src="./img/adminAgence/maison.png">
                                                        <div class="media-body pull-left">
                                                            <span class="media-heading ">Votre annonce n'est plus visible sur le site</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button data-toggle="modal" href="#infos">
                                        <img class="icone" src="./img/adminAgence/remove.png">
                                    </button>
                                    <div class="modal" id="infos" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <div class="media">
                                                        <img class="pull-left" src="./img/adminAgence/supp-icn.png">
                                                        <div class="media-body">
                                                            <h3 class="media-heading text-danger">Êtes-vous sûr de supprimer l'annonce suivante</h3>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-body">
                                                    <div class="media">
                                                        <img class="img-responsive img-thumbnail" src="./img/adminAgence/maison.png">
                                                        <div class="media-body pull-left">
                                                            <span class="media-heading ">Ref.2 Duplex, Isolé<br/>
                                        Résidentielle seulement<br/>
                                        Revenus bruts potentiels : 12 560$</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Supprimer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Réf.2</td>
                                <td>
                                    Duplex, Isolé
                                    <br/>Résidentielle seulement
                                    <br/>Revenue bruts potentiel : 12 560$
                                </td>
                                <td>
                                    <a href="#">
                                        <img class="icone" data-toggle="modal" data-target="#myModal1" src="./img/adminAgence/upload.png">
                                    </a>
                                </td>
                                <td>
                                    <a href="page_agence/visionner.html">
                                        <img class="icone" src="./img/adminAgence/visionner.png">
                                    </a>
                                </td>
                                <td>
                                    <a href="page_agence/modifier.html">
                                        <img class="img-responsive icone" src="./img/adminAgence/modifier.jpg">
                                    </a>
                                </td>
                                <td>
                                    <button data-toggle="modal" href="#desactiver">
                                        <img class="icone" src="./img/adminAgence/desactiver.jpg">
                                    </button>
                                    <div class="modal" id="desactiver" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">x</button>
                                                    <h3 class="media-heading text-danger">Votre annonce est désactivée</h3>

                                                </div>
                                                <div class="modal-body">
                                                    <div class="media">
                                                        <img class="img-responsive img-thumbnail" src="./img/adminAgence/maison.png">
                                                        <div class="media-body pull-left">
                                                            <span class="media-heading ">Votre annonce n'est plus visible sur le site</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button data-toggle="modal" href="#infos">
                                        <img class="icone" src="./img/adminAgence/remove.png">
                                    </button>
                                    <div class="modal" id="infos" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <div class="media">
                                                        <img class=" pull-left" src="./img/adminAgence/supp-icn.png">
                                                        <div class="media-body">
                                                            <h3 class="media-heading text-danger">Êtes-vous sûr de supprimer l'annonce suivante</h3>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-body">
                                                    <div class="media">
                                                        <img class="img-responsive img-thumbnail" src="./img/adminAgence/maison.png">
                                                        <div class="media-body pull-left">
                                                            <span class="media-heading ">Ref.2 Duplex, Isolé<br/>
                                        Résidentielle seulement<br/>
                                        Revenus bruts potentiels : 12 560$</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Supprimer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Réf.3</td>
                                <td>
                                    Duplex, Isolé
                                    <br/>Résidentielle seulement
                                    <br/>Revenue bruts potentiel : 12 560$
                                </td>
                                <td>
                                    <a href="#">
                                        <img class="img-responsive icone" data-toggle="modal" data-target="#myModal1" src="./img/adminAgence/upload.png">
                                    </a>
                                </td>
                                <td>
                                    <a href="page_agence/visionner.html">
                                        <img class="icone" src="./img/adminAgence/visionner.png">
                                    </a>
                                </td>
                                <td>
                                    <a href="page_agence/modifier.html">
                                        <img class="img-responsive icone" src="./img/adminAgence/modifier.jpg">
                                    </a>
                                </td>
                                <td>
                                    <button data-toggle="modal" href="#desactiver">
                                        <img class="icone" src="./img/adminAgence/desactiver.jpg">
                                    </button>
                                    <div class="modal" id="desactiver" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">x</button>
                                                    <h3 class="media-heading text-danger">Votre annonce est désactivée</h3>

                                                </div>
                                                <div class="modal-body">
                                                    <div class="media">
                                                        <img class="img-responsive img-thumbnail" src="./img/adminAgence/maison.png">
                                                        <div class="media-body pull-left">
                                                            <span class="media-heading ">Votre annonce n'est plus visible sur le site</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button data-toggle="modal" href="#infos">
                                        <img class="icone" src="./img/adminAgence/remove.png">
                                    </button>
                                    <div class="modal" id="infos" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <div class="media">
                                                        <img class="img-responsive  pull-left" src="./img/adminAgence/supp-icn.png">
                                                        <div class="media-body">
                                                            <h3 class="media-heading text-danger">Êtes-vous sûr de supprimer l'annonce suivante</h3>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-body">
                                                    <div class="media">
                                                        <img class="img-thumbnail" src="./img/adminAgence/maison.png">
                                                        <div class="media-body pull-left">
                                                            <span class="media-heading ">Ref.2 Duplex, Isolé<br/>
                                        Résidentielle seulement<br/>
                                        Revenus bruts potentiels : 12 560$</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Supprimer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <tr>
                                    <td>Réf.4</td>
                                    <td>
                                        Duplex, Isolé
                                        <br/>Résidentielle seulement
                                        <br/>Revenue bruts potentiel : 12 560$
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img class="img-responsive icone" data-toggle="modal" data-target="#myModal1" src="./img/adminAgence/upload.png">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="page_agence/visionner.html">
                                            <img class="icone" src="./img/adminAgence/visionner.png">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="page_agence/modifier.html">
                                            <img class="img-responsive icone" src="./img/adminAgence/modifier.jpg">
                                        </a>
                                    </td>
                                    <td>
                                        <button data-toggle="modal" href="#desactiver">
                                            <img class="icone" src="./img/adminAgence/desactiver.jpg">
                                        </button>
                                        <div class="modal" id="desactiver" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">x</button>
                                                        <h3 class="media-heading text-danger">Votre annonce est désactivée</h3>

                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="media">
                                                            <img class="img-responsive img-thumbnail" src="./img/adminAgence/maison.png">
                                                            <div class="media-body pull-left">
                                                                <span class="media-heading ">Votre annonce n'est plus visible sur le site</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <button data-toggle="modal" href="#infos">
                                            <img class="icone" src="./img/adminAgence/remove.png">
                                        </button>
                                        <div class="modal" id="infos" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <div class="media">
                                                            <img class=" pull-left" src="./img/adminAgence/supp-icn.png">
                                                            <div class="media-body">
                                                                <h3 class="media-heading text-danger">Êtes-vous sûr de supprimer l'annonce suivante</h3>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="media">
                                                            <img class="img-responsive img-thumbnail" src="./img/adminAgence/maison.png">
                                                            <div class="media-body pull-left">
                                                                <span class="media-heading ">Ref.2 Duplex, Isolé<br/>
                                        Résidentielle seulement<br/>
                                        Revenus bruts potentiels : 12 560$</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Supprimer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- / block3-->

        <div class="container">

        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

 <!-- / Espace agence -->


    </div>
    <hr/>

        
<?php
     
    }
}
