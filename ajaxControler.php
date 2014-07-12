<?php

/**
 * Controlleur AJAX. Ce fichier est la porte d'entrée des requêtes AJAX (XHR)
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-03-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */

	require_once("./config.php");

	// Mettre ici le code de gestion de la requête AJAX
        require_once("./var.init.php");
        $oMenuRecherche = new MenuRecherche();

        echo '<option value="tousTypeDeBien"';
        //if ($_POST['tousTypeDeBien']=="tous"){
        //    echo ' selected=\"selected\"';     
        //} else {
        //    echo '';
        //}
        echo '>Toutes</option>';

        foreach($oMenuRecherche->getTypeDeBienParCat($_GET['categorie']) as $aTypeDeBien) {
            echo "
                   <option value=\"".htmlentities($aTypeDeBien[1])."\"
                           name=\"categorie".htmlentities($aTypeDeBien[1])."\"
                 ";
            //if ($_POST['categorie']==$aTypeDeBien[0]){
            //    echo 'selected=\"selected\"';
            //} else {
            //    echo '';
            //}
            echo '>'.htmlentities(ucfirst($aTypeDeBien[0])).'</option>';
        }
?>