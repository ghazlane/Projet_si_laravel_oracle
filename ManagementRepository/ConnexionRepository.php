<?php 
	class Connexion {
		private $connexion;
    
    public function getConnexion() {

    	$db_username = "system";
		$db_password = "0628452383moha";

		$db = "oci:dbname=//localhost:1521/ORCL";
   
        if ($this->connexion == null) {
            $this->connexion = new PDO($db,$db_username,$db_password);
        }
        return $this->connexion;
    }
	}