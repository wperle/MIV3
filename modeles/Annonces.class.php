<?php
/**
 * Class Modele
 * Template de classe modèle. Dupliquer et modifier pour votre usage.
 * 
 * @author Bouchra EL HMIDI
 * @version 1.0
 * @update 2013-07-05
 * 
 */
class Annonces {  
		
    private static $instance = null;
    private $bd;

        private function __construct($base, $param) {

            require_once("../conf/".$param.".inc.php");        

            $this->bd = new mysqli(HOST,USER,PASS,$base);
            $this->bd->set_charset("UTF-8");

            if (!$this->bd) {
                throw new Exception("Connexion Impossible à la base de données : ".HOST);
            }
        }
    
        public static function getInstance($base, $param) {
            if(is_null(self::$instance)) {
                self::$instance = new Annonces($base, $param);
            }
            return self::$instance;
        }

        public function getBD(){
            return $this->bd;
        }
        
        /**
         * Ajout une annonce d'un bien immobilier
         * @access public
         * @todo Description
         *          */
        public function addAnnonce(){
            
        }
 	/**
	 * Retourne un tableau qui contient tous les annonces
	 * @access public
	 * @return Array
	 */
	public function getAnnonces() 
	{
		$aAnnonces = Array();
		$res = $this->getBD()->query("Select * from mi_annonce");
                
		if($this->getBD()->affected_rows >0)
		{
                    $aAnnonces[] = $res->fetch_array(MYSQLI_ASSOC);
		}
		return $aAnnonces;
                
	}
        
 	/**
	 * Retourne un tableau qui contient tous les biens immobiliers
	 * @access public
	 * @return Array
	 */
	public function getBiensImmobiliers() 
	{
		$aBiensImmobiliers = Array();
		$res = $this->getBD()->query("Select ID_typedebien, typedebien from mi_type_debien");
                
		if($this->getBD()->affected_rows >0)
		{
                    $aBiensImmobiliers[] = $res->fetch_array(MYSQLI_ASSOC);
                    
		}
		return $aBiensImmobiliers;
                
	}
}
