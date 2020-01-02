<?php
require_once ("Models/Formation.php");
require_once ("ManagementRepository/ConnexionRepository.php");

class FormationRepository extends Connexion {

    /** Objet PDO d'accès à la BD */

    private $connexion;
    

public function Ajouter(Formation $formation) {	
	
    $Rq = "insert into lancement_formation (DESCRIPTION_DMD, SUJET_FORMATION , THEME_FORMATION , NOMBRE_PARTICIPANTS , PLAN_FORMATION, ID_DEMANDEUR, TYPE_DEMANDEUR) 
           values ('" . $formation->getDescriptionDemande() . "','" . $formation->getSujetFormation() . "','" . $formation->getThemeFormation() . "','" . $formation->getNombreParticipants() . "','" . $formation->getPlanFormation() . "','" . $formation->getIdDemandeur() . "','" . $formation->getTypeDemandeur() . "')";
    
    $connexion = $this->getConnexion(); 
	$connexion->exec($Rq);
	$connexion->exec("commit");
}

public function Lister() {
      
    $Rq = "select * from lancement_formation ";     
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
    
    }
	
}