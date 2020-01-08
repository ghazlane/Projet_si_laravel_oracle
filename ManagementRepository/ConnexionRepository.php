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
>>>>>>> 2b7bb2681db31c24961557c07953360d70855526

		$db = "oci:dbname=//localhost:1521/ORCL";
   
        if ($this->connexion == null) {
            $this->connexion = new PDO($db,$db_username,$db_password);
        }
        return $this->connexion;
    }
	}