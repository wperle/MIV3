<?php

/**
 * Description of Annonces
 *
 * @author travail d'équipe
 */
class Annonces {
    private $DB;
            
	function __construct ()
	{
            $this->DB = BD::getInstance("e1295793", "dbconnect");
            
	}
        
        public function getAnnonces(){
            
            $aAnnonces = Array();
            $res = $this->DB->getBD()->query("SELECT *
                                             FROM  `mi_annonce` a, mi_statut s, mi_type_debien b
                                             WHERE a.ID_statut = s.ID_statut
                                             AND a.ID_typedebien = b.ID_typedebien");
            
            if($this->DB->getBD()->affected_rows >0)
            {
                while($rs = $res->fetch_array(MYSQLI_ASSOC)){                        
                      $aAnnonces[] = $rs;
                }                   
            }
            $res->free_result();
            return $aAnnonces;            
        }
	
        function addAnnonce($data) {
            /**
             *  Protèger les chaines contres les attaques : "Sécurité, Les failles XSS"              
             */
//            $rue = $this->DB->real_escape_string($data['rue']);
//            $description = $this->DB->escape_string($data['description']);
          
//            $this->DB->getBD()->autocommit(FALSE);
            /**
             * ajouter l'adresse dans la table adresse
             */            
            $req_adr = "INSERT INTO `mi_adresse` (
                    `ID_adresse` ,
                    `no_rue` ,
                    `rue` ,
                    `codepostal` ,
                    `ID_ville`
                    )
                    VALUES (NULL , "
                            .$data['numero'].", '"
                            .$data['rue']."', '" 
                            .$data['codePostal']."', '"
                            .$data['ville']."'); ";
                    $this->DB->getBD()->query($req_adr);
                    $last_ID_adresse = $this->DB->getBD()->insert_id;  
                
             /**
             * ajouter une annonce d'un bien immobilier
             */
            $today = date("Y-m-d");             
            $ID_user = 6;            
            $statut='off';
            if (empty($data['anneeEvaluation'])){ $data['anneeEvaluation']=0;};
            if (empty($data['evaluationBatisse'])){ $data['evaluationBatisse']=0;};
            if (empty($data['evaluationTerrain'])){ $data['evaluationTerrain']=0;};
            
            $req_annonce = "INSERT INTO `mi_annonce` (
                    `ID_annonce` ,
                    `Date_annonce` ,
                    `prix` ,
                    `ID_statut` ,
                    `ID_user` ,
                    `ID_adresse` ,
                    `ID_typedebien`,
                    `nb_chambre` ,
                    `nb_salledebains` ,
                    `nb_pieces` ,
                    `info_general` ,
                    `superficie_habitable` ,
                    `annee_construction`,
                    `annee_evaluation`,
                    `evaluation_dubatiment`,
                    `evaluation_duterrain`,
                    `etat`
                    )
                    VALUES (NULL , '"
                             .$today."', "
                             .$data['prix'].", "
                             .$data['transaction'].", '" 
                             .$ID_user."', '"
                             .$last_ID_adresse."', '"
                             .$data['typeDeBien']."', '"
                             .$data['nbrChambre']."', '"
                             .$data['nbrSalleBain']."',"
                             .$data['nbrPiece'].",'"
                             .$data['description']."',"
                             .$data['superficie'].",'"
                             .$data['anneeConstruction']."','"
                             .$data['anneeEvaluation']."','"
                             .$data['evaluationBatisse']."', '"
                             .$data['evaluationTerrain']."', '"
                             .$statut."'); ";

                $this->DB->getBD()->query($req_annonce);
                
                if($this->DB->getBD()->affected_rows >0)
		{
                    return $ajout=TRUE;
                } else {
                    return $ajout=FALSE;
                }
		
//                echo "req1:".$req_adr." req2 :".$req_annonce;
//                $nb=$nb+$this->BD->getBD()->affected_rows;
//                echo 'nb : '.$nb;
                
//                if($nb==2){
//                    $this->DB->getBD()->commit();
//                    return TRUE;
//                } else {
//                    $this->DB->getBD()->rollback();
//                    return FALSE;
//                }
        }
}

?>
