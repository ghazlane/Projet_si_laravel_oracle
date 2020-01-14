<?php 
require_once ("Models/Professeur.php");
require_once ("ManagementRepository/ConnexionRepository.php");

class ProfesseurRepository extends Connexion
{
	private $connexion;

	public function Ajouter(Professeur $professeur){
		$Rq = "select * from professeurs_um5";
		$connexion = $this->getConnexion(); 
    	$statement = $connexion->query($Rq);
    	$statement->setFetchMode(PDO::FETCH_ASSOC);
    	while ($row = $statement->fetch()) {
    		if($row['NOM_PROF'] == $professeur->getNomProf() && $row['PRENOM_PROF'] == $professeur->getPrenomProf() && $row['NUM_AFF'] == $professeur->getNumAff() ){
			$Rq = "insert into professeur (NOM_PROF, PRENOM_PROF, DATE_NAISSANCE_PROF, EMAIL_PROF, MOT_DE_PASSE_PROF, NUM_AFF, TELEPHONE_PROF) values ('" . $professeur->getNomProf() . "','" . $professeur->getPrenomProf() . "','" . $professeur->getDateNaissanceProf() . "','" . $professeur->getEmailProf() . "','" . $professeur->getMotDePasseProf() . "','" . $professeur->getNumAff() ."','". $professeur->getTelephoneProf() . "')";

			$connexion = $this->getConnexion(); 
			$connexion->exec($Rq);
			$connexion->exec("commit");
			
			return true;
		}
    	}
    	
	    return false;
		

	}

	public function Lister(){
	 	$Rq = "select * from professeur";     
    	$connexion = $this->getConnexion(); 
    	$statement = $connexion->query($Rq);
    	$statement->setFetchMode(PDO::FETCH_ASSOC);
    	return $statement;
	}

	public function Details($code){
    $Rq = "select * from professeur where code_prof = '".$code."'";      
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
}

	public function Update(Professeur $professeur){
		$Rq = "update professeur set NOM_PROF='" . $professeur->getNomProf() . "', PRENOM_PROF = '" . $professeur->getPrenomProf() . "', DATE_NAISSANCE_PROF= '" . $professeur->getDateNaissanceProf() . "', MOT_DE_PASSE_PROF = '" . $professeur->getMotDePasseProf() . "',NUM_AFF = '" . $professeur->getNumAff() . "', TELEPHONE_PROF = '" . $professeur->getTelephoneProf() . "' where code_prof ='".$professeur->getCodeProf()."'";
    		$connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
	}

	public funCtion Delete($code){
		$Rq = "delete from professeur where code_prof = '".$code."'";     
    	$connexion = $this->getConnexion(); 
    	$statement = $connexion->prepare($Rq);
    	$statement->execute();
   	 	$connexion->exec("commit");
	}


}

