<?php 
require_once ("Models/Chercheur.php");
require_once ("ManagementRepository/ConnexionRepository.php");

class ChercheurRepository extends Connexion
{
	private $connexion;

	public function Ajouter(Chercheur $chercheur){
		
		$Rq = "select * from chercheurs_um5";
		$connexion = $this->getConnexion(); 
    	$statement = $connexion->query($Rq);
    	$statement->setFetchMode(PDO::FETCH_ASSOC);
    	while ($row = $statement->fetch()) {
    		if($row['NOM_CHER'] == $chercheur->getNomCher() && $row['PRENOM_CHER'] == $chercheur->getPrenomCher() && $row['THEME_RECHERCHE'] == $chercheur->getThemeRecherche() ){
			$Rq = "insert into chercheur (NOM_CHER, PRENOM_CHER, DATE_NAISSANCE_CHER, EMAIL_CHER, MOT_DE_PASSE_CHER, THEME_RECHERCHE, TELEPHONE_CHER) values ('" . $chercheur->getNomCher() . "','" . $chercheur->getPrenomCher() . "','" . $chercheur->getDateNaissanceCher() . "','" . $chercheur->getEmailCher() . "','" . $chercheur->getMotDePasseCher() . "','" . $chercheur->getThemeRecherche() ."','". $chercheur->getTelephoneCher() . "')";
		$connexion = $this->getConnexion(); 
		$connexion->exec($Rq);
		$connexion->exec("commit");
			
			return true;
		}
    	}
    	
	    return false;
		

	}

	public function Lister(){
	 	$Rq = "select * from chercheur";     
    	$connexion = $this->getConnexion(); 
    	$statement = $connexion->query($Rq);
    	$statement->setFetchMode(PDO::FETCH_ASSOC);
    	return $statement;
	}

	public function Details($code){
    $Rq = "select * from chercheur where code_cher = '".$code."'";     
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
}

	public function Update(Chercheur $chercheur){
		$Rq = "update chercheur set NOM_CHER='" . $chercheur->getNomCher() . "', PRENOM_CHER = '" . $chercheur->getPrenomCher() . "', DATE_NAISSANCE_CHER= '" . $chercheur->getDateNaissanceCher() . "', MOT_DE_PASSE_CHER = '" . $chercheur->getMotDePasseCher() . "', THEME_RECHERCHE = '" . $chercheur->getThemeRecherche() . "', TELEPHONE_CHER = '" . $chercheur->getTelephoneCher() . "' where code_cher ='".$chercheur->getCodeCher()."'";
    		$connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
	}

	public funCtion Delete($code){
		$Rq = "delete from chercheur where code_cher = '".$code."'";     
    	$connexion = $this->getConnexion(); 
    	$statement = $connexion->prepare($Rq);
    	$statement->execute();
   	 	$connexion->exec("commit");
	}


}

