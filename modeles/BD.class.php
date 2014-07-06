<?php

class BD {

    private static $instance = null;
    private $db;

        private function __construct($base, $param) {

            require_once("../conf/".$param.".inc.php");        

            $this->db = new mysqli(HOST,USER,PASS,$base);
            $this->db->set_charset("UTF-8");

            if (!$this->db) {
                throw new Exception("Connexion Impossible à la base de données : ".HOST);
            }
        }
    
        public static function getInstance($base, $param) {
            if(is_null(self::$instance)) {
                self::$instance = new BD($base, $param);
            }
            return self::$instance;
        }

        public function getBD(){
            return $this->db;
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
        


}
?>
