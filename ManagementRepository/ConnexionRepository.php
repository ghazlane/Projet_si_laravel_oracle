<?php 
	class Connexion {
		private $connexion;
    
    public function getConnexion() {
  

    	$db_username = "scott";
		$db_password = "tiztaztoz";


		$db = "oci:dbname=//localhost:1521/ORCL";
   
        if ($this->connexion == null) {
            $this->connexion = new PDO($db,$db_username,$db_password);
        }
        return $this->connexion;
    }
	}