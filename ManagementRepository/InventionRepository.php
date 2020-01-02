<?php
require_once ("Models/Invention.php");
require_once ("ManagementRepository/ConnexionRepository.php");
class InventionRepository extends Connexion {

    /** Objet PDO d'accès à la BD */
    private $connexion;
    

public function Ajouter(Invention $invention) {	
	
$Rq = "insert into declaration_invention (DESCRIPTION_DMD, CATEGORIE_INVENTION,OBJET_INVENTION,DESCRIPTION_INVENTION, CLASSEMENT, ID_DEMANDEUR,TYPE_DEMANDEUR, STATUT_DMD,DATE_DMD) values ('" . $invention->getDescriptionDemande() . "','" . $invention->getCategorieInvention() . "','" . $invention->getObjetInvention() . "','" . $invention->getDescriptionInvention() . "','" . $invention->getClassement() . "','" . $invention->getIdDemandeur() . "','" . $invention->getTypeDemandeur() . "','" . $invention->getStatusDemande() . "','" . $invention->getDateDemande() . "')";
	$connexion = $this->getConnexion(); 

		$connexion->exec($Rq);
		$connexion->exec("commit");
}

public function Lister() {   
    $Rq = "select * from declaration_invention ";     
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
    }

	
}