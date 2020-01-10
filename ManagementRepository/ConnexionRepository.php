<?php 
	class Connexion {
		private $connexion;
    
    public function getConnexion() {
  

<<<<<<< HEAD
    	$db_username = "scott";
		$db_password = "tiztaztoz";

=======
    	//$db_username = "scott";
		//$db_password = "tiztaztoz";
    	$db_username = "system";

		//$db_password = "btna";
        $db_password = "0628452383moha";
>>>>>>> 3f8177c7c0765bd8f1f9af2519cee74534655cdb

		$db = "oci:dbname=//localhost:1521/ORCL";
   
        if ($this->connexion == null) {
            $this->connexion = new PDO($db,$db_username,$db_password);
        }
        return $this->connexion;
    }
	}