<?php
require_once ("Models/Brevet.php");
class BrevetRepository {

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

public function Ajouter(Brevet $brevet) {	
	
$Rq = "insert into declaration_brevet (DESCRIPTION_DMD, CATEGORIE_BREVET,NOM_BREVET,DOMAINE_BREVET, ID_DEMANDEUR,TYPE_DEMANDEUR) values ('" . $brevet->getDescriptionDemande() . "','" . $brevet->getCategorieBrevet() . "','" . $brevet->getNomBrevet() . "','" . $brevet->getDomaineBrevet() . "','" . $brevet->getIdDemandeur() . "','" . $brevet->getTypeDemandeur() . "')";
	$connexion = $this->getConnexion(); 
		$connexion->exec($Rq);
		$connexion->exec("commit");
}

	
}