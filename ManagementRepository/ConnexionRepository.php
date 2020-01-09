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
>>>>>>> 4ce445ad68e2177cc288cbfca59bbb53d45b8131

		$db = "oci:dbname=//localhost:1521/ORCL";
   
        if ($this->connexion == null) {
            $this->connexion = new PDO($db,$db_username,$db_password);
        }
        return $this->connexion;
    }
	}