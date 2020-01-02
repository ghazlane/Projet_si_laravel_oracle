<?php
require_once ("Models/Invention.php");
class InventionRepository {

    /** Objet PDO d'accès à la BD */
    private $connexion;
    
    private function getConnexion() {
    	$db_username = "system";
		$db_password = "btna";
		$db = "oci:dbname=//localhost:1521/ORCL";
   
        if ($this->connexion == null) {
            $this->connexion = new PDO($db,$db_username,$db_password);
        }
        return $this->connexion;
    }

public function Ajouter(Invention $invention) {	
	
$Rq = "insert into declaration_invention (DESCRIPTION_DMD, CATEGORIE_INVENTION,OBJET_INVENTION,DESCRIPTION_INVENTION, CLASSEMENT, ID_DEMANDEUR,TYPE_DEMANDEUR) values ('" . $invention->getDescriptionDemande() . "','" . $invention->getCategorieInvention() . "','" . $invention->getObjetInvention() . "','" . $invention->getDescriptionInvention() . "','" . $invention->getClassement() . "','" . $invention->getIdDemandeur() . "','" . $invention->getTypeDemandeur() . "')";
	$connexion = $this->getConnexion(); 
		$connexion->exec($Rq);
		$connexion->exec("commit");
}

	
}