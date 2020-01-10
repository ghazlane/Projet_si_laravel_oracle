<?php 
require_once ("Models/Etudiant.php");
require_once ("ManagementRepository/ConnexionRepository.php");

class EtudiantRepository extends Connexion
{
	private $connexion;

	public function Ajouter(Etudiant $etudiant){
		$Rq = "insert into etudiant (NOM_ET, PRENOM_ET, DATE_NAISSANCE_ET, EMAIL_ET, MOT_DE_PASSE_ET, ETABLISSEMENT, TELEPHONE_ET) values ('" . $etudiant->getNomEt() . "','" . $etudiant->getPrenomEt() . "','" . $etudiant->getDateNaissanceEt() . "','" . $etudiant->getEmailEt() . "','" . $etudiant->getMotDePasseEt() . "','" . $etudiant->getEtablissement() ."','". $etudiant->getTelephoneEt() . "')";
		$connexion = $this->getConnexion(); 
		$connexion->exec($Rq);
		$connexion->exec("commit");
	}

	public function Lister(){
	 	$Rq = "select * from etudiant";     
    	$connexion = $this->getConnexion(); 
    	$statement = $connexion->query($Rq);
    	$statement->setFetchMode(PDO::FETCH_ASSOC);
    	return $statement;
	}

	public function Details($code){
    $Rq = "select * from etudiant where code_et = ".$code;     
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
}

	public function Update(Etudiant $etudiant){
		$Rq = "update etudiant set nom_et='" . $etudiant->getNomEt() . "', PRENOM_ET = '" . $etudiant->getPrenomEt() . "', DATE_NAISSANCE_ET= '" . $etudiant->getDateNaissanceET() . "', MOT_DE_PASSE_ET = '" . $etudiant->getMotDePasseEt() . "',ETABLISSEMENT = '" . $etudiant->getEtablissement() . "', TELEPHONE_ET = '" . $etudiant->getTelephoneEt() . "' where code_et =".$etudiant->getCodeEt();
    		$connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
	}

	public funCtion Delete($code){
		$Rq = "delete from etudiant where code_et = ".$code;     
    	$connexion = $this->getConnexion(); 
    	$statement = $connexion->prepare($Rq);
    	$statement->execute();
   	 	$connexion->exec("commit");
	}


}

