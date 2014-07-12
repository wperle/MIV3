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

class Recherche {

    /**
     * Affiche le contenu de la section recherche
     * @access public
     * 
     */
    public function afficheMenuRecherche() {
		?>
  
    <!-- recherche principale Début -->
    <?php
        $oMenuRecherche = new MenuRecherche();
        //var_dump($oMenuRecherche->getCategories());
    ?>
    <!-- Activation de Event Listener pour recherche -->
    <script src="js/recherche.js"></script>

    <form id="recherche" role="form" method="post" action="fr/resultats.html">
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
                            <select class="form-control" name="categorie" id="categorie">
                                <option value="tous" 
                                    <?php
                                        //if ($_POST['categorie']=="tous"){
                                        //    echo " selected=\"selected\"";     
                                        //} else {
                                        //    echo "";
                                        //}
                                    ?>
                                >Toutes</option>
                                <?php
                                    foreach($oMenuRecherche->getCategories() as $sCategorie) {
                                        echo "
                                               <option value=\"".htmlentities($sCategorie[1])."\"
                                             ";
                                        if ($_POST['categorie']==$sCategorie){
                                            echo "selected=\"selected\"";} else {echo "";} echo ">".htmlentities(ucfirst($sCategorie[0]))."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="typeDeBien">Type de bien</label>
                            
                            <select class="form-control" name="typeDeBien" id="selectCat">
                                <option value="tous">Toutes</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="prix">Prix <span id="prixScriptVal"></span></label>
                            <input type="range" name="prix" id="prix" min="0" max="5" step="1">
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
		<?php
		
	}
	

}
?>