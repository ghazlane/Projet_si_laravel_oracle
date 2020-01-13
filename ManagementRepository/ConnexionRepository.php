<?php 
	class Connexion {
		private $connexion;
    
    public function getConnexion() {


//    	$db_username = "scott";
//		$db_password = "tiztaztoz";

		$db_password = "btna";
        //$db_password = "0628452383moha";
        $db_username = "system";

		$db = "oci:dbname=//localhost:1521/ORCL";
   
        if ($this->connexion == null) {
            $this->connexion = new PDO($db,$db_username,$db_password);
        }
        return $this->connexion;
    }
	}