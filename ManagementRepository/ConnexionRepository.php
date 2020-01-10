<?php 
	class Connexion {
		private $connexion;
    
    public function getConnexion() {
  

<<<<<<< HEAD
    	$db_username = "scott";
		$db_password = "tiztaztoz";

=======
    	$db_username = "system";
		$db_password = "btna";
        //$db_password = "0628452383moha";
>>>>>>> 24b5de0fc134846b2925d4011191a9bc47c0b5d3

		$db = "oci:dbname=//localhost:1521/ORCL";
   
        if ($this->connexion == null) {
            $this->connexion = new PDO($db,$db_username,$db_password);
        }
        return $this->connexion;
    }
	}