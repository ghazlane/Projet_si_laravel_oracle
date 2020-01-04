<?php 
	class Connexion {
		private $connexion;
    
    public function getConnexion() {
  
<<<<<<< HEAD
    	$db_username = "scott";
		$db_password = "tiztaztoz";
=======
    	$db_username = "system";
		$db_password = "0628452383moha";
>>>>>>> 24854130f185de7b68c1aa0007d0245e9f540c05

		$db = "oci:dbname=//localhost:1521/ORCL";
   
        if ($this->connexion == null) {
            $this->connexion = new PDO($db,$db_username,$db_password);
        }
        return $this->connexion;
    }
	}